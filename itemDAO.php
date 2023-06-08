<?php
require_once 'item.php';

class itemDAO {
    public function create (Item $item) {
        $sql = 'INSERT INTO item (idItem, nome, marca, tipo, quantidade, preco) VALUES (?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $item->getidItem());
        $stmt->bindValue(2, $item->getNome());
        $stmt->bindValue(3, $item->getMarca());
        $stmt->bindValue(4, $item->getTipo());
        $stmt->bindValue(5, $item->getQuantidade());
        $stmt->bindValue(6, $item->getPreco());
    }
}

?>