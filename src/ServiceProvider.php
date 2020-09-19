<?php
    namespace Genericmilk\Kaboom;

    class ServiceProvider extends \Illuminate\Support\ServiceProvider{

        public function boot()
        {
            $this->setupConfig(); // Load config
            $this->loadRoutesFrom(__DIR__.'/routes/web.php'); // Import routes
            $this->loadViewsFrom(__DIR__.'/views', 'kaboom'); // Import views

        }
        public function register()
        {
            // Import controllers
            //$this->app->make('Genericmilk\Kaboom\Kaboom');
            
        }

        protected function setupConfig(){

            $configPath = __DIR__ . '/../config/kaboom.php';
            $this->publishes([$configPath => $this->getConfigPath()], 'config');
    
        }

        protected function getConfigPath()
        {
            return config_path('kaboom.php');
        }

        protected function publishConfig($configPath)
        {
            $this->publishes([$configPath => config_path('kaboom.php')], 'config');
        }


    }