<?php

namespace App\Http\Livewire\Admin;

use App\Models\banner;
use Livewire\Component;

class Allbanner extends Component
{
    public $per_page;
    public $search;
    public $bannerId;
    public $editBannerName;
    public $editBannerImage;
    public $editBanners;
    public $status = false;

    public function edit($id){
        $this->editBanners = banner::find($id);
        $this->status = true;
        $this->bannerId = $id;
        $this->editBannerName = $this->editBanners->banner_name;
        $this->editBannerImage= $this->editBanners->banner;
    }

    public function render()
    {
        $banner=banner::all();
        return view('livewire.admin.allbanner',['banner'=>$banner])->extends('layouts.base');
    }
}
