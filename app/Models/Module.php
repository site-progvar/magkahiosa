<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['module'];

    protected $searchableFields = ['*'];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
