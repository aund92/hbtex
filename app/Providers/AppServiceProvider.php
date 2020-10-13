<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(255);
        Paginator::defaultView('vendor.pagination.bootstrap-4');
//        VerifyEmail::toMailUsing(function ($notifiable) {
//            dd($notifiable);
//            $verifyUrl = URL::temporarySignedRoute(
//                'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey(), 'hash'=> $notifiable->password]
//            );
//
//            return (new MailMessage())
//                ->subject('Email Xác Thực!')
//                ->greeting('Xin Chào ' . $notifiable->name)
//                ->line('Click vào button bên dưới để xác thực tài khoản của bạn')
//                ->action('Xác Thực', $verifyUrl);
////            return (new MailMessage())
////                ->subject('Email Xác Thực!')
////                ->line('')
////                ->markdown('emails.verify', ['url' => $verifyUrl]);
//        });
    }
}
