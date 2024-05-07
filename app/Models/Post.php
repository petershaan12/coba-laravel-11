<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post {
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Peter Shaan',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aperiam temporibus deleniti, omnis autem vel architecto dolorum obcaecati laboriosam saepe nulla alias nobis ut, amet quo, eaque voluptatibus? Odit, sed.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aperiam temporibus deleniti, omnis autem vel architecto dolorum obcaecati laboriosam saepe nulla alias nobis ut, amet quo, eaque voluptatibus? Odit, sed.'
            ],
        ];
    }

    public static function find($slug): array{
        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        
        if(!$post) {
            abort(404);
        }
        return $post;
    }
}



