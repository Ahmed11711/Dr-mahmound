<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_0@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 0,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_1@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 1,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_2@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 2,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 0,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_3@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 3,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_4@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 4,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 0,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_5@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 5,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_6@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 6,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_7@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 7,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_8@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 8,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 0,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::title('name') . '_' . Str::random(5),
                'email' => 'user_' . Str::lower(Str::random(8)) . '_9@example.com',
                'password' => bcrypt('password'),
                'phone' => '01' . rand(100, 999) . rand(1000, 9999) . 9,
                'image' => collect(['https://images.unsplash.com/photo-1498050108023-c5249f4df085', 'https://images.unsplash.com/photo-1461747823400-487cf1852d7e', 'https://images.unsplash.com/photo-1504639725590-34d0984388bd'])->random(),
                'whtsapp' => 'Sample_' . Str::random(5),
                'is_active' => 0,
                'email_verified_at' => now(),
                'remember_token' => Str::title('remember_token') . '_' . Str::random(5),
                'role' => collect(['user', 'super_admin'])->random(),

                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
