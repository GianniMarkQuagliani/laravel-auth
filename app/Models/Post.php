<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string);
        $original_slug = $slug;

        $exists = Post::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Post::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}
