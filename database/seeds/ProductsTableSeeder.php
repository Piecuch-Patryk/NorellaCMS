<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Oczyszczanie twarzy',
                'desc' => 'peeling, oczyszczanie, maska rozpulchniająca, ampułka, maska kremowa',
                'price' => 70,
                'category_id' => 1,
                'featured' => 1,
            ],
            [
                'title' => 'Zabieg oczyszcająco normalizujący',
                'desc' => 'peeling kawitacyjny, masaż, maska',
                'price' => 80,
                'category_id' => 1,
                'featured' => 1,
            ],
            [
                'title' => 'Zabieg dotleniająco nawilżający',
                'desc' => 'peeling, masaż, maska, ampułka, ultradźwięki',
                'price' => 85,
                'category_id' => 1,
                'featured' => 1,
            ],
            [
                'title' => 'Zabieg do cery naczyniowej i suchej',
                'desc' => 'peeling, ampułka, ultradźwięki, masaż',
                'price' => 70,
                'category_id' => 1,
                'featured' => 1,
            ],
            [
                'title' => 'Zabieg liftingująco napinający',
                'desc' => 'peeling, masaż, maska alganowa, ultradźwięki',
                'price' => 85,
                'category_id' => 1,
            ],
            [
                'title' => 'Zabieg z Witaminą C',
                'desc' => 'peeling, masaż, serum, maska',
                'price' => 80,
                'category_id' => 1,
            ],
            [
                'title' => 'Zabieg złuszczający kwasem migdałowym 50%',
                'desc' => '',
                'price' => 100,
                'category_id' => 1,
            ],
            [
                'title' => 'Zabieg złuszczający kwasem pirogronowymm 35%',
                'desc' => '',
                'price' => 100,
                'category_id' => 1,
            ],
            [
                'title' => 'Mikrodermabrazja twarzy',
                'desc' => 'ampułka, maska algowa, krem',
                'price' => 90,
                'category_id' => 1,
            ],
            [
                'title' => 'Mikrodermabrazja twarz + szyja + dekolt',
                'desc' => '',
                'price' => 115,
                'category_id' => 1,
            ],
            [
                'title' => 'Henna rzęsy + brwi',
                'desc' => '',
                'price' => 25,
                'category_id' => 2,
                'featured' => 1,
            ],
            [
                'title' => 'Henna rzęsy',
                'desc' => '',
                'price' => 10,
                'category_id' => 2,
                'featured' => 1,
            ],
            [
                'title' => 'Henna brwi + regulacja',
                'desc' => '',
                'price' => 20,
                'category_id' => 2,
                'featured' => 1,
            ],
            [
                'title' => 'Regulacja brwi',
                'desc' => '',
                'price' => 10,
                'category_id' => 2,
                'featured' => 1,
            ],
            [
                'title' => 'SHIATSU Japoński rytuał wyszczuplająco-odmładzający',
                'desc' => 'wybrane partie ciała',
                'price' => 100,
                'category_id' => 3,
                'featured' => 1,
            ],
            [
                'title' => 'Zabieg oczyszczająco normalizujący na plecy',
                'desc' => 'peeling, maska rozpulchniająca, oczyszczanie, maska kremowa',
                'price' => 110,
                'category_id' => 3,
                'featured' => 1,
            ],
            [
                'title' => 'Mezoterapia igłowa - brzuch',
                'desc' => 'redukcja cellulitu, utrata tkanki tłuszczowej',
                'price' => 250,
                'category_id' => 3,
                'featured' => 1,
            ],
            [
                'title' => 'Mezoterapia igłowa - uda',
                'desc' => 'redukcja cellulitu, utrata tkanki tłuszczowej',
                'price' => 350,
                'category_id' => 3,
                'featured' => 1,
            ],
            [
                'title' => 'Manicure',
                'desc' => '',
                'price' => 30,
                'category_id' => 4,
                'featured' => 1,
            ],
            [
                'title' => 'Manicure + malowanie',
                'desc' => '',
                'price' => 35,
                'category_id' => 4,
                'featured' => 1,
            ],
            [
                'title' => 'Manicure + malowanie french',
                'desc' => '',
                'price' => 40,
                'category_id' => 4,
                'featured' => 1,
            ],
            [
                'title' => 'Manicure hybrydowy',
                'desc' => '',
                'price' => 50,
                'category_id' => 4,
                'featured' => 1,
            ],
            [
                'title' => 'Manicure hybrydowy + pedicure hybrydowy',
                'desc' => '',
                'price' => 100,
                'category_id' => 4,
            ],
            [
                'title' => 'Pedicure',
                'desc' => '',
                'price' => 50,
                'category_id' => 4,
            ],
            [
                'title' => 'Pedicure + malowanie',
                'desc' => '',
                'price' => 60,
                'category_id' => 4,
            ],
            [
                'title' => 'Pedicure + hybrydy',
                'desc' => '',
                'price' => 80,
                'category_id' => 4,
            ],
            [
                'title' => 'Parafina na dłonie + maska + peeling',
                'desc' => '',
                'price' => 30,
                'category_id' => 4,
            ],
        ];
        
        foreach ($products as $product) {
            $newProduct = new Product;
            $newProduct->title = $product['title'];
            $newProduct->desc = $product['desc'];
            $newProduct->price = $product['price'];
            $newProduct->category_id = $product['category_id'];
            $newProduct->featured = isset($product['featured']) ? $product['featured'] : 0;
            $newProduct->save();
        }
    }
}
