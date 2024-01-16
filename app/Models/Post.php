<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function snippet():Attribute  {
        return Attribute::get(function (){
            return substr($this->body, 0, 200);
        });
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function image() {
        return $this->hasOne(Image::class);
    }



//     public function user(){
//         return $this->belongsTo(User::class);
//     }
//     public function image(): Attribute
// {
//     return Attribute::make(
//         get: function ($image) {
//             if (!$image || parse_url($image, PHP_URL_SCHEME)) {
//                 return $image;
//             }
//         return Storage::url($image);
//     },set: function($image) {
//         if (!is_a($image, UploadedFile::class)) {
//             return $image;
//         }
//         return request()->file('image')->store('public');
//     }
//     );
// }

}
