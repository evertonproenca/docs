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
    
}
