<?php

namespace App\Models;

class Post
{
  private static $blog_post = [
    [
        'title' => 'Judul post pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Yuki',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sit, qui recusandae consectetur animi dolor quos odio facilis reprehenderit illo at adipisci suscipit dicta magni est, expedita nihil error quas.',
    ],
    [
        'title' => 'Judul post Kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'Mulqi',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sit, qui recusandae consectetur animi dolor quos odio facilis reprehenderit illo at adipisci suscipit dicta magni est, expedita nihil error quas.',
    ],
];

    public static function all() 
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($post["slug"] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
    

}