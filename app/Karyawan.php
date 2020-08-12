<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\UploadTrait;
use Storage;
use Illuminate\Database\Eloquent\SoftDeletes;


class Karyawan extends Model
{
    use UploadTrait;
    use LogsActivity;
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'karyawans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'nik', 'jk', 'tempat_lahir', 'tgl_lahir', 'grade', 'image', 'is_show', 'message'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }

    // upload image trait
    protected $imagePath = 'storage/upload/karyawan';
    protected $resize = false;
    public $w = 350;
    public $h = 200;

    public function getImageUrlAttribute()
    {
        return Storage::url('upload/karyawan/'.$this->image);
    }
}
