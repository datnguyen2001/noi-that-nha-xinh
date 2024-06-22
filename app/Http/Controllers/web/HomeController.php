<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\HeaderModel;
use App\Models\NewModel;
use App\Models\PostCollectionModel;
use App\Models\PostProjectModel;
use App\Models\ProductModel;
use App\Models\ProjectModel;
use App\Models\StoreIntroduceModel;
use App\Models\SupportModel;
use App\Models\VideoModel;

class HomeController extends Controller
{
    public function home()
    {
        $introduce = StoreIntroduceModel::first();
        $product_sale = ProductModel::where('display',1)->where('is_sale',1)->orderBy('created_at','desc')->get();
        $header = HeaderModel::all();
        foreach ($header as $headers){
            $categorys = CategoryModel::where('type',$headers->id)->where('parent_id',0)->get();
            $headers->category = $categorys;
            $category_id = CategoryModel::where('type',$headers->id)->pluck('id');
            $headers->product = ProductModel::where('display',1)->whereIn('category_id',$category_id)->orderBy('created_at','desc')->take(6)->get();
        }
        $project_category = ProjectModel::get();
        if (!empty($project_category) && isset($project_category[0])) {
            $post_project = PostProjectModel::where('project_id',$project_category[0]->id)->where('display',1)->orderBy('created_at','desc')->take(8)->get();
            $post_project_2 = PostProjectModel::where('project_id',$project_category[1]->id)->where('display',1)->orderBy('created_at','desc')->take(8)->get();
        } else {
            $post_project = collect();
            $post_project_2 = collect();
        }
        $video = VideoModel::where('display',1)->orderBy('created_at','desc')->take(6)->get();
        $comment = CommentModel::where('display',1)->orderBy('created_at','desc')->take(6)->get();
        $collection = PostCollectionModel::where('display',1)->orderBy('created_at','desc')->take(8)->get();

        return view('web.home.index',compact('introduce','product_sale', 'post_project','project_category','post_project_2','video','comment','collection','header'));
    }
    public function hotSale(){
        $product_sale = ProductModel::where('is_sale',1)->where('display',1)->get();
        $banner_sale = BannerModel::where('location',2)->where('display',1)->first();

        return view('web.hot-sale.index',compact('product_sale','banner_sale'));
    }
    public function cameraVideo() {
        return view('web.camera-video.index');
    }
    public function contact() {
        return view('web.contact.index');
    }
    public function introduction()
    {
        $video_sp = VideoModel::where('selection',2)->where('display',1)->orderBy('created_at','desc')->get();
        $video_project = VideoModel::where('selection',1)->where('display',1)->orderBy('created_at','desc')->get();
        $banner_video = BannerModel::where('location',6)->where('display',1)->first();
        $introduce = StoreIntroduceModel::first();
        return view('web.introduction.index',compact('video_sp','video_project','banner_video','introduce'));
    }
    public function tinTuc()
    {
        $new = NewModel::where('type',2)->where('display',1)->get();
        $promotion = NewModel::where('type',1)->where('display',1)->get();

        return view ('web.tin-tuc.index',compact('new','promotion'));
    }
    public function tinTucKhuyenMai()
    {
        $promotion = NewModel::where('type',1)->where('display',1)->get();
        return view('web.khuyen-mai-tin-tuc.khuyen-mai', compact('promotion'));
    }
    public function tinTucTinTUc()
    {
        $new = NewModel::where('type',2)->where('display',1)->get();
        return view('web.khuyen-mai-tin-tuc.tin-tuc', compact('new'));
    }
    public function phongCachNoiThat()
    {
        return view('web.phong-cach-noi-that.index');
    }
    public function productDetails()
    {
        return view('web.product-details.index');
    }
    public function khuyenMaiDetails($slug)
    {
        $news = NewModel::where('slug', $slug)->first();
        return view('web.khuyen-mai-details.index', compact('news'));
    }
    public function supportSlug($slug)
    {
        $supportDetails = SupportModel::where('slug', $slug)->firstOrFail();

        return view('web.support-customer.index', compact('supportDetails'));
    }
    public function gioiThieu()
    {
        $introduce = StoreIntroduceModel::first();
        return view('web.home.partials.gioi-thieu', compact('introduce'));
    }
}
