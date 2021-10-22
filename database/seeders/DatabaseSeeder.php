<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Hermawan Arby',
        //     'email' => 'hermawanarby@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ridwan Maulana',
        //     'email' => 'ridwan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus tenetur consectetur non facilis molestias architecto labore eaque laudantium natus possimus optio eum perspiciatis. Mollitia suscipit a at sapiente repudiandae est eveniet delectus. Corrupti, suscipit. Inventore eligendi velit doloremque cupiditate reiciendis excepturi corporis unde quo tempore quam repudiandae ex ullam, eum asperiores non porro quae deserunt enim dolor facilis eius minus sed odit! Officia ad ea corrupti cupiditate? Repellat reprehenderit, possimus consequatur nam ipsam molestias illum dolores laudantium, velit necessitatibus adipisci beatae ab iste placeat doloribus eveniet sit maiores minima?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus tenetur consectetur non facilis molestias architecto labore eaque laudantium natus possimus optio eum perspiciatis. Mollitia suscipit a at sapiente repudiandae est eveniet delectus. Corrupti, suscipit. Inventore eligendi velit doloremque cupiditate reiciendis excepturi corporis unde quo tempore quam repudiandae ex ullam, eum asperiores non porro quae deserunt enim dolor facilis eius minus sed odit! Officia ad ea corrupti cupiditate? Repellat reprehenderit, possimus consequatur nam ipsam molestias illum dolores laudantium, velit necessitatibus adipisci beatae ab iste placeat doloribus eveniet sit maiores minima?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus tenetur consectetur non facilis molestias architecto labore eaque laudantium natus possimus optio eum perspiciatis. Mollitia suscipit a at sapiente repudiandae est eveniet delectus. Corrupti, suscipit. Inventore eligendi velit doloremque cupiditate reiciendis excepturi corporis unde quo tempore quam repudiandae ex ullam, eum asperiores non porro quae deserunt enim dolor facilis eius minus sed odit! Officia ad ea corrupti cupiditate? Repellat reprehenderit, possimus consequatur nam ipsam molestias illum dolores laudantium, velit necessitatibus adipisci beatae ab iste placeat doloribus eveniet sit maiores minima?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptas, doloremque deleniti veritatis saepe asperiores aliquid numquam dolorum corrupti ducimus tenetur consectetur non facilis molestias architecto labore eaque laudantium natus possimus optio eum perspiciatis. Mollitia suscipit a at sapiente repudiandae est eveniet delectus. Corrupti, suscipit. Inventore eligendi velit doloremque cupiditate reiciendis excepturi corporis unde quo tempore quam repudiandae ex ullam, eum asperiores non porro quae deserunt enim dolor facilis eius minus sed odit! Officia ad ea corrupti cupiditate? Repellat reprehenderit, possimus consequatur nam ipsam molestias illum dolores laudantium, velit necessitatibus adipisci beatae ab iste placeat doloribus eveniet sit maiores minima?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
