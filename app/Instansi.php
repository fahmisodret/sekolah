<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\UploadTrait;
use Storage;


class Instansi extends Model
{
    use UploadTrait;
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instansis';

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
    protected $fillable = ['title', 'image'];

    

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
    protected $imagePath = 'storage/upload/instansi';
    protected $resize = true;
    public $w = 350;
    public $h = 200;

    public function getImageUrlAttribute()
    {
        return Storage::url('upload/instansi/'.$this->image);
    }
}
