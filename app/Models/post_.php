<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Robbery Bob",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi rem dolorem ex ad esse eaque culpa quas nulla. Impedit unde vel, quae ipsa, voluptatibus quasi beatae mollitia quod repudiandae possimus distinctio praesentium veritatis! Deleniti accusamus alias, possimus eum distinctio delectus molestiae natus ex amet optio odio, recusandae, corporis non officia eos laborum. Voluptas necessitatibus harum iste explicabo sit omnis impedit a quis quibusdam, minima molestias pariatur rerum nisi magni commodi vel, quasi culpa at ipsum assumenda nobis. Fugiat, expedita vitae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Giesta Andini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda voluptate optio asperiores nemo illo quibusdam perferendis magni rerum! Dolore odio minima, nostrum illum quo in, fuga laudantium id eum facilis voluptatem ad voluptates ipsa vel eligendi quos nemo enim tempore. Consequatur quos eligendi ipsum, odit ducimus hic doloribus ullam, modi dignissimos voluptatum autem tempora eius! Beatae totam et, blanditiis, ea odit fuga rerum assumenda dicta numquam temporibus itaque quaerat reprehenderit soluta labore quasi! Obcaecati, sapiente sequi sunt natus quaerat neque eligendi quae deserunt possimus voluptatem voluptate cupiditate culpa nemo, tempore iste, laborum odio perspiciatis. Odit distinctio aperiam perferendis consequuntur maxime."
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
