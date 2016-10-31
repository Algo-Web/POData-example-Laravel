<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'Name' => 'J. R. R. Tolkien',
                'Partner_id' => 2,
                'Photo_id' => 1,
            ),
            1 => 
            array (
                'ID' => 2,
                'Name' => 'George R. R. Martin',
                'Partner_id' => 1,
                'Photo_id' => 2,
            ),
            2 => 
            array (
                'ID' => 3,
                'Name' => 'Sydney Newman',
                'Partner_id' => NULL,
                'Photo_id' => 3,
            ),
            3 => 
            array (
                'ID' => 4,
                'Name' => 'Terry Pratchet',
                'Partner_id' => NULL,
                'Photo_id' => 4,
            ),
        ));
        
        
    }
}
