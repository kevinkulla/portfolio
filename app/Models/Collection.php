<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Collection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
	{
		return 'slug';
	}

	protected static function booted()
    {
        static::creating(function ($collection) {
            $collection->slug = Str::slug($collection->title, '-');
        });
    }

}
