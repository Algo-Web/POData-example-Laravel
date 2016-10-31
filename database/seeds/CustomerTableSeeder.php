<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer')->delete();
        
        \DB::table('customer')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'Name' => 'Bilbo Baggins',
                'staff_id' => 1,
                'PhotoID' => 5,
            ),
            1 => 
            array (
                'ID' => 2,
                'Name' => 'Óin',
                'staff_id' => 1,
                'PhotoID' => 6,
            ),
            2 => 
            array (
                'ID' => 3,
                'Name' => 'Azaghâl',
                'staff_id' => 1,
                'PhotoID' => 7,
            ),
            3 => 
            array (
                'ID' => 4,
                'Name' => 'Gimli',
                'staff_id' => 1,
                'PhotoID' => 8,
            ),
            4 => 
            array (
                'ID' => 5,
                'Name' => 'Catelyn Stark',
                'staff_id' => 2,
                'PhotoID' => 9,
            ),
            5 => 
            array (
                'ID' => 6,
                'Name' => 'Ygritte',
                'staff_id' => 2,
                'PhotoID' => 10,
            ),
            6 => 
            array (
                'ID' => 7,
                'Name' => 'Melisandre',
                'staff_id' => 2,
                'PhotoID' => 11,
            ),
            7 => 
            array (
                'ID' => 8,
                'Name' => 'The Doctor',
                'staff_id' => 3,
                'PhotoID' => 12,
            ),
            8 => 
            array (
                'ID' => 9,
                'Name' => 'Susan Foreman',
                'staff_id' => 3,
                'PhotoID' => 13,
            ),
            9 => 
            array (
                'ID' => 10,
                'Name' => 'Death',
                'staff_id' => 4,
                'PhotoID' => 14,
            ),
            10 => 
            array (
                'ID' => 11,
                'Name' => 'The Hogfather',
                'staff_id' => 4,
                'PhotoID' => 15,
            ),
            11 => 
            array (
                'ID' => 12,
                'Name' => 'Moist von Lipwig',
                'staff_id' => 4,
                'PhotoID' => 16,
            ),
        ));
        
        
    }
}
