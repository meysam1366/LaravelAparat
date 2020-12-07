<?php

namespace meysammaghsoudi\LaravelAparat;

use Illuminate\Support\Facades\Http;

class Aparat
{

    protected $formAction;

    public function __construct()
    {
        $users = file_get_contents("http://www.aparat.com/etc/api/login/luser/".config('aparat.luser')."/lpass/".config('aparat.luser'));
        $users = json_decode($users);
        $ltoken = $users->login->ltoken;
        $formAction = file_get_contents("http://www.aparat.com/etc/api/upload%E2%80%8Bform%E2%80%8B/luser/musicgalaxyir/ltoken/".$ltoken);
        $uploadform = json_decode($formAction);
        $this->formAction = $uploadform->uploadform->formAction;
    }

    public function getProfile()
    {
        $url = "https://www.aparat.com/etc/api/profile/username/".config('aparat.username');
        $response = Http::get($url);
        return $response->body();
    }

    public function sendVideo($title, $videoFile, $tags, $description)
    {
        $document = new CurlFile($videoFile, mime_content_type($videoFile), basename($videoFile));
        $file = array(
            'video' => $document,
            'frm-id' => config('aparat.frm-id'),
            "data[title]" => $title,
            "data[category]" => 7,
            "data[tags]" => $tags,
            "data[comment]" => "yes",
            "data[descr]" => $description,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->formAction);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file);
        print_r(curl_exec($ch));
    }
}
