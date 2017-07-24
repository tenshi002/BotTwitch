<?php

namespace modeles;

/**
 * Quest
 */
class Quest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idViewer;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $recompense;

    /**
     * @var string
     */
    private $resultat;

    /**
     * @var \modeles\Quest
     */
    private $personne;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idViewer
     *
     * @param integer $idViewer
     *
     * @return Quest
     */
    public function setIdViewer($idViewer)
    {
        $this->idViewer = $idViewer;

        return $this;
    }

    /**
     * Get idViewer
     *
     * @return integer
     */
    public function getIdViewer()
    {
        return $this->idViewer;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Quest
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Quest
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set recompense
     *
     * @param integer $recompense
     *
     * @return Quest
     */
    public function setRecompense($recompense)
    {
        $this->recompense = $recompense;

        return $this;
    }

    /**
     * Get recompense
     *
     * @return integer
     */
    public function getRecompense()
    {
        return $this->recompense;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     *
     * @return Quest
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set personne
     *
     * @param \modeles\Quest $personne
     *
     * @return Quest
     */
    public function setPersonne(\modeles\Quest $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \modeles\Quest
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}