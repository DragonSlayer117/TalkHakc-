<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eps')->insert([
            "eps" => "ASOCIACIÓN INDÍGENA DEL CAUCA",
        ]);
        DB::table('eps')->insert([
            "eps" => "COMFENALCO VALLE E.P.S.",
        ]);
        DB::table('eps')->insert([
            "eps" => "COMPENSAR E.P.S.",
        ]);
        DB::table('eps')->insert([
            "eps" => "COOPERATIVA DE SALUD Y DESARROLLO INTEGRAL ZONA SUR ORIENTAL DE CARTAGENA",
        ]);
        DB::table('eps')->insert([
            "eps" => "E.P.S. FAMISANAR LTDA.",
        ]);
        DB::table('eps')->insert([
            "eps" => "E.P.S. SANITAS S.A.",
        ]);
        DB::table('eps')->insert([
            "eps" => "EPS SERVICIO OCCIDENTAL DE SALUD S.A.",
        ]);
        DB::table('eps')->insert([
            "eps" => "EPS Y MEDICINA PREPAGADA SURAMERICANA S.A.",
        ]);
        DB::table('eps')->insert([
            "eps" => "MALLAMAS.",
        ]);
        DB::table('eps')->insert([
            "eps" => "FUNDACIÓN SALUD MIA EPS.",
        ]);
        DB::table('eps')->insert([
            "eps" => "NUEVA EPS S.A.",
        ]);
        DB::table('eps')->insert([
            "eps" => "SALUD TOTAL S.A. E.P.S.",
        ]);
        DB::table('eps')->insert([
            "eps" => "SALUDVIDA S.A .E.P.S.",
        ]);
        DB::table('eps')->insert([
            "eps" => "New Help .E.P.S.",
        ]);
    }
}
