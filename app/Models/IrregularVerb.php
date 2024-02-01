<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IrregularVerb extends Model
{
    protected $fillable = [
        'infinitive',
        'past_simple',
        'past_participle',
        'translation',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function search(mixed $search)
    {
        return empty($search) ? static::query()
            : static::query()
                ->where('infinitive', 'like', '%'.$search.'%')
                ->orWhere('past_simple', 'like', '%'.$search.'%')
                ->orWhere('past_participle', 'like', '%'.$search.'%');
    }
}
