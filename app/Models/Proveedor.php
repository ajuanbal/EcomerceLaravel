<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $email
 * @property $ruc
 * @property $state
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria[] $categorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'ruc' => 'required',
		'state' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','phone','email','ruc','state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categorias()
    {
        return $this->hasMany('App\Models\Categoria', 'id_proveedors', 'id');
    }
    

}
