<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Embed\Embed;
use App\Post;
use App\PostMeta;
use App\PostTag;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postURL(Request $request)
    {
        $this->validate($request, [
          'url' => 'required',
          'g-recaptcha-response' => 'required|captcha',
      ]);

        $url = $request->input('url');
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            return redirect()->back()
                  ->withErrors(['url' => 'URL is not a valid!']);
        }

        try {
            // CURL
            $config = [
                'resolver' => [
                    'class' => 'Embed\\RequestResolvers\\Curl', // The default resolver used

                    'config' => [
                        CURLOPT_USERAGENT => $request->header('User-Agent'),
                    ],
                ],
            ];

            $info = Embed::create($url, $config);
            $user = \Auth::user();

            $post = new Post();
            $post->user_id = ($user != null) ? $user->id : 0;
            $post->title = $info->title;
            $post->body = $info->description;
            $post->shortlink = str_random(6);
            $post->type_id = 1;

            $post->save();
          
          //User URL input
            $postMeta = new PostMeta();
            $postMeta->post_id = $post->id;
            $postMeta->key = 'userURL';
            $postMeta->value = $url;
            $postMeta->save();

            $adapterData = [
                'title',
                'description',
                'url',
                'type',
                'tags',

                'image',
                'imageWidth',
                'imageHeight',
                'images',

                'code',
                'source',
                'width',
                'height',
                'aspectRatio',

                'authorName',
                'authorUrl',

                'providerIcon',
                'providerIcons',
                'providerName',
                'providerUrl',

                'publishedTime',
                'license',
                'linkedData',
            ];

            foreach ($adapterData as $name) {
            	if ($name == 'tags') {
            		$tags = $info->tags;
            		if (count($tags) > 0) {
            			foreach ($tags as $tag) {
            				$postTag = new PostTag();
            				$postTag->post_id = $post->id;
            				$postTag->user_id = ($user != null) ? $user->id : 0;
            				$postTag->tag = $tag;

            				$postTag->save();
            			}
            		} 
            	}elseif (is_array($info->$name)) {
            		$postMeta = new PostMeta();
            		$postMeta->post_id = $post->id;
            		$postMeta->key = $name;
            		$postMeta->value = json_encode($info->$name);
            		$postMeta->save();
            	} else {
            		$postMeta = new PostMeta();
            		$postMeta->post_id = $post->id;
            		$postMeta->key = $name;
            		$postMeta->value = $info->$name;
            		$postMeta->save();
            	}
            }
        } catch (\Exception $exception) {
            return redirect()->back()
                ->withErrors(['url' => 'URL is not a valid!']);
        }

        return redirect()->back()->with(['msg' => 'Success']);
    }
}
