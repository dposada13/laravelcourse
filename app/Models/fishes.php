<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fishes extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the fish key (id)
     * $this->attributes['name'] - string - contains the fish name
     * $this->attributes['species'] - int - contains the fish species
     * $this->attributes['weight'] - int - contains the fish weight
     */
    protected $fillable = ['name', 'species', 'weight'];

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    //spices
    public function getspecies(): string
    {
        return $this->attributes['species'];
    }

    public function setspecies($species): void
    {
        $this->attributes['species'] = $species;
    }

    //weight
    public function getweight(): string
    {
        return $this->attributes['weight'];
    }

    public function setweight($weight): void
    {
        $this->attributes['weight'] = $weight;
    }
}
