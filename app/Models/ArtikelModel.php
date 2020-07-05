<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArtikelModel {
    protected $fillable = ['slug'];

    public static function get_all() {
        $artikel = DB::table('articles')->get();
        return $artikel;
    }

    public static function save($request) {
        $new_artikel = DB::table('articles')->insert([
                            'judul' => $request['judul'], 
                            'isi' => $request['isi'],
                            'slug' => Str::slug($request['slug']),
                            'tag' => $request['tag'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                            ]);
        return $new_artikel;
    }

    public static function find_By_id($id) {
        $artikel = DB::table('articles')->where('id', '=', $id)->first();
        return $artikel;
    }

    Public static function update($id, $request) {
        $artikel = DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi' => $request['isi'],
                            'slug' => $request['slug'],
                            'tag' => $request['tag'],
                            'updated_at' => Carbon::now(),
                        ]);
        return $artikel;
    }

    Public static function destroy($id) {
        $destroy = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $destroy;
    }
}

?>