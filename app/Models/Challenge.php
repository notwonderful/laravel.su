<?php

namespace App\Models;

use App\Models\Concerns\LogsActivityFillable;
use App\Models\Presenters\ChallengePresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Challenge extends Model
{
    use AsSource, Chartable, Filterable, LogsActivityFillable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'start_at',
        'stop_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'start_at' => 'datetime',
        'stop_at'  => 'datetime',
    ];

    /**
     * The allowed filters for the model.
     *
     * @var array
     */
    protected $allowedFilters = [
        'title'        => Like::class,
        'description'  => Like::class,
    ];

    /**
     * The allowed sorts for the model.
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'created_at',
        'updated_at',
        'start_at',
        'stop_at',
    ];

    /**
     * Define a one-to-many relationship with ChallengeApplication.
     *
     * @return HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(ChallengeApplication::class);
    }

    /**
     * Scope a query to only include active challenges.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('stop_at', '>=', now())->latest();
    }

    /**
     * Determine if the challenge has started.
     *
     * @return bool
     */
    public function hasStarted(): bool
    {
        return now()->gte($this->start_at);
    }

    /**
     * Determine if the challenge has not started.
     *
     * @return bool
     */
    public function hasNotStarted(): bool
    {
        return ! $this->hasStarted();
    }

    /**
     * Get the presenter for the challenge.
     *
     * @return ChallengePresenter
     */
    public function presenter(): ChallengePresenter
    {
        return new ChallengePresenter($this);
    }
}
