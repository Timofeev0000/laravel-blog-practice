<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 40; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post: ' . $i,
                'slug' => 'post- ' . $i,
                'description' => 'Description of posts: ' . $i,
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in. Sed cras ornare arcu dui vivamus arcu felis bibendum ut. Pharetra massa massa ultricies mi quis hendrerit. In massa tempor nec feugiat nisl. Ut aliquam purus sit amet. Purus in massa tempor nec. Amet purus gravida quis blandit turpis cursus in hac. Leo duis ut diam quam nulla. Faucibus turpis in eu mi bibendum neque egestas congue. Nec tincidunt praesent semper feugiat nibh sed. Tincidunt augue interdum velit euismod in pellentesque. Purus semper eget duis at tellus at. Vitae auctor eu augue ut lectus arcu bibendum at. Volutpat maecenas volutpat blandit aliquam etiam erat velit. <br>' .$i. '</p>'
            ]);
        }
    }
}
