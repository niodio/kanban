<?php

namespace App\Model;


class Item
{
    private $id;
    private $titulo;
    private $descricao;
    private $data_cadastro;
    private $data_update;
    private $data_termino;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * @param mixed $data_cadastro
     *
     * @return self
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataUpdate()
    {
        return $this->data_update;
    }

    /**
     * @param mixed $data_update
     *
     * @return self
     */
    public function setDataUpdate($data_update)
    {
        $this->data_update = $data_update;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataTermino()
    {
        return $this->data_termino;
    }

    /**
     * @param mixed $data_termino
     *
     * @return self
     */
    public function setDataTermino($data_termino)
    {
        $this->data_termino = $data_termino;

        return $this;
    }
}
