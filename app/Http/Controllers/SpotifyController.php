<?php

namespace App\Http\Controllers;

use App\Models\Spotify;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\DB;

class SpotifyController extends Controller
{
    
    public function index(){
        $spotifys = Spotify::paginate(100);
        
        

        return view('spotify.index')->with([
            'spotifys'=>$spotifys,
        ]);
    }
    public function create(){
        return view('spotify.create');
    }

    public function store(Request $request){
        

            //es de compra tiene pdf
            $validate=$this->validate($request,[
                'name'=>'required',
                'url'=>'required',
                'imagen'=>'required|image',
                
                
            ]);
            $spotify=new Spotify();

            $imagen=$request->file('imagen');

            if($imagen){
                $imagen_name=time().$imagen->getClientOriginalName();
                Storage::disk('public')->put($imagen_name, File::get($imagen));
                $spotify->imagen=$imagen_name;

            }


          
                $spotify=Spotify::create( [
                    'name' => request()->name,
                    'url' => request()->url,
                    'imagen' => $imagen_name,                
                    
                ]);
        return redirect()->route('spotify.index')
         ->withSuccess("the new spotify  ");

    }
    public function getImage($imagen_name){
       
        
        $file=Storage::disk('public')->get($imagen_name);

        return new Response($file);
    }

   
     public function destroy(Spotify $spotify){
          // Eliminando informacion del pdf
          Storage::delete('public/'.$pdf->imagen);
          
        $spotify->delete();
         
         return redirect()->route('spotify.index')
                 ->withSuccess("the  delete  was deleted ");
         
     } 
}
