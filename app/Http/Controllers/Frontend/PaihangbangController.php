<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaihangbangController extends Controller
{
    public function Paihangbang(Request $request,$path='',$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        $cnewslists=Archive::take(8)->latest()->get();
        $cid=preg_replace('/\/page\/[0-9]+/','',$path);
        $pagelists=Brandarticle::orderBy('id','desc')->distinct()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $topbrands=Brandarticle::take(5)->orderBy('click','desc')->get();
        $hotbrands=Brandarticle::where('mid','1')->where('flags','like','%c%')->latest()->take(8)->orderBy('id','desc')->get();
        return view('frontend.brands',compact('thistypeinfo','topbrandnavs','pagelists','topbrands','flashlingshibrands','cnewslists','cbrands','hotbrands'));

    }
}
