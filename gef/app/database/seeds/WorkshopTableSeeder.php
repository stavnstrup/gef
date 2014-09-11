<?php

// app/database/seeds/WorkshopTableSeeder.php

class WorkshopTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('workshops')->delete();

		Workshop::create(array(
			'name' => 'Vild med dans',
			'description' => 'Her er lidt dans',
			'teaser_image' => '',
			'freeplaces' => 17,
                        'speaker' => 'Anders Andersen',
                        'uri' => 'http://oerestadgym.dk'
		));

		Workshop::create(array(
			'name' => 'Plejehjem',
			'description' => 'Besøg de ældre',
			'teaser_image' => '',
			'freeplaces' => 31,
                        'speaker' => 'Bjørn Berg',
                        'uri' => 'http://oerestadgym.dk',
		));

		Workshop::create(array(
			'name' => 'Musik for alle',
			'description' => 'Her er musik ...',
			'teaser_image' => '',
			'freeplaces' => 14,
                        'speaker' => 'Christian Clemmesen',
                        'uri' => 'http://oerestadgym.dk',
		));
	}
}
