<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
	'addpso' => array (
		array(
		        'field' => 'pso_name',
		        'label' => 'Pso Name',
		        'rules' => 'trim|required'
		     ),
        array(
                'field'=>'pso_renata_id',
                'label'=>'Pso Id',
                'rules' => 'trim|required|is_unique[tbl_user_pso.renata_id]'
            ),
        array(
                'field'=>'pso_phone',
                'label'=>'Pso Phone',
                'rules' => 'trim|required'
            )
		),
    'updatepso' => array (
		array(
		        'field' => 'pso_name',
		        'label' => 'Pso Name',
		        'rules' => 'trim|required'
		     ),
        array(
                'field'=>'pso_renata_id',
                'label'=>'Pso Id',
                'rules' => 'trim|required'
            ),
        array(
                'field'=>'pso_phone',
                'label'=>'Pso Phone',
                'rules' => 'trim|required'
            )
		),
	'editcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Categoey Name',
		        'rules' => 'required'
		     )
		),
	'userlogin_check' => array (
		array(
		        'field' => 'rid',
		        'label' => 'User Email',
		        'rules' => 'trim|required|xss_clean'
		     ),
        array(
            'field' => 'password',
            'label' => 'User password',
            'rules' => 'trim|required'
        )
    ),
	'addproduct' => array (
		array(
		        'field' => 'name',
		        'label' => 'Product Name',
		        'rules' => 'required'
		     ),
        array(
            'field' => 'price',
            'label' => 'Product Price',
            'rules' => 'required'
        ),array(
		        'field' => 'quantity',
		        'label' => 'Product quantity',
		        'rules' => 'required'
		     ),
        array(
            'field' => 'cat',
            'label' => 'Product cat',
            'rules' => 'required'
        )
    )
);
