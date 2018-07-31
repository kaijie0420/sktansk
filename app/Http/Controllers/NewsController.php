<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\News;

class NewsController extends Controller
{
	
	/*public function __construct()
    {
        $this->middleware('auth');
    }*/
	
	
	public function index(Request $request) {
		$news = News::all();
		
		foreach ($news as $new) {
			$new->content = mb_substr(strip_tags($new->content), 0, 100);
			$new->url = "/news/" . $new->name;
		}

		return view('news', ['news' => $news]);
	}
	
	public function getNewsContent($name) {
		$news = News::where('name', $name)
				    ->first();

		return view('news_details', ['news' => $news]);
	}
	

}
