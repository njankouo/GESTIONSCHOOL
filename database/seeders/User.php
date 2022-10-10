<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (id, nom,email,telephone,sexe,role_id,password) values (?,?,?,?,?,?,?)', [1, 'dairou','dairounjankouo2019@gmail.com',699072561,1,1,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        //   DB::insert('insert into users (id, nom,email,telephone,sexe,role_id,password) values (?,?,?,?,?,?,?)', [2, 'njankouo','unjankouo2019@gmail.com',99072561,1,1,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);

    }
}
