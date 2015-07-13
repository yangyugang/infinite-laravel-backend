<?php namespace Infinite\Backend;

use Illuminate\Support\ServiceProvider;

/**
 *
 * User: YuGang Yang
 * Date: 7/13/15
 * Time: 11:58
 */
class InfiniteServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'infinite');

        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        $this->publishes([
            __DIR__ . '/../public' => public_path('packages/infinite/backend'),
        ], 'public');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}