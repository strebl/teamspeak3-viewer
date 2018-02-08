<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Teamspeak\Teamspeak;
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
        $this->app->singleton(TeamSpeak3::class, function ($app) {
            $server = config('teamspeak.server');
            $username = config('teamspeak.username');
            $password = config('teamspeak.password');
            $port = config('teamspeak.port');

            return TeamSpeak3::factory('serverquery://'.$username.':'.$password.'@'.$server.':'.$port.'/');
        });

        $this->app->alias(TeamSpeak3::class, 'teamspeak.framework');
    }

    private function registerTeamspeak()
    {
        $this->app->singleton(Teamspeak::class, function ($app) {
            return new Teamspeak($app['teamspeak.framework']);
        });

        $this->app->alias(Teamspeak::class, 'teamspeak');
    }
}
