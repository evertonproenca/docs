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
	</head>
	<body>

		<form action="cadastrar-usuarios.php" method="POST">

                    <center><h3>TERMO DE ADESÃO - PROJETO CIAPE UNIPAR/ACIC</h3></center>
                    <p2><strong>Informações Gerais:</strong></p2><p1> o questionário destina-se exclusivamente a obtenção de informações das
empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por finalidade criar indicadores
que permitirão comparar a evolução das empresas ao longo do processo. As informações
deverão ser fornecidas pelo proprietário, considerando a real situação da empresa. Não será
divulgado nenhum tipo de informações contidas neste documento.</p1>
                    <fieldset>
                        <legend><strong> 1. DADOS PESSOAIS</strong></legend>
                                Razão Social: <input type="text" name="razaosocial"><br>
				Nome Fantasia: <input type="text" name="nomefantasia"><br>
				CNPJ: <input type="text" name="cnpj">
				I.E: <input type="text" name="insc_est"><br>
				Data de Fundação: <input type="text" name="data_fund">
				Ramo de Atividade: <input type="text" name="ramo_atv"><br>
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
                                Fone: <input type="text" name="telefone">
                                Email: <input type="text" name="email"><br>
                                <table border="3" style="width:350px">
                                    <tr>         
                                        <td><strong>Sócios</strong><br>
                                            a)<input type="text" name="socio"><br>
                                            b)<input type="text" name="socio"><br>
                                            c)<input type="text" name="socio"><br>
                                            d)<input type="text" name="socio"><br>
                                            e)<input type="text" name="socio"><br>
                                        </td>                                       
                                        <td>Cargo ocupado na empresa<br>
                                            a)<input type="text" name="cargo"><br>
                                            b)<input type="text" name="cargo"><br>
                                            c)<input type="text" name="cargo"><br>
                                            d)<input type="text" name="cargo"><br>
                                            e)<input type="text" name="cargo"><br>
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
                                        <td><input type="text" name="produto_Mven"></td>
                                        <td><input type="text" name="qtde_Mens"></td> 
                                        <td><input type="text" name="und_Med"></td> 
                                        <td><input type="text" name="marg_lucro"></td> 
                                        <td><input type="text" name="faturamento"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto_Mven"></td>
                                        <td><input type="text" name="qtde_Mens"></td> 
                                        <td><input type="text" name="und_Med"></td> 
                                        <td><input type="text" name="marg_lucro"></td> 
                                        <td><input type="text" name="faturamento"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto_Mven"></td>
                                        <td><input type="text" name="qtde_Mens"></td> 
                                        <td><input type="text" name="und_Med"></td> 
                                        <td><input type="text" name="marg_lucro"></td> 
                                        <td><input type="text" name="faturamento"></td>  
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto_Mven"></td>
                                        <td><input type="text" name="qtde_Mens"></td> 
                                        <td><input type="text" name="und_Med"></td> 
                                        <td><input type="text" name="marg_lucro"></td> 
                                        <td><input type="text" name="faturamento"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto_Mven"></td>
                                        <td><input type="text" name="qtde_Mens"></td> 
                                        <td><input type="text" name="und_Med"></td> 
                                        <td><input type="text" name="marg_lucro"></td> 
                                        <td><input type="text" name="faturamento"></td> 
                                    </tr>
                        </table> <br>
                         <p3><strong>2.1</strong> - Quem são seus concorrentes?</p3><br>
                        <table border="3" style="width:600px">
                                    <tr>         
                                        <td>A.<input type="text" name="concorrente"></td>                                       
                                        <td>B.<input type="text" name="concorrente"></td>
                                        <td>C.<input type="text" name="concorrente"></td> 
                                    </tr>                                      
                        </table><br>
                        <strong> <p3>2.2</strong> - Você visita a concorrencia?</p3><br>
                        <form action="">
                            <label><input type="radio" name="vi_concorrente" value="Sim">Sim</label>
                            <label><input type="radio" name="vi_concorrente" value="Não">Não</label>                                
                        </form><br>
                         <p3><strong>2.3</strong> - Quais são seus pontos fortes em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="ponto_forte" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="ponto_forte" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="ponto_forte" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="ponto_forte" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="ponto_forte" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="ponto_forte" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="ponto_forte" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="ponto_forte" value="outros">Outros</label></td>                                        
                                    </tr>
                             </table><br> 
                        <p3><strong>2.4</strong> - Quais são seus pontos para melhoria em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="ponto_melhoria" value="outros">Outros</label></td>                                        
                                    </tr>
                             </table><br> 
                             <strong> <p3>2.5</strong> - Faz Promoções?</p3><br>
                                <form action="">
                                    <label><input type="radio" name="promocao" value="Mais2xMes">Mais de duas vezes ao mês</label>
                                    <label><input type="radio" name="promocao" value="UmaVezMes">Uma vez ao mês</label>
                                    <label><input type="radio" name="promocao" value="NãoFaz">Não, nunca faço</label> 
                                </form><br>
                             <p3><strong>2.6</strong> - Quais meios utiliza?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="meio_ut" value="radio">Rádio</label></td>
                                        <td><label><input type="checkbox" name="meio_ut" value="jornal">Jornal</label></td> 
                                        <td><label><input type="checkbox" name="meio_ut" value="panfleto">Panfletos</label></td> 
                                        <td><label><input type="checkbox" name="meio_ut" value="outros">Outros</label></td>                                         
                                    </tr>  
                             </table><br>
                             <strong> <p3>2.7</strong> - O estabelecimento é bem sinalizado, dividido em seções?</p3><br>
                                <form action="">
                                    <label><input type="radio" name="sinalizacao" value="Sim">Sim</label>
                                    <label><input type="radio" name="sinalizacao" value="Não">Não</label>                                
                                </form><br>
                             <strong> <p3>2.8</strong> - Dispõe de espaços promocionais? (dispostos na loja)</p3><br>
                                <form action="">
                                    <label><input type="radio" name="espaco_prom" value="Sim">Sim</label>
                                    <label><input type="radio" name="espaco_prom" value="Não">Não</label>                                
                                </form><br>   
                    </fieldset>
                    <fieldset>
                        <legend><strong>3. PREÇOS</strong></legend>
                        <p3><strong>3.1</strong> - Como forma os preços de seus produtos?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="forma_preco" value="porcentoSobreCusto">Percentual sobre os custos</label>
                                    <label><input type="radio" name="forma_preco" value="acompMercado">Acompanhando o mercado</label> 
                                    <label><input type="radio" name="forma_preco" value="outros">Outra maneira, Qual?</label> <br>
                                    <input type="text" name="forma_preco">                                    
                            </form><br> 
                            <p3><strong>3.2</strong> - Seus preços em relação a concorrência estão?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="preco_conc" value="acima">Acima</label>
                                    <label><input type="radio" name="preco_conc" value="iguais">Iguais</label> 
                                    <label><input type="radio" name="preco_conc" value="abaixo">Abaixo</label>
                                                                      
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
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td> 
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td>   
                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td> 
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td>
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td> 
                                        <td><input type="text" name="fat_MesAno"></td>
                                        <td><input type="text" name="fat_valor"></td>
                                    </tr>
                                    
                        </table><br>
                        <p3><strong>4.2</strong> - Dias da semana de maior movimento? Período do mês:</p3>  
                        <input type="text" name="dataInicio"> a <input type="text" name="dataFim"><br>
                        <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="seg" value="segunda">Seg</label></td>
                                        <td><label><input type="checkbox" name="ter" value="terça">Ter</label></td> 
                                        <td><label><input type="checkbox" name="qua" value="quarta">Qua</label></td> 
                                        <td><label><input type="checkbox" name="qui" value="quinta">Qui</label></td>  
                                        <td><label><input type="checkbox" name="sex" value="sexta">Sex</label></td> 
                                        <td><label><input type="checkbox" name="sab" value="sábado">Sáb</label></td> 
                                        <td><label><input type="checkbox" name="dom" value="domingo">Dom</label></td> 
                                    </tr>  
                             </table><br>
                        <p3><strong>4.3</strong> - Quais horários de maior movimento?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="MovPeriodoDia" value="manha">Manhã</label>
                                    <label><input type="radio" name="MovPeriodoDia" value="tarde">Tarde</label> 
                                    <label><input type="radio" name="MovPeriodoDia" value="noite">Noite</label> <br>                                                                       
                            </form><br>
                        <p3><strong>4.4</strong> - Forma de pagamento oferecidas aos clientes?</p3>
                            <table border="3" style="width:800px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="chequePre" value="cheque">Cheque pré-datado</label></td>
                                        <td><label><input type="checkbox" name="ticket" value="ticket">Ticket</label></td> 
                                        <td><label><input type="checkbox" name="cartaoCred" value="cartaoCred">Cartão de crédito</label></td>                                          
                                    </tr>  
                                    <tr>
                                        <td><label><input type="checkbox" name="caderneta" value="caderneta">Caderneta</label></td>  
                                        <td><label><input type="checkbox" name="aVista" value="vista">a vista</label></td> 
                                        <td><label><input type="checkbox" name="outro" value="outro">Outra? Qual?</label></td>                                       
                                    
                                    </tr>
                                    <tr>
                                        <td>Outros:<input type="text" name="outros"></td>
                                    </tr>    
                             </table><br>
                             <p3><strong>4.5</strong> - Qual o valor médio de compras por cliente?</p3>
                            <table border="3" style="width:600px">
                                    <tr>         
                                        <td>Por Vez:<input type="text" name="outros"></td>
                                        <td>Mensal:<input type="text" name="outros"></td>
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
                                        <td><input type="text" name="CidUf1"></td> 
                                        <td><input type="text" name="Prod1"></td> 
                                        <td><input type="text" name="LoteMin1"></td> 
                                        <td><input type="text" name="Relac1"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant2"></td>
                                        <td><input type="text" name="CidUf2"></td> 
                                        <td><input type="text" name="Prod2"></td> 
                                        <td><input type="text" name="LoteMin2"></td> 
                                        <td><input type="text" name="Relac2"></td>  
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant3"></td>
                                        <td><input type="text" name="CidUf3"></td> 
                                        <td><input type="text" name="Prod3"></td> 
                                        <td><input type="text" name="LoteMin3"></td> 
                                        <td><input type="text" name="Relac1"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant4"></td>
                                        <td><input type="text" name="CidUf4"></td> 
                                        <td><input type="text" name="Prod4"></td> 
                                        <td><input type="text" name="LoteMin4"></td> 
                                        <td><input type="text" name="Relac4"></td>  
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="razaoFant4"></td>
                                        <td><input type="text" name="CidUf4"></td> 
                                        <td><input type="text" name="Prod4"></td> 
                                        <td><input type="text" name="LoteMin4"></td> 
                                        <td><input type="text" name="Relac4"></td> 
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
                                        <td><input type="text" name="FatMesAno1"></td>
                                        <td><input type="text" name="FatRS1"></td> 
                                        <td><input type="text" name="FatMesAno2"></td>
                                        <td><input type="text" name="FatRS2"></td>  
                                        
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="FatMesAno3"></td>
                                        <td><input type="text" name="FatRS3"></td> 
                                        <td><input type="text" name="FatMesAno4"></td>
                                        <td><input type="text" name="FatRS4"></td>
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="FatMesAno5"></td>
                                        <td><input type="text" name="FatRS5"></td> 
                                        <td><input type="text" name="FatMesAno6"></td>
                                        <td><input type="text" name="FatRS6"></td>
                                    </tr>
                                    
                        </table><br>
                    </fieldset>
                    <fieldset>
                        <legend><strong>6. CLIENTES</strong></legend>
                        <p3><strong>6.1</strong> - Quantos clientes atende por mês?</p3>
                        <input type="text" name="qtdeCli"><br>
                        <p3><strong>6.2</strong> - Qual é o perfil do seu cliente?.</p3><br>
                        <table border="3" style="width:900px">
                                    <tr>         
                                        <td><strong>%Classe A</strong><input type="text" name="FatMesAno1"></td>
                                        <td><strong>%Classe B</strong><input type="text" name="FatMesAno1"></td> 
                                        <td><strong>%Classe C</strong><input type="text" name="FatMesAno1"></td> 
                                        <td><strong>%Classe D</strong><input type="text" name="FatMesAno1"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><strong>%0 a 18 anos</strong><input type="text" name="FatMesAno1"></td>
                                        <td><strong>%19 a 30 anos</strong><input type="text" name="FatMesAno1"></td> 
                                        <td><strong>%31 a 45 anos</strong><input type="text" name="FatMesAno1"></td> 
                                        <td><strong>%Acima de 46 anos</strong><input type="text" name="FatMesAno1"></td>                                        
                                    </tr>
                                    <tr>         
                                        <td><strong>%Masculino</strong><input type="text" name="FatMesAno1"></td>
                                        <td><strong>%Feminino</strong><input type="text" name="FatMesAno1"></td> 
                                                                                
                                    </tr>                                
                        </table><br>
                        <p3><strong>6.3</strong> - Vende para empresas?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="VendeEmp" value="Sim">Sim, Quantos % representa do total do faturamento?</label>                                     
                                    <label><input type="radio" name="VendeEmp" value="nao">Não</label> <br>
                                    <input type="text" name="outros">                                    
                            </form><br>
                        <p3><strong>6.4</strong> - Faz pesquisas com seus clientes?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="PesqCli" value="Sim">Sim, frequência?</label>  
                                    <label><input type="radio" name="PesqCli" value="nao">Não, mas já fiz.</label>
                                    <label><input type="radio" name="PesqCli" value="nao">Nunca fiz.</label> <br>
                                    <input type="text" name="frequencia">                                    
                            </form><br>                         
                    </fieldset>
                    <fieldset>
                        <legend><strong>7. RECURSOS HUMANOS</strong></legend>
                        <p3><strong>7.1</strong> - Quantos colaboradores possui?</p3>
                        <input type="text" name="qtdeColab"><br>
                        <p3><strong>7.2</strong> - Faz pesquisas com seus clientes?</p3>
                            <form action="">
                                    <label><input type="radio" name="PesqCli" value="Sim">Sim. Em que área?</label>  
                                    <label><input type="radio" name="PesqCli" value="nao">Não.</label> <br>
                                    <input type="text" name="area">                                    
                            </form><br> 
                            <p3><strong>7.3</strong> - Qual a escolaridade dos que trabalham na empresa?</p3>
                            <form action="">
                                    <label><input type="radio" name="escTrab" value="Segundo">Segundo grau</label>  
                                    <label><input type="radio" name="escTrab" value="Superior">Superior</label> 
                                    <label><input type="radio" name="escTrab" value="PosGrad">Pós-graduação</label> <br>
                            </form>   
                            <p3><strong>7.4</strong> - Que critérios utiliza para contratação de colaboradores?</p3>
                            <form action="">
                                    <label><input type="radio" name="contColab" value="Indica">Indicação.</label>  
                                    <label><input type="radio" name="contColab" value="Entrev">Entrevista.</label>
                                    <label><input type="radio" name="contColab" value="AnaliseCurri">Análise de Currículum.</label> <br>
                            </form> 
                            <p3><strong>7.5</strong> - Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</p3>
                            <form action="">
                                    <label><input type="radio" name="escolCand" value="aparencia">Aparência.</label>  
                                    <label><input type="radio" name="escolCand" value="boaVontade">Boa vontade.</label> 
                                    <label><input type="radio" name="escolCand" value="experiencia">Experiência.</label> <br>
                            </form> 
                            <p3><strong>7.6</strong> - Que tipo de atividades realiza para manter seus funcionários motivados?</p3>
                            <form action="">
                                    <label><input type="radio" name="attFunc" value="festaEsp">Festas Especiais.</label>  
                                    <label><input type="radio" name="attFunc" value="partic">Participação no lucro.</label> 
                                    <label><input type="radio" name="attFunc" value="outros">Outros.</label> <br>
                            </form> 
                            <p3><strong>7.7</strong> - Quantas demissões X Contratações por ano? Por quê?</p3><br>
                             <input type="text" name="qtdeDemxqtdeCont"><br>
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
                                        <td><input type="text" name="quantidade1"></td> 
                                        <td><input type="text" name="unidadeMed1"></td> 
                                        <td>Adm. de compras</td> 
                                        <td><input type="text" name="faturamento1"></td> 
                                        <td><input type="text" name="faturamento5"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Controle de estoque</td>
                                        <td><input type="text" name="quantidade2"></td> 
                                        <td><input type="text" name="unidadeMed2"></td> 
                                        <td>Adm. de vendas</td> 
                                        <td><input type="text" name="faturamento2"></td> 
                                        <td><input type="text" name="faturamento5"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Contas a pagar</td>
                                        <td><input type="text" name="quantidade3"></td> 
                                        <td><input type="text" name="unidadeMed3"></td> 
                                        <td>Faturamento</td> 
                                        <td><input type="text" name="faturamento3"></td> 
                                        <td><input type="text" name="faturamento5"></td> 
                                    </tr>
                                    <tr>         
                                        <td>Contas a receber</td>
                                        <td><input type="text" name="quantidade4"></td> 
                                        <td><input type="text" name="unidadeMed4"></td> 
                                        <td>Outros</td> 
                                        <td><input type="text" name="faturamento4"></td> 
                                        <td><input type="text" name="faturamento5"></td> 
                                    </tr>                                    
                        </table> <br>
                        <p3><strong>8.2</strong> - Realiza Planejamentos?</p3>
                            <form action="">
                                    <label><input type="radio" name="RealPlan" value="Sim">Sim. Em que área?</label>  
                                    <label><input type="radio" name="RealPlan" value="nao">Não.</label> <br>
                                    <input type="text" name="area">                                    
                            </form><br> 
                        <p3><strong>8.3</strong> - Trabalha ou já obteve recursos de terceiros?</p3>
                            <form action="">
                                
                                    <label><input type="radio" name="RecurTer" value="nao">Não.</label>  
                                    <label><input type="radio" name="RecurTer" value="nao">Sim.</label>
                                    <label><input type="radio" name="ChequeEs" value="nao">Cheque especial.</label> 
                                    <label><input type="radio" name="Empres" value="nao">Emprestimo.</label>
                                    <label><input type="radio" name="Fact" value="nao">Factoring.</label>
                                    <label><input type="radio" name="Outros" value="nao">Outros: </label>
                                    <input type="text" name="outros">                                    
                            </form><br> 
                            <p3><strong>8.4</strong> - Quais são seus maiores gastos?</p3>
                            <table border="3" style="width:800px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="chequePre" value="cheque">Frete</label></td>
                                        <td><label><input type="checkbox" name="ticket" value="ticket">Energia elétrica</label></td> 
                                        <td><label><input type="checkbox" name="cartaoCred" value="cartaoCred">Folha de pagamento</label></td>                                          
                                    </tr>  
                                    <tr>
                                        <td><label><input type="checkbox" name="caderneta" value="caderneta">Financeiros</label></td>  
                                        <td><label><input type="checkbox" name="aVista" value="vista">Manutenção geral</label></td> 
                                        <td><label><input type="checkbox" name="outro" value="outro">Impostos</label></td>                                       
                                    
                                    </tr>
                                    <tr>
                                        <td><label><input type="checkbox" name="caderneta" value="caderneta">Aluguel</label></td>                                        
                                        <td><label><input type="checkbox" name="outro" value="outro">Outra? Qual?</label></td>                                      
                                    
                                    </tr>
                                    <tr>
                                        <td>Outros:<input type="text" name="outros"></td>
                                    </tr>    
                             </table><br>
                    </fieldset>
                    <input type="submit" value="Cadastrar">
                    <input type="submit" value="Listar">
                    <input type="button" value="Excluir">
                </form>
            

	</body>
</html>
