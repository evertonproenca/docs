<?php


class Model_Cliente extends Model {
    
    public function cadastrar(Vo_Cliente $dados) {
    
        $dao = new Dao_Cliente();
        $pk = $dao->create($dados);
    }
    
}
