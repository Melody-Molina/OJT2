<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;


class PostController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        return view('post');
    }
    //insert post to database
	public function insertpost(){
        return view('post');

    }

    public function insert(Request $request)
    {

    	$id = $request->input('user_id');
        $title = $request->input('title');
        $body = $request->input('body');
        $data = array('user_id' => $id, "title"=> $title, "body" => $body);
        DB::table('posts')->insert($data);
        //blade
      /*  echo "Post success";
        echo '<a href = "/post">Click </a>';*/
        //return view('post');

    }

    //view postings (own post)
    public function OwnPostings()
    {
    	$posts = DB::table('posts')/*->select ('title', 'body', 'id')*/
    								->where ('user_id', '=', Auth::user()->id)
    								->where('status','posted')
    								->get();
    	return view ('post', ['posts'=>$posts]);
    }

    //view postings (all user post)
    public function AllPost()
    {
        $posts = DB::select('select * from posts where status="posted"');
        return view ('home', ['posts' => $posts]);
    }

    //Delete post
    public function delete($id)
    {
        //dd($id);
        DB::update('update posts set status = "deleted" where id = ?', [$id]);
        //DB::delete('delete from posts where id = ?', [$id]);
        /*DB::table(posts) ->where('id', '?', [$id])
                        ->update('status', 'deleted');*/
        //blade
        echo "Post is deleted";
        echo '<a href = "/post">Click </a>'; 
    }

    //edit posts
    public function edit(Request $request, $id){
        $title = $request->input('title');
        $body = $request->input('body');
        $id = $request->input('id');

        DB::update('update posts set title = ?, body = ? where id = ?', [$title, $body, $id]);
        echo "Post Updated";
        echo '<a href = "/post"> Click to go back </a>';

    }
    
}
