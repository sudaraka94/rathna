<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sudaraka Jayathilaka',
            'username' => 'sudaraka',
            'password' => bcrypt('1234'),
        ]);

        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(6 Samples)'
        ]);

        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(4 Samples)'
        ]);
        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(3 Samples)'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S & P.P.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S & U.Sugar & Albumen'
        ]);
        DB::table('type')->insert([
            'type'=>'Urine Full Report (U.F.R)'
        ]);
        DB::table('type')->insert([
            'type'=>'Stool Full Report (S.F.R)'
        ]);
        DB::table('type')->insert([
            'type'=>'Pregnancy Test (H.C.G)'
        ]);
        DB::table('type')->insert([
            'type'=>'Pregnancy Test (H.C.G) & U.F.R'
        ]);
        DB::table('type')->insert([
            'type'=>'Blood Group'
        ]);
        DB::table('type')->insert([
            'type'=>'Lipid Profile'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Creatinine'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Creatinine & EGFR'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Creatinine & Blood Urea'
        ]);

    }
}
