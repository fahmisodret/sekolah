<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Services\ProdukService;
use App\Http\Requests\ProdukRequest;
use DataTables;
use DB;

class ProdukController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = Produk::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                        $btn[] = '<a href="'.route("admin.produk.edit", $row->id).'" class="btn btn-warning btn-sm">Ubah</a>';
                        $btn[] = '<a href="'.route("admin.produk.destroy", $row->id).'" class="btn btn-danger btn-sm">Hapus</a>';
                        return implode(' ', $btn);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.produk.index');
    }

    public function create(){
        return view('admin.produk.create');
    }

    public function store(ProdukRequest $request, ProdukService $produkService){
        $last = (Produk::all()->last())?Produk::all()->last()->id + 1 : 1;
        $code = 'L'.date('y').date('m').str_pad($last, 4, '0', STR_PAD_LEFT);
        $request->merge(['code' => $code]);
        DB::beginTransaction();
        try 
        {
            $produkService->store($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->back();
    }

    public function edit($id){
        $data['data'] = Produk::find($id);
        return view('admin.produk.edit', $data);
    }

    public function update(ProdukRequest $request, ProdukService $produkService, $id){
        DB::beginTransaction();
        try 
        {
            $data = $produkService->update($request, $id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->back();
    }

    public function destroy(Request $request, ProdukService $produkService, $id){
        $data = $produkService->destroy($id);
        return redirect()->back();
    }
}
