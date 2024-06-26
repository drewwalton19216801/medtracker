<?php

namespace App\Models\Medtracker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'dosage', 'frequency', 'prescriber_id'];

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class);
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
