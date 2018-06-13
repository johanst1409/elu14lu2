<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Define a many-to-many relationship.
     *
     * Define relation from "genres" table to "games" table
     * based on de "genre_id" for "id" in "genres" and "game_id"
     * for "id" in "games" saved in the pivot table "game_genres"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function games()
    {
    	return $this->belongsToMany(Game::class, 'game_genres', 'genre_id', 'game_id', 'id', 'id');
    }
}
