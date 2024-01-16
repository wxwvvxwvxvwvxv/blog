<?php

namespace Database\Seeders;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        foreach($posts as $post){
            if(rand(0,9)){
                $image=Image::factory(1)->create(['post_id' => $post->id]);
            }
        }
    }
}
