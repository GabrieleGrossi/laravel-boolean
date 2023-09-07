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
                "image" => "https://www.thecocktaildb.com/images/media/drink/qgdu971561574065.jpg",
            ],
            [
                "name" => "Margarita",
                "alcoholic" => "Alcoholic",
                "instructions" => "To make a classic margarita, combine 2 oz of tequila, 1 oz of lime juice, and 1 oz of triple sec. Shake with ice and strain into a salt-rimmed glass.",
                "ingredients" => "Tequila-Lime Juice-Triple Sec",
                "image" => "https://www.thecocktaildb.com/images/media/drink/5noda61589575158.jpg",
            ],
            [
                "name" => "Piña Colada",
                "alcoholic" => "Alcoholic",
                "instructions" => "Blend 2 oz of white rum, 3 oz of pineapple juice, and 1 oz of coconut cream with ice until smooth. Pour into a chilled glass and garnish with a pineapple slice and cherry.",
                "ingredients" => "White Rum-Pineapple Juice-Coconut Cream",
                "image" => "https://www.thecocktaildb.com/images/media/drink/wpxpvu1439905379.jpg",
            ],
            [
                "name" => "Martini",
                "alcoholic" => "Alcoholic",
                "instructions" => "Stir 2 1/2 oz of gin and 1/2 oz of dry vermouth with ice and strain into a chilled martini glass. Garnish with an olive or a lemon twist.",
                "ingredients" => "Gin-Dry Vermouth",
                "image" => "https://www.thecocktaildb.com/images/media/drink/71t8581504353095.jpg",
            ],
            [
                "name" => "Mojito",
                "alcoholic" => "Alcoholic",
                "instructions" => "Muddle 2 oz of white rum, 1 oz of lime juice, 2 teaspoons of sugar, and 6-8 fresh mint leaves in a glass. Add ice and top with club soda. Garnish with a mint sprig and a lime wedge.",
                "ingredients" => "White Rum-Lime Juice-Sugar-Fresh Mint Leaves-Club Soda",
                "image" => "https://www.thecocktaildb.com/images/media/drink/3z6xdi1589574603.jpg",
            ],
            [
                "name" => "Whiskey Sour",
                "alcoholic" => "Alcoholic",
                "instructions" => "Shake 2 oz of bourbon, 3/4 oz of fresh lemon juice, and 1/2 oz of simple syrup with ice. Strain into a rocks glass filled with ice. Garnish with a cherry and an orange slice.",
                "ingredients" => "Bourbon-Fresh Lemon Juice-Simple Syrup",
                "image" => "https://www.thecocktaildb.com/images/media/drink/hbkfsh1589574990.jpg",
            ],
            [
                "name" => "White Russian",
                "alcoholic" => "Alcoholic",
                "instructions" => "Pour 2 oz of vodka, 1 oz of coffee liqueur, and 1 oz of cream into an old-fashioned glass filled with ice. Stir gently and serve.",
                "ingredients" => "Vodka-Coffee Liqueur-Cream",
                "image" => "https://www.thespruceeats.com/thmb/4-cl74JRvv_E16iFHJTpwTG7zlA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/white-russian-recipe-761274-Hero_02-e1b64f0eac1f4b94b9dbe94fc66d83a8.jpg",
            ],
            [
                "name" => "Cosmopolitan",
                "alcoholic" => "Alcoholic",
                "instructions" => "Shake 1 1/2 oz of vodka, 1 oz of triple sec, 1/2 oz of cranberry juice, and a splash of lime juice with ice. Strain into a chilled martini glass. Garnish with a lime twist.",
                "ingredients" => "Vodka-Triple Sec-Cranberry Juice-Lime Juice",
                "image" => "https://www.thecocktaildb.com/images/media/drink/kpsajh1504368362.jpg",
            ],
            [
                "name" => "Daiquiri",
                "alcoholic" => "Alcoholic",
                "instructions" => "Shake 2 oz of white rum, 1 oz of fresh lime juice, and 1/2 oz of simple syrup with ice. Strain into a chilled martini or cocktail glass.",
                "ingredients" => "White Rum-Fresh Lime Juice-Simple Syrup",
                "image" => "https://www.thecocktaildb.com/images/media/drink/usuuur1439906797.jpg",
            ],
            [
                "name" => "Tom Collins",
                "alcoholic" => "Alcoholic",
                "instructions" => "In a shaker, combine 2 oz of gin, 1 oz of lemon juice, 1/2 oz of simple syrup, and ice. Strain into a tall glass filled with ice and top with club soda. Garnish with a lemon slice and a cherry.",
                "ingredients" => "Gin-Lemon Juice-Simple Syrup-Club Soda",
                "image" => "https://www.foodandwine.com/thmb/FQpExQKVkFu_CeDh7OuPpED7mK4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Tom-Collins-FT-RECIPE0922-2000-c9c8b25aba1d4bf89fd8030ee114b67b.jpg",
            ],
            [
                "name" => "Screwdriver",
                "alcoholic" => "Alcoholic",
                "instructions" => "Fill a highball glass with ice, pour 1 1/2 oz of vodka, and top with orange juice. Stir gently and garnish with an orange slice.",
                "ingredients" => "Vodka-Orange Juice",
                "image" => "https://www.thecocktaildb.com/images/media/drink/8xnyke1504352207.jpg",
            ],
            [
                "name" => "Old Fashioned",
                "alcoholic" => "Alcoholic",
                "instructions" => "In a glass, muddle a sugar cube with a few dashes of Angostura bitters and a splash of water. Add 2 oz of bourbon or rye whiskey and ice. Stir until well mixed. Garnish with an orange twist and a cherry.",
                "ingredients" => "Bourbon or Rye Whiskey-Sugar Cube-Angostura Bitters-Water-Orange Twist-Cherry",
                "image" => "https://www.thecocktaildb.com/images/media/drink/vrwquq1478252802.jpg",
            ],
            [
                "name" => "Mai Tai",
                "alcoholic" => "Alcoholic",
                "instructions" => "In a shaker, combine 2 oz of light rum, 1 oz of lime juice, 1/2 oz of orange liqueur, 1/2 oz of orgeat syrup, and ice. Shake well and strain into a glass filled with crushed ice. Garnish with a mint sprig and a cherry.",
                "ingredients" => "Light Rum-Lime Juice-Orange Liqueur-Orgeat Syrup-Mint Sprig-Cherry",
                "image" => "https://www.foodandwine.com/thmb/12UDMRbfmdAzBt9XJcCa-R2qqQ4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Mai-Tai-Cocktail-FT-BLOG1122-43e6748207e04826b57b8654cedb6bd8.jpg",
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
