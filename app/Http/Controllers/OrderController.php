<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Services\OrderService;
use App\Http\Requests\OrderRequest;
use DataTables;
use DB;

class OrderController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = Order::with('produk')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                        $btn[] = '<a href="'.route("admin.order.edit", $row->id).'" class="btn btn-warning btn-sm">Ubah</a>';
                        $btn[] = '<a href="'.route("admin.order.destroy", $row->id).'" class="btn btn-danger btn-sm">Hapus</a>';
                        return implode(' ', $btn);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.order.index');
    }

    public function edit($id){
        $data['data'] = Order::find($id);
        return view('admin.order.edit', $data);
    }

    public function update(OrderRequest $request, OrderService $orderService, $id){
        DB::beginTransaction();
        try 
        {
            $data = $orderService->update($request, $id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->back();
    }

    public function destroy(Request $request, OrderService $orderService, $id){
        $data = $orderService->destroy($id);
        return redirect()->back();
    }
}
