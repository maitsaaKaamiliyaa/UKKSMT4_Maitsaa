<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    CONST STATUS_PENDING = 0;
    CONST STATUS_PROGRESS = 1;
    CONST STATUS_SELESAI = 2;
    //wat ngepending
    protected static function booted(){
        static::creating(function($query){
            if(!isset($query->status)) $query->status = self::STATUS_PENDING;
        });
    }

    public function scopePendding($builder){return $builder->where("status", self::STATUS_PENDING);}
    public function scopeProgress($builder){return $builder->where("status", self::STATUS_PROGRESS);}
    public function scopeSelesai($builder){return $builder->where("status", self::STATUS_SELESAI);}

    public function product(){return $this->belongsTo(Product::class);}
    public function student(){return $this->belongsTo(Student::class);}
}
