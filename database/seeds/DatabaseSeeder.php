<?php

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //https://styde.net/leccion-uso-de-seeders-para-vaciar-tablas-que-tengan-restricciones-de-llaves-foraneas/
    public function run()
    {
        $this->truncateTables(array(
            'users',
            'categories',
            'videos',
            'chicas',
            'video_votes',
            'video_comments',
            'password_resets'
        ));

        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(ChicaTableSeeder::class);
        $this->call(VideoVoteTableSeeder::class);
        $this->call(VideoCommentTableSeeder::class);



    }

    private function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);

        $tables = array('users');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        //vacia la tabla 'users' antes de volver a llenarla con el seeder
        $this->checkForeignKeys(true);
    }

    private function checkForeignKeys($check)
    {
        $check = $check ? '1': '0';
        DB::statement("SET FOREIGN_KEY_CHECKS = $check");
    }
}
