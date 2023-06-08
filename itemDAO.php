<?php
require_once 'item.php';

class itemDAO {
    public function create (Item $item) {
        $sql = 'INSERT INTO item (nome, marca, tipo, quantidade, preco) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
    }
}

?>