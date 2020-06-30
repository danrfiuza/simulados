<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BootstrapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::beginTransaction();
            $this->call(OrgaoSeeder::class);
            $this->call(BancaSeeder::class);
            $this->call(AssuntoSeeder::class);
            $this->call(QuestaoSeeder::class);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
