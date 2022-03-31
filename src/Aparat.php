<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\Facades\Http;

class Aparat
{

    public function getCategories()
    {
        $url = "https://www.aparat.com/etc/api/categories";
        $response = Http::get($url);
        return $response->json();
    }

    public function getProfile()
    {
        $url = "https://www.aparat.com/etc/api/profile/username/".config('aparat.username');
        $response = Http::get($url);
        return $response->json();
    }

    public function getVideos()
    {
        $url = "https://www.aparat.com/etc/api/videoByUser/username/".config('aparat.username')."/perpage/10";
        $response = Http::get($url);
        return $response->json();
    }

    public function sendVideo($title, $category, $videoFile, $tags, $description)
    {
        try{
            $users = file_get_contents("http://www.aparat.com/etc/api/login/luser/".config('aparat.luser')."/lpass/".config('aparat.lpass'));
            $users = json_decode($users);
            $users->login->type == 'error' ? dd($users->login->value)  : '';
            $ltoken = $users->login->ltoken;
            $formAction = file_get_contents("http://www.aparat.com/etc/api/upload%E2%80%8Bform%E2%80%8B/luser/".config('aparat.luser')."/ltoken/".$ltoken);
            $uploadform = json_decode($formAction);
            $formAction = $uploadform->uploadform->formAction;
        }catch(\Exception $e) {
            echo "Error: " . $e->getMessage() . " Line:  " . $e->getLine();
        }

        $document = new \CurlFile($videoFile, mime_content_type($videoFile), basename($videoFile));
        $file = array(
            'video' => $document,
            'frm-id' => $uploadform->uploadform->{'frm-id'},
            "data[title]" => $title,
            "data[category]" => $category,
            "data[tags]" => $tags,
            "data[comment]" => "yes",
            "data[descr]" => $description,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $formAction);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file);
        $result = curl_exec($ch);
        return json_decode($result, true);
    }
}
