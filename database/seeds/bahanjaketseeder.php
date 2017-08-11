<?php

use Illuminate\Database\Seeder;
use App\bahanjaket;
use App\jakett;

class bahanjaketseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$bahanjaket1 = bahanjaket::create(['bahan_jaket'=>' Taslan']);
    	$bahanjaket2 = bahanjaket::create(['bahan_jaket'=>' Parasit']);
    	$bahanjaket3 = bahanjaket::create(['bahan_jaket'=>' Satin']);
    	$bahanjaket4 = bahanjaket::create(['bahan_jaket'=>' Jeans']);


    	


            }
}
