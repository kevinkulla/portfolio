<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Painting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
	{
	    return 'slug';
	}

	protected static function booted()
    {
        static::creating(function ($painting) {
            $painting->slug = Str::slug($painting->title, '-');
        });
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
