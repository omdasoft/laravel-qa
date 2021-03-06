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
        //  User::factory(3)->create()->each(function($u) {
        //     $u->questions()->saveMany(Question::factory(rand(1,5))->make())
        //     ->each(function($q) {
        //             $q->answers()->saveMany(Answer::factory(rand(1,5))->make());
        //         });
        //  });

         //User::factory()->has(Question::factory()->count(3))->create();

         $this->call([
            UserSeeder::class,
            AnswerSeeder::class,
         ]);
    }
}
