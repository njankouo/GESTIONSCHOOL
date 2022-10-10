<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cycle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::insert('insert into cycles (id, libelle) values (?, ?)', [1, 'primaire']);
         DB::insert('insert into cycles (id, libelle) values (?, ?)', [2, 'secondaire general']);
           DB::insert('insert into cycles (id, libelle) values (?, ?)', [3, 'secondaire technique']);
             DB::insert('insert into cycles (id, libelle) values (?, ?)', [4, 'secondaire anglophone']);
               DB::insert('insert into cycles (id, libelle) values (?, ?)', [5, 'maternelle']);
    }
}
