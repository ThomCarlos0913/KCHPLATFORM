<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //It dept
     DB::table('users')->insert([
        'id' => 201411864,
        'name' => "Juan Dela Cruz",
        'email' => "Juan@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "21",
        'address' => "Bacoor Cavite",
        'year' => "5th year",
        'course'=> "BS Computer Engineering",
        'school' => "Adamson University",
        'department' => "IT department",
        'role' => "Project manager",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411864_Juan Dela Cruz',
        'introduction' => "Hi there! I'm Juan Dela Cruz from Adamson University and I'm an intern from IT Department. You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411865,
        'name' => "Mark Brillantes",
        'email' => "mark@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "23",
        'address' => "Caloocan City",
        'year' => "5th year",
        'course'=> "BS Computer Engineering",
        'school' => "Mapua University",
        'department' => "IT department",
        'role' => " Assistant Project manager",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411865_Mark Brillantes',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411866,
        'name' => "Gabriel De Jesus",
        'email' => "Gabriel@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "21",
        'address' => "Muntinlupa City",
        'year' => "4th year",
        'course'=> "BS Computer Engineering",
        'school' => "Far Eastern University",
        'department' => "IT department",
        'role' => "Front-end Developer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411866_Gabriel De Jesus',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411867,
        'name' => "John Edwin Paloma",
        'email' => "John@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "20",
        'address' => "Paco, Manila",
        'year' => "5th year",
        'course'=> "BS Computer Science",
        'school' => "Adamson University",
        'department' => "IT department",
        'role' => "Front-end Developer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411867_John Edwin Paloma',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411868,
        'name' => "Jewel Carreon",
        'email' => "Jewel@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "24",
        'address' => "Caloocan City",
        'year' => "4th year",
        'course'=> "BS Information Technology",
        'school' => "Adamson University",
        'department' => "IT department",
        'role' => "Back-end Developer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411868_Jewel Carreon',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

//animation dept
    DB::table('users')->insert([
        'id' => 201411869,
        'name' => "Luke Lucero",
        'email' => "Luke@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "24",
        'address' => "Caloocan City",
        'year' => "4th year",
        'course'=> "BS in Animation",
        'school' => "De La Salle-College of Saint Benilde",
        'department' => "Animation department",
        'role' => "Animator",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411869_Luke Lucero',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411870,
        'name' => "Gabriel Salenga",
        'email' => "gab@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "22",
        'address' => "Batangas City",
        'year' => "4th year",
        'course'=> "BS in Animation",
        'school' => "La Consolacion College - Novaliches",
        'department' => "Animation department",
        'role' => "Animator",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411870_Gabriel Salenga',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411871,
        'name' => "Aaron Janno",
        'email' => "Aaron@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "21",
        'address' => "Imus Cavite",
        'year' => "4th year",
        'course'=> "BS in animation",
        'school' => "De La Salle-College of Saint Benilde",
        'department' => "Animation department",
        'role' => "Graphic Designer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411871_Aaron Janno',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411872,
        'name' => "Kevin Villar",
        'email' => "kevs@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "21",
        'address' => "Pasay City",
        'year' => "4th year",
        'course'=> "BS in animation",
        'school' => "De La Salle-College of Saint Benilde",
        'department' => "Animation department",
        'role' => "Graphic Designer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411872_Kevin Villar',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411873,
        'name' => "Kent Cruz",
        'email' => "Kent@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "22",
        'address' => "Pampanga City",
        'year' => "4th year",
        'course'=> "BS in animation",
        'school' => "De La Salle-College of Saint Benilde",
        'department' => "Animation department",
        'role' => "Graphic Designer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411873_Kent Cruz',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);


    //writing dept

    DB::table('users')->insert([
        'id' => 201411874,
        'name' => "Elisah Opena",
        'email' => "Elisah@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "20",
        'address' => "Imus Cavite",
        'year' => "4th year",
        'course'=> "BA in Creative Writing",
        'school' => "UP Diliman",
        'department' => "Writing department",
        'role' => "Content Writer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411874_Elisah Opena',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411875,
        'name' => "Charlene Espinosa",
        'email' => "Charleneh@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "22",
        'address' => "Tarlac City",
        'year' => "4th year",
        'course'=> "BA in Creative Writing",
        'school' => "UP Diliman",
        'department' => "Writing department",
        'role' => "Content Writer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411875_Charlene Espinosa',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411876,
        'name' => "Mitzi Villanueva",
        'email' => "Mitz@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "22",
        'address' => "Bacoor Cavite",
        'year' => "4th year",
        'course'=> "BA in Creative Writing",
        'school' => "UP Diliman",
        'department' => "Writing department",
        'role' => "Content Writer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411876_Mitzi Villanueva',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411877,
        'name' => "Michael Brillantes",
        'email' => "Mike@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "23",
        'address' => "Paranaque City",
        'year' => "4th year",
        'course'=> "BA in English Studies major in Literature",
        'school' => "UP Diliman",
        'department' => "Writing department",
        'role' => "Content Writer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411877_Michael Brillantes',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);

    DB::table('users')->insert([
        'id' => 201411878,
        'name' => "Junemar Montoya",
        'email' => "Junemarh@gmail.com",
        'birthdate' => date("Y/m/d"),
        'age' => "20",
        'address' => "Cainta Rizal",
        'year' => "4th year",
        'course'=> "BA in English Studies major in Literature",
        'school' => "UP Diliman",
        'department' => "Writing department",
        'role' => "Content Writer",
        'date_started' => date("Y/m/d"),
        'end_date' => date("Y/m/d"),
        'profile_picture' => "image.jpg",
        'password' => Hash::make('password'),
        'profile_picture' => '/storage/avatars/201411878_Junemar Montoya',
        'introduction' => "Hi there! I'm (NAME) from (SCHOOL)  and I'm an intern from (DEPARTMENT). You can freely send me a message by clicking the 'Send Button' from the right.",
    ]);
    }
}
