<?php

namespace App\Models;

use App\Models\Concerns\HasAuthor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class IdeaRequest extends Model
{
    use AsSource, Chartable, Filterable, HasAuthor;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'city',
        'email',
        'message',
    ];

    /**
     * Get the idea key associated with the idea request.
     *
     * @return HasOne
     */
    public function key(): HasOne
    {
        return $this->hasOne(IdeaKey::class, 'request_id');
    }
}
