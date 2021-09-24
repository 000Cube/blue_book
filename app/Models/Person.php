<?php

namespace App\Models;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'email',
        'age' => ['integer','min:0','max:150'],
    );

    protected static function boot(){
        //グローバルスコープの作成
        parent::boot();

        static::addGlobalScope(new ScopePerson);
    }

    public function boards(){
        return $this->hasMany('App\Models\Board');
    }

    public function getData(){
        return "{$this->id}:{$this->name}({$this->age})";
    }

    public function scopeNameEqual($query,$str){
        return $query->where('name',$str);
    }

    public function scopeAgeGreaterThan($query,$n){
        return $query->where('age','>=',$n);
    }

    public function scopeAgeLessThan($query,$n){
        return $query->where('age','<=',$n);
    }
}
