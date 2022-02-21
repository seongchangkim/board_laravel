<?php

namespace App\Http\Controllers;

use App\Models\BoardPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BoardController extends Controller{
    public function index(){
        $boards = BoardPost::get();

        return view('list', ["boards" => $boards]);
    }

    public function createForm(){
        return view('create', ["boards" => ""]);
    }

    public function create(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        $data = array('title' => $title, 'content' => $content);
        $count = BoardPost::insert($data);

        if($count == 1){
            DB::commit();
            return redirect('/');
        }else{
            DB::rollBack();
            return redirect('/create');
        }
    }

    public function show($id){
        BoardPost::updateReadCount($id);

        $boards = BoardPost::show($id);
        return view('show', ["boards" => $boards]);
    }

    public function updateForm($id){
        $boards = BoardPost::show($id);

        return view('create', ["boards" => $boards]);
    }

    public function delete($id){
        $count = (new \App\Models\BoardPost)->deleteBoard($id);

        if($count == 1){
            DB::commit();
            return redirect('/');
        }else{
            DB::rollBack();
            $url = '/show/'. $id;
            return redirect($url);
        }
    }

    public function update(Request $request){
        $content = $request->input('content');
        $id = $request->input('id');

        $data = array('content' => $content, 'id' => $id);
        $count = (new \App\Models\BoardPost)->updateBoard($data);

        if($count == 1){
            DB::commit();
            $url = '/show/'. $id;
            return redirect($url);
        }else{
            DB::rollBack();
            $url = '/update/'. $id;
            return redirect($url);
        }
    }
}
