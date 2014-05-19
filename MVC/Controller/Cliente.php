<?php

class Controller_Cliente extends Controller {

    public function apagar() {
      
$id = (int)$_POST['id'];

$sql = "DELETE FROM servicos WHERE id={$id}";

$resultado = mysql_query( $sql )or die ( mysql_error() );

echo 'Cadastro excluído com sucesso';

    }
    public function cadastrar() {
        
   $view = new View();
        
        if ($_POST) {
            $vo = new Vo_Cliente();
            $vo->setRazao($_POST['razao_social']);
            $vo->setNomeFantasia($_POST['nome_fantasia']);
            $vo->setCnpj($_POST['cnpj']);
            $vo->setInscEst($_POST['insc_est']);
            $vo->setDataFund($_POST['data_fun']);
            $vo->setRamoAtv($_POST['ramo_atv']);
            $vo->setEnd($_POST['endereco']);
            $vo->setBairro($_POST['bairro']);         
            $vo->setCep($_POST['cep']);
            $vo->setCidade($_POST['cidade']);
            $vo->setUf($_POST['uf']);
            $vo->setTelefone($_POST['telefone']);           
            $vo->setEmail($_POST['email']);
            $vo->setSocio($_POST['socio']);
            $vo->setCargo($_POST['cargo']);
						
	// marketing
	
            $vo->setProduto($_POST['produto_Mven']);
            $vo->setNomeFantasia($_POST['nome_fantasia']);
            $vo->setQtMensal($_POST['qtde_Mens']);
            $vo->setUndMed($_POST['und_Med']);
            $vo->setMargenLucro($_POST['marg_lucro']);
            $vo->setFaturamento($_POST['faturamento']);			
            $vo->setConcorrente($_POST['concorrente']);	
            $vo->setViConcorrente($_POST['vi_concorrente']);  					
            $vo->setPontoForte($_POST['ponto_forte']);
            $vo->setPontoMelhoria($_POST['ponto_melhoria']);			
            $vo->setPromocap($_POST['promocao']);			
            $vo->setMeioUt($_POST['meio_ut']);           
            $vo->setPo($_POST['ponto_forte']);
            $vo->setSinalizao($_POST['sinalizacao']);
            $vo->setEspacoProm($_POST['espaco_prom']);
					
	// Preco		
			
            $vo->setFormaPreco($_POST['forma_preco']);
            $vo->setPrecoConc($_POST['preco_conc']);
			
            
            $model = new Model_Cliente();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('cliente/cadastrar');
    }

    public function listar() {
        $dao = new Dao_Cliente();
        $cliente = $dao->request();
        
        $view = new View();
        
        $view->add('razao_social', 'Corporation Ltda');
        $view->add('cliente', $cliente);
        
        $view->desenhar('cliente/listar');
    }

    public function alterar() {
        
    }

}
