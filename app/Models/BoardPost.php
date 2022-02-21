<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

// Post Model
class BoardPost extends Model
{
    use HasFactory;

    protected $table = 'board';

    public static function insert(array $data){
        $title = $data['title'];
        $content = $data['content'];

        $count = DB::insert('insert into board (title, content, read_count, created_at) values(?,?,0,now())', [$title, $content]);

        return $count;
    }

    public static function get(){
        $data = DB::select('select * from board');

        return $data;
    }

    public static function updateReadCount($id){
        DB::update('update board set read_count = read_count+1 where id = ?', [$id]);
    }

    public static function show($id){
        $boards = DB::select('select * from board where id = ?', [$id]);

        return $boards;
    }

    public function deleteBoard($id){
        $count = DB::delete('delete from board where id = ?', [$id]);

        return $count;
    }

    public function updateBoard(array $data){
        $content = $data['content'];
        $id = $data['id'];

        $count = DB::update('update board set content = ?, updated_at = now() where id = ?', [$content ,$id]);

        return $count;
    }
}
