<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo_list;


class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard', ['list'=>todo_list::all()]);
    // }
    //
    public function dashboard(){
        return view('dashboard', ['list'=>todo_list::all()]);
      }

      public function signup(){
        return view('signup');
      }
      public function login(){
        return view('login');
      }
      public function saveTodo(Request $req){
      
        $todoObj = new todo_list();
        $todoObj->title = $req->todo;

        $todoObj->save();
       //save Data to the Database
                

   return redirect('/');
       
   }
   public function editTodo($id){
      
    $data = todo_list::find($id);
    return view('edit',['data'=>$data]);
       
   }
   public function updateTodo(Request $req){
  
    $todoObj = todo_list::find($req->id);
    $todoObj->title = $req->todo;

    $todoObj->save();
   //save Data to the Database
            

return redirect('/');
   
}

   public function deleteTodo($id){
      
     
    $data = todo_list::find($id);
    $data->delete();
                

   return redirect('/');
       
   }
}
