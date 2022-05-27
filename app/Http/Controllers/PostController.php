<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use App\Models\Pdf;

use App\Models\Spotify;
use App\Models\Youtube;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    public function mostrar(){
        
        $spotifys = Spotify::orderBy('id', 'desc')->paginate(10);
        $pdfs = Pdf::orderBy('id', 'desc')->paginate(10);
        $youtubes = Youtube::orderBy('id', 'desc')->paginate(10);


        return view('pag.Prosperamente')->with([
            'pdfs'=>$pdfs,'spotifys'=>$spotifys,'youtubes'=> $youtubes
        ]);
    }
    
    
    public function show(Post $post){
       
        

        return view('posts.show')->with([
            'post'=>$post,
        ]);
    }
    public function invitados(){
        // $posts = Post::paginate(1)->sortByDesc('id');
        $posts= Post::orderBy('id', 'desc')->paginate(10);

        return view('pag.Blog')->with([
            'posts'=>$posts,
        ]);
    }
    public function invitadosshow(Post $post){
        return view('pag.show')->with([
            'post'=>$post,
        ]);
    }
    public function index(){
        $posts= Post::orderBy('id', 'desc')->paginate(10);
        

        return view('posts.index')->with([
            'posts'=>$posts,
        ]);
    }
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

              //validacion
              $validate=$this->validate($request,[
                'description'=>'required',
                'imagen'=>'required|image',
                'title'=>'required',
            ]);

            $imagen=$request->file('imagen');
            $description=$request->input('description');    
            $title=$request->input('title'); 
            $slug=str_replace(" ","-", $title); 
            $post=new Post();
            
           
            

            if($imagen){
                $imagen_name=time().$imagen->getClientOriginalName();
                Storage::disk('public')->put($imagen_name, File::get($imagen));

                $post->imagen=$imagen_name;
            }

            $post=Post::create( [
               'title'=>request()->title,
               'description' => request()->description,
               'imagen' => $imagen_name,
               'slug'=>$slug,
              
         
            
         ]);
        return redirect()->route('posts.index')
         ->withSuccess("the new post with name {$post->title} la fotooo ");

    }
    public function getImage($imagen_name){
       
        
        $file=Storage::disk('public')->get($imagen_name);

        return new Response($file);
    }


    public function destroy(Post $post){
        // $post=Post::findOrFail($post);
        Storage::delete('public/'.$post->imagen);
         $post->delete();
         
         
         return redirect()->route('posts.index')
                 ->withSuccess("the  post with name {$post->title} was deleted ");
         
     } 
}
