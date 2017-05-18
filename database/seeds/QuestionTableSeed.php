<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Question;

class QuestionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'João',
            'email' => 'joao@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $question = Question::create([
            'title' => 'Como criar uma seed ?',
            'content' => 'Como criar uma seed no Laravel',
            'user_id' => $user->id
        ]);
    }
}
