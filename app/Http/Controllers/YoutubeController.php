<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\DB;

class YoutubeController extends Controller
{
    
    public function index(){
        $youtubes = Youtube::paginate(100);
        
        

        return view('youtube.index')->with([
            'youtubes'=>$youtubes,
        ]);
    }
    public function create(){
        return view('youtube.create');
    }

    public function store(Request $request){
        

            //es de compra tiene pdf
            $validate=$this->validate($request,[
                'name'=>'required',
                'url'=>'required',

                
            ]);
            $url = $request->input('url');
            $temporal = explode('?v=',$url);
            $raiz = $temporal[1] ;

            $urlweb= 'https://www.youtube.com/embed/'.$raiz;


            $youtube=new Youtube();
          
                $youtube=Youtube::create( [
                    'name' => request()->name,
                    'url' => request()->url,
                    'urlweb' => $urlweb,
                    'raiz' => $raiz                   
                    
                ]);
        return redirect()->route('youtube.index')
         ->withSuccess("the new youtube  ");

    }

    


     public function destroy(Youtube $youtube){
        
        $youtube->delete();
         
         return redirect()->route('youtube.index')
                 ->withSuccess("the  delete  was deleted ");
         
     } 

     public function edit(Youtube $youtube){
        return view('youtube.edit')->with([
            'youtube'=>$youtube,
        ]);
    }
   
    public function update(Youtube $youtube){
      /*   $url = $youtube->url;
        $temporal = explode('?v=',$url);
        $raiz = $temporal[1] ;
        $urlweb= 'https://www.youtube.com/embed/'.$raiz;

      
        $youtube->update([
            'name' => $youtube->name,
             'url' => $youtube->url,
             'urlweb' => $urlweb,
             'raiz' => $raiz   
        ]); */
         $youtube->update(request()->all());
        return $youtube;
    }
}
