<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    
    public function index(){
        $pdfs = Pdf::paginate(100);
        
        

        return view('pdf.index')->with([
            'pdfs'=>$pdfs,
        ]);
    }
    public function create(){
        return view('pdf.create');
    }

    public function store(Request $request){
        // 'name',
        // 'pdf',
        // 'url',
        // 'imagen',
        $url=$request->input('url');
        
        if(is_null($url)){
            //es de compra tiene pdf
            $validate=$this->validate($request,[
                'imagen'=>'required|image',
                'name'=>'required',
                'pdf'=>'required',

                
            ]);
            $imagen=$request->file('imagen');
            $archivo=$request->file('pdf');

           
            $name=$request->input('name'); 
            $pdf=new Pdf();
            
        
            

            if($imagen){
                $imagen_name=time().$imagen->getClientOriginalName();
                Storage::disk('public')->put($imagen_name, File::get($imagen));

                $pdf->imagen=$imagen_name;
            }
            if($archivo){

                $archivo_name=time().$archivo->getClientOriginalName();
               
                Storage::disk('public')->put($archivo_name, File::get($archivo));
                $archivo->move(public_path().'/archivos/', $archivo_name);
                $pdf->pdf=$archivo_name;
            }
            // $archivo->move(public_path().'/archivos/', $archivo->getClientOriginalName());
          
                        
             $pdf=Pdf::create( [
                        'name' => request()->name,
                        'url' => request()->url,
                        'imagen' => $imagen_name,
                        'pdf'=>$archivo_name,
                        
                    
                        
                    ]);



        }
        else{
            $validate=$this->validate($request,[
                'imagen'=>'required|image',
                'url'=>'required',             
                
            ]);
            $imagen=$request->file('imagen');
            
            $pdf=new Pdf();
            
            if($imagen){
                $imagen_name=time().$imagen->getClientOriginalName();
                Storage::disk('public')->put($imagen_name, File::get($imagen));

                $pdf->imagen=$imagen_name;
            }
            
            // $archivo->move(public_path().'/archivos/', $archivo->getClientOriginalName());
          
            
            $pdf=Pdf::create( [
                'name' => request()->name,
               'url' => request()->url,
               'imagen' => $imagen_name,
         
            ]);



        }
        
              //validacion
              

            
        return redirect()->route('pdfs.index')
         ->withSuccess("the new post with name la fotooo ");

    }
    public function getImage($imagen_name){
       
        
        $file=Storage::disk('public')->get($imagen_name);

        return new Response($file);
    }
    public function getPdf($imagen_name){
       
        
        $file=Storage::disk('public')->get($imagen_name);
        return new Response($file);
    }
   
    


    // public function destroy(Pdf $pdf){
    //     // $post=Post::findOrFail($post);
    //     Storage::delete('public'.$pdf->imagen);
    //      $pdf->delete();
         
         
    //      return redirect()->route('pdfs.index')
    //              ->withSuccess("the  post with name {$pdf->pdf} was deleted ");
         
    //  } 
     public function destroy(Pdf $pdf){
        // Eliminando informacion del pdf
        Storage::delete('public/'.$pdf->imagen);
        $pdf->delete();
         // Eliminar el archivo de pdf en la carpeta public/Archivos 
         // ??
         
         return redirect()->route('pdfs.index')
                 ->withSuccess("the  pdf with name {$pdf->pdf} was deleted ");
         
     } 
}
