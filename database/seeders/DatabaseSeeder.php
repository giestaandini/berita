<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Robbery Bob',
            'username' => 'robert',
            'email' => 'robertbob@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Adit Sopo',
        //     'email' => 'sopojarwo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequatur ut rerum quis minima, rem dignissimos, vel corporis ex eaque amet aliquid. Facere molestiae harum corporis maxime autem! Doloribus ipsa dolor magnam sed? Inventore provident molestiae, quaerat explicabo officia rerum velit adipisci magni. Doloribus, voluptatem officia libero ullam voluptates cum facilis omnis ipsum enim iusto. Fugiat alias maiores nulla earum adipisci quia eos? Saepe dicta eos vero, quasi error necessitatibus nesciunt at, voluptatum dolorem dolores obcaecati? Tempora blanditiis tempore, odio, repudiandae optio sit eligendi tenetur, repellat dolorum sed nihil. Sunt autem illo commodi quasi et in voluptatibus earum porro cum atque praesentium, asperiores quo incidunt tenetur qui ab inventore id accusamus! Cumque, nobis saepe similique labore minus quae aliquid quibusdam ducimus est non aspernatur impedit hic consequatur nulla quasi error voluptatum alias veritatis voluptas sed fugiat amet. Consequuntur cumque illo assumenda, maxime nisi, non eum facere ab laudantium, nam doloremque quasi distinctio veritatis fugit ex saepe numquam beatae et nesciunt eveniet dignissimos minus ipsum deserunt obcaecati? Natus molestiae sed cum maxime deserunt dolorum quam. Impedit delectus, hic at minima sit quidem tenetur, reprehenderit tempora magnam natus, non quasi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequatur ut rerum quis minima, rem dignissimos, vel corporis ex eaque amet aliquid. Facere molestiae harum corporis maxime autem! Doloribus ipsa dolor magnam sed? Inventore provident molestiae, quaerat explicabo officia rerum velit adipisci magni. Doloribus, voluptatem officia libero ullam voluptates cum facilis omnis ipsum enim iusto. Fugiat alias maiores nulla earum adipisci quia eos? Saepe dicta eos vero, quasi error necessitatibus nesciunt at, voluptatum dolorem dolores obcaecati? Tempora blanditiis tempore, odio, repudiandae optio sit eligendi tenetur, repellat dolorum sed nihil. Sunt autem illo commodi quasi et in voluptatibus earum porro cum atque praesentium, asperiores quo incidunt tenetur qui ab inventore id accusamus! Cumque, nobis saepe similique labore minus quae aliquid quibusdam ducimus est non aspernatur impedit hic consequatur nulla quasi error voluptatum alias veritatis voluptas sed fugiat amet. Consequuntur cumque illo assumenda, maxime nisi, non eum facere ab laudantium, nam doloremque quasi distinctio veritatis fugit ex saepe numquam beatae et nesciunt eveniet dignissimos minus ipsum deserunt obcaecati? Natus molestiae sed cum maxime deserunt dolorum quam. Impedit delectus, hic at minima sit quidem tenetur, reprehenderit tempora magnam natus, non quasi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequatur ut rerum quis minima, rem dignissimos, vel corporis ex eaque amet aliquid. Facere molestiae harum corporis maxime autem! Doloribus ipsa dolor magnam sed? Inventore provident molestiae, quaerat explicabo officia rerum velit adipisci magni. Doloribus, voluptatem officia libero ullam voluptates cum facilis omnis ipsum enim iusto. Fugiat alias maiores nulla earum adipisci quia eos? Saepe dicta eos vero, quasi error necessitatibus nesciunt at, voluptatum dolorem dolores obcaecati? Tempora blanditiis tempore, odio, repudiandae optio sit eligendi tenetur, repellat dolorum sed nihil. Sunt autem illo commodi quasi et in voluptatibus earum porro cum atque praesentium, asperiores quo incidunt tenetur qui ab inventore id accusamus! Cumque, nobis saepe similique labore minus quae aliquid quibusdam ducimus est non aspernatur impedit hic consequatur nulla quasi error voluptatum alias veritatis voluptas sed fugiat amet. Consequuntur cumque illo assumenda, maxime nisi, non eum facere ab laudantium, nam doloremque quasi distinctio veritatis fugit ex saepe numquam beatae et nesciunt eveniet dignissimos minus ipsum deserunt obcaecati? Natus molestiae sed cum maxime deserunt dolorum quam. Impedit delectus, hic at minima sit quidem tenetur, reprehenderit tempora magnam natus, non quasi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequatur ut rerum quis minima, rem dignissimos, vel corporis ex eaque amet aliquid. Facere molestiae harum corporis maxime autem! Doloribus ipsa dolor magnam sed? Inventore provident molestiae, quaerat explicabo officia rerum velit adipisci magni. Doloribus, voluptatem officia libero ullam voluptates cum facilis omnis ipsum enim iusto. Fugiat alias maiores nulla earum adipisci quia eos? Saepe dicta eos vero, quasi error necessitatibus nesciunt at, voluptatum dolorem dolores obcaecati? Tempora blanditiis tempore, odio, repudiandae optio sit eligendi tenetur, repellat dolorum sed nihil. Sunt autem illo commodi quasi et in voluptatibus earum porro cum atque praesentium, asperiores quo incidunt tenetur qui ab inventore id accusamus! Cumque, nobis saepe similique labore minus quae aliquid quibusdam ducimus est non aspernatur impedit hic consequatur nulla quasi error voluptatum alias veritatis voluptas sed fugiat amet. Consequuntur cumque illo assumenda, maxime nisi, non eum facere ab laudantium, nam doloremque quasi distinctio veritatis fugit ex saepe numquam beatae et nesciunt eveniet dignissimos minus ipsum deserunt obcaecati? Natus molestiae sed cum maxime deserunt dolorum quam. Impedit delectus, hic at minima sit quidem tenetur, reprehenderit tempora magnam natus, non quasi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
