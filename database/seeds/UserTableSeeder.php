<?php
use Faker\Generator;
use Xvideos\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder


{
    public function getModel()
    {
        return new User();
    }
    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'level' => $faker->randomElement(['2', '3']),
            'email' => $faker->email,
            'password' => bcrypt('123')
        ];
    }


    public function run()
    {
        $this->createAdmin();
        //$this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Diego Quispe',
            'level' => 1,
            'email' => 'diquispe@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $this->create([
            'name' => 'Admin Xvideos Escorts',
            'level' => 1,
            'email' => 'anegociar@hotmail.com',
            'password' => bcrypt('xvideoswebadmin38744'),
        ]);


    }

}
