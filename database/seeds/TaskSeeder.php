<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //juan dela cruz
        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000001,
            'task_name' => "Create UI / UX for login page",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000002,
            'task_name' => "Create UI / UX for login page",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000003,
            'task_name' => "Migrate database from laravel",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.!",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000004,
            'task_name' => "Create UI / UX for intern page",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000005,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000006,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000007,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000008,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000009,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411864,
            'task_id' => 202000010,
            'task_name' => "Connect login database",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Juan Dela Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

         //Mark Brillantes Lorem Ipsum

         DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000011,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000012,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,  
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000013,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000014,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000015,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000016,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000017,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 2020000118,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000019,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411865,
            'task_id' => 202000020,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Mark Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Gabriel De Jesus
        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000021,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000022,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000023,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000024,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000025,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000026,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000027,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000028,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000029,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411866,
            'task_id' => 202000030,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel De Jesus",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
       //'John Edwin Paloma
            
        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000031,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000032,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000033,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000034,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000035,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000036,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000037,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000038,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000039,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411867,
            'task_id' => 202000040,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "John Edwin Paloma",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Jewel Carreon

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000041,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000042,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000043,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000044,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000045,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000046,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000047,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000048,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000049,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411868,
            'task_id' => 202000050,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Jewel Carreon",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "IT Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        //animation dept
        //Luke Lucero
        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000051,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000052,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000053,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000054,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000055,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000056,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000057,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000058,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000059,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411869,
            'task_id' => 202000060,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Luke Lucero",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Gabriel Salenga
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000061,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000062,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000063,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000064,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000065,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000066,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000067,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000068,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
        
        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000069,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411870,
            'task_id' => 202000070,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Gabriel Salenga",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //aaron janno

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000071,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000072,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000073,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000074,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000075,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000076,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000077,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000078,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000079,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411871,
            'task_id' => 202000080,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Aaron Janno",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Kevin Villar

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000081,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000082,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000083,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000084,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000085,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000086,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000087,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000088,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000089,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411872,
            'task_id' => 202000090,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kevin Villar",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Kent Cruz

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000091,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000092,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000093,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000094,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000095,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000096,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000097,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000098,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000099,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411873,
            'task_id' => 202000100,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Kent Cruz",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Animation Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);
            //writing dept Elisah Opena

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000101,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000102,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000103,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000104,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000105,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000106,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000107,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000108,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000109,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411874,
                'task_id' => 202000110,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Elisah Opena",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            //Charlene Espinosa
            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000111,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000112,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000113,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);
            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000114,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000115,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000116,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000117,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000118,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000119,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411875,
                'task_id' => 202000120,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Charlene Espinosa",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            //Mitzi Villanueva

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000121,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000122,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000123,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000124,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000125,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000126,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000127,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000128,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000129,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

            DB::table('tasks')->insert([
                'intern_id' => 201411876,
                'task_id' => 202000130,
                'task_name' => "Lorem Ipsum",
                'task_assigned_by' => "Charles Kevin Crisostomo",
                'task_assigned_to' => "Mitzi Villanueva",
                'task_date_created' => date("Y/m/d"),
                'task_due_date' => date("Y/m/d"),
                'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
                'task_department' => "Writing Department",
                'task_submitted_date' => date("Y/m/d"),
                'task_link' => "samplelink.com",
                'task_is_submitted' => 0,
                'task_grade' => 0,
            ]);

           // Michael Brillantes
           DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000131,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000132,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000133,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000134,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000135,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000136,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000137,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000138,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000139,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411877,
            'task_id' => 202000140,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Michael Brillantes",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        //Junemar Montoya

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000141,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000142,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000143,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000144,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000145,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000146,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000147,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000148,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000149,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);

        DB::table('tasks')->insert([
            'intern_id' => 201411878,
            'task_id' => 202000150,
            'task_name' => "Lorem Ipsum",
            'task_assigned_by' => "Charles Kevin Crisostomo",
            'task_assigned_to' => "Junemar Montoya",
            'task_date_created' => date("Y/m/d"),
            'task_due_date' => date("Y/m/d"),
            'task_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel ligula eu risus mollis faucibus sit amet vel eros. Suspendisse varius rutrum odio, non pharetra orci condimentum sed. Duis luctus egestas consectetur.",
            'task_department' => "Writing Department",
            'task_submitted_date' => date("Y/m/d"),
            'task_link' => "samplelink.com",
            'task_is_submitted' => 0,
            'task_grade' => 0,
        ]);







    }
}
