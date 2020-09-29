<?php


use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname'  =>  'Alexis blandon velez',
            'email'     =>  'ejemplo@ejemplo.com',
            'phone'     =>  3100000000,
            'birthdate' =>  '1970-02-02',
            'gender'    =>  'male',
            'address'   =>  'av kevin 30-30',
            'password'  =>  bcrypt('admin'),
            'role'      =>  'admin',
            'created_at'=>  now(),
        ]);

    }

}
