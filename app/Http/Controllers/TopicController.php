<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Topics;

class TopicController extends Controller
{
	
	/*public function __construct()
    {
        $this->middleware('auth');
    }*/
	
	
	public function index(Request $request) {
		$topics = Topics::all();
		
		foreach ($topics as $topic) {
			$topic->content = mb_substr(strip_tags($topic->content), 0, 100);
			$topic->url = "/topic/" . $topic->name;
		}

		return view('topic', ['topics' => $topics]);
	}
	
	public function getTopicContent($name) {
		$topic = Topics::where('name', $name)
				       ->first();

		return view('topic_details', ['topic' => $topic]);
	}
	

}
