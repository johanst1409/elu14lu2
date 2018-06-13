<?php

namespace App\Traits;

trait UrlName 
{
    /**
     * Set the Url value of the Name when the name attribute is set
     * @param string
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['url_name'] = str_slug($value);
    }

}