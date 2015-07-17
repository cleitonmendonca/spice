<?php
namespace Spice\Models\Entities;

class Curso extends \Phalcon\Mvc\Model
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
    protected $instituicao_id;

    /**
     *
     * @var integer
     */
    protected $codigo_inep;

    /**
     *
     * @var integer
     */
    protected $codigo_ies;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $nivel_academico;

    /**
     *
     * @var string
     */
    protected $grau_academico;

    /**
     *
     * @var string
     */
    protected $modalidade;

    /**
     *
     * @var string
     */
    protected $inicio_funcionamento;

    /**
     *
     * @var integer
     */
    protected $duracao_ano;

    /**
     *
     * @var integer
     */
    protected $duracao_semestre;

    /**
     *
     * @var integer
     */
    protected $turno;

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
     * Method to set the value of field instituicao_id
     *
     * @param integer $instituicao_id
     * @return $this
     */
    public function setInstituicaoId($instituicao_id)
    {
        $this->instituicao_id = $instituicao_id;

        return $this;
    }

    /**
     * Method to set the value of field codigo_inep
     *
     * @param integer $codigo_inep
     * @return $this
     */
    public function setCodigoInep($codigo_inep)
    {
        $this->codigo_inep = $codigo_inep;

        return $this;
    }

    /**
     * Method to set the value of field codigo_ies
     *
     * @param integer $codigo_ies
     * @return $this
     */
    public function setCodigoIes($codigo_ies)
    {
        $this->codigo_ies = $codigo_ies;

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
     * Method to set the value of field nivel_academico
     *
     * @param string $nivel_academico
     * @return $this
     */
    public function setNivelAcademico($nivel_academico)
    {
        $this->nivel_academico = $nivel_academico;

        return $this;
    }

    /**
     * Method to set the value of field grau_academico
     *
     * @param string $grau_academico
     * @return $this
     */
    public function setGrauAcademico($grau_academico)
    {
        $this->grau_academico = $grau_academico;

        return $this;
    }

    /**
     * Method to set the value of field modalidade
     *
     * @param string $modalidade
     * @return $this
     */
    public function setModalidade($modalidade)
    {
        $this->modalidade = $modalidade;

        return $this;
    }

    /**
     * Method to set the value of field inicio_funcionamento
     *
     * @param string $inicio_funcionamento
     * @return $this
     */
    public function setInicioFuncionamento($inicio_funcionamento)
    {
        $this->inicio_funcionamento = $inicio_funcionamento;

        return $this;
    }

    /**
     * Method to set the value of field duracao_ano
     *
     * @param integer $duracao_ano
     * @return $this
     */
    public function setDuracaoAno($duracao_ano)
    {
        $this->duracao_ano = $duracao_ano;

        return $this;
    }

    /**
     * Method to set the value of field duracao_semestre
     *
     * @param integer $duracao_semestre
     * @return $this
     */
    public function setDuracaoSemestre($duracao_semestre)
    {
        $this->duracao_semestre = $duracao_semestre;

        return $this;
    }

    /**
     * Method to set the value of field turno
     *
     * @param integer $turno
     * @return $this
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

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
     * Returns the value of field instituicao_id
     *
     * @return integer
     */
    public function getInstituicaoId()
    {
        return $this->instituicao_id;
    }

    /**
     * Returns the value of field codigo_inep
     *
     * @return integer
     */
    public function getCodigoInep()
    {
        return $this->codigo_inep;
    }

    /**
     * Returns the value of field codigo_ies
     *
     * @return integer
     */
    public function getCodigoIes()
    {
        return $this->codigo_ies;
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
     * Returns the value of field nivel_academico
     *
     * @return string
     */
    public function getNivelAcademico()
    {
        return $this->nivel_academico;
    }

    /**
     * Returns the value of field grau_academico
     *
     * @return string
     */
    public function getGrauAcademico()
    {
        return $this->grau_academico;
    }

    /**
     * Returns the value of field modalidade
     *
     * @return string
     */
    public function getModalidade()
    {
        return $this->modalidade;
    }

    /**
     * Returns the value of field inicio_funcionamento
     *
     * @return string
     */
    public function getInicioFuncionamento()
    {
        return $this->inicio_funcionamento;
    }

    /**
     * Returns the value of field duracao_ano
     *
     * @return integer
     */
    public function getDuracaoAno()
    {
        return $this->duracao_ano;
    }

    /**
     * Returns the value of field duracao_semestre
     *
     * @return integer
     */
    public function getDuracaoSemestre()
    {
        return $this->duracao_semestre;
    }

    /**
     * Returns the value of field turno
     *
     * @return integer
     */
    public function getTurno()
    {
        return $this->turno;
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
        $this->hasMany('id', 'AlunoCurso', 'curso_id', array('alias' => 'AlunoCurso'));
        $this->belongsTo('instituicao_id', 'Instituicao', 'id', array('alias' => 'Instituicao'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'curso';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Curso[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Curso
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
