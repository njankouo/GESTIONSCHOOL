<?php

namespace Database\Seeders;

use App\Models\Eleve;
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
          $this->call(role::class);
    // \App\Models\User::factory(1)->create();
    // Eleve::factory(3)->create();
    $this->call(User::class);
     $this->call(cycle::class);
     $this->call(Niveau::class);
       // $this->call(Salle::class);

    }
}
