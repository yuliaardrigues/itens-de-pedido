<?php
class item{
    private $idItem;
    private $nome;
    private $marca;
    private $tipo;
    private $quantidade;
    private $preco;

   
    public function getIdItem()
    {
        return $this->idItem;
    }

 
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

   
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

   
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

   
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

   
    public function getPreco()
    {
        return $this->preco;
    }

   
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
}
?>