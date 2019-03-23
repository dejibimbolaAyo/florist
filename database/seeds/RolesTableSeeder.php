<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends BaseSeeder
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
				'id' => Config::get('constants.role.admin'),
				'name' => 'ADMIN',
			),
			array(
				'id' => Config::get('constants.role.customer'),
				'name' => 'CUSTOMER',
			)
		);
		$this->truncateAndInsert('roles', $data);
    }
}
