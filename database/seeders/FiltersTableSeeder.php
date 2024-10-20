<?php

use Illuminate\Database\Seeder;
use App\Models\Filter;

class FiltersTableSeeder extends Seeder
{
    public function run()
    {
        Filter::create([
            'category' => 'Ремонт и строительство',
            'filters' => json_encode(['1','2','3']),
        ]);
        Filter::create([
            'category' => 'Ремонт и устанвка техники',
            'filters' => json_encode(['4','5','6']),
        ]);
    }
}

