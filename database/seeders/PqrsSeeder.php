<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PqrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pqrs')->insert([
            "eps_id" => 1,
            "status" => 1,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 2,
            "status" => 2,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 3,
            "status" => 3,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 4,
            "status" => 1,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 5,
            "status" => 2,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 6,
            "status" => 3,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 7,
            "status" => 1,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 8,
            "status" => 2,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 9,
            "status" => 3,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 10,
            "status" => 1,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 11,
            "status" => 2,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 12,
            "status" => 3,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 13,
            "status" => 1,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
        DB::table('pqrs')->insert([
            "eps_id" => 14,
            "status" => 2,
            "user_id" => 1,
            "pqrs" => "La Atencion en la Eps es muy mala deverian de mejorarla",
            "created_at" => Carbon::now()
        ]);
    }
}
