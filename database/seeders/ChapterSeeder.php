<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => DB::table('courses')->inRandomOrder()->value('id') ?? 1,
                'name' => Str::title('name') . '_' . Str::random(5),
                'order' => 'Sample_' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}