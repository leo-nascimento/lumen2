<?php

use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        \App\ProjectTypes::query()->insert([[
            'title' => 'Residencial',
            'slug' => 'residencial',
        ], [
            'title' => 'Rural',
            'slug' => 'rural',
        ], [
            'title' => 'Comercial',
            'slug' => 'comercial',
        ], [
            'title' => 'Condomínio',
            'slug' => 'condominio',
        ]]);
    }
}
