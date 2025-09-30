<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penerbit;

class PenerbitTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
{
        $Penerbit1 = new Penerbit;
        $Penerbit1->penerbit = "Graha Ilmu";
        $Penerbit1->alamat = "Candi Gebang Permai Blok R-6
Yogyakarta";
        $Penerbit1->save();
        $Penerbit2 = new Penerbit;
        $Penerbit2->penerbit = "Andi";
        $Penerbit2->alamat = "JL Beo 38-40 Yogyakarta";
        $Penerbit2->save();

        $Penerbit3 = new Penerbit;
        $Penerbit3->penerbit = "Lokomedia";
        $Penerbit3->alamat = "JL. Jambon, Perum. Persona Alam Hijau
Kav 2. B-4, Kricak Yogyakarta";
        $Penerbit3->save();
    }
}