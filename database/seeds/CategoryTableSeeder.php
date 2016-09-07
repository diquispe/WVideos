<?php
use Xvideos\Entities\Category;



/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/03/2016
 * Time: 06:29
 */
class CategoryTableSeeder extends BaseSeeder
{
    protected $total = 10;

    public function getModel()
    {
        return new Category();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'name'      =>  $faker->safeColorName,
            //'imagen'    =>  'http://localhost:8000/images/imagen.jpg',
        ];
    }


}