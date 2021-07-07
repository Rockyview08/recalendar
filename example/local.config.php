<?php

namespace ReCalendar;

class LocalConfig extends Config {
	protected function get_configuration() : array {
		return array_merge( parent::get_configuration(), [
			self::HABITS => [
				'Book',
				'Run',
				'Water',
				'Press Ups',
				'French'
				'Emails'
				'_________',
				'_________',
				'_________',
			],
			self::WEEKLY_TODOS => [
				'______________',
				'______________',
				'______________',
				'______________',
				'______________',
			],
			self::DAY_ITINERARY_ITEMS => [
				self::DAY_ITINERARY_COMMON => [
					[ 21, '', ],
				1 => [
					[ 1, '7:00', ],
					[ 1, '8:00', ],
					[ 1, '9:00', ],
					[ 1, '10:00', ],
					[ 1, '11:00', ],
					[ 1, '12:00', ],
					[ 1, '13:00', ],
					[ 1, '14:00', ],
					[ 1, '15:00', ],
					[ 1, '16:00', ],
					[ 1, '17:00', ],
					[ 1, '18:00', ],
					[ 9, 'Notes', ],
				],
				
				],
				self::DAY_ITINERARY_WEEK_RETRO => [
					[ 24, '' ],
				],
				self::DAY_ITINERARY_MONTH_OVERVIEW => [
					[ 3, 'Main goal', ],
					[ 16, 'Notes', ],
				],
			],
			self::SPECIAL_DATES => [
				'01-01' => [ 'New Years\'!' ],
				'19-02' => [ 'Anniversary #1'],
				'18-04' => [ 'Anniversary #2' ],
				'16-01' => [ 'Mummys Birthday' ],
				'30-01' => [ 'Daddys Birthday' ],
				'14-02' => [ 'Jennifers Birthday' ],
				'24-02' => [ 'Alices Birthday' ],
				'04-05' => [ 'James Birthday' ],
				'14-06' => [ 'Finns Birthday' ],
				'12-06' => [ 'Joshs Birthday' ],
				'13-03' => [ 'Ollies Birthday' ],
				'20-01' => [ 'Lukes Birthday' ],
				'27-03' => [ 'Mothers Day' ],
				'20-06' => [ 'Fathers Day' ],
				'25-12' => [ 'Christmas Day' ],
				'31-10' => [ 'Halloween' ],
				'26-12' => [ 'Boxing Day' ],
				'02-05' => [ 'Easter Monday ' ],
				'05-04' => [ 'Good Friday' ],
				'03-05' => [ 'Early May Bank Holiday' ],
				'31-05' => [ 'Spring Bank Holiday' ],
				'30-08' => [ 'Summer Bank Holiday' ],
				'31-10' => [ 'clocks go Back 1 hour' ],
				'28-03' => [ 'clocks gor Forward 1 hour' ],
				
			],
		] );
	}
}
