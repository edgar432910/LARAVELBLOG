<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(Request $request){
    
    $search=trim($request->get('texto'));
    
      if(!empty($search)){
        $users = User::where('email','LIKE', '%'.$search.'%')
                ->orWhere('name','LIKE', '%'.$search.'%')
                ->paginate(10);
      } else{
        $users = User::paginate(10);
      }

       
        

        return view('admin.users')->with([
            'users'=>$users,
        ]);
    }
    public function usuarios(Request $request){
    
      $search=trim($request->get('texto'));
      
        if(!empty($search)){
          $users = User::where('created_at','>', $search)
                  
                  ->paginate(1000);
        } else{
          $users = User::paginate(1000);
        }
  
         
          
  
          return view('admin.usuarios')->with([
              'users'=>$users,
          ]);
      }
    public function destroy(User $user){
        // $post=Post::findOrFail($post);
       
         $user->delete();
         
         
         return redirect()->route('users.index')
                 ->withSuccess("the  user  {$user->title} was deleted ");
         
     } 
}
