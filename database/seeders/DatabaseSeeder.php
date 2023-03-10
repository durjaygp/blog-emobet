<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\User::truncate();
        \App\Models\Role::truncate();

        \App\Models\Category::truncate();
        \App\Models\Comment::truncate();
        \App\Models\Post::truncate();
        \App\Models\Tag::truncate();
        \App\Models\Image::truncate();

        Schema::enableForeignKeyConstraints();

        \App\Models\Role::factory(1)->create();
        \App\Models\Role::factory(1)->create(['name'=>'admin']);

        $users =  \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name'=>'admin dashboard',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt(12345678),
            'role_id'=>2,
        ]);

        foreach($users as $user){
            $user->image()->save(\App\Models\Image::factory()->make() );
        }



        \App\Models\Category::factory()->create([
            'name'=>'Uncategorized'
        ]);
        \App\Models\Category::factory(10)->create();
        $posts = \App\Models\Post::factory(100)->create();

        \App\Models\Comment::factory(100)->create();
        \App\Models\Tag::factory(100)->create();

        foreach($posts as $post){
            $tags_ids = [];
            $tags_ids[] = \App\Models\Tag::all()->random()->id;
            $tags_ids[] = \App\Models\Tag::all()->random()->id;
            $tags_ids[] = \App\Models\Tag::all()->random()->id;

            $post->tags()->sync( $tags_ids );
            $post->image()->save(\App\Models\Image::factory()->make() );

        }

    }
}
