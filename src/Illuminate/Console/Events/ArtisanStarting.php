<?php

namespace Illuminate\Console\Events;

use Illuminate\Console\Application;

class ArtisanStarting
{
    /**
     * The Artisan application instance.
     *
     * @var \Illuminate\Console\Application
     */
    public Application $artisan;

    /**
     * Create a new event instance.
     *
     * @param \Illuminate\Console\Application $artisan
     * @return void
     */
    public function __construct(Application $artisan)
    {
        $this->artisan = $artisan;
    }
}
