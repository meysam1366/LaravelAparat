<?php

namespace meysammaghsoudi\LaravelAparat\Http\Controllers;

use Illuminate\Routing\Controller;
use meysammaghsoudi\LaravelAparat\Aparat;
use Illuminate\Http\Request;

class AparatController extends Controller
{
    public function getProfile()
    {
        $aparat = new Aparat();
        return $aparat->getProfile();
    }

    public function showFormVideo()
    {
        $aparat = new Aparat();
        $categories = $aparat->getCategories();
        return view('vendor.aparat.showForm', compact('categories'));
    }

    public function sendVideo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'min:5',
            'video' => 'required'
        ]);

        $aparat = new Aparat();
        $title = $request->title;
        $category = $request->category;
        $tags = $request->tags;
        $description = $request->description;
        $dir = public_path();
        $video = $request->file('video');
        $fileName = time().'_'.$video->getClientOriginalName();
        $video->move($dir, $fileName);
        $result = $aparat->sendVideo($title, $category, $dir.'/'.$fileName, $tags, $description);
        $type = $result['uploadpost']['type'];
        $uid = $result['uploadpost']['uid'];
        $message = "ویدئو با موفقیت آپلود شد".PHP_EOL."<a href='https://www.aparat.com/v/".$uid."'>https://www.aparat.com/v/".$uid."</a>";
        $type == 'success' ? $request->session()->put('message', $message) : $request->session()->put('message', $result);
        return redirect(route('showFormVideo'));
    }
}
