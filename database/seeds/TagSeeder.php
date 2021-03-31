<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags=['sport', 'calcio', 'tecnologia', 'salute', 'cronaca', 'spazio', 'politica'];

        foreach($tags as $tag){
            $tagDB = new Tag();
            $tagDB->name = $tag;
            $tagDB->save();


        }
    }
}
