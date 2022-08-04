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

    function Update(Request $request){
        // $data= $request ->all();
        $id=$request->banner_id;
        $getbanner = banner::find($id);
        if($request->banner){
            //To remove previous file...
            $destinationPath = public_path('uploads/banner_image/');
            if(file_exists($destinationPath.$getbanner->banner_image)){
                if($getbanner->banner_image != ''){
                    unlink($destinationPath.$getbanner->banner_image);
                }
            }

            $file = $request->file('banner');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath,$fileName);
            // $data['banner'] = $fileName;
        }

        $getbanner->banner_name = $request->banner_name;
        $getbanner->banner = $fileName;
        $getbanner->Update();
        return redirect(route('admin.banner'))->with('message','Successfully Banner Updated');

        // if($getbanner->update($data)){
        //     return redirect(route('admin.banner'))->with('message','Successfully Banner Updated');
        // }else{
        //     return redirect()->back()->with('error','Error !! Update Failed');;
        // }

    }
}
