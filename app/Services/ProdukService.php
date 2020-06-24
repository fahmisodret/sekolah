<?php
namespace Services;
use App\Produk;
// use Storage;

class ProdukService
{	
	public function store($req)
	{
		$data = Produk::create([
			'code' => $req['code'],
			'name' => $req['name'],
			'price' => $req['price'],
			// 'image' => $imagename,
		]);
		return $data;
	}

	public function update($req, $id)
	{
        // $imagename = "produk.png";
        // if ($data->has('image')){
        //     $this->checkDir(false);
        //     $uploadPath = $this->uploadPath;
        //     $imagename = "prj-".str_replace('.', '', microtime(true)).".jpg";
        //     $path = Storage::putFileAs(
	       //      'public/upload/produk/',
	       //      $data->file('image'),
	       //      $imagename
	       //  );
        // }
		$data = Produk::find($id);
		// Storage::delete('/public/upload/produk/'.$data->image);
		$data->update([
			'name' => $req['name'],
			'price' => $req['price'],
			// 'image' => $imagename,
		]);
		return $data;
	}

	public function destroy($id)
	{
		$data = Produk::destroy($id);
		return $data;
	}


    /**
    * check directory and create
    **/
    private function checkDir($thumb = false){
        if(!Storage::exists('/public/upload/produk/')) {
            Storage::makeDirectory('/public/upload/produk/', 0775, true);
        }
        if($thumb){
            if(!Storage::exists('/public/upload/produk/thumb/')) {
                Storage::makeDirectory('/public/upload/produk/thumb/', 0775, true);
            }
        }
    }
}