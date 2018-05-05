<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://scene7.zumiez.com/is/image/zumiez/pdp_hero/Baker-Herman-Abstract-8.0%26quot%3B-Skateboard-Deck-_278766-front-US.jpg',
            'title' => 'Baker Herman SKateboard Deck',
            'description' => 'Abstract graphic design, 8.0" deck width.',
            'price' => 54
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51D-%2BCaJU%2BL._SY355_.jpg',
            'title' => 'Spitfire Bighead Skateboard Wheels',
            'description' => 'Blue Graphic color, 51mm wheel size.',
            'price' => 28
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.basementskate.com.au/images/P/independent-mountin-hollow-raw-pewter-139-skateboard-trucks.png',
            'title' => 'Independent Hollow 139 Skateboard Truck',
            'description' => 'Hollow axel, hollow kingpin, Forged Aluminium. Suited for skateboard deck sizes 8.0" - 8.25" ',
            'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://static1.squarespace.com/static/54922027e4b095b53086cc40/t/54e7916fe4b06d2d7218842a/1502304245446/Andale+Bearings+Abec+7',
            'title' => 'Andale Abec 7 Bearings',
            'description' => 'The Andale Abec 7 Bearings are definitely a smooth ride and make you go fast. The perfect bearings for your wheels and worth it!',
            'price' => 19
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://socalskateshop.com/images/products/large_86702_Graphic-Mob-Griptape-Ben-Horton-Dogs-Of-War.jpg',
            'title' => '9in x 33in Ben Horton Dogs of War Sheet Mob Skateboard Grip Tape',
            'description' => 'Ben Horton x Graphic Mob! Rock Horton\'s Dogs of War Graphic Mob on the top of board as is or cut and customize to fit your style. Graphic Mob features the same durability, grip, and feel that makes Mob the #1 griptape choice of professional skateboarder.',
            'price' => 13
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://img.skatewarehouse.com/watermark/rs.php?path=EILBPHW-1.jpg&nw=435',
            'title' => 'Enjoi Little Buddies Phillips Hardware',
            'description' => 'HAVING TROUBLE MAKING FRIENDS?

            Look down and have all your little buddies with you when you skate. You get eight phillips hardware pieces from your bros at Enjoi. 
            
            Features: 
            
            - Various  colors
            - 8 phillips hardware pieces 
            - Note: 7/8 hardware is too short to work with riser pads. ',
            'price' => 5
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.ccs.com/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/e/v/everybody-skates-work-sucks-long-sleeve-t-shirt-black-1.1509210422.jpg',
            'title' => 'Everybody Skates Work Sucks Long Sleeve T-Shirt - Black',
            'description' => 'The rumors are true. Work does suck. Steal staplers with reckless abandon in the Everybody Skates Work Sucks Long Sleeve T-Shirt.

            - 100% Cotton, Regular fit long sleeve t-shirt
            - Screen printed graphic, Machine wash
            - Imported',
            'price' => 26
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://cdn8.bigcommerce.com/s-xtqeoh1i/images/stencil/original/products/908/2447/SecretPizza-1__27436.1511292724.jpg?c=2&imbypass=on',
            'title' => 'Revive Skateboards Secret Pizza Cuffed Beanie',
            'description' => 'If you buy one thing this year, let\'s face it, it should be food, but if you buy two things buy this. At least your head won\'t be naked.',
            'price' => 18
        ]);
        $product->save();
    }
}
