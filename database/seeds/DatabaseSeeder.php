<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123'),
            'admin' => true
        ]);

        DB::table('brands')->insert([
        	[
            'name' => 'Fender',
            'alias' => 'fender',
            'img' => 'images/4.png'
            ],
        	[
            'name' => 'Gibson',
            'alias' => 'gibson',
            'img' => 'images/5.png'
            ],
        	[
            'name' => 'Ibanez',
            'alias' => 'ibanez',
            'img' => 'images/6.png'
            ],
        	[
            'name' => 'Epiphone',
            'alias' => 'epiphone',
            'img' => 'images/8.png'
            ],
        	[
            'name' => 'ESP',
            'alias' => 'esp',
            'img' => 'images/7.png'
            ],
        ]);

        DB::table('categories')->insert([
        	[
            'parent_id' => NULL,
            'name' => 'Solid body',
            'alias' => 'solid_body'
            ],
        	[
            'parent_id' => NULL,
            'name' => 'Hollow body',
            'alias' => "hollow_body"
            ],
        	[
            'parent_id' => NULL,
            'name' => 'Acoustic',
            'alias' => "acoustic"
            ],
        	[
            'parent_id' => NULL,
            'name' => 'Bass',
            'alias' => 'bass'],
        	[
            'parent_id' => NULL,
            'name' => 'Amps',
            'alias' => 'amps'],
            [
            'parent_id' => 1,
            'name' => 'Subcategory 1.1',
            'alias' => 'subcategory_1_1'
            ],
            [
            'parent_id' => 1,
            'name' => 'Subcategory 1.2',
            'alias' => 'subcategory_1_2'
            ],
            [
            'parent_id' => 3,
            'name' => 'Subcategory 3.1',
            'alias' => 'subcategory_3_1',
            ],
            [
            'parent_id' => 3,
            'name' => 'Subcategory 3.2',
            'alias' => 'subcategory_3_2',
            ],
        ]);

        DB::table('payments')->insert([
            ['name' => 'privat'],
            ['name' => 'webmoney'],
            ['name' => 'skrill']
            ]);

        DB::table('deliveries')->insert([
            ['name' => 'mail'],
            ['name' => 'courier'],
            ]);

        DB::table('products')->insert([
        	[
        	'name' => 'Fender Stratocaster',
            'alias' => 'Fender_Stratocaster',
            'price' => 2220.00,
        	'brand_id' => 1,
        	'rating' => 2.5,
            'color' => 'red',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[
        	'name' => 'Fender Telecaster',
        	'alias' => 'Fender_Telecaster',
            'price' => 114.00,
        	'brand_id' => 1,
        	'rating' => 2.5,
            'color' => 'red',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[
        	'name' => 'Gibson Les Paul',
        	'alias' => 'Gibson_Les_Paul',
            'price' => 1160.00,
        	'brand_id' => 1,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
            [
            'name' => 'Ibanez',
            'alias' => 'Ibanez',
            'price' => 1160.00,
            'brand_id' => 1,
            'rating' => 2.5,
            'color' => 'brown',
            'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
            'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
            'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            ],   
			[
        	'name' => 'Gibson ES335',
        	'alias' => 'Gibson_ES335',
            'price' => 4420.00,
        	'brand_id' => 2,
        	'rating' => 2.5,
            'color' => 'yellow',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	], 
			[
        	'name' => 'Gretsch G5420T',
        	'alias' => 'Gretsch_G5420T',
            'price' => 314.00,
        	'brand_id' => 2,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	], 
        	[  
        	'name' => 'Epiphone Dot 335',
        	'alias' => 'Epiphone_Dot_335',
            'price' => 860.00,
        	'brand_id' => 2,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
            [  
            'name' => 'Fender Coronado',
            'alias' => 'Fender_Coronado',
            'price' => 1250.00,
            'brand_id' => 2,
            'rating' => 2.5,
            'color' => 'brown',
            'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
            'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
            'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            ],
        	[ 
        	'name' => 'Takamine JC25CE',
        	'alias' => 'Takamine_JC25CE',
            'price' => 420.00,
        	'brand_id' => 3,
        	'rating' => 2.5,
            'color' => 'yellow',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[  
        	'name' => 'Martin DX1SAE',
        	'alias' => 'Martin_DX1SAE',
            'price' => 314.00,
        	'brand_id' => 3,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[
			'name' => 'Yamaha',
        	'alias' => 'Yamaha',
            'price' => 560.00,
        	'brand_id' => 3,
        	'rating' => 2.5,
            'color' => 'red',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[
			'name' => 'Rickenbacker 4003',
        	'alias' => 'Rickenbacker_4003',
            'price' => 324.00,
        	'brand_id' => 4,
        	'rating' => 2.5,
            'color' => 'red',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS."
        	],
        	[
			'name' => 'Fender Precision',
        	'alias' => 'Fender_Precision',
            'price' => 1560.00,
        	'brand_id' => 4,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
        	],
        	[
			'name' => 'Fender Jazz Bass',
        	'alias' => 'Fender_Jazz_Bass',
            'price' => 3120.00,
        	'brand_id' => 4,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
        	],
            [
            'name' => 'Ibanez GSR200',
            'alias' => 'Ibanez_GSR200',
            'price' => 770.00,
            'brand_id' => 4,
            'rating' => 2.5,
            'color' => 'brown',
            'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
            'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
            'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            ],  
        	[
			'name' => 'Vox',
        	'alias' => 'Vox',
            'price' => 14.00,
        	'brand_id' => 5,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
        	],
        	[
        	'name' => 'Blackstar HT-5R',
        	'alias' => 'Blackstar_HT-5R',
            'price' => 260.00,
        	'brand_id' => 5,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
        	],
        	[ 
        	'name' => 'Marshall MG Series MG15CFX',
        	'alias' => 'Marshall_MG_Series_MG15CFX',
            'price' => 320.00,
        	'brand_id' => 5,
        	'rating' => 2.5,
            'color' => 'brown',
        	'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
        	'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
        	'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
        	],
            [ 
            'name' => 'Fender 65 Princeton',
            'alias' => 'Fender_65_Princeton',
            'price' => 460.00,
            'brand_id' => 5,
            'rating' => 2.5,
            'color' => 'brown',
            'description' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS..",
            'short_description' => "Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.",
            'add_information' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            ],             	        	      	        	    	
        ]);

        DB::table('comments')->insert([
            [
            'parent_id' => NULL,
            'title' => 'Great',
            'name' => 'Petro',
            'img' => 'images/bowie.jpg',
            'email' => 'petro@mail.ru',
            'rating' => 5,
            'product_id' => 1,
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.'
            ],
            [
            'parent_id' => 1,
            'title' => 'Day',
            'name' => 'Vasyok',
            'img' => 'images/keith.jpg',
            'email' => 'petro@mail.ru',
            'rating' => 3,
            'product_id' => 1,
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.'
            ],
            [
            'parent_id' => NULL,
            'title' => 'Privet',
            'name' => 'Bojm',
            'img' => 'images/bowie.jpg',
            'email' => 'petro@mail.ru',
            'rating' => 5,
            'product_id' => 1,
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.'
            ],
            [
            'parent_id' => 3,
            'title' => 'I tebe',
            'name' => 'Pashtet',
            'img' => 'images/keith.jpg',
            'email' => 'petro@mail.ru',
            'rating' => 2,
            'product_id' => 1,
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.'
            ],
        ]);

        DB::table('category_product')->insert([
            [
            'category_id' => 1,
            'product_id' => 1
            ],
            [
            'category_id' => 1,
            'product_id' => 2
            ],
            [
            'category_id' => 1,
            'product_id' => 3
            ],
            [
            'category_id' => 1,
            'product_id' => 4
            ],
            [
            'category_id' => 2,
            'product_id' => 6
            ],
            [
            'category_id' => 2,
            'product_id' => 2
            ],
            [
            'category_id' => 3,
            'product_id' => 1
            ],
            [
            'category_id' => 3,
            'product_id' => 5
            ],
            [
            'category_id' => 4,
            'product_id' => 5
            ],
            [
            'category_id' => 4,
            'product_id' => 2
            ],
            [
            'category_id' => 4,
            'product_id' => 3
            ],
            [
            'category_id' => 4,
            'product_id' => 8
            ],
            [
            'category_id' => 5,
            'product_id' => 9
            ],
            [
            'category_id' => 5,
            'product_id' => 10
            ],
            [
            'category_id' => 5,
            'product_id' => 11
            ],
            [
            'category_id' => 5,
            'product_id' => 12
            ],
            [
            'category_id' => 6,
            'product_id' => 12
            ],
            [
            'category_id' => 6,
            'product_id' => 13
            ],
            [
            'category_id' => 7,
            'product_id' => 10
            ],
            [
            'category_id' => 7,
            'product_id' => 11
            ],
            [
            'category_id' => 8,
            'product_id' => 13
            ],
            [
            'category_id' => 8,
            'product_id' => 14
            ],
            [
            'category_id' => 8,
            'product_id' => 15
            ],
            [
            'category_id' => 8,
            'product_id' => 16
            ],
            [
            'category_id' => 9,
            'product_id' => 17
            ],
            [
            'category_id' => 9,
            'product_id' => 18
            ],
        ]);


        DB::table('product_images')->insert([
            [
            'product_id' => 1,
            'img' => "images/tp1.jpg"
            ],
            [
            'product_id' => 1,
            'img' => "images/tp1.jpg"
            ],
            [
            'product_id' => 1,
            'img' => "images/tp2.jpg"
            ],
            [
            'product_id' => 2,
            'img' => "images/tp2.jpg"
            ],
            [
            'product_id' => 2,
            'img' => "images/tp2.jpg"
            ],
            [
            'product_id' => 2,
            'img' => "images/tp3.jpg"
            ],
            [
            'product_id' => 3,
            'img' => "images/tp3.jpg"
            ],
            [
            'product_id' => 3,
            'img' => "images/tp3.jpg"
            ],
            [
            'product_id' => 3,
            'img' => "images/tp4.jpg"
            ],
            [
            'product_id' => 4,
            'img' => "images/tp4.jpg"
            ],
            [
            'product_id' => 4,
            'img' => "images/tp4.jpg"
            ],
            [
            'product_id' => 4,
            'img' => "images/tp5.jpg"
            ],
            [
            'product_id' => 5,
            'img' => "images/tp5.jpg"
            ],
            [
            'product_id' => 5,
            'img' => "images/tp5.jpg"
            ],
            [
            'product_id' => 5,
            'img' => "images/tp6.jpg"
            ],
            [
            'product_id' => 6,
            'img' => "images/tp6.jpg"
            ],
            [
            'product_id' => 6,
            'img' => "images/tp6.jpg"
            ],
            [
            'product_id' => 6,
            'img' => "images/tp7.jpg"
            ],
            [
            'product_id' => 7,
            'img' => "images/tp7.jpg"
            ],
            [
            'product_id' => 7,
            'img' => "images/tp7.jpg"
            ],
            [
            'product_id' => 7,
            'img' => "images/tp8.jpg"
            ],
            [
            'product_id' => 8,
            'img' => "images/tp8.jpg"
            ],
            [
            'product_id' => 8,
            'img' => "images/tp8.jpg"
            ],
            [
            'product_id' => 8,
            'img' => "images/tp9.jpg"
            ],
            [
            'product_id' => 9,
            'img' => "images/ap1.jpg"
            ],
            [
            'product_id' => 9,
            'img' => "images/ap1.jpg"
            ],
            [
            'product_id' => 9,
            'img' => "images/ap2.jpg"
            ],
            [
            'product_id' => 10,
            'img' => "images/ap2.jpg"
            ],
            [
            'product_id' => 10,
            'img' => "images/ap2.jpg"
            ],
            [
            'product_id' => 10,
            'img' => "images/ap3.jpg"
            ],
            [
            'product_id' => 11,
            'img' => "images/ap3.jpg"
            ],
            [
            'product_id' => 11,
            'img' => "images/ap3.jpg"
            ],
            [
            'product_id' => 11,
            'img' => "images/ap1.jpg"
            ],
            [
            'product_id' => 12,
            'img' => "images/tp9.jpg"
            ],
            [
            'product_id' => 12,
            'img' => "images/tp9.jpg"
            ],
            [
            'product_id' => 12,
            'img' => "images/tp10.jpg"
            ],
            [
            'product_id' => 13,
            'img' => "images/tp10.jpg"
            ],
            [
            'product_id' => 13,
            'img' => "images/tp10.jpg"
            ],
            [
            'product_id' => 13,
            'img' => "images/tp11.jpg"
            ],
            [
            'product_id' => 14,
            'img' => "images/tp11.jpg"
            ],
            [
            'product_id' => 14,
            'img' => "images/tp11.jpg"
            ],
            [
            'product_id' => 14,
            'img' => "images/tp12.jpg"
            ],
            [
            'product_id' => 15,
            'img' => "images/tp12.jpg"
            ],
            [
            'product_id' => 15,
            'img' => "images/tp12.jpg"
            ],
            [
            'product_id' => 15,
            'img' => "images/tp13.jpg"
            ],
            [
            'product_id' => 16,
            'img' => "images/tp13.jpg"
            ],
            [
            'product_id' => 16,
            'img' => "images/tp13.jpg"
            ],
            [
            'product_id' => 16,
            'img' => "images/tp14.jpg"
            ],
            [
            'product_id' => 17,
            'img' => "images/tp14.jpg"
            ],
            [
            'product_id' => 17,
            'img' => "images/tp14.jpg"
            ],
            [
            'product_id' => 17,
            'img' => "images/tp15.jpg"
            ],
            [
            'product_id' => 18,
            'img' => "images/tp15.jpg"
            ],
            [
            'product_id' => 18,
            'img' => "images/tp15.jpg"
            ],
            [
            'product_id' => 18,
            'img' => "images/tp16.jpg"
            ],
            [
            'product_id' => 19,
            'img' => "images/tp16.jpg"
            ],
            [
            'product_id' => 19,
            'img' => "images/tp16.jpg"
            ],
            [
            'product_id' => 19,
            'img' => "images/tp15.jpg"
            ],
        ]);
    }
}
