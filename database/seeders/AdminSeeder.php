<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pentadbir;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Pentadbir::create([
            'nama_pentadbir' => 'NURUL NAJIHA',
            'email_pentadbir' => 'najihasuhaili@gmail.com',
            'no_sambungan' => '030402',
        ]);
    }
}
