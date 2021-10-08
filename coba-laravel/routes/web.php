<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hermawan Arby",
        "email" => "hermawanarby@gmail.com",
        "image" => "hermawan.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});