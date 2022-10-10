<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Niveau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into niveaus (id, libelle,cycle_id) values (?, ?,?)', [1, '6e',1]);
         DB::insert('insert into niveaus (id, libelle,cycle_id) values (?, ?,?)', [2, '5e',2]);
            DB::insert('insert into niveaus (id, libelle,cycle_id) values (?, ?,?)', [3, '4e',3]);
               DB::insert('insert into niveaus (id, libelle,cycle_id) values (?, ?,?)', [4, '3e',4]);
                  DB::insert('insert into niveaus (id, libelle,cycle_id) values (?, ?,?)', [5, 'premiere',1]);
    }
}
