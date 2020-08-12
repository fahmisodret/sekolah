<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;
use App\Instansi;
use App\Category;
use App\Kegiatan;
use App\Page;
use App\Message;
use App\Http\Requests\Admin\Alumni\AlumniFrontCreateRequest;

class FrontController extends Controller
{
	public function index(){
		$data['slider'] = Slider::limit(3)->get();
		$data['instansi'] = Instansi::limit(6)->get();
		$data['category'] = Category::limit(4)->get();
		$data['kegiatan'] = Kegiatan::limit(4)->get();

		return view('front.pages.index', $data);
	}

	public function pages(Request $request){
		$slug = $request->pg;
		$data['pages'] = Page::paginate(5);
		$data['page'] = Page::where('slug', $slug)->first();

		return view('front.pages.pages', $data);
	}

	public function category(Request $request){
		if($request->has('pg')){
			$slug = $request->pg;
			$data['categories'] = Category::paginate(5);
			$data['category'] = Category::where('slug', $slug)->first();

			return view('front.pages.category', $data);
		}else{
			$data['categories'] = Category::paginate(5);
			return view('front.pages.uncategorized.index', $data);
		}
	}

    public function create_alumni(AlumniFrontCreateRequest $request)
    {
        Alumnus::create($request->getValidRequest());

        return redirect('front/pendaftaran-alumni')->with('flash_message', 'Alumnus added!');
    }

    public function send_message(MessageCreateRequest $request)
    {
        Message::create($request->getValidRequest());

        return redirect('front/hubungi-kami')->with('flash_message', 'Message added!');
    }
}
