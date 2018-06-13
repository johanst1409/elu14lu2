<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UrlName;

class Company extends Model
{

    use SoftDeletes, UrlName;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_developer',
        'is_publisher',
        'is_manufacturer',
        'url_name',
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
     * Define a one-to-many relationship.
     *
     * Define relation from "companies" table to "games" table
     * based on de "developer_id" set in the "games" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function developed()
    {
        return $this->hasMany(Game::class, 'developer_id', 'id');
    }

    /**
     * Define a one-to-many relationship.
     *
     * Define relation from "companies" table to "games" table
     * based on de "publisher_id" set in the "games" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function published()
    {
        return $this->hasMany(Game::class, 'publisher_id', 'id');
    }

    /**
     * Define a one-to-many relationship.
     *
     * Define relation from "companies" table to "platforms" table
     * based on de "manufacturer_id" set in the "platforms" table
     * and "id" in "companies"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function manufactured()
    {
        return $this->hasMany(Platform::class, 'manufacturer_id', 'id');
    }

    /**
     * Select only entries where "is_developer" is 'true'
     *
     * @return \Illuminate\Database\Eloquent\Scope
     */
    public function scopeDeveloper($query)
    {
    	return $query->where('is_developer', true);
    }

    /**
     * Select only entries where "is_publisher" is 'true'
     *
     * @return \Illuminate\Database\Eloquent\Scope
     */
    public function scopePublisher($query)
    {
    	return $query->where('is_publisher', true);
    }

    /**
     * Select only entries where "is_manufacturer" is 'true'
     *
     * @return \Illuminate\Database\Eloquent\Scope
     */
    public function scopeManufacturer($query)
    {
    	return $query->where('is_manufacturer', true);
    }
}
