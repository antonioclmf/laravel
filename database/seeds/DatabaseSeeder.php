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
         $this->call(UsersTableSeeder::class);
    }
}
class UsersTableSeeder extends Seeder{

    public function run()
    {
       DB::Table('users')->delete();

        \App\User::create([
            'name'=>'Usuario Teste',
            'email'=> 'teste@teste.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}