<?php

namespace Database\Seeders;

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
        // \App\Models\Beats::factory(20)->create();
        // \App\Models\User::factory(10)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);

        $this->call(BeatsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
