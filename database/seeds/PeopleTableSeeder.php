<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'kaiji',
            'email' => 'kaiji@kaiji.com',
            'age' => 24
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'kano',
            'email' => 'kano@kano.com',
            'age' => 23
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'kanokaiji',
            'email' => 'kano@kaiji.com',
            'age' => 47
        ];

        DB::table('people')->insert($param);
    }
}
