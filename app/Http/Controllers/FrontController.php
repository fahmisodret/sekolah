<?php

namespace App\Http\Controllers;

use Services\TestService;
use Illuminate\Http\Request;
use App\Produk;
use App\Order;
use Services\OrderService;
use App\Http\Requests\OrderRequest;
use DB;

class FrontController extends Controller
{
	public function index(){
		$data['produk'] = Produk::all();
		return view('front.pages.index', $data);
	}

	public function order($code){
		$data['data'] = Produk::where('code', $code)->first();
		return view('front.pages.order', $data);
	}

	public function done(OrderRequest $request, OrderService $orderService, $code){
		$produk = Produk::where('code', $code)->first();
        $pid = $produk['id'];
        $total = $produk['price'];
        $last = (Produk::all()->last())?Produk::all()->last()->id + 1 : 1;
        $code = 'L'.date('y').date('m').str_pad($last, 4, '0', STR_PAD_LEFT);

        $request->merge(['produk_id' => $pid, 'total' => $total, 'code' => $code, 'qty' => 1]);
        $order = [];
        DB::beginTransaction();
        try 
    	{
	        $order = $orderService->store($request);
	        DB::commit();
	    } catch (\Exception $e) {
	        DB::rollback();
	        return redirect()->back();
	    }
		$data['data'] = $order;
		return view('front.pages.done', $data);
	}
}
