<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_categories')->insert([
            ['id' => 1, 'article_categories_name' => "Dữ liệu", 'status' => 1],
            ['id' => 2, 'article_categories_name' => "Bất động sản", 'status' => 1],
            ['id' => 3, 'article_categories_name' => "Công nghệ", 'status' => 1],
            ['id' => 4, 'article_categories_name' => "Tài chính",'status' => 1],
        ]);
    }
}
