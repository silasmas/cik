<?php

namespace App\Models;

use App\Models\docteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rendezvous extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    protected $with = ['docteur'];

    public function docteur()
    {
        return $this->belongsTo(docteur::class);
    }
}
