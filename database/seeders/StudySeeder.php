<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Study;
use DB;
class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
                //con eloquent
                Study::create([
                'code' => 'IFC303',
                'name' => 'Desarrollo de Aplicaciones Web',
                // 'abreviation' => 'DAW'
                ]);
        
                //lo mismo con query builder
                DB::table('studies')->insert([
                'code' => 'IFC303',
                'name' => 'Desarrollo de Aplicaciones Web',
                //'abreviation' => 'DAW'
                ]);
            }
        } 
    

