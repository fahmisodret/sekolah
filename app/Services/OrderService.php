<?php
namespace Services;
use App\Order;
// use Storage;

class OrderService
{	
	public function store($req)
	{
		$data = Order::create([
			'code' => $req['code'],
			'produk_id' => $req['produk_id'],
			'qty' => $req['qty'],
			'total' => $req['total'],
			'name' => $req['name'],
			'phone' => $req['phone'],
			'address' => $req['address'],
		]);
		return $data;
	}

	public function update($req, $id)
	{
		$data = Order::find($id);
		$data->update([
			'name' => $req['name'],
			'phone' => $req['phone'],
			'address' => $req['address'],
		]);
		return $data;
	}

	public function destroy($id)
	{
		$data = Order::destroy($id);
		return $data;
	}
}