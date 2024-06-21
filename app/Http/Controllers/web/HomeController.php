<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AdvertisementModel;
use App\Models\AdvertisementProductModel;
use App\Models\AlbumModel;
use App\Models\BannerModel;
use App\Models\Category;
use App\Models\CategoryModel;
use App\Models\CollectionImageModel;
use App\Models\CollectionModel;
use App\Models\CollectionProductModel;
use App\Models\CommentModel;
use App\Models\ContactUsModel;
use App\Models\FooterBlog;
use App\Models\NewModel;
use App\Models\PostCollectionModel;
use App\Models\PostProjectModel;
use App\Models\PostsModel;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductInterestModel;
use App\Models\ProductModel;
use App\Models\ProjectImageModel;
use App\Models\ProjectModel;
use App\Models\ReviewFeedbackModel;
use App\Models\Searches;
use App\Models\ReviewImageModel;
use App\Models\ReviewModel;
use App\Models\StoreIntroduceModel;
use App\Models\StylingImageModel;
use App\Models\StylingModel;
use App\Models\StylingProductModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home()
    {
        $introduce = StoreIntroduceModel::first();
        $product_sale = ProductModel::where('display',1)->where('is_sale',1)->orderBy('created_at','desc')->get();
        $category1 = CategoryModel::where('type',1)->where('parent_id',0)->get();
        $category_id1 = $category1->pluck('id');
        $product_cate1 = ProductModel::where('display',1)->whereIn('category_id',$category_id1)->orderBy('created_at','desc')->take(6)->get();
        $category2 = CategoryModel::where('type',2)->where('parent_id',0)->get();
        $category_id2 = $category1->pluck('id');
        $product_cate2 = ProductModel::where('display',1)->whereIn('category_id',$category_id2)->orderBy('created_at','desc')->take(6)->get();
        $project_category = ProjectModel::get();
        $post_project = PostProjectModel::where('project_id',$project_category[0]->id)->where('display',1)->orderBy('created_at','desc')->take(8)->get();
        $post_project_2 = PostProjectModel::where('project_id',$project_category[1]->id)->where('display',1)->orderBy('created_at','desc')->take(8)->get();
        $video = VideoModel::where('display',1)->orderBy('created_at','desc')->take(6)->get();
        $comment = CommentModel::where('display',1)->orderBy('created_at','desc')->take(6)->get();
        $collection = PostCollectionModel::where('display',1)->orderBy('created_at','desc')->take(8)->get();

        return view('web.home.index',compact('introduce','product_sale','category1','product_cate1','category2','product_cate2',
        'post_project','project_category','post_project_2','video','comment','collection'));
    }
    public function hotSale(){
        return view('web.hot-sale.index');
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

        return view('web.introduction.index',compact('video_sp','video_project'));
    }
    public function tinTuc()
    {
        $new = NewModel::where('type',2)->where('display',1)->get();
        $promotion = NewModel::where('type',1)->where('display',1)->get();

        return view ('web.tin-tuc.index',compact('new','promotion'));
    }
    public function phongCachNoiThat()
    {
        return view('web.phong-cach-noi-that.index');
    }
}
