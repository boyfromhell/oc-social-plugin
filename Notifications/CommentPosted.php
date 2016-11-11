<?php namespace Autumn\Notifications;

use Autumn\Notifications\Models\Notification;

class CommentPosted extends Notification
{

    public static $type = 'comment_posted';

    public function render()
    {
        return 'this is a comment_posted notification';
    }

}