<?php


class Model_Cliente extends Model {
    
    public function cadastrar(Vo_Cliente $dados) {
    
        $dao = new Dao_Cliente();
        $pk = $dao->create($dados);
        
if (!empty($_POST['razao_social'])) {
return true;
} else {
	echo 'O campo Razão Social precisa ser preenchido';
	return false;
}

if (!empty($_POST['cnpj'])) {
return true;
} else {
	echo 'O campo CNPJ precisa ser preenchido';
	return false;
}

if (!empty($_POST['data_fun'])) {
return true;
} else {
	echo 'O campo Data de Fundação precisa ser preenchido';
	return false;
}

if (!empty($_POST['ramo_atv'])) {
return true;
} else {
	echo 'O campo Ramo de Atividade precisa ser preenchido';
	return false;
}

if (!empty($_POST['endereco'])) {
return true;
} else {
	echo 'O campo endereço precisa ser preenchido';
	return false;
}

if (!empty($_POST['bairro'])) {
return true;
} else {
	echo 'O campo bairro precisa ser preenchido';
	return false;
}

if (!empty($_POST['cep'])) {
return true;
} else {
	echo 'O campo CEP precisa ser preenchido';
	return false;
}

if (!empty($_POST['cidade'])) {
return true;
} else {
	echo 'O campo Cidade precisa ser preenchido';
	return false;
}

if (!empty($_POST['telefone'])) {
return true;
} else {
	echo 'O campo Telefone precisa ser preenchido';
	return false;
}

if (!empty($_POST['email'])) {
return true;
} else {
	echo 'O campo Email precisa ser preenchido';
	return false;
}
    }
    
    if (!empty($_POST['concorrente1'] && ['concorrente2']&&['concorrente3'])) {
return true;
} else {
	echo 'O campo Concorrente precisa ser preenchido pelo menos uma vez';
	return false;
}

if (!empty($_POST['pontoAten'] && ['pontoEstac']&&['pontoPreco']&&['pontoVarie']&&['pontoEspFisico']&&['pontoLocal']
&&['pontoQuali']&&['pontoOutros'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (2.4 Pontos Fortes)';
	return false;
}

if (!empty($_POST['pontoMAten'] && ['pontoMEstac']&&['pontoMPreco']&&['pontoMVarie']&&['pontoMEspFisico']&&['pontoMLocal']
&&['pontoMQuali']&&['pontoMOutros'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (2.5 Pontos Melhoria)';
	return false;
}



if (!empty($_POST['promo1'] && ['promo2']&&['promo3'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (2.6 Promoção)';
	return false;
}

if (!empty($_POST['meio1'] && ['meio2']&&['meio3']&&['meio4'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (2.7 Meios Utilizados)';
	return false;
}

if (!empty($_POST['formPreco1'] && ['formPreco2']&&['formPreco3'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (3.1 Como forma preço dos Produtos)';
	return false;
}

if (!empty($_POST['precoConc1'] && ['precoConc2']&&['precoConc3'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (3.2 Preços em relação a Concorrencia)';
	return false;
}

if (!empty($_POST['dia1'] && ['dia2']&&['dia3']&&['dia4']&&['dia5']&&['dia6']&&['dia7'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (4.2 Dias de maior Movimento)';
	return false;
}

if (!empty($_POST['horaMov1'] && ['horaMov2']&&['horaMov3'])) {
return true;
} else {
	echo 'Pelo menos um opção tem que ser selecionada! (4.3 Horario de Maior Movimento)';
	return false;
}






    }
}
