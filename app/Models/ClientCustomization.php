<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/ClientCustomization.php
class ClientCustomization extends Model
{
    // ... fillable, etc.

    protected $casts = [
        'text_content' => 'array',
        'image_urls' => 'array',
    ];
}