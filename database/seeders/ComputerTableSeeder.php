<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('computers')->insert([
        'name' => 'computers1',
        'maker' => 'maker1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    DB::table('computers')->insert([
          'name' => 'computers2',
          'maker' => 'maker2',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('computers')->insert([
            'name' => 'computers3',
            'maker' => 'maker3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('computers')->insert([
              'name' => 'computers4',
              'maker' => 'maker4',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ]);
          DB::table('computers')->insert([
                'name' => 'computers5',
                'maker' => 'maker5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
