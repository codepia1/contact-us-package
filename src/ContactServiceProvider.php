<?php

namespace Codepia\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
  public function boot(){
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/views','contact');
    $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    $this->publishes([
        __DIR__.'/config/contact.php' => config_path('contact.php'),
        __DIR__.'/views/' => resource_path('views/vendor/contact'), 
       
        
        $this->publishes([
          __DIR__.'/database/migrations/' => database_path('database/migrations')
      ], 'contact-migrations')
    ]);
  }
  public function register(){
    $this->mergeConfigFrom(
        __DIR__.'/config/contact.php', 'contact'
    );
  }
}