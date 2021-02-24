<?php
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <20 ; $i++) { 
            $newCategory = new Category();
            $newCategory->name = $faker->word();
            $newCategory->description = $faker->words(10, true);
            $newCategory->img = $faker->imageUrl(360, 360, 'sunset', true);

            $newCategory->save();
        }
    }
}
