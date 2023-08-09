<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeFormation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert([
            ['name'=> 'Laravel'] ,
            ['name'=> 'Synfony'] ,
            ['name'=> 'Python'] ,
            ['name'=> 'Vue JS'] ,
            ['name'=> 'React Js'] ,
        ]);
    }
}
