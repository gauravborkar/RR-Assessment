<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class DataSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) { //to add 10 clients. Change limit as desired
            $this->db->table('data')->insert($this->generateData());
        }
    }

    private function generateData(): array
    {
        $faker = Factory::create();
        return [
            'userId' => 1,
            'title' => $faker->text,
            'body' => $faker->text
        ];
    }
}