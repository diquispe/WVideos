<?php
use Xvideos\Entities\Video;

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/03/2016
 * Time: 05:19
 */
class VideoTableSeeder extends BaseSeeder
{
    protected $total = 10;
    public function getModel()
    {
        return new Video();
    }
    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['almacenado', 'publicado', 'revisado']),
            'url'   => 'http://www.google.com',
            'user_id' => $this->getRandom('User')->id,
            'category_id' => $this->getRandom('Category')->id,
            'id_video' => 19211465,
            'descripcion' => 'lhf  gojshfgkjshg khgkfshgshggsf',
            'duracion' => '24 min',
            'publicado' => true,
            'revisado' => true,
            'imagen1' => 'imagen.jpg',
            'imagen2' => 'imagen.jpg',
            'imagen3' => 'imagen.jpg',
            'imagen_principal' => 'imagen.jpg',




        ];

    }
}