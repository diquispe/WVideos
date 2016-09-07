<?php
use Xvideos\Entities\VideoComment;


/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/03/2016
 * Time: 21:03
 */
class VideoCommentTableSeeder extends BaseSeeder
{

    protected $total = 100;

    public function getModel()
    {
        return new VideoComment();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   =>  $this->getRandom('User')->id,
            'video_id'  =>  $this->getRandom('Video')->id,
            'comment'   =>  $faker->paragraph(),
            'subject'   =>  $faker->sentence(),
        ];
    }

}