<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class addController extends Controller
{
    public function index(){
        $posts = Post::all();
        
        return view('list', ['posts'=> $posts]);
    }
    public function create()
    {
        return view('contacts.create');
    }

    public function index_view(){

        return view('layout.add');

    }
    public function show($id_product)
    {
        $posts = Post::find($id_product);
        return view('posts.show')->with('posts', $posts);
    }
 
 
 
    public function store(Request $request)
    {
       $input = $request->all();
       Post::create($input);
       return redirect('addproduct')->with('success', 'command Addedd!');  
      
    }

 
    
    public function edit($id_product)
    {
        
        $posts = Post::find($id_product);
       // dd($id_product);
       return view('layout.edit',['posts'=> $posts]);
    }
 
    public function update($id_product ,Request $request)
    {
        $posts = Post::findOrfail($id_product);
        $input = $request->all();
        $posts->update($input);
        return redirect('addproduct')->with('edit', 'command Updated!');  
    }
 
    public function destroy($id_product)
    {
        $posts = Post::findOrfail($id_product);
        $posts->delete();
 
        return redirect('addproduct')->with('delete', 'command deleted!');  
    
    }

}
