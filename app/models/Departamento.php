<?php

/**
 * Departamento
 *
 * @property integer $id
 * @property string $descricao
 * @property string $sigla
 * @property string $area
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereDescricao($value) 
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereSigla($value) 
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereArea($value) 
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Departamento whereUpdatedAt($value) 
 */
class Departamento extends Eloquent{
	use ValidationTrait;

	protected $autoIdentityUniqueRules = false;

	$rules = array(
  	"descricao" => "required|unique",
  	"sigla" => "required|unique",
  	"area" => "required",
  );

}