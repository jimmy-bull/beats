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
                'id' => 1,
                'name' => 'Flo Jakubowski',
                'email' => 'ron.howe@example.com',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '4EaSDwT06D',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jefferey Ratke',
                'email' => 'jules30@example.org',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'k66Zao6uhk',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jamir Jacobson',
                'email' => 'jennings34@example.com',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'KAoX5ieakR',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Stephen Greenfelder',
                'email' => 'zgerhold@example.net',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'J0JbzxSGs0',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ewald Stamm II',
                'email' => 'vlebsack@example.net',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'myY92oCxzj',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Madison Strosin',
                'email' => 'elangworth@example.com',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'TmVmfQZteA',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dessie Toy MD',
                'email' => 'wpacocha@example.net',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'zfWDPhK3D6',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Mandy Moen MD',
                'email' => 'albina.prohaska@example.org',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'jd3eyC9nmj',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Dr. Thora Toy IV',
                'email' => 'joelle.ortiz@example.org',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'wd93M4z5Iz',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Caleb Mayer',
                'email' => 'hayley.gibson@example.com',
                'email_verified_at' => '2023-01-25 21:32:27',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'OvEpXmVu6u',
                'created_at' => '2023-01-25 21:32:27',
                'updated_at' => '2023-01-25 21:32:27',
            ),
        ));
        
        
    }
}