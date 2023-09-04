<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                "name" => "Acapulco",
                "alcoholic" => "Alcoholic",
                "instructions" => "Combine and shake all ingredients (except mint) with ice and strain into an old-fashioned glass over ice cubes. Add the sprig of mint and serve.",
                "ingredients" => "Light rum-Triple sec-Lime juice-Sugar-Egg white-Mint",
                "image" => "https://www.thecocktaildb.com/images/media/drink/il9e0r1582478841.jpg"
            ],
            [
                "name" => "Shot-gun",
                "alcoholic" => "Alcoholic",
                "instructions" => "Pour one part Jack Daneils and one part Jim Beam into shot glass then float Wild Turkey on top.",
                "ingredients" => "Jim Beam-Jack Daniels-Wild Turkey",
                "image" => "https://www.thecocktaildb.com/images/media/drink/2j1m881503563583.jpg"
            ],
            [
                "name" => "Jackhammer",
                "alcoholic" => "Alcoholic",
                "instructions" => "Serve over ice- Warning,Deadly!",
                "ingredients" => "Jack Daniels-Amarettp",
                "image" => "https://www.thecocktaildb.com/images/media/drink/9von5j1504388896.jpg"
            ],
            [
                "name" => "Honey Bee",
                "alcoholic" => "Alcoholic",
                "instructions" => "Shake all the ingridients in crushed ice",
                "ingredients" => "White Rum-Honey-Lemon Juice",
                "image" => "https://www.thecocktaildb.com/images/media/drink/vu8l7t1582475673.jpg"
            ],
            [
                "name" => "Negroni",
                "alcoholic" => "Alcoholic",
                "instructions" => "The simplicity of the Negroni cocktail is disarming: 1/3 of gin, 1/3 of bitter, and 1/3 of sweet vermouth.",
                "ingredients" => "Gin-Bitter-Sweet Vermouth",
                "image" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.thespruceeats.com%2Fnegroni-cocktail-recipe-759327&psig=AOvVaw3kHlXFxp-xcEJItI-CDx4x&ust=1693929335230000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCJiZ7NSokYEDFQAAAAAdAAAAABAE",
            ],
        ];

        foreach ($cocktails as $cocktail) {
            $newCocktail= new Cocktail();
            $newCocktail->name = $cocktail['name'];
            $newCocktail->alcoholic = $cocktail['alcoholic'];
            $newCocktail->instructions = $cocktail['instructions'];
            $newCocktail->ingredients = $cocktail['ingredients'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->save();
        }
    }
}
