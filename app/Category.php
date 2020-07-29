<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\UploadTrait;
use Storage;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use UploadTrait;
    use LogsActivity;
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['title', 'slug', 'image', 'content'];

    

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

    upload image trait
    protected $imagePath = 'storage/upload/category';
    protected $resize = true;
    public $w = 350;
    public $h = 200;

    public function getImageUrlAttribute()
    {
        return Storage::url('upload/category/'.$this->image);
    }
}
