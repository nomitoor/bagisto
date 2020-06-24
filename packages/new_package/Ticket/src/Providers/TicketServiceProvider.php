<?php
namespace new_package\Ticket\Providers;

use Illuminate\Support\ServiceProvider;

/**
* HelloWorld service provider
*
* @author    Jane Doe <janedoe@gmail.com>
* @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
*/
class TicketServiceProvider extends ServiceProvider
{
   /**
   * Bootstrap services.
   *
   * @return void
   */
   public function boot()
   {
         include __DIR__ . '/../Http/routes.php';

         $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'ticket');
         
         $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'ticket');
         
         Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('ticket::ticket.layouts.style');
         });
   }

   /**
   * Register services.
   *
   * @return void
   */
   public function register()
   {

   }
}
