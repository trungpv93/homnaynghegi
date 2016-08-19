<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $posttype = [
                 [
                   'name' => 'URL',
                 ],
                 [
                   'name' => 'Note',
                 ],

      ];

        foreach ($posttype as $key => $value) {
            PostType::create($value);
        }
    }
}
