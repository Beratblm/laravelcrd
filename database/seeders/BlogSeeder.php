<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blog")->insert(
            [
              [
                "blog_title" => "ilk blog",
                "blog_content" => "ilk blog icerigi burasi",
                "blog_must" => 1
              ], 

              [
                "blog_title" => "ikinci blog",
                "blog_content" => "ikinci blog icerigi burasi",
                "blog_must" => 2

              ],
              [
                "blog_title" => "ucuncu blog",
                "blog_content" => "ucuncu blog icerigi burasi",
                "blog_must" => 3

              ],

              [
                "blog_title" => "Dorduncu blog",
                "blog_content" => "Dorduncu blog icerigi burasi",
                "blog_must" => 4
              ],

              

            ]);
    }
}
