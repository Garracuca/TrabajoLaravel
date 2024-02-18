<?php

namespace Database\Seeders;

use App\Models\Cover;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



     
    public function run(): void
    {
        DB::table('covers')->truncate();
        Cover::factory()->count(12)->create();
        
    // Cover::create([
    //     'alto'=> 30,
    //     'ancho' => 49,
    //     'ruta_img' => 'img/uploadfile',
    //     'extension_img' => 'png',
    //     'book_id'=> 1,

    // ]);
    // Cover::create([
    //     'alto'=> 30,
    //     'ancho' => 12,
    //     'ruta_img' => 'img/imagen',
    //     'extension_img' => 'png',
    //     'book_id'=> 2,

    // ]);
    // Cover::create([
    //     'alto'=> 30,
    //     'ancho' => 49,
    //     'ruta_img' => 'img/up',
    //     'extension_img' => 'jpg',
    //     'book_id'=> 3,

    // ]);
    // Cover::create([
    //     'alto'=> 30,
    //     'ancho' => 49,
    //     'ruta_img' => 'img/up',
    //     'extension_img' => 'jpg',
    //     'book_id'=> 5,

    // ]);

    // Cover::create([
    //     'alto'=> 30,
    //     'ancho' => 49,
    //     'ruta_img' => 'img/up',
    //     'extension_img' => 'jpg',
    //     'book_id'=> 3,

    // ]);




    }
}
