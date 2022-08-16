<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert/d=seed data to database in the skills table
        $skills = [
            ["name"=>"Laravel","slug"=>"laravel"],
            ["name"=>"English Writing","slug"=>"english_writing"]
        ];
        Skills::insert($skills);
    }
}
