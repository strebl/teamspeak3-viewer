<?php

namespace Strebl\Providers;

use Strebl\Teamspeak\Teamspeak;
use Illuminate\Support\ServiceProvider;
use TeamSpeak3;

class TeamspeakServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTeamspeakFramework();
        $this->registerTeamspeak();
    }

    protected function registerTeamspeakFramework()
    {
        $this->app->singleton(TeamSpeak3::class, function ($app)
        {
            $server = env('TEAMSPEAK_SERVER');
            $username = env('TEAMSPEAK_SERVERQUERY_USERNAME');
            $password = env('TEAMSPEAK_SERVERQUERY_PASSWORD');
            $port = env('TEAMSPEAK_SERVERQUERY_PORT');

            return TeamSpeak3::factory('serverquery://' . $username . ':' . $password . '@' . $server . ':' . $port . '/');
        });

        $this->app->alias(TeamSpeak3::class, 'teamspeak.framework');
    }

    private function registerTeamspeak()
    {
        $this->app->singleton(Teamspeak::class, function ($app)
        {
            return new Teamspeak($app['teamspeak.framework']);
        });

        $this->app->alias(Teamspeak::class, 'teamspeak');
    }
}
