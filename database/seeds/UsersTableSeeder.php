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
        DB::table('type')->insert([
            'type'=>'GLUCOSE CONCENTRATION TEST'
        ]);
        DB::table('type')->insert([
            'type'=>'ONE STAGE FASTING (OGCT)'
        ]);
        DB::table('type')->insert([
            'type'=>'ORAL GLUCOSE TOLERANCE TEST (OGTT)'
        ]);
        DB::table('type')->insert([
            'type'=>'ORAL GLUCOSE TOLERANCE TEST (OGTT) - 5 samples'
        ]);
        DB::table('type')->insert([
            'type'=>'Post parandial Blood Sugar'
        ]);
        DB::table('type')->insert([
            'type'=>'Random Blood Sugar'
        ]);
        DB::table('type')->insert([
            'type'=>'Post parandial Blood Sugar ( 3 Samples )'
        ]);
        DB::table('type')->insert([
            'type'=>'Urine Sugar & Urine Albumen'
        ]);
        DB::table('type')->insert([
            'type'=>'URINE FOR CULTURE AND ABST'
        ]);
        DB::table('type')->insert([
            'type'=>'E.S.R'
        ]);
        DB::table('type')->insert([
            'type'=>'HIV 1 & 2 ANTIBODIES'
        ]);
        DB::table('type')->insert([
            'type'=>'Ionized Calcium'
        ]);
        DB::table('type')->insert([
            'type'=>'Malaria Parasites'
        ]);
        DB::table('type')->insert([
            'type'=>'Platelets'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Amylase'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Bilirubin'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Calcium'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Gamma G.T'
        ]);
        DB::table('type')->insert([
            'type'=>'TROPONIN I'
        ]);
        DB::table('type')->insert([
            'type'=>'Urine Microalbumin'
        ]);
        DB::table('type')->insert([
            'type'=>'V.D.R.L'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Potassium'
        ]);

    }
}
