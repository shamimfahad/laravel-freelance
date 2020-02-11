<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'first service',
                'budget' => 1000,
                'description' => 'something i do',
                'category' => 'web',
                'finish_time' => '5',
                'created_at' => '2019-03-04 09:34:37',
                'updated_at' => '2019-03-04 09:34:37',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'name' => 'second service',
                'budget' => 400,
                'description' => 'also something i do',
                'category' => 'web',
                'finish_time' => '6',
                'created_at' => '2019-03-04 09:36:58',
                'updated_at' => '2019-03-04 09:36:58',
            ),
        ));
        
        
    }
}