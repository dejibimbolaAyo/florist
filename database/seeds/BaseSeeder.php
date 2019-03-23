<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseSeeder extends Seeder {

	public function truncateAndInsert($table, $data)
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table($table)->where([])->delete();
        DB::table($table)->truncate();
        DB::table($table)->insert($data);
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}