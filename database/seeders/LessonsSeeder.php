<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LessonsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lessons')->insert([
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 1,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 1,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 1,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 1,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => DB::table('chapters')->inRandomOrder()->value('id') ?? 1,
                'title' => Str::title('title') . '_' . Str::random(5),
                'video_path' => 'Sample_' . Str::random(5),
                'is_free' => 0,
                'info' => 'Sample_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}