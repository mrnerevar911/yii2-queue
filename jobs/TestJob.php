<?php


namespace app\jobs;


use yii\base\BaseObject;
use yii\queue\Queue;

class TestJob extends BaseObject implements \yii\queue\JobInterface
{

    public $text;
    public $file;

    /**
     * @param Queue $queue which pushed and is handling the job
     * @return void|mixed result of the job execution
     */
    public function execute($queue)
    {
        file_put_contents($this->file, $this->text);
    }
}