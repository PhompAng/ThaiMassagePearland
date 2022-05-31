<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            ['title' => 'Thai Traditional Massage', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Swedish Massage', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Sports Massage', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Reflexology', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Hot Stone Therapy', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Deep Tissue Massage', 'time' => '{"60":"75","90":"110"}', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
