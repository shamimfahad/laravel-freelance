<?php

use Illuminate\Database\Seeder;
use App\Bid;
class BidsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bids')->delete();
        
        \DB::table('bids')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2019-03-10 17:19:37',
                'updated_at' => '2019-03-10 17:19:37',
                'project_id' => 12,
                'user_id' => 4,
                'amount' => 450,
                'finish_time' => '3',
                'accepted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2019-03-11 08:06:32',
                'updated_at' => '2019-03-17 19:09:31',
                'project_id' => 1,
                'user_id' => 4,
                'amount' => 500,
                'finish_time' => '3',
                'accepted' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2019-03-11 08:57:11',
                'updated_at' => '2019-03-11 08:57:11',
                'project_id' => 4,
                'user_id' => 4,
                'amount' => 400,
                'finish_time' => '1',
                'accepted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2019-03-11 09:21:32',
                'updated_at' => '2019-03-11 09:21:32',
                'project_id' => 6,
                'user_id' => 4,
                'amount' => 400,
                'finish_time' => '3',
                'accepted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2019-03-11 11:09:24',
                'updated_at' => '2019-03-11 11:09:24',
                'project_id' => 7,
                'user_id' => 4,
                'amount' => 400,
                'finish_time' => '6',
                'accepted' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2019-03-18 07:42:22',
                'updated_at' => '2019-03-18 10:16:31',
                'project_id' => 2,
                'user_id' => 3,
                'amount' => 600,
                'finish_time' => '4',
                'accepted' => 1,
            ),
        ));
        
        
    }
}