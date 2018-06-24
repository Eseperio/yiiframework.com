<?php

namespace app\models\badges;

use app\components\forum\ForumAdapterInterface;
use app\models\Badge;
use app\models\UserBadge;
use Yii;

class Reputation1Badge extends Badge
{
    public $name = 'Good Reputation';
    public $description = 'Forum Reputation of +10';
    public $threshold = 10;
    public $min = 1;

    public function earned(UserBadge $badge)
    {
        $rep = $this->countReputations($badge->user, $this->min, $this->threshold);
        if ($rep['rating'] > 0 && !empty($rep['start'])) {
            $badge->create_time = $rep['start'];
            $requires = $this->threshold - $this->min + 1;
            $current = $rep['rating'] - $this->min + 1;
            $badge->progress = round($current / $requires * 100.0);
            if (!empty($rep['complete']))
                $badge->complete_time = $rep['complete'];
            return true;
        }
        return false;
    }

    protected function countReputations($user, $min, $threshold)
    {
        $rating = 0;
        $start = null;
        $complete = null;
        foreach ($this->getReputations($user) as $row) {
            $rating += (int)$row['rep_rating'];
            if ($rating > $min && $start === null)
                $start = $row['rep_date'];
            if ($rating >= $threshold) {
                $complete = $row['rep_date'];
                break;
            }
        }
        return array('rating' => $rating, 'start' => $start, 'complete' => $complete);
    }

    protected function getReputations($user)
    {
        /** @var ForumAdapterInterface $adapter */
        $adapter = Yii::$app->forumAdapter;
        return $adapter->getReputations($user);
    }
}

