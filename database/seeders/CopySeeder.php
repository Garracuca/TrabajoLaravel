<?php

namespace Database\Seeders;

use App\Models\Copy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CopySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('copies')->truncate();
        // Copy::create([
        //     'numero_edicion'=> 5,
        //     'editorial' => 'AlfaOmega',
        //     'fecha_edicion' => '2019-05-05',
        //     'book_id'=> 1,
    
        // ]);
        // Copy::create([
        //     'numero_edicion'=> 3,
        //     'editorial' => 'AlfaGUara',
        //     'fecha_edicion' => '2013-05-05',
        //     'book_id'=> 2,
    
        // ]);
        // Copy::create([
        //     'numero_edicion'=> 2,
        //     'editorial' => 'Culero',
        //     'fecha_edicion' => '2005-05-05',
        //     'book_id'=> 3,
    
        // ]);
    }
}
