<?php
namespace Services;
use App\Setting;
use Storage;
use Intervention\Image\Facades\Image;
class SettingService
{
	public function __construct(){
        $this->asset = Storage::url('upload/setting/');
        $this->uploadPath = storage_path("app/public/upload/setting/");
	}
	
	public function update($req, $id)
	{
        if (isset($req['image'])){
	        $this->checkDir(true);
			$setting = Setting::where('key', $req['key'])->first();
			Storage::delete('/public/upload/setting/'.$setting->value);
			$image = $this->upload($req['image']);
			$data = Setting::find($id)->update([
				'value' => $image
			]);
        }else{
			$data = Setting::find($id)->update([
				'value' => $req['value']
			]);
        }
		return $data;
	}

	public function get($key)
	{
		$data = Setting::where('key', $key)->first();
		return $data;
	}


    /**
    * check directory and create
    **/
    private function upload($image = false){
        $imagename = "setting-".str_replace('.', '', microtime(true)).'.'.$image->getClientOriginalExtension();
        $thumb = Image::make($image)->resize(NULL, 200, function ($constraint) {$constraint->aspectRatio();})->fit(200, 200);
        $thumb->save($this->uploadPath.'/thumb/'.$imagename);
        $image = Image::make($image)->resize(NULL, 700, function ($constraint) {$constraint->aspectRatio();})->fit(700, 700);
        $image->save($this->uploadPath.'/'.$imagename);
        return $imagename;
    }


    /**
    * check directory and create
    **/
    private function checkDir($thumb = false){
        if(!Storage::exists('/public/upload/setting/')) {
            Storage::makeDirectory('/public/upload/setting/', 0775, true);
        }
        if($thumb){
            if(!Storage::exists('/public/upload/setting/thumb/')) {
                Storage::makeDirectory('/public/upload/setting/thumb/', 0775, true);
            }
        }
    }
}