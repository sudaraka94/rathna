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
        DB::table('type')->insert([
            'type'=>'Blood Urea'
        ]);
        DB::table('type')->insert([
            'type'=>'E.S.R & F.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'E.S.R & R.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'E.S.R & Rh.Factor'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S & Serum Creatinine'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S & Total Cholesterol'
        ]);
        DB::table('type')->insert([
            'type'=>'F.B.S, Total Cholesterol & Triglycerides'
        ]);
        DB::table('type')->insert([
            'type'=>'H.b & F.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'H.b & P.P.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'H.b & R.B.S'
        ]);
        DB::table('type')->insert([
            'type'=>'S.G.O.T / A.S.T'
        ]);
        DB::table('type')->insert([
            'type'=>'S.G.P.T / A.L.T'
        ]);
        DB::table('type')->insert([
            'type'=>'Total Cholesterol'
        ]);
        DB::table('type')->insert([
            'type'=>'Haemoglobin'
        ]);
        DB::table('type')->insert([
            'type'=>'Haemoglobin & E.S.R'
        ]);
        DB::table('type')->insert([
            'type'=>'Haemoglobin & W.B.C'
        ]);
        DB::table('type')->insert([
            'type'=>'Haemoglobin, W.B.C & E.S.R'
        ]);
        DB::table('type')->insert([
            'type'=>'B.T. & C.T'
        ]);
        DB::table('type')->insert([
            'type'=>'C - Reactive Protein'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Electrolytes'
        ]);
        DB::table('type')->insert([
            'type'=>'FILARIAL ANTIBODY TEST'
        ]);
        DB::table('type')->insert([
            'type'=>'Glyco - Haemoglobin'
        ]);
        DB::table('type')->insert([
            'type'=>'Pcv & Platelets'
        ]);
        DB::table('type')->insert([
            'type'=>'PT-INR'
        ]);
        DB::table('type')->insert([
            'type'=>'Platelets'
        ]);
        DB::table('type')->insert([
            'type'=>'FBS & UFR'
        ]);
        DB::table('type')->insert([
            'type'=>'Hb & UFR'
        ]);
        DB::table('type')->insert([
            'type'=>'PPBS & UFR'
        ]);
        DB::table('type')->insert([
            'type'=>'RBS & UFR'
        ]);
        DB::table('type')->insert([
            'type'=>'FBC & UFR'
        ]);
        DB::table('type')->insert([
            'type'=>'FBS, UFR & SFR'
        ]);
        DB::table('type')->insert([
            'type'=>'UFR & SFR'
        ]);
        DB::table('type')->insert([
            'type'=>'UFR & SFR'
        ]);
        DB::table('type')->insert([
            'type'=>'Automated Clinical Chemistry Analyzer'
        ]);
        DB::table('type')->insert([
            'type'=>'Rheumatoid Factor'
        ]);
        DB::table('type')->insert([
            'type'=>'Standard Agglutination Test'
        ]);
        DB::table('type')->insert([
            'type'=>'Serum Electrolytes'
        ]);
        DB::table('type')->insert([
            'type'=>'S.G.O.T & S.G.P.T'
        ]);
        DB::table('type')->insert([
            'type'=>'TSH ( 3 rd Generation )'
        ]);
        DB::table('type')->insert([
            'type'=>'Seminal Fluid Analysis'
        ]);
    }
}
