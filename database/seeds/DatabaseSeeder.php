<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('questionlist')->truncate();
        DB::table('questionlist')->insert(
            array(
                array('id' => '1','questionTxt' => 'When you wake up at morning?','created_at' => '2018-02-14 00:00:00','updated_at' => '2018-02-14 00:00:00'),
                array('id' => '2','questionTxt' => 'What you eat at breakfast?','created_at' => '2018-02-14 00:00:00','updated_at' => '2018-02-14 00:00:00'),
                array('id' => '3','questionTxt' => 'What time you go to office?','created_at' => '2018-02-14 00:00:00','updated_at' => '2018-02-14 00:00:00'),
                array('id' => '4','questionTxt' => 'How you go to office?','created_at' => '2018-02-14 00:00:00','updated_at' => '2018-02-14 00:00:00')
            )
        );
        
        
        
        DB::table('questionOptions')->truncate();
        DB::table('questionOptions')->insert(
            array(
                array('id' => '1','questionListId' => '1','quesNumber' => '1','questionOptionsTxt' => 'Between 6:30 AM to 7:00 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '2','questionListId' => '1','quesNumber' => '2','questionOptionsTxt' => 'Between 7:30 AM to 8:00 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '3','questionListId' => '1','quesNumber' => '3','questionOptionsTxt' => 'Between 8:30 AM to 9:00 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '4','questionListId' => '1','quesNumber' => '4','questionOptionsTxt' => 'Between 9:30 AM to 10:00 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '5','questionListId' => '2','quesNumber' => '1','questionOptionsTxt' => 'Bread with egg','created_at' => NULL,'updated_at' => NULL),
                array('id' => '6','questionListId' => '2','quesNumber' => '2','questionOptionsTxt' => 'Bread with milk','created_at' => NULL,'updated_at' => NULL),
                array('id' => '7','questionListId' => '2','quesNumber' => '3','questionOptionsTxt' => 'Oat cereal','created_at' => NULL,'updated_at' => NULL),
                array('id' => '8','questionListId' => '2','quesNumber' => '4','questionOptionsTxt' => 'Baggle','created_at' => NULL,'updated_at' => NULL),
                
                array('id' => '9','questionListId' => '3','quesNumber' => '1','questionOptionsTxt' => 'Between 7:00 AM to 7:15 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '10','questionListId' => '3','quesNumber' => '2','questionOptionsTxt' => 'Between 7:15 AM to 7:30 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '11','questionListId' => '3','quesNumber' => '3','questionOptionsTxt' => 'Between 7:30 AM to 7:45 AM','created_at' => NULL,'updated_at' => NULL),
                array('id' => '12','questionListId' => '3','quesNumber' => '4','questionOptionsTxt' => 'Between 8:75 AM to 8:00 AM','created_at' => NULL,'updated_at' => NULL),
                
                array('id' => '13','questionListId' => '4','quesNumber' => '1','questionOptionsTxt' => 'By Bus','created_at' => NULL,'updated_at' => NULL),
                array('id' => '14','questionListId' => '4','quesNumber' => '2','questionOptionsTxt' => 'By Train','created_at' => NULL,'updated_at' => NULL),
                array('id' => '15','questionListId' => '4','quesNumber' => '3','questionOptionsTxt' => 'By Bick','created_at' => NULL,'updated_at' => NULL),
                array('id' => '16','questionListId' => '4','quesNumber' => '4','questionOptionsTxt' => 'By Car','created_at' => NULL,'updated_at' => NULL),
                
                
            )
        );
    }
}
