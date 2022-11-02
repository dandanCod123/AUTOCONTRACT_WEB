<?php

class Cliente_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
	}
	
	/*public function get_alunocurso_copy() {

		$condicao = "codcurso = 62";
		
		$this->db->select('(cpf).numero as cpf, logradouro, numero, complemento, bairro, cep, municipio_residencia, identidade_uf_emissao');
		$this->db->from('mat_aluno');
		$this->db->where($condicao);
		$query = $this->db->get();
		
		$aluno = $query->result_array();
		
		/*echo "<pre>";
		print_r($aluno);
		echo "</pre>";
		exit;*/
		
		/*foreach ($aluno as $item){

			$fields = array(
						'identidade_uf_emissao'=> $item['identidade_uf_emissao'],
						'logradouro'=> $item['logradouro'],
						'numero'=> $item['numero'],
						'complemento'=> $item['complemento'],
						'bairro'=> $item['bairro'],
						'cep'=> $item['cep'],
						'municipio_residencia'=> $item['municipio_residencia'],
					);
			
			$this->db->where('(cpf).numero',$item['cpf']);
			$query2 = $this->db->update('pessoa', $fields);
			
			IF($query2) {
				echo "ok<br>";
			} else {
				echo "erro";
			}
		}
	}*/
	
	public function add_dados($input) {
		$this -> db-> insert('star_document', $input);
		return 1;
	}

	public function delete_dados($input) {
		$this->db-> where('cliente_empresa_nome', $input);
		$this -> db-> delete('star_document');
		return 1;
	}

	public function get_dados($input){
		
		$this->db-> where('cliente_empresa_nome', $input);
		$this->db-> where('cliente_empresa_nome', $input);
		$query = $this->db-> get('star_document');
		

		if($query->num_rows() != 0){

			return $query->result_array();

		}else{

			return "Falhou";

		}
	}
	public function update_dados($input){
		$this-> db -> where('cliente_empresa_nome', $input);
		$query = $this->db-> get('star_document');
		return $query->row_array();
	}

	public function editar_dados($input){
		$this-> db -> where('cliente_empresa_nome', $input['cliente_empresa_nome']);
		$this -> db-> update('star_document', $input);
		return 1;
	}
}
