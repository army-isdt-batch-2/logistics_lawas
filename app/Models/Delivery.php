<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table="delivery";
    protected $fillable=[
      'distribution_id',
      'transportation_id',
      'date_distributed',
      'status',
      'created_at',
      'updated_at'
    ];
}
