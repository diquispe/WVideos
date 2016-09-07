<?php
use Xvideos\Entities\Chica;

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/03/2016
 * Time: 05:19
 */
class ChicaTableSeeder extends BaseSeeder
{
    protected $total = 30;
    public function getModel()
    {
        return new Chica();
    }
    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('123'),
            'lastname' => $faker->lastName,
            'nickname' => $faker->name,
            'phone' => $faker->phoneNumber,
            //'image' => 'images/foto_chica.jpg',
            'resumen' => $faker->paragraph,
            'medidas' => '90-60-90',
            'atencion' => 'L-V',
            'horario' => '10 am - 10 pm',
            'edad' => $faker->windowsPlatformToken,

            'pais' => 'Peru',
            'ciudad' => $faker->city,
        ];

    }

}