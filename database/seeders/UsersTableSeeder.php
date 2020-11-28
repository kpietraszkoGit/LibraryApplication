<?php

namespace Database\Seeders;

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
        //pierwszy sposob dodawania danych w Laravel
        for($i = 0; $i < 10; $i++) {
        $user = new \App\Models\User();//App\Models; trzeba bylo zmienić
        $user->name = 'User' . $i;//dodajemy dane do kolumn, . dodanie 10 uzytkownikow prze petle for
        $user->password = bcrypt('123');//zakodowanie hasła
        $user->email = 'user' . $i . '@user.com';
        $user->save();//zapisanie tabeli
        }   
    }
}
