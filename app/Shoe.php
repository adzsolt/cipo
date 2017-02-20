<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = ['size', 'type', 'color', 'price', 'user_id','filename'];

    /**
     * @param $query
     * @param $type
     * @return mixed
     */
    public function scopeSize($query, $type)
    {
        return $query->where('size', $type);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
