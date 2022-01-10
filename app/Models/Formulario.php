<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{

    protected $table = "formulario";
	protected $fillable = ['id','local_atendimento','tipo_agendamento','email','telefone','cpf_representante','nome_representante','cpf_contribuinte','cnpj_contribuinte','nomerazao_social', '	senha_agendamento', 'horario_disponivel', 'dia_disponivel'];

    use HasFactory;
}
