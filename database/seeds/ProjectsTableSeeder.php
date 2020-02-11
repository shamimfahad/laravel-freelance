<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'first project',
                'budget' => 500,
                'description' => 'this is my first project',
                'skills' => 'Web Design',
                'bids' => NULL,
                'skills' => 'Web Design',
                'created_at' => '2019-03-04 07:32:46',
                'updated_at' => '2019-03-04 07:32:46',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'name' => 'second project',
                'budget' => 700,
                'description' => 'this is my second project',
                'bids' => NULL,
                'skills' => 'Web Design',
                'created_at' => '2019-03-04 07:36:04',
                'updated_at' => '2019-03-04 07:36:04',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'name' => 'third project',
                'budget' => 800,
                'description' => 'this is my third project',
                'bids' => NULL,
                'skills' => 'Web Design',
                'created_at' => '2019-03-04 07:36:33',
                'updated_at' => '2019-03-04 07:36:33',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'name' => 'fourth project',
                'budget' => 700,
                'description' => 'this is my fourth project',
                'bids' => NULL,
                'skills' => 'Web Design',
                'created_at' => '2019-03-04 09:04:36',
                'updated_at' => '2019-03-04 09:04:36',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'name' => 'fifth project',
                'budget' => 500,
                'description' => 'this is my fifth project',
                'bids' => NULL,
                'skills' => 'web dev',
                'created_at' => '2019-03-04 09:36:24',
                'updated_at' => '2019-03-04 09:36:24',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'name' => 'online market place',
                'budget' => 5000,
                'description' => 'a freelancing website',
                'bids' => NULL,
                'skills' => 'web developing',
                'created_at' => '2019-03-11 09:17:36',
                'updated_at' => '2019-03-11 09:17:36',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'name' => 'data entry',
                'budget' => 5000,
                'description' => 'this is my seventh project',
                'bids' => NULL,
                'skills' => 'ww',
                'created_at' => '2019-03-11 11:09:02',
                'updated_at' => '2019-03-11 11:09:02',
                'project_deadline' => NULL,
                'completed' => 0,
            ),
        ));
        
        
    }
}