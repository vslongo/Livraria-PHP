<?php

class Estilo{
    private int $id;
    private string $estilos;

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
     * Get the value of estilos
     */ 
    public function getEstilos()
    {
        return $this->estilos;
    }

    /**
     * Set the value of estilos
     *
     * @return  self
     */ 
    public function setEstilos($estilos)
    {
        $this->estilos = $estilos;

        return $this;
    }
}
