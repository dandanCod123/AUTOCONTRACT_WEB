<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cliente_model');	
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function add_dados()
	{


		$input= array(
			'cliente_empresa_nome' => $this->input->post('cliente_empresa_nome'),
			'presidente_cliente' => $this->input->post('presidente_cliente'),
			'cnpj' => $this->input->post('cnpj'),
			'cpf' => $this->input->post('cpf'),
			'endereco_presidente' => $this->input->post('endereco_presidente'),
			'endereco' => $this->input->post('endereco'),
			'cep' => $this->input->post('cep'),
			'email' => $this->input->post('email'),
		);
		
		if($input['cliente_empresa_nome'] == ''){
			$this->load->view('add_dados');
		}
		else{
			$retorno = $this->cliente_model->add_dados($input);
			if($retorno == 1){
				echo "<script>alert('Os dados foram registrados com sucesso!!');</script>";
				$this->load->view('add_dados');
			}else{
				echo "<script>alert('Não foi possível registrar seus dados, tente novamente!!');</script>";
				$this->load->view('add_dados');
			}
		}
	}

	public function get_dados(){

		$data['content'] = '';
		$empresa = $this->input->post('empresa');

		

		if($empresa == ''){
			$this-> load ->view('get_dados', $data);
		}else{
			$retorno = $this->cliente_model->get_dados($empresa);
			//echo "<pre>";
			//print_r($retorno);
			//echo "</pre>";
			//exit;
			
			if($retorno != 'Falhou'){
				$data['content'] = "<!DOCTYPE><html><meta charset='utf-8'><meta name='viewport' content='width=297x420' initialscale='1'><title>Powered by Autotech</title><style>h1 {size: 54px; text-align: center;font-family: Georgia, 'Times New Roman', Times, serif;}h2 {size: 40px; text-align: center;font-family: Georgia, 'Times New Roman', Times, serif;}h4 {size: 48px; text-align: center;font-family: Georgia, 'Times New Roman', Times, serif;}body {text-align: justify;max-width: 650px;font-family: Georgia, 'Times New Roman', Times, serif;font-size: 16px;padding: 0;margin: 0 auto !important;}</style><head><br><h1>Autotech</h1><h2>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h2><br><h4>CONTROLE: </h4></head><body><p><strong>Celebrado consoante a melhor forma de Direito e consoante todas as disposições legais pertinentes à matéria, firmam entre si o presente contrato de prestação de serviços, por justo e acertado, as partes abaixo qualificadas:</strong></p><p><strong>CONTRATANTE: ".$retorno[0]['cliente_empresa_nome']."</strong> pessoa jurídica, de direito privado, denominado <strong>CONTRATANTE</strong>, devidamente constituída como sociedade limitada, inscrita no CNPJ sob o n° ".$retorno[0]['cnpj'].", com endereço  ".$retorno[0]['endereco'].", CEP n° ".$retorno[0]['cep'].", neste ato representada por seu Presidente <strong>".$retorno[0]['presidente_cliente']."</strong>, inscrito no CPF sob o n° ".$retorno[0]['cpf'].", residente e domiciliado no endereço ".$retorno[0]['endereco_presidente'].".</p><p><strong>CONTRATADA: HORIZON INOVATION</strong>, pessoa jurídica de direito privado, denominada <strong>CONTRATADA</strong>, devidamente constituída como associação civil sem fins lucrativos, inscrita no CNPJ sob o n° 1231313123, com endereço à Rua jorge severiano 955, CEP 6420180, Fortaleza, Ceará, neste ato representada por seu diretor presidente, <strong>ALBERTO MATHEUS DE NORÕES MILFONT CARVALHO</strong>, inscrito no CPF n° 607.661.683-01, portador da identidade nº 2009009108810, residente e domiciliado em Avenida Luciano Carneiro, 2365.</p><p>Ambas as partes, de comum acordo, resolvem firmar o presente <strong>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</strong>, a ser regulado pelas cláusulas e condições abaixo lançadas, a que reciprocamente se obrigam:</p><h4>I. DO OBJETO CONTRATUAL</h4><p><strong>CLÁUSULA 1ª.</strong> O presente contrato tem por objeto a prestação do serviço de Consultoria, projeto e implementação de sistema de controle personalizado pela <strong>CONTRATADA</strong> em favor da <strong>CONTRATANTE</strong>, sendo esse discriminado na cláusula 2ª deste contrato.</p><h4>II. DOS SERVIÇOS</h4><p>CLÁUSULA 2ª. É atribuição da <strong>CONTRATADA</strong> atuar em favor da <strong>CONTRATANTE</strong> no exercício do serviço compreendido pelas partes abaixo delineadas:</p><p><strong>I.</strong>Formulação de orçamento e planejamento do projeto;<br><strong>II.</strong>Obtenção dos componentes necessários para a fabricação do projeto;<br><strong>III.</strong>Moldagem e estruturação do projeto;<br><strong>IV.</strong>Execução e finalização física do projeto.</p><p><strong>Parágrafo Único. </strong>Considera-se parte integrante e indissociável deste contrato a proposta comercial assinada por ambas as partes.</p><p><strong>§1°.</strong> O sistema a ser desenvolvido consiste em: </p><h4>III. DOS PRAZOS</h4><p><strong>CLÁUSULA 3ª.</strong> Obriga-se a <strong>CONTRATADA</strong> a atuar diligentemente na execução do objeto contratual, sendo de dias úteis o prazo para a Elaboração inicial e planejamento do projeto, a contar da data de assinatura do presente contrato, dias úteis para a compra e obtenção dos materiais necessários para o projeto, dias úteis para desenvolvimento prático do projeto, a contar do primeiro dia útil transcorrido após o período de compra e obtenção dos materiais necessários para o projeto, dias úteis para instalação do projeto no local solicitado pelo contratante, totalizando dias úteis de prazo impreterível para entrega do produto final a <strong>CONTRATANTE</strong>, obrigando-se a <strong>CONTRATANTE</strong> a propiciar condições de desenvolvimento do trabalho, bem como fornecendo à <strong>CONTRATADA</strong> todas as informações necessárias para realização do serviço, sendo essas condições impreteríveis para a perfeita consecução do objeto contratual.</p><p><strong>Parágrafo único.</strong> O prazo de execução do serviço pela CONTRATADA ficará suspenso até a entrega pela <strong>CONTRATANTE</strong>das exigíveis condições de desenvolvimento do trabalho, especialmente no que tange à entrega de informações solicitadas ou na efetivação de reunião requerida pela <strong>CONTRATADA</strong>.</p><h4>IV. DAS OBRIGAÇÕES DA CONTRATANTE</h4><p><strong>CLÁUSULA 4ª.</strong>Obriga-se a<strong>CONTRATANTE</strong>a: </p><p><strong>I. </strong>Colocar à disposição da <strong>CONTRATADA</strong> todas as informações, os documentos e os recursos materiais e humanos que sejam necessários à execução do objeto pactuado, devendo especificar os detalhes necessários à perfeita consecução dele, e como ele deve ser entregue;</p><p><strong>II. </strong>Efetuar, dentro do período acordado e na forma ajustada, os pagamentos estipulados neste contrato pelo serviço prestado;</p><p><strong>III. </strong>Manter atualizados os meios de comunicação e responder, em tempo hábil, os contatos solicitados pela CONTRATADA, visando a soluções de eventuais dúvidas referentes ao serviço, de forma a responsabilizar-se por atrasos no projeto decorrentes de falhas que cause na comunicação;</p><p>Promover o acompanhamento dos serviços, comunicando as ocorrências de quaisquer fatos que, a seu critério, exijam medidas corretivas por parte da <strong>CONTRATADA</strong>;Atuar em harmonia com a CONTRATADA, de maneira a garantir os resultados condizentes com a proposta comercial;</p><p><strong>IV. </strong>Se necessário, pagar taxas e despesas referentes à execução do serviço em órgãos públicos e privados, os quais serão avisados previamente pela CONTRATADA durante a execução do serviço;</p><p><strong>V. </strong>Dar um aviso prévio de, no mínimo, 24 horas antes da data marcada, caso necessite cancelar uma reunião ou visita da CONTRATADA.</p><p><strong>a. </strong>Quando do descumprimento deste inciso, torna-se a CONTRATANTE passível de multa estritamente referente aos custos gerados pelo deslocamento e hora de trabalho desperdiçados da CONTRATADA.</p><p><strong>b. </strong>Em circunstância de caso fortuito ou força maior, é exigível comprovação da CONTRATANTE em até 24h após o horário da reunião, pela qual se anula, quandoreconhecido pela CONTRATADA o caráter de completa imprevisibilidade, a incidência de multa.</p><h4>V. DAS OBRIGAÇÕES DA CONTRATADA</h4></body></html>";
				$this->load->view('get_dados', $data);
			}
			else{
				$data['content'] = '';
				echo "<script>alert('Não foi possível buscar seus dados, tente novamente!!');</script>";
				$this->load->view('get_dados', $data);
			}
		}

	}

	public function delete_dados($empresa){
		$retorno = $this->cliente_model->delete_dados($empresa);

		if($retorno == 1){
			echo "<script>alert('Os dados foram deletados com sucesso!!');
			window.location.assign('../update_dados');
			</script>";
		}else{
			echo "<script>alert('Não foi possível registrar seus dados, tente novamente!!');</script>";
			$this->load->view('update_dados');
		}
	}

	public function update_dados(){
		$empresa = $this->input->post('empresa');
		$data['dados'] = "";

		if($empresa == ""){
			$this-> load-> view('update_dados',$data);
		}else{
			
			$resultado = $this -> cliente_model -> update_dados($empresa);
			$data['dados'] = $resultado;
			
			$this-> load-> view('update_dados', $data);


		}

	}

	public function editar_dados($empresa){

		$input= array(
			'cliente_empresa_nome' => $this->input->post('cliente_empresa_nome'),
			'presidente_cliente' => $this->input->post('presidente_cliente'),
			'cnpj' => $this->input->post('cnpj'),
			'cpf' => $this->input->post('cpf'),
			'endereco_presidente' => $this->input->post('endereco_presidente'),
			'endereco' => $this->input->post('endereco'),
			'cep' => $this->input->post('cep'),
			'email' => $this->input->post('email'),
		);

		if($input['cliente_empresa_nome'] == ''){
			$this->load->view('editar_dados');
		}
		else{
			$retorno = $this->cliente_model->editar_dados($input);
			if($retorno == 1){
				echo "<script>alert('Os dados foram registrados com sucesso!!');
				window.location.assign('../../../index.php');
				</script>";
			}else{
				echo "<script>alert('Não foi possível registrar seus dados, tente novamente!!');</script>";
				$this->load->view('editar_dados');
			}
		}


	}
}

