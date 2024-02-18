<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Distribuidor;
use App\Models\Fabricante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
{
    // $this->call(StudySeeder::class);
    // $this->call(BooksSeeder::class);
    // $this->call(CoverSeeder::class);
    // $this->call(CopySeeder::class);
    // $this->call(PartnerSeeder::class);
    // $this->call(BookPartnerSeeder::class);
    $this->call(FabricanteSeeder::class);
    $this->call(DistribuidorSeeder::class);
    $this->call(DistribuidorFabricanteSeeder::class);
    $this->call(CocinaSeeder::class);
    $this->call(MuebleSeeder::class);
    $this->call(ClienteSeeder::class);
    $this->call(InstaladorSeeder::class);
    // $this->call(ClienteCocinaInstaladorSeeder::class);
    $this->call(TipoMaterialSeeder::class);
    $this->call(MuebleAltoSeeder::class);
    $this->call(MuebleMesadaSeeder::class);
    $this->call(MuebleBajoSeeder::class);
    $this->call(MueblePanelSeeder::class);

}
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
