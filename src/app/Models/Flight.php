<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Flight extends Model
{
    /**
     * FLIGHT ATTRIBUTES
     * $this->attributes['id'] - int - contains the flight primary key (id)
     * $this->attributes['name'] - string - contains the flight name
     * $this->attributes['price'] - int - contains the flight price
     * $this->attributes['type'] - string - contains the flight type(Nacional or Internacional)
     * $this->attributes['created_at'] - timestamp - contains the time created at
     * $this->attributes['updated_at'] - timestamp - contains the time updated at
     */

    protected $fillable = ['name', 'type', 'price'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice(int $price): void
    {
        $this->attributes['price'] = $price;
    }
    
    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|gt:0',
        ]);
    }
}