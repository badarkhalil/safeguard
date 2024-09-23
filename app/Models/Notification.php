<?php

namespace App\Models;

use App\Traits\Notifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory,Notifier;
    protected $guarded = [""];
    protected $table = "notifications";
}
