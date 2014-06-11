<?php

class Controller_Cliente extends Controller {

   
	 public function delete($where) {
        $sql = 'DELETE FROM '
                . $this->tabela
                . ' WHERE ' . $where
        ;

        $con = Conexao::getInstance();
        return $con->query($sql);
    }

  
    public function cadastrar() {
        
   $view = new View();
        
        if ($_POST) {
		
            $vo = new Vo_Cliente();
            $vo->setRazao($_POST['razao']);
            $vo->setNomeFan($_POST['nomefan']);
            $vo->setCnpj($_POST['cnpj']);
            $vo->setInscEst($_POST['inscEst']);
            $vo->setDataFun($_POST['dataFun']);
            $vo->setRamoAtiv($_POST['ramoAtiv']);
            $vo->setEndereco($_POST['endereco']);
            $vo->setBairro($_POST['bairro']);         
            $vo->setCep($_POST['cep']);
            $vo->setCidade($_POST['cidade']);
            $vo->setUf($_POST['uf']);
            $vo->setFone($_POST['fone']);           
            $vo->setEmail($_POST['email']);
            $vo->setSocio1($_POST['socio1']);
			$vo->setSocio2($_POST['socio2']);
			$vo->setSocio3($_POST['socio3']);
            $vo->setCargo1($_POST['cargo1']);
			$vo->setCargo2($_POST['cargo2']);
			$vo->setCargo3($_POST['cargo3']);
						
// marketing
	
            $vo->setProdMVen1($_POST['prodMVen1']);
			$vo->setProdMVen2($_POST['prodMVen2']);
			$vo->setProdMVen3($_POST['prodMVen3']);
            $vo->setQtM1($_POST['qtdM1']);
			$vo->setQtM2($_POST['qtdM2']);
			$vo->setQtM3($_POST['qtdM3']);
            $vo->setUndMed1($_POST['undMed1']);
			$vo->setUndMed2($_POST['undMed2']);
			$vo->setUndMed3($_POST['undMed3']);
            $vo->setMargeLuc1($_POST['margeLuc1']);
			$vo->setMargeLuc2($_POST['margeLuc2']);
			$vo->setMargeLuc3($_POST['margeLuc3']);
            $vo->setFatura1($_POST['fatura1']);		
			$vo->setFatura2($_POST['fatura2']);
			$vo->setFatura3($_POST['fatura3']);
            $vo->setConcorrente1($_POST['concorrente1']);	
			$vo->setConcorrente2($_POST['concorrente2']);	
			$vo->setConcorrente3($_POST['concorrente3']);	
            $vo->setVisitConcoS($_POST['visitConcoS']);  
			$vo->setVisitConcoN($_POST['visitConcoN']);	
			
			$vo->setPontoAten($_POST['pontoAten']);
            $vo->setPontoEstac($_POST['pontoEstac']);			
            $vo->setPontoPreco($_POST['pontoPreco']);			
            $vo->setPontoVarie($_POST['pontoVarie']);           
            $vo->setPontoEspFisico($_POST['pontoEspFisico']);
            $vo->setPontoLocal($_POST['pontoLocal']);
            $vo->setPontoQuali($_POST['pontoQuali']);
		    $vo->setPontoOutros($_POST['pontoOutros']);
            $vo->setPontoMAten($_POST['pontoMAten']);			
	        $vo->setPontoMEstac($_POST['pontoMEstac']);			
            $vo->setPontoMPreco($_POST['pontoMPreco']);           
            $vo->setPontoMVarie($_POST['pontoMVarie']);
            $vo->setPontoMEspFisico($_POST['pontoMEspFisico']);
            $vo->setPontoMLocal($_POST['pontoMLocal']);			
            $vo->setPontoMQuali($_POST['pontoMQuali']);			
            $vo->setPontoMOutros($_POST['pontoMOutros']);           
            $vo->setPromo1($_POST['promo1']);
			$vo->setPromo2($_POST['promo2']);
			$vo->setPromo3($_POST['promo3']);
            $vo->setMeio1($_POST['meio1']);
			$vo->setMeio2($_POST['meio2']);
			$vo->setMeio3($_POST['meio3']);
			$vo->setMeio4($_POST['meio4']);
            $vo->setEstSinalS($_POST['estSinalS']);
			$vo->setEstSinalN($_POST['estSinalN']);
            $vo->setEspPromoS($_POST['espPromoS']);
			$vo->setEspPromoN($_POST['espPromoN']);
					
// Preco		
			
            $vo->setFormPreco1($_POST['formPreco1']);
			$vo->setFormPreco2($_POST['formPreco2']);
			$vo->setFormPreco3($_POST['formPreco3']);
            $vo->setPrecoConc1($_POST['precoConc1']);
			$vo->setPrecoConc2($_POST['precoConc2']);
			$vo->setPrecoConc3($_POST['precoConc3']);
			
// Venda
            
            $vo->setMesAno1($_POST['mesAno1']);
			$vo->setMesAno2($_POST['mesAno2']);
			$vo->setMesAno3($_POST['mesAno3']);
			$vo->setMesAno4($_POST['mesAno4']);
			$vo->setMesAno5($_POST['mesAno5']);
			$vo->setMesAno6($_POST['mesAno6']);
            $vo->setFaturamento1($_POST['faturamento1']);
			$vo->setFaturamento2($_POST['faturamento2']);  
			$vo->setFaturamento3($_POST['faturamento3']); 
			$vo->setFaturamento4($_POST['faturamento4']); 
			$vo->setFaturamento5($_POST['faturamento5']); 
			$vo->setFaturamento6($_POST['faturamento6']); 			
	        $vo->setPeriodoMes1($_POST['periodoMes1']);  
            $vo->setPeriodoMes2($_POST['periodoMes2']); 			
            $vo->setDia1($_POST['dia1']); 
			$vo->setDia2($_POST['dia2']);
			$vo->setDia3($_POST['dia3']);
			$vo->setDia4($_POST['dia4']);
			$vo->setDia5($_POST['dia5']);
			$vo->setDia6($_POST['dia6']);
			$vo->setDia7($_POST['dia7']);			
            $vo->setHoraMov1($_POST['horaMov1']); 
			$vo->setHoraMov2($_POST['horaMov2']);
			$vo->setHoraMov3($_POST['horaMov3']);
			
            $vo->setFormPag1($_POST['formPag1']);
            $vo->setFormPag2($_POST['formPag2']);
            $vo->setFormPag3($_POST['formPag3']);
            $vo->setFormPag4($_POST['formPag4']);
            $vo->setFormPag5($_POST['formPag5']);
            $vo->setFormPag6($_POST['formPag6']);			
                     
            $vo->setValorMedioP($_POST['valorMedioP']);             
            $vo->setValorMedioM($_POST['valorMedioM']);
			
// Compra    
            
            $vo->setRazaoFant1($_POST['razaoFant1']);
			$vo->setRazaoFant2($_POST['razaoFant2']);
			$vo->setRazaoFant3($_POST['razaoFant3']);
			$vo->setCidUf1($_POST['cidUf1']);
			$vo->setCidUf2($_POST['cidUf2']);			
            $vo->setCidUf3($_POST['cidUf3']);
			$vo->setProduto1($_POST['produto1']); 
			$vo->setProduto2($_POST['produto2']); 			
            $vo->setProduto3($_POST['produto3']); 
			$vo->setLotMinimo1($_POST['lotMinimo1']);
			$vo->setLotMinimo2($_POST['lotMinimo2']);			
            $vo->setLotMinimo3($_POST['lotMinimo3']);
			$vo->setRelacionamento1($_POST['relacionamento1']);
			$vo->setRelacionamento2($_POST['relacionamento2']);			
            $vo->setRelacionamento3($_POST['relacionamento3']);			
            $vo->setMesAno1 ($_POST['mesAno1']);
			$vo->setMesAno2 ($_POST['mesAno2']);
			$vo->setMesAno3 ($_POST['mesAno3']);
			$vo->setMesAno4 ($_POST['mesAno4']);
			$vo->setMesAno5 ($_POST['mesAno5']);
			$vo->setMesAno6 ($_POST['mesAno6']);
			$vo->setCompra1($_POST['compra1']);
			$vo->setCompra2($_POST['compra2']);
			$vo->setCompra3($_POST['compra3']);
			$vo->setCompra4($_POST['compra4']);
			$vo->setCompra5($_POST['compra5']);			
            $vo->setCompra6($_POST['compra6']);
			                   
// Clientes
           
            $vo->setQuantCli($_POST['quantCli']);
            $vo->seClasseA($_POST['classeA']);
			$vo->seClasseB($_POST['classeB']);
			$vo->seClasseC($_POST['classeC']);
			$vo->seClasseD($_POST['classeD']);
			$vo->setIdade1($_POST['idade1']);
			$vo->setIdade2($_POST['idade2']);
			$vo->setIdade3($_POST['idade3']);         
            $vo->setIdade4($_POST['idade4']);
            $vo->setMasc($_POST['masc']);
            $vo->setFem($_POST['fem']);          
            $vo->setVendEmpS($_POST['vendEmpS']);      
            $vo->setVendEmpN($_POST['vendEmpN']);			
            $vo->setPesqCli1($_POST['pesqCli1']);	 
            $vo->setPesqCli2($_POST['pesqCli2']);	
            $vo->setPesqCli3($_POST['pesqCli3']);				
             
// Recursos Humanos  
            
			$vo->setQtdColab($_POST['qtdColab']);
			$vo->setColabT1($_POST['colabT1']);		   
            $vo->setColabT2($_POST['colabT2']);
			$vo->setEscola1($_POST['escola1']);			
            $vo->setEscola2($_POST['escola2']);
			$vo->setEscola3($_POST['escola3']);
			$vo->setContColab1($_POST['contColab1']);   
			$vo->setContColab2($_POST['contColab2']);   			
            $vo->setContColab3($_POST['contColab3']);   
			$vo->setFatPrior1($_POST['fatPrior1']); 
			$vo->setFatPrior2($_POST['fatPrior2']); 			
            $vo->setFatPrior3($_POST['fatPrior3']); 
			$vo->setAtivMotiv1($_POST['ativMotiv1']);  
			$vo->setAtivMotiv2($_POST['ativMotiv2']);  			
            $vo->setAtivMotiv3($_POST['ativMotiv3']);  
            $vo->setDemiCont($_POST['demiCont']);
            
// Administ Finan Contabil
            
			$vo->setTipoM1($_POST['tipoM1']);
			$vo->setTipoM2($_POST['tipoM2']);
			$vo->setTipoM3($_POST['tipoM3']);
			$vo->setTipoM4($_POST['tipoM4']);
			$vo->setTipoM5($_POST['tipoM5']);
			$vo->setTipoM6($_POST['tipoM6']);
			$vo->setTipoM7($_POST['tipoM7']);
			$vo->setTipoM8($_POST['tipoM8']);
			$vo->setTipoI1($_POST['tipoI1']); 
			$vo->setTipoI2($_POST['tipoI2']); 
			$vo->setTipoI3($_POST['tipoI3']); 
			$vo->setTipoI4($_POST['tipoI4']); 
			$vo->setTipoI5($_POST['tipoI5']); 
			$vo->setTipoI6($_POST['tipoI6']); 
			$vo->setTipoI7($_POST['tipoI7']); 			
            $vo->setTipoI8($_POST['tipoI8']);
			$vo->setPlaneja1($_POST['planeja1']); 	
            $vo->setPlaneja2($_POST['planeja2']);  			
            $vo->setRecursoTer1($_POST['recursoTer1']);
			$vo->setRecursoTer2($_POST['recursoTer2']); 
			$vo->setRecursoTer3($_POST['recursoTer3']); 
			$vo->setRecursoTer4($_POST['recursoTer4']); 
			$vo->setRecursoTer5($_POST['recursoTer5']); 
			$vo->setRecursoTer6($_POST['recursoTer6']);			
            $vo->setMaiorG1($_POST['maiorG1']);   
			$vo->setMaiorG2($_POST['maiorG2']); 
			$vo->setMaiorG3($_POST['maiorG3']); 
			$vo->setMaiorG4($_POST['maiorG4']); 
			$vo->setMaiorG5($_POST['maiorG5']); 
			$vo->setMaiorG6($_POST['maiorG6']); 
			$vo->setMaiorG7($_POST['maiorG7']); 
			$vo->setMaiorG8($_POST['maiorG8']);        
            
// Jurid
            
			$vo->setImpostoEmpS($_POST['impostoEmpS']);
            $vo->setMpostoEmpN($_POST['mpostoEmpN']);			
            $vo->setAutuacaoFiscS($_POST['autuacaoFiscS']);
			$vo->setAutuacaoFiscN($_POST['autuacaoFiscN']);
			$vo->setAcaoJudicialS($_POST['acaoJudicialS']);			
            $vo->setAcaoJudicialN($_POST['acaoJudicialN']); 
			$vo->setTratFor1($_POST['tratFor1']); 			
            $vo->setTratFor2($_POST['tratFor2']); 
			$vo->setCobanEmp1($_POST['cobanEmp1']); 
			$vo->setCobanEmp2($_POST['cobanEmp2']); 			
            $vo->setCobanEmp3($_POST['cobanEmp3']);
			$vo->setCobanEmp4($_POST['cobanEmp4']); 			
            $vo->setAcessJuridicaS($_POST['acessJuridicaS']); 
			$vo->setAcessJuridicaN($_POST['acessJuridicaN']);  			
            $vo->setParcerAcic($_POST['parcerAcic']);
			$vo->setParcerUnipar($_POST['parcerUnipar']);
            
           
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

     }

