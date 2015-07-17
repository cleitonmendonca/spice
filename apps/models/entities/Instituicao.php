<?php

namespace Spice\Models\Entities;

class Instituicao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $categoria_id;

    /**
     *
     * @var integer
     */
    protected $codigo;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $cnpj;

    /**
     *
     * @var string
     */
    protected $sigla;

    /**
     *
     * @var string
     */
    protected $responsavel;

    /**
     *
     * @var string
     */
    protected $cadastrado;

    /**
     *
     * @var string
     */
    protected $alterado;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field categoria_id
     *
     * @param integer $categoria_id
     * @return $this
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }

    /**
     * Method to set the value of field codigo
     *
     * @param integer $codigo
     * @return $this
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field cnpj
     *
     * @param string $cnpj
     * @return $this
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Method to set the value of field sigla
     *
     * @param string $sigla
     * @return $this
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Method to set the value of field responsavel
     *
     * @param string $responsavel
     * @return $this
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Method to set the value of field cadastrado
     *
     * @param string $cadastrado
     * @return $this
     */
    public function setCadastrado($cadastrado)
    {
        $this->cadastrado = $cadastrado;

        return $this;
    }

    /**
     * Method to set the value of field alterado
     *
     * @param string $alterado
     * @return $this
     */
    public function setAlterado($alterado)
    {
        $this->alterado = $alterado;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field categoria_id
     *
     * @return integer
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * Returns the value of field codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Returns the value of field sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Returns the value of field responsavel
     *
     * @return string
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Returns the value of field cadastrado
     *
     * @return string
     */
    public function getCadastrado()
    {
        return $this->cadastrado;
    }

    /**
     * Returns the value of field alterado
     *
     * @return string
     */
    public function getAlterado()
    {
        return $this->alterado;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Curso', 'instituicao_id', array('alias' => 'Curso'));
        $this->hasMany('id', 'Polo', 'instituicao_id', array('alias' => 'Polo'));
        $this->belongsTo('categoria_id', 'Categoria', 'id', array('alias' => 'Categoria'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'instituicao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Instituicao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Instituicao
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
