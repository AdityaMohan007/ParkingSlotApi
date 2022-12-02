<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function customer() {
        return $this->belongsTo(Customer::class)->withDefault();
    }
    public function slot() {
        return $this->belongsTo(Slot::class)->withDefault();
    }
}
