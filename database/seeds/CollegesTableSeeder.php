<?php

use Illuminate\Database\Seeder;
class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colleges = [
		  [
		    'name' => 'University of Notre Dame',
		    'city' => 'Notre Dame',
		    'state' => 'IN',
		    'zip' => '46556'
		  ],
		  [
		    'name' => 'University of Miami',
		    'city' => 'Coral Gables',
		    'state' => 'FL',
		    'zip' => '33124'
		  ],
		  [
		    'name' => 'University of Mississippi',
		    'city' => 'Oxford',
		    'state' => 'MS',
		    'zip' => '38677'
		  ],
		  [
		    'name' => 'Baylor University',
		    'city' => 'Waco',
		    'state' => 'TX',
		    'zip' => '76798'
		  ],
		  [
		    'name' => 'University of Maryland',
		    'city' => 'College Park',
		    'state' => 'MD',
		    'zip' => '20783'
		  ],
		  [
		    'name' => 'University of North Carolina at Chapel Hill',
		    'city' => 'Chapel Hill',
		    'state' => 'NC',
		    'zip' => '27599'
		  ],
		  [
		    'name' => 'The University of Arizona',
		    'city' => 'Tuscon',
		    'state' => 'AZ',
		    'zip' => '85721'
		  ],
		  [
		    'name' => 'Dartmouth College',
		    'city' => 'Hanover',
		    'state' => 'NH',
		    'zip' => '03755'
		  ],
		  [
		    'name' => 'Georgetown University',
		    'city' => 'Washington',
		    'state' => 'DC',
		    'zip' => '20057'
		  ],
		  [
		    'name' => 'University of Chicago',
		    'city' => 'Chicago',
		    'state' => 'IL',
		    'zip' => '60637'
		  ],
		  [
		    'name' => 'Michigan State University',
		    'city' => 'East Lansing',
		    'state' => 'MI',
		    'zip' => '48824'
		  ],
		  [
		    'name' => 'University of Georgia',
		    'city' => 'Athens',
		    'state' => 'GA',
		    'zip' => '30602'
		  ],
		  [
		    'name' => 'Vanderbilt University',
		    'city' => 'Nashville',
		    'state' => 'TN',
		    'zip' => '37240'
		  ],
		  [
		    'name' => 'Johns Hopkins University',
		    'city' => 'Baltimore',
		    'state' => 'MD',
		    'zip' => '21218'
		  ],
		  [
		    'name' => 'University of California, Berkeley',
		    'city' => 'Berkeley',
		    'state' => 'CA',
		    'zip' => '94720'
		  ],
		  [
		    'name' => 'University of Colorado at Boulder',
		    'city' => 'Boulder',
		    'state' => 'CO',
		    'zip' => '80309'
		  ],
		  [
		    'name' => 'Florida State University',
		    'city' => 'Tallahassee',
		    'state' => 'FL',
		    'zip' => '32306'
		  ],
		  [
		    'name' => 'University of Washington',
		    'city' => 'Seattle',
		    'state' => 'WA',
		    'zip' => '98195'
		  ],
		  [
		    'name' => 'University of Michigan',
		    'city' => 'Ann Arbor',
		    'state' => 'MI',
		    'zip' => '48109'
		  ],
		  [
		    'name' => 'The University of Texas at Austin',
		    'city' => 'Austin',
		    'state' => 'TX',
		    'zip' => '78712'
		  ],
		  [
		    'name' => 'Northwestern University',
		    'city' => 'Evanston',
		    'state' => 'IL',
		    'zip' => '60208'
		  ],
		  [
		    'name' => 'Cornell University',
		    'city' => 'Ithaca',
		    'state' => 'NY',
		    'zip' => '14853'
		  ],
		  [
		    'name' => 'Boston University',
		    'city' => 'Boston',
		    'state' => 'MA',
		    'zip' => '02215'
		  ],
		  [
		    'name' => 'Purdue University',
		    'city' => 'West Lafayette',
		    'state' => 'IN',
		    'zip' => '47907'
		  ],
		  [
		    'name' => 'New York University',
		    'city' => 'New York',
		    'state' => 'NY',
		    'zip' => '10012'
		  ],
		  [
		    'name' => 'Yale University',
		    'city' => 'New Haven',
		    'state' => 'CT',
		    'zip' => '06520'
		  ],
		  [
		    'name' => 'Texas A&M University',
		    'city' => 'College Station',
		    'state' => 'TX',
		    'zip' => '77843'
		  ],
		  [
		    'name' => 'Duke University',
		    'city' => 'Durham',
		    'state' => 'NC',
		    'zip' => '27708'
		  ],
		  [
		    'name' => 'Massachusetts Institute of Technology',
		    'city' => 'Cambridge',
		    'state' => 'MA',
		    'zip' => '02139'
		  ],
		  [
		    'name' => 'Stanford University',
		    'city' => 'Stanford',
		    'state' => 'CA',
		    'zip' => '94305'
		  ],
		  [
		    'name' => 'Harvard University',
		    'city' => 'Cambridge',
		    'state' => 'MA',
		    'zip' => '02138'
		  ],
		  [
		    'name' => 'University of Alabama',
		    'city' => 'Tuscaloosa',
		    'state' => 'AL',
		    'zip' => '35487'
		  ]
		];
		
		foreach ($colleges as $key  => $college) {
			DB::table('colleges')->insert([
	            'name' => $college['name'],
	            'city' => $college['city'],
	            'state' => $college['state'],
	            'zip' => $college['zip'],
	            'created_at' => date("Y-m-d H:i:s"),
	            'updated_at' => date("Y-m-d H:i:s")
        	]);
		}

    }
}
