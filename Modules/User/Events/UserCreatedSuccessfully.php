<?php

namespace Modules\User\Events;

use Illuminate\Queue\SerializesModels;

class UserCreatedSuccessfully
{
    use SerializesModels;

    public $user;

    /**
     * UserCreatedSuccessfully constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
