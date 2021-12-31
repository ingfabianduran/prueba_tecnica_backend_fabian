<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\Consecutivo;
use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Departamento::factory()->count(20)->create();
        Ciudad::factory()->count(100)->create();
        Consecutivo::factory()->count(1)->create();
    }
}
