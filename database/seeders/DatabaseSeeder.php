<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Question;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         /*\App\Models\User::factory(3)->create()->each(function($u) {
            $u->questions()
                ->saveMany(
                    \App\Models\Question::factory(5)->make()
                );
         });*/

         //User::factory()->has(Question::factory()->count(3))->create();

         User::factory()->count(3)->hasQuestions(5)->create();
    }
}
