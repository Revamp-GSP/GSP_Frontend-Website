<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class createuserseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){$user = [['name'=>'kiky','email'=>'pegawai@gsp.co.id','is_admin'=>'0','password'=> bcrypt('123456'),'role'=>'Busdev'],];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}