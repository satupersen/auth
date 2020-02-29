<?php

namespace Satupersen\Auth\Events;

use Satupersen\Http\Request;

class Lockout
{
    /**
     * The throttled request.
     *
     * @var \Satupersen\Http\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \Satupersen\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
