<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function banner(){
        $banner=Banner::get();
        return view('backend.banner',compact('banner'));
    }

    function AddBanner(Request $request){
        $banner=new Banner;
        if($request->banner){
            $file = $request->file('banner');
            $fileName = time().rand(100000, 999999).'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/banner_image/');
            $file->move($destinationPath,$fileName);
            $addBanner['banner'] = $fileName;
        }

        $banner->banner_name=$request->banner_name;
        $banner->banner=$fileName;
        $banner->save();
        return view('backend.banner');
    }

    public function EditBanner($id){
        $banners = Banner::find($id);
        return response()->json([
            'status'=>200,
            'banners'=>$banners,
        ]);
    }
}
