<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into roles (id, libelle) values (?, ?)', [1, 'Administrateur']);
          DB::insert('insert into roles (id, libelle) values (?, ?)', [2, 'Utilisateur']);
    }
}
