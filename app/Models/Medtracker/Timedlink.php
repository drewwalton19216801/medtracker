<?php

namespace App\Models\Medtracker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timedlink extends Model
{
    use HasFactory;

    protected $fillable = ['link_id', 'expires_at', 'last_clicked_at', 'clicks'];

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}