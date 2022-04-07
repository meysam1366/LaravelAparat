```
package for work with web service aparat

```

# How install package?
composer require meysammaghsoudi/aparat
<br>
php artisan vendor:publish

# Requirement*
composer require guzzlehttp/guzzle

# Important
* set luser and lpass and username aparat on file aparat config
* use lpass with sha1(md5(lpass))

# Features

<ul>
    <li>Get Profile</li>
    <li>Get Videos</li>
    <li>Upload Video</li>
</ul>

# Use Routes

<ul>
    <li>/aparat/videos</li>
    <li>/aparat/getProfile</li>
    <li>/aparat/sendVideo</li>
</ul>

or use of methods:

<ul>
    <li>getVideos</li>
    <li>getProfile</li>
    <li>sendVideo</li>
</ul>

# Example
* use meysammaghsoudi\LaravelAparat\Aparat;
* $aprat = new Aparat();
* $aprat->getVideos()
