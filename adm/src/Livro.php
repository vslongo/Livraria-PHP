<?php

class Livros
{
    private int $id;
    private string $titulo;
    private string $autor;
    private int $isbn;
    private string $editora;
    private string $edicao;
    private string $data;
    private string $estilo;
    private float $valor;
    private string $text;
    private $capa;
    private int $promo;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of editora
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @return  self
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of edicao
     */
    public function getEdicao()
    {
        return $this->edicao;
    }

    /**
     * Set the value of edicao
     *
     * @return  self
     */
    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;

        return $this;
    }

    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of estilo
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set the value of estilo
     *
     * @return  self
     */
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of capa
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     *
     * @return  self
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }

    /**
     * Get the value of promo
     */ 
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     *
     * @return  self
     */ 
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }
}
