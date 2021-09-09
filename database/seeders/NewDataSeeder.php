<?php

namespace Database\Seeders;

use App\Models\NewData;
use Illuminate\Database\Seeder;

class NewDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'token'          =>'123',
            ],
         ];

         NewData::insert($users);
       }

}

