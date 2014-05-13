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

		<form>
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
				I.E: <input type="text" name="i.e"><br>
				Data de Fundação: <input type="text" name="dataFundacao">
				Ramo de Atividade: <input type="text" name="ramoAtividade"><br>
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
                                        <td><input type="text" name="produto1"></td>
                                        <td><input type="text" name="quantidade1"></td> 
                                        <td><input type="text" name="unidadeMed1"></td> 
                                        <td><input type="text" name="margemLucro1"></td> 
                                        <td><input type="text" name="faturamento1"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto2"></td>
                                        <td><input type="text" name="quantidade2"></td> 
                                        <td><input type="text" name="unidadeMed2"></td> 
                                        <td><input type="text" name="margemLucro2"></td> 
                                        <td><input type="text" name="faturamento2"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto3"></td>
                                        <td><input type="text" name="quantidade3"></td> 
                                        <td><input type="text" name="unidadeMed3"></td> 
                                        <td><input type="text" name="margemLucro3"></td> 
                                        <td><input type="text" name="faturamento3"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto4"></td>
                                        <td><input type="text" name="quantidade4"></td> 
                                        <td><input type="text" name="unidadeMed4"></td> 
                                        <td><input type="text" name="margemLucro4"></td> 
                                        <td><input type="text" name="faturamento4"></td> 
                                    </tr>
                                    <tr>         
                                        <td><input type="text" name="produto5"></td>
                                        <td><input type="text" name="quantidade5"></td> 
                                        <td><input type="text" name="unidadeMed5"></td> 
                                        <td><input type="text" name="margemLucro5"></td> 
                                        <td><input type="text" name="faturamento5"></td> 
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
                            <label><input type="radio" name="visita" value="Sim">Sim</label>
                            <label><input type="radio" name="visita" value="Não">Não</label>                                
                        </form><br>
                         <p3><strong>2.3</strong> - Quais são seus pontos fortes em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="atendimento" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="estacionamento" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="preco" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="variedade" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="espacoFisico" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="localizacao" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="qualidade" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="outros" value="outros">Outros</label></td>                                        
                                    </tr>
                             </table><br> 
                        <p3><strong>2.4</strong> - Quais são seus pontos para melhoria em relação a concorrência?</p3><br>
                             <table border="3" style="width:830px">
                                    <tr>         
                                        <td><label><input type="checkbox" name="atendimento" value="atendimento">Atendimento</label></td>
                                        <td><label><input type="checkbox" name="estacionamento" value="estacionamento">Estacionamento</label></td> 
                                        <td><label><input type="checkbox" name="preco" value="preco">Preço</label></td> 
                                        <td><label><input type="checkbox" name="variedade" value="variedade">Variedade</label></td>                                         
                                    </tr>
                                    <tr>                                              
                                        <td><label><input type="checkbox" name="espacoFisico" value="espacoFisico">Espaço Fisico</label></td>
                                        <td><label><input type="checkbox" name="localizacao" value="localizacao">Localização</label></td> 
                                        <td><label><input type="checkbox" name="qualidade" value="qualidade">Qualidade</label></td> 
                                        <td><label><input type="checkbox" name="outros" value="outros">Outros</label></td>                                        
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
                                        <td><label><input type="checkbox" name="radio" value="radio">Rádio</label></td>
                                        <td><label><input type="checkbox" name="jornal" value="jornal">Jornal</label></td> 
                                        <td><label><input type="checkbox" name="panfleto" value="panfleto">Panfletos</label></td> 
                                        <td><label><input type="checkbox" name="outros" value="outros">Outros</label></td>                                         
                                    </tr>  
                             </table><br>
                             <strong> <p3>2.7</strong> - O estabelecimento é bem sinalizado, dividido em seções?</p3><br>
                                <form action="">
                                    <label><input type="radio" name="sinalizacao" value="Sim">Sim</label>
                                    <label><input type="radio" name="sinalizacao" value="Não">Não</label>                                
                                </form><br>
                             <strong> <p3>2.8</strong> - Dispõe de espaços promocionais? (dispostos na loja)</p3><br>
                                <form action="">
                                    <label><input type="radio" name="espacoProm" value="Sim">Sim</label>
                                    <label><input type="radio" name="espacoProm" value="Não">Não</label>                                
                                </form><br>   
                    </fieldset>
                    <fieldset>
                        <legend><strong>3. PREÇOS</strong></legend>
                        <p3><strong>3.1</strong> - Como forma os preços de seus produtos?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="precosProd" value="porcentoSobreCusto">Percentual sobre os custos</label>
                                    <label><input type="radio" name="precosProd" value="acompMercado">Acompanhando o mercado</label> 
                                    <label><input type="radio" name="precosProd" value="outros">Outra maneira, Qual?</label> <br>
                                    <input type="text" name="outros">                                    
                            </form><br> 
                            <p3><strong>3.2</strong> - Seus preços em relação a concorrência estão?</p3><br>
                            <form action="">
                                    <label><input type="radio" name="precosConcorrencia" value="acima">Acima</label>
                                    <label><input type="radio" name="precosConcorrencia" value="iguais">Iguais</label> 
                                    <label><input type="radio" name="precosConcorrencia" value="abaixo">Abaixo</label>
                                                                      
                            </form><br>
                             
                    </fieldset>
                </form>
            

	</body>
</html>
