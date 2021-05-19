<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dia')->insert(['descricao'=>'Segunda-Feira']);
        DB::table('dia')->insert(['descricao'=>'Terça-Feira']);
        DB::table('dia')->insert(['descricao'=>'Quarta-Feira']);
        DB::table('dia')->insert(['descricao'=>'Quinta-Feira']);
        DB::table('dia')->insert(['descricao'=>'Sexta-Feira']);
        DB::table('dia')->insert(['descricao'=>'Sabado']);
        DB::table('dia')->insert(['descricao'=>'Domingo']);
    }
}
