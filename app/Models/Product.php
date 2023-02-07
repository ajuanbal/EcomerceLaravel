<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $details
 * @property $price
 * @property $shipping_cost
 * @property $description
 * @property $image_path
 * @property $created_at
 * @property $updated_at
 * @property $id_category
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
		'price' => 'required',
		'shipping_cost' => 'required',
		'description' => 'required',
		'image_path' => 'required',
		'id_category' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','details','price','shipping_cost','description','image_path','id_category'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_category');
    }
    

}
