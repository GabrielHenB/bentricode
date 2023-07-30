<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(2)->create();
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Um post',
            'body' => "É lançado a nova Horta Automatica da Bentricode, um modelo único que garante desempenho",
            'thumburl' => '#'
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Outro post',
            'body' => "Nunca devemos chamar descrição de hardware em VHDL de programação, lembre-se disso!!",
            'thumburl' => '#'
        ]);
        \App\Models\Post::factory(2)->create();
    }
}
