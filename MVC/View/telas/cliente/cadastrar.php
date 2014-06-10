<?php
if (isset($this->dados['erro'])) {
   
?>

<p><?php echo $this->dados['erro']; ?></p>

<?php  
}
?>


<html>
	<head>
		<title>Formulario de Cadastro</title>
        <p>Projeto CIAPE – Centro Integrado de Apoio a Projetos Empresariais – UNIPAR/ACIC</p>
	</head>
	<body>
        <style>
                .textbox { 
                border: 1px solid #c4c4c4; 
                 
                font-size: 13px; 
                padding: 4px 4px 4px 4px; 
                border-radius: 4px; 
                -moz-border-radius: 4px; 
                -webkit-border-radius: 4px; 
                box-shadow: 0px 0px 8px #d9d9d9; 
                -moz-box-shadow: 0px 0px 8px #d9d9d9; 
                -webkit-box-shadow: 0px 0px 8px #d9d9d9; 
                } 
 
                .textbox:focus { 
                 outline: none; 
                 border: 1px solid #7bc1f7; 
                box-shadow: 0px 0px 8px #7bc1f7; 
                -moz-box-shadow: 0px 0px 8px #7bc1f7; 
                -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
                } 
                body {
                    background-color: lavender;                  
                }
                table, td th
                {
                    border: 3px solid gray;
                    width:400px;                    
                }
                th{
                    background-color: gray;
                    color:lightskyblue;
                }
                p {
                     text-indent: 970px;
                    font-size: 10px;
                }
                
            </style>
		<form action="cadastrar-usuarios.php" method="POST">
                    <img src="logounipar.png">
                    <img src="logoacic.png">
                    <center><h3>TERMO DE ADESÃO - PROJETO CIAPE UNIPAR/ACIC</h3></center>
                    <p2><strong>Informações Gerais:</strong></p2><p1> o questionário destina-se exclusivamente a obtenção de informações das
empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por finalidade criar indicadores
que permitirão comparar a evolução das empresas ao longo do processo. As informações
deverão ser fornecidas pelo proprietário, considerando a real situação da empresa. Não será
divulgado nenhum tipo de informações contidas neste documento.</p1>
                   <fieldset>
                        <legend><strong> 1. DADOS PESSOAIS</strong></legend>
                                Razão Social: <input type="text" name="razao"><br>
                Nome Fantasia: <input type="text" name="nomefan"><br>
                CNPJ: <input type="text" name="cnpj">
                I.E: <input type="text" name="inscEst"><br>
                Data de Fundação: <input type="text" name="dataFun">
                Ramo de Atividade: <input type="text" name="ramoAtiv"><br>
                Endereço: <input type="text" name="endereco">
                                Bairro: <input type="text" name="bairro"><br>
                                CEP: <input type="text" name="cep"><br>
                                UF: <select>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AL">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select><br>                     
                                Cidade: <input type="text" name="cidade"><br>                                
                                Fone: <input type="text" name="fone">
                                Email: <input type="text" name="email"><br>
                                <table border="3" style="width:350px">
                                    <tr>         
                                        <td><strong>Sócios</strong><br>
                                            a)<input type="text" name="socio1"><br>
                                            b)<input type="text" name="socio2"><br>
                                            c)<input type="text" name="socio3"><br>
                                            d)<input type="text" name="socio4"><br>
                                            e)<input type="text" name="socio5"><br>
                                        </td>                                       
                                        <td>Cargo ocupado na empresa<br>
                                            a)<input type="text" name="cargo1"><br>
                                            b)<input type="text" name="cargo2"><br>
                                            c)<input type="text" name="cargo3"><br>
                                            d)<input type="text" name="cargo4"><br>
                                            e)<input type="text" name="cargo5"><br>
                                        </td>                                       
                                    </tr>                                      
                                </table>                         
                    </fieldset><br>
                    <fieldset>
                        <legend><strong>2. MARKETING/COMUNICAÇÃO</strong></legend>
                        <table border="3" style="width:850px">
                                    <tr>         
                                        <td><strong>Produtos mais vendidos</strong></td>
                                        <td><strong>Quantidade mensal</strong></td> 
                                        <td><strong>Unidade de medida(Kg, m³, pç)</strong></td> 
                                        <td><strong>% margem de lucro</strong></td> 
                                        <td><strong>% do faturamento</strong></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="prodMVen1"></td>
                                        <td><input type="text" name="qtdM1"></td> 
                                        <td><input type="text" name="undMed1"></td> 
                                        <td><input type="text" name="margeLuc1"></td> 
                                        <td><input type="text" name="fatura1"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="prodMVen2"></td>
                                        <td><input type="text" name="qtdM2"></td> 
                                        <td><input type="text" name="undMed2"></td> 
                                        <td><input type="text" name="margeLuc2"></td> 
                                        <td><input type="text" name="fatura2"></td>  
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="prodMVen3"></td>
                                        <td><input type="text" name="qtdM3"></td> 
                                        <td><input type="text" name="undMed3"></td> 
                                        <td><input type="text" name="margeLuc3"></td> 
                                        <td><input type="text" name="fatura3"></td>  
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="prodMVen4"></td>
                                        <td><input type="text" name="qtdM4"></td> 
                                        <td><input type="text" name="undMed4"></td> 
                                        <td><input type="text" name="margeLuc4"></td> 
                                        <td><input type="text" name="fatura4"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="prodMVen5"></td>
                                        <td><input type="text" name="qtdM5"></td> 
                                        <td><input type="text" name="undMed5"></td> 
                                        <td><input type="text" name="margeLuc5"></td> 
                                        <td><input type="text" name="fatura5"></td> 
                                    </tr>
                        </table> <br>
                         <p3><strong>2.1</strong> - Quem são seus concorrentes?</p3><br>
                        <table border="3" style="width:600px">
                                    <tr>         
                                        <td>A.<input type="text" name="concorrente1"></td>                                       
                                        <td>B.<input type="text" name="concorrente2"></td>
                                        <td>C.<input type="text" name="concorrente3"></td> 
                                    </tr>                                      
                        </table><br>
                        <strong> <p3>2.2</strong> - Você visita a concorrencia?</p3><br>
                        <form action="">
                            <label><input type="radio" name="visitConcoS" value="Sim">Sim</label>
                            <label><input type="radio" name="visitConcoN" value="Não">Não</label>                                
                        </form><br>
                         <p3><strong>2.3</strong> - Quais são seus pontos fortes em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="pontoAten" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="pontoEstac" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="pontoPreco" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="pontoVarie" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="pontoEspFisico" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="pontoLocal" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="pontoQuali" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="pontoOutros" value="outros">Outros</label></td>                                        
                                    </tr>
                             </table><br> 
                        <p3><strong>2.4</strong> - Quais são seus pontos para melhoria em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="pontoMAten" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="pontoMEstac" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="pontoMPreco" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="pontoMVarie" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="pontoMEspFisico" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="pontoMLocal" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="pontoMQuali" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="pontoMOutros" value="outros">Outros</label></td>                                         
                                    </tr>
                             </table><br> 
                             <strong> <p3>2.5</strong> - Faz Promoções?</p3><br>
                                <form action="">
                                    <label><input type="radio" name="promo1" value="Mais2xMes">Mais de duas vezes ao mês</label>
                                    <label><input type="radio" name="promo2" value="UmaVezMes">Uma vez ao mês</label>
                                    <label><input type="radio" name="promo3" value="NãoFaz">Não, nunca faço</label> 
                                </form><br>
                             <p3><strong>2.6</strong> - Quais meios utiliza?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="meio1" value="radio">Rádio</label></td>
                                        <td><label><input type="checkbox" name="meio2" value="jornal">Jornal</label></td> 
                                        <td><label><input type="checkbox" name="meio3" value="panfleto">Panfletos</label></td> 
                                        <td><label><input type="checkbox" name="meio4" value="outros">Outros</label></td>                                         
                                    </tr>  
                             </table><br>
                             <strong> <p3>2.7</strong> - O estabelecimento é bem sinalizado, dividido em seções?</p3><br>
                                <form action="">
                                    <label><input type="radio" name="estSinalS" value="Sim">Sim</label>
                                    <label><input type="radio" name="estSinalN" value="Não">Não</label>                                
                                </form><br>
                             <strong> <p3>2.8</strong> - Dispõe de espaços promocionais? (dispostos na loja)</p3><br>
                                <form action="">
                                    <label><input type="radio" name="espPromoS" value="Sim">Sim</label>
                                    <label><input type="radio" name="espPromoN" value="Não">Não</label>                                
                                </form><br>   
                    </fieldset>
                    <fieldset>
                        <legend><strong>3. PREÇOS</strong></legend>
                        <p3><strong>3.1</strong> - Como forma os preços de seus produtos?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="formPreco1" value="porcentoSobreCusto">Percentual sobre os custos</label>
                                    <label><input type="radio" name="formPreco2" value="acompMercado">Acompanhando o mercado</label> 
                                    <label><input type="radio" name="formPreco3" value="outros">Outra maneira, Qual?</label> <br>
                                    <input type="text" name="formPreco">                                    
                            </form><br> 
                            <p3><strong>3.2</strong> - Seus preços em relação a concorrência estão?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="precoConc1" value="acima">Acima</label>
                                    <label><input type="radio" name="precoConc2" value="iguais">Iguais</label> 
                                    <label><input type="radio" name="precoConc3" value="abaixo">Abaixo</label>
                                                                      
                            </form><br>
                             
                    </fieldset>
                    <fieldset>
                        <legend><strong>4. VENDA</strong></legend>
                        <p3><strong>4.1</strong> - Faturamento dos últimos 6 meses (do mais recente para o anterior).</p3><br>
                        <table border="3" style="width:850px">
                                    <tr>         
                                        <td><strong>Mês/Ano</strong></td>
                                        <td><strong>Faturamento em R$</strong></td> 
                                        <td><strong>Mês/Ano</strong></td> 
                                        <td><strong>Faturamento em R$</strong></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno1"></td>
                                        <td><input type="text" name="faturamento1"></td> 
                                        <td><input type="text" name="mesAno2"></td>
                                        <td><input type="text" name="faturamento2"></td>    
                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno3"></td>
                                        <td><input type="text" name="faturamento3"></td> 
                                        <td><input type="text" name="mesAno4"></td>
                                        <td><input type="text" name="faturamento4"></td>    
                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno5"></td>
                                        <td><input type="text" name="faturamento5"></td> 
                                        <td><input type="text" name="mesAno6"></td>
                                        <td><input type="text" name="faturamento6"></td>                                       
                                    </tr>
                        </table><br>
                        <p3><strong>4.2</strong> - Dias da semana de maior movimento? Período do mês:</p3>  
                        <input type="text" name="periodoMes1"> a <input type="text" name="periodoMes2"><br>
                        <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="dia1" value="segunda">Seg</label></td>
                                        <td><label><input type="checkbox" name="dia2" value="terça">Ter</label></td> 
                                        <td><label><input type="checkbox" name="dia3" value="quarta">Qua</label></td> 
                                        <td><label><input type="checkbox" name="dia4" value="quinta">Qui</label></td>  
                                        <td><label><input type="checkbox" name="dia5" value="sexta">Sex</label></td> 
                                        <td><label><input type="checkbox" name="dia6" value="sábado">Sáb</label></td> 
                                        <td><label><input type="checkbox" name="dia7" value="domingo">Dom</label></td> 
                                    </tr>  
                             </table><br>
                        <p3><strong>4.3</strong> - Quais horários de maior movimento?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="horaMov1" value="manha">Manhã</label>
                                    <label><input type="radio" name="horaMov2" value="tarde">Tarde</label> 
                                    <label><input type="radio" name="horaMov3" value="noite">Noite</label> <br>                                                                       
                            </form><br>
                        <p3><strong>4.4</strong> - Forma de pagamento oferecidas aos clientes?</p3>
                            <table border="3" style="width:800px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="formPag1" value="cheque">Cheque pré-datado</label></td>
                                        <td><label><input type="checkbox" name="formPag2" value="ticket">Ticket</label></td> 
                                        <td><label><input type="checkbox" name="formPag3" value="cartaoCred">Cartão de crédito</label></td>                                          
                                    </tr>  
                                    <tr>
                                        <td><label><input type="checkbox" name="formPag4" value="caderneta">Caderneta</label></td>  
                                        <td><label><input type="checkbox" name="formPag5" value="vista">a vista</label></td> 
                                        <td><label><input type="checkbox" name="formPag6" value="outro">Outra? Qual?</label></td>                                       
                                    
                                    </tr>
                                    <tr>
                                        <td>Outros:<input type="text" name="outros"></td>
                                    </tr>    
                             </table><br>
                             <p3><strong>4.5</strong> - Qual o valor médio de compras por cliente?</p3>
                            <table border="3" style="width:600px">
                                    <tr>         
                                        <td>Por Vez:<input type="text" name="valorMedioP"></td>
                                        <td>Mensal:<input type="text" name="valorMedioM"></td>
                                    </tr>
                            </table>
                    </fieldset>
                    <fieldset>
                        <legend><strong>5. COMPRAS</strong></legend>
                        
                        <p3><strong>5.1</strong> - Quais são seus principais fornecedores?</p3>
                        <table border="3" style="width:850px">
                                    <tr>         
                                        <td><strong>Razão Social/Fantasia</strong></td>
                                        <td><strong>Cidade - UF</strong></td> 
                                        <td><strong>Produtos</strong></td> 
                                        <td><strong>Exigência Lote mínimo. Qual?</strong></td> 
                                        <td><strong>Relacionamento</strong></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant1"></td>
                                        <td><input type="text" name="cidUf1"></td> 
                                        <td><input type="text" name="produto1"></td> 
                                        <td><input type="text" name="lotMinimo1"></td> 
                                        <td><input type="text" name="relacionamento1"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant2"></td>
                                        <td><input type="text" name="cidUf2"></td> 
                                        <td><input type="text" name="produto2"></td> 
                                        <td><input type="text" name="lotMinimo2"></td> 
                                        <td><input type="text" name="relacionamento2"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant3"></td>
                                        <td><input type="text" name="cidUf3"></td> 
                                        <td><input type="text" name="produto3"></td> 
                                        <td><input type="text" name="lotMinimo3"></td> 
                                        <td><input type="text" name="relacionamento3"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant4"></td>
                                        <td><input type="text" name="cidUf4"></td> 
                                        <td><input type="text" name="produto4"></td> 
                                        <td><input type="text" name="lotMinimo4"></td> 
                                        <td><input type="text" name="relacionamento4"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant5"></td>
                                        <td><input type="text" name="cidUf5"></td> 
                                        <td><input type="text" name="produto5"></td> 
                                        <td><input type="text" name="lotMinimo5"></td> 
                                        <td><input type="text" name="relacionamento5"></td> 
                                    </tr>
                                    
                        </table><br>
                        <p3><strong>5.2</strong> - Qual valor das suas compras nos últimos 6 meses? (do mais recente para o anterior).</p3><br>
                        <table border="3" style="width:850px">
                                    <tr>         
                                        <td><strong>Mês/Ano</strong></td>
                                        <td><strong>Compras em R$</strong></td> 
                                        <td><strong>Mês/Ano</strong></td> 
                                        <td><strong>Compras em R$</strong></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno1"></td>
                                        <td><input type="text" name="compra1"></td> 
                                        <td><input type="text" name="mesAno2"></td>
                                        <td><input type="text" name="compra2"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno3"></td>
                                        <td><input type="text" name="compra3"></td> 
                                        <td><input type="text" name="mesAno4"></td>
                                        <td><input type="text" name="compra4"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="mesAno5"></td>
                                        <td><input type="text" name="compra5"></td> 
                                        <td><input type="text" name="mesAno6"></td>
                                        <td><input type="text" name="compra6"></td>                                        
                                    </tr>
                                    
                        </table><br>
                    </fieldset>
                    <fieldset>
                        <legend><strong>6. CLIENTES</strong></legend>
                        <p3><strong>6.1</strong> - Quantos clientes atende por mês?</p3>
                        <input type="text" name="quantCli"><br>
                        <p3><strong>6.2</strong> - Qual é o perfil do seu cliente?.</p3><br>
                        <table border="3" style="width:900px">
                                    <tr>         
                                        <td><strong>%Classe A</strong><input type="text" name="classeA"></td>
                                        <td><strong>%Classe B</strong><input type="text" name="classeB"></td> 
                                        <td><strong>%Classe C</strong><input type="text" name="classeC"></td> 
                                        <td><strong>%Classe D</strong><input type="text" name="classeD"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><strong>%0 a 18 anos</strong><input type="text" name="idade1"></td>
                                        <td><strong>%19 a 30 anos</strong><input type="text" name="idade2"></td> 
                                        <td><strong>%31 a 45 anos</strong><input type="text" name="idade3"></td> 
                                        <td><strong>%Acima de 46 anos</strong><input type="text" name="idade4"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><strong>%Masculino</strong><input type="text" name="masc"></td>
                                        <td><strong>%Feminino</strong><input type="text" name="fem"></td> 
                                                                                
                                    </tr>                                
                        </table><br>
                        <p3><strong>6.3</strong> - Vende para empresas?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="vendEmpS" value="Sim">Sim, Quantos % representa do total do faturamento?</label>                                     
                                    <label><input type="radio" name="vendEmpN" value="nao">Não</label> <br>
                                    <input type="text" name="outros">                                    
                            </form><br>
                        <p3><strong>6.4</strong> - Faz pesquisas com seus clientes?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="pesqCli1" value="Sim">Sim, frequência?</label>  
                                    <label><input type="radio" name="pesqCli2" value="nao">Não, mas já fiz.</label>
                                    <label><input type="radio" name="pesqCli3" value="nao">Nunca fiz.</label> <br>
                                    <input type="text" name="frequencia">                                    
                            </form><br>                         
                    </fieldset>
                    <fieldset>
                        <legend><strong>7. RECURSOS HUMANOS</strong></legend>
                        <p3><strong>7.1</strong> - Quantos colaboradores possui?</p3>
                        <input type="text" name="qtdColab"><br>
                        <p3><strong>7.2</strong> - Faz pesquisas com seus clientes?</p3>
                            <form action="">
                                    <label><input type="radio" name="colabT1" value="Sim">Sim. Em que área?</label>  
                                    <label><input type="radio" name="colabT2" value="nao">Não.</label> <br>
                                    <input type="text" name="area">                                    
                            </form><br> 
                            <p3><strong>7.3</strong> - Qual a escolaridade dos que trabalham na empresa?</p3>
                            <form action="">
                                    <label><input type="radio" name="escola1" value="Segundo">Segundo grau</label>  
                                    <label><input type="radio" name="escola2" value="Superior">Superior</label> 
                                    <label><input type="radio" name="escola3" value="PosGrad">Pós-graduação</label> <br>
                            </form>   
                            <p3><strong>7.4</strong> - Que critérios utiliza para contratação de colaboradores?</p3>
                            <form action="">
                                    <label><input type="radio" name="contColab1" value="Indica">Indicação.</label>  
                                    <label><input type="radio" name="contColab2" value="Entrev">Entrevista.</label>
                                    <label><input type="radio" name="contColab3" value="AnaliseCurri">Análise de Currículum.</label> <br>
                            </form> 
                            <p3><strong>7.5</strong> - Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</p3>
                            <form action="">
                                    <label><input type="radio" name="fatPrior1" value="aparencia">Aparência.</label>  
                                    <label><input type="radio" name="fatPrior2" value="boaVontade">Boa vontade.</label> 
                                    <label><input type="radio" name="fatPrior3" value="experiencia">Experiência.</label> <br>
                            </form> 
                            <p3><strong>7.6</strong> - Que tipo de atividades realiza para manter seus funcionários motivados?</p3>
                            <form action="">
                                    <label><input type="radio" name="ativMotiv1" value="festaEsp">Festas Especiais.</label>  
                                    <label><input type="radio" name="ativMotiv2" value="partic">Participação no lucro.</label> 
                                    <label><input type="radio" name="ativMotiv3" value="outros">Outros.</label> <br>
                            </form> 
                            <p3><strong>7.7</strong> - Quantas demissões X Contratações por ano? Por quê?</p3><br>
                             <input type="text" name="demiCont"><br>
                    </fieldset>
                    <fieldset>
                        <legend><strong>8. ADMINISTRATIVO/FINANCEIRO/CONTÁBIL</strong></legend>
                        <p3><strong>8.1</strong> - Que tipo de controle utiliza? Caso não possua alguns dos controles, deixar em branco.</p3><br>
                         <table border="3" style="width:900px">
                                    <tr>         
                                        <td><strong>Tipos de controle</strong></td>
                                        <td><strong>Manual</strong></td> 
                                        <td><strong>Informatizado</strong></td> 
                                        <td><strong>Tipos de controle</strong></td>
                                        <td><strong>Manual</strong></td> 
                                        <td><strong>Informatizado</strong></td> 
                                    </tr>
                                    <tr>         
                                        <td>Fluxo de caixa</td>
                                        <td><input type="text" name="tipoM1"></td> 
                                        <td><input type="text" name="tipoM2"></td> 
                                        <td>Adm. de compras</td> 
                                        <td><input type="text" name="tipoM3"></td> 
                                        <td><input type="text" name="tipoM4"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Controle de estoque</td>
                                        <td><input type="text" name="tipoM5"></td> 
                                        <td><input type="text" name="tipoM6"></td> 
                                        <td>Adm. de vendas</td> 
                                        <td><input type="text" name="tipoM7"></td> 
                                        <td><input type="text" name="tipoM8"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Contas a pagar</td>
                                        <td><input type="text" name="tipoI1"></td> 
                                        <td><input type="text" name="tipoI2"></td> 
                                        <td>Faturamento</td> 
                                        <td><input type="text" name="tipoI3"></td> 
                                        <td><input type="text" name="tipoI4"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Contas a receber</td>
                                        <td><input type="text" name="tipoI5"></td> 
                                        <td><input type="text" name="tipoI6"></td> 
                                        <td>Outros</td> 
                                        <td><input type="text" name="tipoI7"></td> 
                                        <td><input type="text" name="tipoI8"></td> 
                                    </tr>                                    
                        </table> <br>
                        <p3><strong>8.2</strong> - Realiza Planejamentos?</p3>
                            <form action="">
                                    <label><input type="radio" name="planeja1" value="Sim">Sim. Em que área?</label>  
                                    <label><input type="radio" name="planeja2" value="nao">Não.</label> <br>
                                    <input type="text" name="area">                                    
                            </form><br> 
                        <p3><strong>8.3</strong> - Trabalha ou já obteve recursos de terceiros?</p3>
                            <form action="">
                                
                                    <label><input type="radio" name="recursoTer1" value="nao">Não.</label>  
                                    <label><input type="radio" name="recursoTer2" value="nao">Sim.</label>
                                    <label><input type="radio" name="recursoTer3" value="nao">Cheque especial.</label> 
                                    <label><input type="radio" name="recursoTer4" value="nao">Emprestimo.</label>
                                    <label><input type="radio" name="recursoTer5" value="nao">Factoring.</label>
                                    <label><input type="radio" name="recursoTer6" value="nao">Outros: </label>
                                    <input type="text" name="outros">                                    
                            </form><br> 
                            <p3><strong>8.4</strong> - Quais são seus maiores gastos?</p3>
                            <table border="3" style="width:800px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="maiorG1" value="cheque">Frete</label></td>
                                        <td><label><input type="checkbox" name="maiorG2" value="ticket">Energia elétrica</label></td> 
                                        <td><label><input type="checkbox" name="maiorG3" value="cartaoCred">Folha de pagamento</label></td>                                          
                                    </tr>  
                                    <tr>
                                        <td><label><input type="checkbox" name="maiorG4" value="caderneta">Financeiros</label></td>  
                                        <td><label><input type="checkbox" name="maiorG5" value="vista">Manutenção geral</label></td> 
                                        <td><label><input type="checkbox" name="maiorG6" value="outro">Impostos</label></td>                                       
                                    
                                    </tr>
                                    <tr>
                                        <td><label><input type="checkbox" name="maiorG7" value="caderneta">Aluguel</label></td>                                        
                                        <td><label><input type="checkbox" name="maiorG8" value="outro">Outra? Qual?</label></td>                                      
                                    
                                    </tr>
                                    <tr>
                                        <td>Outros:<input type="text" name="outros"></td>
                                    </tr>    
                             </table><br>
                    </fieldset>
                    <fieldset>
                        <legend><strong>9. JURIDICO</strong></legend>
                        <p3><strong>9.1</strong> - Você conhece todos os impostos devidos pela sua empresa?</p3>
                            <form action="">
                                    <label><input type="radio" name="impostoEmpS" value="Sim">Sim.</label>  
                                    <label><input type="radio" name="impostoEmpN" value="nao">Não.</label> <br>
                            </form>  
                        <p3><strong>9.2</strong> - Você já recebeu alguma autuação de fiscalização?</p3>
                            <form action="">
                                    <label><input type="radio" name="autuacaoFiscS" value="Sim">Sim.</label>  
                                    <label><input type="radio" name="autuacaoFiscN" value="nao">Não.</label> <br>
                            </form>
                        <p3><strong>9.3</strong> - Sua empresa está respondendo alguma ação judicial, inclusive trabalhista?</p3>
                            <form action="">
                                    <label><input type="radio" name="acaoJudicialS" value="Sim">Sim.</label>  
                                    <label><input type="radio" name="acaoJudicialN" value="nao">Não.</label> <br>
                            </form>
                        <p3><strong>9.4</strong> - Suas tratativas com seus fornecedores são:</p3>
                            <form action="">
                                    <label><input type="radio" name="tratFor1" value="verbais">Verbais.</label>  
                                    <label><input type="radio" name="tratFor1" value="contratos">Com contrato.</label> <br>
                            </form>
                        <p3><strong>9.5</strong> - Como você realiza suas cobranças na empresa?</p3>
                            <form action="">
                                    <label><input type="radio" name="cobanEmp1" value="EmpCobranca">Empresa de cobrança.</label>  
                                    <label><input type="radio" name="cobanEmp2" value="Colab">Colaborador.</label> 
                                    <label><input type="radio" name="cobanEmp3" value="Pessoalmente">Pessoalmente.</label> 
                                    <label><input type="radio" name="cobanEmp4" value="Outros">Outros.</label> <br>
                            </form>
                        <p3><strong>9.6</strong> - Tem assessoria jurídica?</p3>
                            <form action="">
                                    <label><input type="radio" name="acessJuridicaS" value="Sim">Sim.</label>  
                                    <label><input type="radio" name="acessJuridicaN" value="nao">Não.</label> <br>
                            </form>
                    </fieldset>
                    <strong><p3>Observações:</p3></strong><br>
                    <textarea name="parcerAcic" rows="6" cols="60"></textarea><br><br>
                    <input type="submit" value="Cadastrar">
                    <input type="submit" value="Listar">
                    <input type="button" value="Excluir">
                </form>
            

    </body>
</html>