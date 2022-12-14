<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class Post
{
    public static function all ()
    { 
        $files  = File::files(resource_path("posts/"));

        // Multiple lines in a function 
        return array_map(function ($file) {
            return $file->getContents();
        }, $files);

        //Lambda function single line return statement return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        base_path();
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
