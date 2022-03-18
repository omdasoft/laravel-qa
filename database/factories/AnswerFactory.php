<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Question;
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraphs(rand(3, 7), true),
            'user_id' => User::pluck('id')->random(),
            'question_id' => Question::pluck('id')->random(),
            'votes_count' => rand(0, 5),
        ];
    }
}
