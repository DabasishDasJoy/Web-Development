<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        // Post::truncate();
        // Category::truncate();

       $user =  User::factory()->create([
            'name' => 'Dabasish Das'
        ]);

        Post::factory(05)->create([
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
        //     'category_id' => $family->id,

        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'exerpt' =>'<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence.</p>',
        //     'body' => '<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence
        //                 called the topic sentence. A topic sentence has several important functions: it substantiates or supports an
        //                 essay’s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it
        //                 advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look
        //                 to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That’s why
        //                 it’s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it’s
        //                  more effective to place another sentence before the topic sentence—for example, a sentence linking the current
        //                     paragraph to the previous one, or one providing background information.</p>'
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,

        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'exerpt' =>'<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence.</p>',
        //     'body' => '<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence
        //                 called the topic sentence. A topic sentence has several important functions: it substantiates or supports an
        //                 essay’s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it
        //                 advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look
        //                 to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That’s why
        //                 it’s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it’s
        //                  more effective to place another sentence before the topic sentence—for example, a sentence linking the current
        //                     paragraph to the previous one, or one providing background information.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,

        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'exerpt' =>'<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence.</p>',
        //     'body' => '<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence
        //                 called the topic sentence. A topic sentence has several important functions: it substantiates or supports an
        //                 essay’s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it
        //                 advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look
        //                 to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That’s why
        //                 it’s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it’s
        //                  more effective to place another sentence before the topic sentence—for example, a sentence linking the current
        //                     paragraph to the previous one, or one providing background information.</p>'
        // ]);
    }
}
