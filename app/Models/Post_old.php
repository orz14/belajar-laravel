<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Oriz Wahyu N.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni saepe reprehenderit quam quo qui unde odio ducimus deleniti sequi magnam et doloremque, aperiam, voluptatibus facere deserunt perspiciatis obcaecati quasi, in quia. Exercitationem, adipisci quisquam nam dolore in debitis similique vel ea odio cum fugiat delectus totam fuga corporis eaque possimus architecto facere incidunt pariatur at. Explicabo earum voluptates ratione tempore, cum perferendis nobis! Animi aliquid minus incidunt quae. Saepe libero laborum beatae, excepturi, quos cupiditate dolor nesciunt praesentium, tempora eveniet reprehenderit! Soluta sint, at libero in provident autem, a placeat, accusamus architecto qui fuga vitae quis. Blanditiis dignissimos consequuntur praesentium.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Muhamamad Nur Azis',
            'body' => 'Azis Ni Dekk, ipsum dolor sit amet consectetur adipisicing elit. Magni saepe reprehenderit quam quo qui unde odio ducimus deleniti sequi magnam et doloremque, aperiam, voluptatibus facere deserunt perspiciatis obcaecati quasi, in quia. Exercitationem, adipisci quisquam nam dolore in debitis similique vel ea odio cum fugiat delectus totam fuga corporis eaque possimus architecto facere incidunt pariatur at. Explicabo earum voluptates ratione tempore, cum perferendis nobis! Animi aliquid minus incidunt quae. Saepe libero laborum beatae, excepturi, quos cupiditate dolor nesciunt praesentium, tempora eveniet reprehenderit! Soluta sint, at libero in provident autem, a placeat, accusamus architecto qui fuga vitae quis. Blanditiis dignissimos consequuntur praesentium.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
