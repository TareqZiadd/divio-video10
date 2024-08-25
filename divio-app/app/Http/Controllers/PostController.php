<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{


public function index (){

$posts =Post::all();


    return view('posts.index',['posts'=>$posts]);
}


public function create (){
    return view('posts.add');
}

public function edit (){
return view('posts.edit');

}

public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();
     return back()->with('success', 'Post Deleted Successfully');
}


public function destroy2 ($id){
$obj=Post::findOrFail($id);
$obj->delete();
return back()->with('success','post is deleted');
}


public function destroy3 ($id){

$obj=Post::findOrFail($id);
$obj->delete();
return back()->with('success','post is deleted');
}



public function store(Request $request)
{

    $request->validate([
        'title' => 'required|string|min:3',
        'description' => 'required|string|max:1500',
        'user_id' => 'required|exists:users,id',
    ]);

    $obj = new Post();
    $obj->title=$request->title;
    $obj->description=$request->description;
    $obj->user_id=$request->user_id;
    $obj->save();
    return back()->with('success','Post Added Successfuly');

}



/*
public function store2(Request $request){

$request->validate(
['title'=>'required|min=3|string',
'description'=>'required|max=1500',
'user_id'=>'required|exists:users,id'
]
);

$obj= new Post();

$obj->title=$request->title;
$obj->description=$request->description;
$obj->user_id=$request->user_id;

$obj->save();

return back()->with('success','Post is Added');
}
*/


}
