<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = array(
			array(
				'id' => 1,
				'name' => 'Gracefully Yours',
                'description' => 'Two dozens white Roses with upgraded fillers',
                'price' => '175',
                'picture_url' => 'assets/products/fl1.webp',
                'slug' => 'gracefully_yours'
			),
			array(
                'id' => 2,
				'name' => 'Sweet Surprises',
                'description' => 'Vase Arrangement Of Seasonal Flowers Daisies & Carnations With Caspia Filler',
                'price' => '50',
                'picture_url' => 'assets/products/fl2.jpg',
                'slug' => 'sweet_surprises'
            ),
			array(
                'id' => 3,
				'name' => 'Glorious Springtime',
                'description' => 'Glorious Springtime in A White Wicker Basket Gerber daisies, Poms, Spray Roses, Statice & Solidago',
                'price' => '75',
                'picture_url' => 'assets/products/fl3.webp',
                'slug' => 'glorious_springtime'
            ),
			array(
                'id' => 4,
				'name' => 'Blooming Bounty',
                'description' => 'Wicker Basket Arrangement Of Seasonal Flowers',
                'price' => '45',
                'picture_url' => 'assets/products/fl4.webp',
                'slug' => 'blooming_bounty'
			),
			array(
                'id' => 5,
				'name' => 'Precious Heart',
                'description' => 'Vase arrangement Of Spring Flowers',
                'price' => '45',
                'picture_url' => 'assets/products/fl5.webp',
                'slug' => 'precious_heart'
			)
		);
		$this->truncateAndInsert('products', $data);
    }
}
