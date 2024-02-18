<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Book::truncate('books');
         DB::table('books')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // //con eloquent
        // Book::create([
        //     'titulo' => 'El Quijote',
        //     'autor' => 'Cervantes',
        //     'fechapub' => '1605-01-16',
        //     'genero' =>'novela',
        //     'numeroPag' =>500,

        // ]);
        // Book::create([
        //     'titulo' => 'LOs Pilares de la tIERRA',
        //     'autor' => 'Ken FOllet',
        //     'fechapub' => '1989-01-02',
        //     'genero' =>'ficcion',
        //     'numeroPag' =>456,

        // ]);
        // Book::create([
        //     'titulo' => 'EL nombre del viento',
        //     'autor' => 'Patrick Rothfuss',
        //     'fechapub' => '2007-04-07',
        //     'genero' =>'novela',
        //     'numeroPag' =>203,

        // ]);
        // Book::create([
        //     'titulo' => 'LOs juegos del hambre',
        //     'autor' => 'SUzanne COllins',
        //     'fechapub' => '2008-04-07',
        //     'genero' =>'novela',
        //     'numeroPag' =>345,

        // ]);
        // Book::create([
        //     'titulo' => 'La Tienda',
        //     'autor' => 'Stephen KIng',
        //     'fechapub' => '2009-02-06',
        //     'genero' =>'novela',
        //     'numeroPag' =>234,

        // ]);

        // //lo mismo con query builder
        // DB::table('books')->insert([
        // 'code' => 'IFC303',
        // 'name' => 'Desarrollo de Aplicaciones Web',

        // ]);

        /*
        INSERT INTO `books` (`id`, `titulo`, `autor`, `fechapub`) VALUES
(1, 'El Quijote', 'Cervantes', '1605-01-16'),
(2, 'LOs Pilares de la tIERRA', 'Ken FOllet', '1989-01-02'),
(3, 'EL nombre del viento', 'Patrick Rothfuss', '2007-04-07'),
(4, 'LOs juegos del hambre', 'SUzanne COllins ', '2008-04-07'),
(5, 'La Tienda', 'Stephen KIng ', '2009-02-06');
        */

                // Book::factory()->count(12)->create();


    }
}
