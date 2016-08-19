<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //       // CURL
//             $config = [
//                 'resolver' => [
//                     'class' => 'Embed\\RequestResolvers\\Curl', // The default resolver used

//                     'config' => [
//                         CURLOPT_USERAGENT => $request->header('User-Agent'),
//                         CURLOPT_HTTPHEADER  => array('Pragma: no-cache', 'Accept-Encoding: gflate, sdch', 'Accept-Language: en-US,en;q=0.8,vi;q=0.6', 'Upgrade-Insecure-Requests: 1', 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', 'Cache-Control: no-cache', 'Connection: keep-alive')
//                     ],
//                 ],
//             ];

//             $info = \Embed\Embed::create('http://giphhy.com/never-is-too-late/', $config);
//       var_dump($info);
//       exit();

        $posts = Post::with('meta')->orderBy('id', 'DESC')->paginate(10);

        return view('index', compact('posts'));
    }
}
