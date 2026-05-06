<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            "libelle" => "VIE"
        ]);
        Type::create([
            "libelle" => "AUTO"
        ]);
        Type::create([
            "libelle" => "HABITAT"
        ]);
        Type::create([
            "libelle" => "VOYAGE>"
        ]);

    }
}
