<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activitat
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $hours
 * @property $programacion_id
 * @property $uf_id
 * @property $criteri_ids
 * @property $continguts_ids
 * @property $created_at
 * @property $updated_at
 *
 * @property ActivitatContingut[] $activitatContinguts
 * @property ActivitatCriteri[] $activitatCriteris
 * @property ActivitatRa[] $activitatRas
 * @property Contingut $contingut
 * @property Criteri $criteri
 * @property Programacion $programacion
 * @property Uf $uf
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activitat extends Model
{
    
    static $rules = [
		'name' => 'required',
		'hours' => 'required',
		'programacion_id' => 'required',
		'uf_id' => 'required',
		'criteri_ids' => 'required',
		'continguts_ids' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','hours','programacion_id','uf_id','criteri_ids','continguts_ids'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatContinguts()
    {
        return $this->hasMany('App\Models\ActivitatContingut', 'activitat_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatCriteris()
    {
        return $this->hasMany('App\Models\ActivitatCriteri', 'activitat_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatRas()
    {
        return $this->hasMany('App\Models\ActivitatRa', 'activitat_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contingut()
    {
        return $this->hasOne('App\Models\Contingut', 'id', 'continguts_ids');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function criteri()
    {
        return $this->hasOne('App\Models\Criteri', 'id', 'criteri_ids');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programacion()
    {
        return $this->hasOne('App\Models\Programacion', 'id', 'programacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uf()
    {
        return $this->hasOne('App\Models\Uf', 'id', 'uf_id');
    }
    

}
