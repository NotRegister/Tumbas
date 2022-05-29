<?php

use Illuminate\Database\Seeder;
use App\User; //model table users

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Satria Yuda Setiawan';
        $inputan['email'] = 'awthena88@gmail.com'; //ganti pake emailmu
        $inputan['password'] = Hash::make('yuda12345'); //passwordnya 123258
        $inputan['phone'] = '082331261711';
        $inputan['alamat'] = 'Jl. Raya Belung rt/1 rw/2';
        $inputan['role'] = 'admin'; //kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
