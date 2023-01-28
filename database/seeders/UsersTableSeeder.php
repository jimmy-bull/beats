<?php

namespace Database\Seeders;

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
                'id' => 22,
                'name' => 'Drake Hartmann',
                'email' => 'wilber.barrows@example.net',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'WZMciO7Qai',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            1 => 
            array (
                'id' => 23,
                'name' => 'Derrick Ward',
                'email' => 'rmosciski@example.org',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'roe5m80pXi',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            2 => 
            array (
                'id' => 24,
                'name' => 'Tracey Keebler',
                'email' => 'patience18@example.com',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'vLRjllNbIB',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            3 => 
            array (
                'id' => 25,
                'name' => 'Lonie Hane',
                'email' => 'eda.morissette@example.net',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'PEXevZXJDi',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            4 => 
            array (
                'id' => 26,
                'name' => 'Alia Kovacek',
                'email' => 'quinton.blanda@example.net',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'gNB3OKbJZB',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            5 => 
            array (
                'id' => 27,
                'name' => 'Mrs. Serena Beier',
                'email' => 'ischneider@example.net',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '6yqpB0WT9q',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            6 => 
            array (
                'id' => 28,
                'name' => 'Lilliana Hammes',
                'email' => 'jamison29@example.com',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Z3SyJDvQlO',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            7 => 
            array (
                'id' => 29,
                'name' => 'Olin Osinski',
                'email' => 'tiara54@example.com',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'YXzrss9iNV',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            8 => 
            array (
                'id' => 30,
                'name' => 'Dr. Brad Goldner Sr.',
                'email' => 'alejandrin14@example.com',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'MhgnQPVknT',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
            9 => 
            array (
                'id' => 31,
                'name' => 'Prof. Fermin Torphy Sr.',
                'email' => 'hayes.ralph@example.org',
                'email_verified_at' => '2023-01-27 19:38:44',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'TAUL5MfaTz',
                'created_at' => '2023-01-27 19:38:44',
                'updated_at' => '2023-01-27 19:38:44',
            ),
        ));
        
        
    }
}