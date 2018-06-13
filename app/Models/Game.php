<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UrlName;

class Game extends Model
{

    use SoftDeletes, UrlName;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'rating',
        'developer_id',
        'publisher_id',
        'released_at'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'released_at'
    ];

    /**
     * Get a plain attribute (not a relationship).
     *
     * Get the bootstrap color class associated with the rating value
     *
     * @param  string  $key
     * @return mixed
     */
    public function getRatingClassAttribute()
    {
        if ($this->rating >= 75) 
            return 'success';
        elseif ($this->rating >= 40)
            return 'warning';
        else
            return 'danger';
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * Define relation from "games" table to "companies" table
     * based on de "developer_id" set in the "games" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */    
    public function developer()
    {
    	return $this->belongsTo(Company::class, 'developer_id', 'id')->withTrashed();
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * Define relation from "games" table to "companies" table
     * based on de "publisher_id" set in the "games" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publisher()
    {
    	return $this->belongsTo(Company::class, 'publisher_id', 'id')->withTrashed();
    }

    /**
     * Define a many-to-many relationship.
     *
     * Define  relation from "games" table to "genres" table
     * based on de "game_id" for "id" in "games" and "genre_id" 
     * for "id" in "genres" saved in the pivot table "game_genres"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres()
    {
    	return $this->belongsToMany(Genre::class, 'game_genres', 'game_id', 'genre_id', 'id', 'id');
    }

    /**
     * Define a many-to-many relationship.
     *
     * Define relation from "games" table to "platforms" table
     * based on de "game_id" for "id" in "games" and "platform_id"
     * for "id" in "platforms" saved in the pivot table "game_platforms"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function platforms()
    {
    	return $this->belongsToMany(Platform::class, 'game_platforms', 'game_id', 'platform_id');
    }
}
