<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
// use App\Traits\UploadTrait;
// use Storage;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alumnus extends Model
{
    // use UploadTrait;
    use LogsActivity;
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alumnis';

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
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'thn_lulus', 'nis', 'alamat', 'email', 'telepon', 'phone', 'image'];

    

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
    protected $imagePath = 'storage/upload/alumni';
    protected $resize = false;
    public $w = 350;
    public $h = 200;

    public function getImageUrlAttribute()
    {
        return Storage::url('upload/alumni/'.$this->image);
    }
}
