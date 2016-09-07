<?php
use Xvideos\Entities\VideoVote;



/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 4/03/2016
 * Time: 06:29
 */
class VideoVoteTableSeeder extends BaseSeeder
{
    protected $total = 10;

    public function getModel()
    {
        return new VideoVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   =>  $this->getRandom('User')->id,
            'video_id'  =>  $this->getRandom('Video')->id
        ];
    }


}