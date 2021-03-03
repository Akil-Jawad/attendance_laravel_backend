<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1)
 */
class Status extends Model
{
    protected $fillable = ['status_name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
