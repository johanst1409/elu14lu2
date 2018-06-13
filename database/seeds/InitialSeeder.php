<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        	[
        		'name' => 'Nintendo',
        		'url_name' => 'nintendo',
        		'is_developer' => true,
        		'is_publisher' => true,
        		'is_manufacturer' => true,
        	],
        	[
        		'name' => 'Rare',
        		'url_name' => 'rare',
        		'is_developer' => true,
        		'is_publisher' => false,
        		'is_manufacturer' => false,
        	],
        	[
        		'name' => 'HAL Laboratory',
        		'url_name' => 'hal-laboratory',
        		'is_developer' => true,
        		'is_publisher' => false,
        		'is_manufacturer' => false,
        	],
        	[
        		'name' => 'Bethesda',
        		'url_name' => 'bethesda',
        		'is_developer' => true,
        		'is_publisher' => true,
        		'is_manufacturer' => false,
        	],
        	[
        		'name' => 'Microsoft',
        		'url_name' => 'microsoft',
        		'is_developer' => true,
        		'is_publisher' => true,
        		'is_manufacturer' => true,
        	]
        ]);

        DB::table('platforms')->insert([
        	[
        		'manufacturer_id' => 1,
        		'name' => 'Nintendo Entertainment System',
        		'url_name' => 'nintendo-entertainment-system',
        		'released_at' => Carbon::parse('01-09-1987'),
        	],
        	[
        		'manufacturer_id' => 1,
        		'name' => 'Super-Nintendo Entertainment System',
        		'url_name' => 'super-nintendo-entertainment-system',
        		'released_at' => Carbon::parse('11-04-1992'),
        	],
        	[
        		'manufacturer_id' => 5,
        		'name' => 'Personel Computer',
        		'url_name' => 'personel-computer',
        		'released_at' => Carbon::parse('12-08-1987'),
        	]
        ]);

        DB::table('genres')->insert([
        	['name' => '(2D) Platformer'],
        	['name' => '(3D) Platformer'],
        	['name' => 'Shooter'],
        	['name' => 'Fighting'],
        	['name' => 'Beat \'em up'],
        	['name' => 'Stealth'],
        	['name' => 'Survival'],
        	['name' => 'Rhythm'],
        	['name' => 'Action'],
        	['name' => 'Adventure'],
        	['name' => 'Role Playing Game'],
        	['name' => 'First Person'],
        	['name' => 'Third Person'],
        	['name' => 'Roguelike'],
        	['name' => 'Sandbox'],
        	['name' => 'Real-time strategy'],
        	['name' => 'Multiplayer Online Battle Arena'],
        	['name' => 'Turn Based Strategy'],
        	['name' => 'Sports'],
        	['name' => 'Racing'],
        	['name' => 'Multiplayer']
        ]);

        DB::table('games')->insert([
        	[
        		'developer_id' => 1,
        		'publisher_id' => 1,
        		'name' => 'Super Mario Bros.',
        		'url_name' => 'super-mario-bros',
        		'description' => 'lorem ipsum',
                'rating' => 100,
        		'released_at' => Carbon::parse('15-05-1987')
        	],
        	[
        		'developer_id' => 1,
        		'publisher_id' => 1,
        		'name' => 'Super Mario Bros. 2',
        		'url_name' => 'super-mario-bros-2',
        		'description' => 'lorem ipsum',
                'rating' => 65,
        		'released_at' => Carbon::parse('28-04-1989')
        	],
        	[
        		'developer_id' => 1,
        		'publisher_id' => 1,
        		'name' => 'Super Mario Bros. 3',
        		'url_name' => 'super-mario-bros-3',
        		'description' => 'lorem ipsum',
                'rating' => 95,
        		'released_at' => Carbon::parse('23-08-1991')
        	],
        	[
        		'developer_id' => 1,
        		'publisher_id' => 1,
        		'name' => 'Super Mario World',
        		'url_name' => 'super-mario-world',
        		'description' => 'lorem ipsum',
                'rating' => 100,
        		'released_at' => Carbon::parse('11-04-1992')
        	],
        ]);

        DB::table('game_platforms')->insert([
        	['game_id' => 1, 'platform_id' => 1],
        	['game_id' => 2, 'platform_id' => 1],
        	['game_id' => 3, 'platform_id' => 1],
        	['game_id' => 4, 'platform_id' => 2],
        ]);

        DB::table('game_genres')->insert([
        	['game_id' => 1, 'genre_id' => 1],
        	['game_id' => 2, 'genre_id' => 1],
        	['game_id' => 3, 'genre_id' => 1],
        	['game_id' => 4, 'genre_id' => 1],
        ]);
    }
}
