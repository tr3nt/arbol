<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'middlename',
        'lastname',
        'email',
        'phone',
        'birth_date',
        'father_id',
        'mother_id',
        'living'
    ];

    public function fullName() : string
    {
        return "{$this->name} {$this->middlename} {$this->lastname}";
    }
    public function age() : int
    {
        $format = "/^\d{4}-\d{2}-\d{2}$/";
        if (preg_match($format, $this->birth_date)) {
            $today = date("Y-m-d");
            return DateTime::createFromFormat('Y-m-d', $this->birth_date)
                ->diff(DateTime::createFromFormat('Y-m-d', $today))
                ->y;
        }
        return 0;
    }

    public function children() : HasMany
    {
        return $this->hasMany('App\Models\Person', 'father_id', 'id')
                    ->orWhere('mother_id', $this->id);
    }
    public function father() : BelongsTo
    {
        return $this->belongsTo('App\Models\Person', 'father_id');
    }
    public function mother() : BelongsTo
    {
        return $this->belongsTo('App\Models\Person', 'mother_id');
    }
}
