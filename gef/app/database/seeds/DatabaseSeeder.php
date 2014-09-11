<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
                $this->call('WorkshopTableSeeder');
		$this->command->info('Workshop table seeded.');

		// $this->call('UserTableSeeder');
	}

}
