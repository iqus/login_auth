<?php
//file: app/database/seeds/DatabaseSeeder.php
class DatabaseSeeder extends Seeder {
 
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
Eloquent::unguard();
$this->call('UserTableSeeder');
}
 
}
 
