<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'description',
        'services_list',
        'status',
        'image', // Image field
        'slug',
    ];

    // Cast the JSON field to an array
    protected $casts = [
        'services_list' => 'array',
    ];

     // Automatically generate a slug when creating a new service
     protected static function boot()
     {
         parent::boot();

         static::creating(function ($service) {
             $service->slug = Str::slug($service->service_name);
         });
     }
}
