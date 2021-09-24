<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PharIo\Manifest\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
    }
}
