<?php

namespace Muserpol;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Degree extends Model
{
    protected $table = 'degrees';

	protected $fillable = [
	
	'code_level',
	'code_degree',
	'name',
	'shortened'
	
	];

	protected $guarded = ['id'];

	public function base_wages()
    {
        return $this->hasMany('Muserpol\BaseWage');
    }

    public function affiliates()
    {
        return $this->hasMany('Muserpol\Affiliate');
    }
}