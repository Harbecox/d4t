<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\OrderStateChanged' => [
            'App\Listeners\OrderStateChangedListener'
        ],
        'App\Events\UserReferred' => [
            'D4T\Admin\Referrals\Listeners\RewardUser',
        ],
        'App\Events\PaymentTransactionEvent' => [
            'App\Listeners\PaymentTransactionListener',
        ],

        'Illuminate\Mail\Events\MessageSent' => [
            'App\Listeners\LogSentMailListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {

        parent::boot();
    }
}
