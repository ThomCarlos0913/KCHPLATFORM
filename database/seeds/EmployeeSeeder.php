<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'id' => 202011864,
            'name' => "John Baniag",
            'email' => "Johnbaniaga@gmail.com",
            'birthdate' => date("Y/m/d"),
            'age' => "35",
            'address' => "Bacoor Cavite",
            'position' => "Supervisor",
            'level' => "2",
            'department' => "IT department",
            'profile_picture' => "/storage/avatars/default_profile",
            'password' => Hash::make('password'),
        ]);

        DB::table('employees')->insert([
            'id' => 202011865,
            'name' => "Kurt Albaniel",
            'email' => "Kurt@gmail.com",
            'birthdate' => date("Y/m/d"),
            'age' => "35",
            'address' => "Pasay City",
            'position' => "Supervisor",
            'level' => "2",
            'department' => "Animation department",
            'profile_picture' => "/storage/avatars/default_profile",
            'password' => Hash::make('password'),
        ]);

        DB::table('employees')->insert([
            'id' => 202011866,
            'name' => "Aljon Bayron",
            'email' => "Aljon@gmail.com",
            'birthdate' => date("Y/m/d"),
            'age' => "40",
            'address' => "Muntinlupa City",
            'position' => "IT Analyst",
            'level' => "2",
            'department' => "Writing department",
            'profile_picture' => "/storage/avatars/default_profile",
            'password' => Hash::make('password'),
        ]);

        DB::table('employees')->insert([
            'id' => 202011867,
            'name' => "Esmeralda De Guzman",
            'email' => "esmeralda@gmail.com",
            'birthdate' => date("Y/m/d"),
            'age' => "40",
            'address' => "Muntinlupa City",
            'position' => "IT Analyst",
            'level' => "3",
            'department' => "IT department",
            'profile_picture' => "/storage/avatars/default_profile",
            'password' => Hash::make('password'),
        ]);
    }
}
