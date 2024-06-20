<?php

namespace App\Providers;

use App\Models\ArticleModel;
use App\Models\BannerModel;
use App\Models\ContactUsModel;
use App\Models\GeneralModel;
use App\Models\MenuMainModel;
use App\Models\SeoModel;
use App\Models\SettingModel;
use App\Models\SocialModel;
use App\Models\SupportModel;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }



    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $bannerHome = BannerModel::where('location',1)->where('display',1)->take(2)->get();
        $support = SupportModel::all();
        $setting = SettingModel::first();
        $contact_us = ContactUsModel::first();

        view()->share('bannerHome', $bannerHome);
        view()->share('support', $support);
        view()->share('setting', $setting);
        view()->share('contact_us', $contact_us);


    }
}
