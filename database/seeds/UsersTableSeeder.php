<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Shamim Fahad client',
                'email' => 'shamimfahadshuvo@gmail.com',
                'slug' => 'shamimfahad',
                'title' => '',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VSlaXd5S2gGghVBT24SFTOLoYq5IGfDFl6mqoVvnSTrCZ.BFbVlji',
                'user_type' => 0,
                'remember_token' => 'nbKzbXTnAcIrp42hUrzuQPPp9DIS3AvUZG0LEPJIdSASnIYgtVBwnvbCP0Wb',
                'created_at' => '2019-03-04 07:32:31',
                'updated_at' => '2019-03-04 07:32:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rifat',
                'email' => 'r@g.com',
                'slug' => 'rifat',
                'title' => '',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fHbGzRp6xbp.fDyF3f/bM.OJmrqWN6izlzJFimIzXg9vnN.d1MTLy',
                'user_type' => 0,
                'remember_token' => '7sOph3rer5qxMeG7ygY9wTQJEgfN1gfWrrcLjDUgC8vMoIpFv2gXy9LT1Eb7',
                'created_at' => '2019-03-09 10:06:26',
                'updated_at' => '2019-03-09 10:06:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sajjad freelancer',
                'email' => 's@g.com',
                'slug' => 'sajjad',
                'title' => '',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qRWm1r7z1J8A.BrZOjn7vebEWbBkjSKTDfkc7PiPsxVsAhv1dAraW',
                'user_type' => 1,
                'remember_token' => 'VEYQgmSMu0EUMmJOShkzRJNra8s3OSNBbyqiG2BYmWf9wuj8derSm58IlAaH',
                'created_at' => '2019-03-09 10:09:10',
                'updated_at' => '2019-03-09 10:09:10',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'burger',
                'email' => 'b@g.com',
                'slug' => 'burger',
                'title' => 'Web Designer',
                'email_verified_at' => NULL,
                'password' => '$2y$10$knkvLaQmNu2ITgUg7agWhuQqIiY.GVFIOzybbbO0TPwNfdOv2plQm',
                'user_type' => 1,
                'remember_token' => 'G2NiQ0AWLGx0NDLoNFXl4GOX6xfaLp1u3AH38xGk6Zhtji70FLW33cNjrCxP',
                'created_at' => '2019-03-09 10:11:10',
                'updated_at' => '2019-03-09 10:11:10',
            ),
        ));
        
        
    }
}