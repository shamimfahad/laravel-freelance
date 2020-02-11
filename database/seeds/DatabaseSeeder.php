<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(BidsTableSeeder::class);
        $this->call(WorkspacesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);

    }
}
