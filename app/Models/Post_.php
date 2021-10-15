<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hermawan Arby",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad eum repudiandae maxime, perspiciatis mollitia delectus molestias, hic ullam autem temporibus ipsum reprehenderit placeat quidem nisi totam voluptate. Architecto, vel rem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Riki Sujarno",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti nesciunt consectetur eveniet inventore modi sequi cumque neque ullam saepe tempora dolores alias sapiente nobis blanditiis provident dolor possimus placeat voluptatem, distinctio voluptate. Dolorum rem, obcaecati veniam, officia veritatis doloribus nam dicta dolore alias temporibus a sint error fugiat iure? Aut magni minima quae asperiores necessitatibus, ea ipsam ipsum voluptatem neque! Quos at earum error fugiat tempore ducimus quidem, nulla velit, ratione labore dolorum officia ipsa? Libero corrupti, quidem quod nobis quam laborum non ducimus minima beatae dolores. Quidem ea incidunt deleniti quos non! Doloribus recusandae quaerat suscipit? Provident, fugiat autem!"
        ]
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
