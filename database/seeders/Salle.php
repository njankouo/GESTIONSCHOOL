<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Salle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [1, '6eM1',1,1]);

          DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [2, '6eM2',1,1]);
            DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [3, '6eM3',1,1]);
              DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [4, '5eM1',1,1]);
                DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [5, '5eM2',1,1]);
                  DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [6, '5eM3',1,1]);
                    DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [7, '4eM1',1,1]);
                      DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [8, '4eM2',1,1]);
                        DB::insert('insert into salles (id, libelle,niveau_id,cycle_id) values (?, ?,?,?)', [9, 'from1 A',1,4]);
    }
}
