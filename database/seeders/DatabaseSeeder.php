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

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'Ls Tochhawng',
            'username' => 'LS_TOCHHAWNG'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id
        ]);


        // $user = User::factory()->create();

        // $personal = Category::create([

        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([

        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([

        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([

        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'slug' => 'my-first-post',
        //     'title' => 'My First Post',
        //     'excerpt' => 'Excerpt 1',
        //     'body' => 'A paragraph is a brief piece of writing thats around seven to ten sentences long. The paragraph form 
        //                refers to a group of sentences focusing on a single topic. There are three main parts of a paragraph: Topic sentence -
        //                it has the main idea. Supporting sentences - details that relate to and support the topic sentence.'
        // ]);

        // Post::create([

        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'slug' => 'my-second-post',
        //     'title' => 'My Second Post',
        //     'excerpt' => 'Excerpt 2',
        //     'body' => 'A second post is a brief piece of writing thats around seven to ten sentences long. The paragraph form 
        //                refers to a group of sentences focusing on a single topic. There are three main parts of a paragraph: Topic sentence -
        //                it has the main idea. Supporting sentences - details that relate to and support the topic sentence.'
        // ]);

        // Post::create([

        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'slug' => 'my-third-post',
        //     'title' => 'My Third Post',
        //     'excerpt' => 'Excerpt 3',
        //     'body' => 'A third post is a brief piece of writing thats around seven to ten sentences long. The paragraph form 
        //                refers to a group of sentences focusing on a single topic. There are three main parts of a paragraph: Topic sentence -
        //                it has the main idea. Supporting sentences - details that relate to and support the topic sentence.'
        // ]);

        // Post::create([

        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'slug' => 'my-fourth-post',
        //     'title' => 'My Fourth Post',
        //     'excerpt' => 'Excerpt 4',
        //     'body' => 'A fourth post is a brief piece of writing thats around seven to ten sentences long. The paragraph form 
        //                refers to a group of sentences focusing on a single topic. There are three main parts of a paragraph: Topic sentence -
        //                it has the main idea. Supporting sentences - details that relate to and support the topic sentence.'
        // ]);




    }
}
