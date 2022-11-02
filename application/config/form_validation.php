<?php

$config = array(

    'cliente/add_dados' => array(
		array(
			'field'=>'nome',
			'label'=>'Nome',
			'rules'=>'required'
		),
		array(
			'field'=>'cpf',
			'label'=>'CPF',
			'rules'=>'trim|required|callback__valid_cpf|callback__check_cpf_usuario_inexistence'
		),
		array(
			'field'=>'empresa',
			'label'=>'Empresa',
			'rules'=>'required'
		)
	),


);