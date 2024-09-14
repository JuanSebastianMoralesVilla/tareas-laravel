<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Category;

class TodosController extends Controller
{
    /**
     * Index para mostrar todoos los datos
     * store para guardar topodo
     * update actualizar todo
     * destroy para eliminar too
     * edit para mostrar formulario de edicion
     * 
     */


     public function store (Request $request){
        // validar campos
        $request->validate([
            'title' => 'required|min:3',
        ]);

        // creacion de obejto
        $todo = new Todo();
        $todo->title =$request->title;
        $todo->category_id =$request->category_id;
        $todo->save();

        //respuesta

         return redirect()->route('todos')->with('success','Tarea creada correctamente ✅');


     }

     public function index(){
        $todos= Todo::all();
     $categories= Category::all();

        return view('todos.index',['todos'=>$todos, 'categories'=> $categories]);

     }

     // find by id
     public function show($id){
        $todo = Todo::find($id);

        return view('todos.show',['todo'=>$todo]);

     }
     public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();
        
        //Depurar
        //dd($request);

        //return view('todos.index',['success'=>'Tarea actualizada: ' + $title ]);
        return redirect()->route('todos')->with('success','Tarea actualizada!');
     }
     public function destroy( $id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success','Tarea eliminada!');


     }
     
}
