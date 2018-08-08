<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //

	protected $fillable = ['nome_produto', 'descricao', 'preco'];
	
	//Rules
    public static $rules = [
            'nome_produto' => 'required|between:3,250',
            'descricao' => 'between:3,350',
            'preco' => 'numeric',
        	'quantidade' => 'integer',
    ];

    public static $rules_updated = [
        'nome_produto' => 'between:3,250',
        'descricao' => 'between:3,350',
        'preco' => 'numeric',
        'quantidade' => 'integer',
    ];
    //Rules



}
