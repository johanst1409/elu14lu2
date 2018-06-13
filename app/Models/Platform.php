<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UrlName;

class Platform extends Model
{

    use SoftDeletes, UrlName;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'platforms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name',
    	'released_at',
    	'manufacturer_id',
    	'url_name',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'released_at'
    ];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * Define relation from "platforms" table to "companies" table
     * based on de "manufacturer_id" set in the "platforms" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */    
    public function manufacturer()
    {
    	return $this->belongsTo(Company::class, 'manufacturer_id', 'id')->withTrashed();
    }

    /**
     * Define a many-to-many relationship.
     *
     * Define relation from "platforms" table to "games" table
     * based on de "platform_id" for "id" in "platforms" and "game_id"
     * for "id" in "games" saved in the pivot table "game_platforms"
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function games()
    {
    	return $this->belongsToMany(Game::class, 'game_platforms', 'platform_id', 'game_id', 'id', 'id');
    }
}
