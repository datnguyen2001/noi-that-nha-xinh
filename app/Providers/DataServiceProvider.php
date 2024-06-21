<?php

namespace App\Providers;

use App\Models\ArticleModel;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\ContactUsModel;
use App\Models\GeneralModel;
use App\Models\MenuMainModel;
use App\Models\NewModel;
use App\Models\ProjectModel;
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
        $project = ProjectModel::all();
        $list_new = NewModel::where('display',1)->orderBy('created_at','desc')->take(2)->get();
        $header = ProjectModel::all();
        foreach ($header as $headers){
            $headers->cate1 = CategoryModel::where('type',$headers->id)->where('parent_id',0)->get();
            foreach ($headers->cate1 as $cate2){
                $cate2->category = CategoryModel::where('parent_id',$cate2->id)->get();
            }
        }

        view()->share('bannerHome', $bannerHome);
        view()->share('support', $support);
        view()->share('setting', $setting);
        view()->share('contact_us', $contact_us);
        view()->share('project', $project);
        view()->share('list_new', $list_new);
        view()->share('header', $header);

    }
}
