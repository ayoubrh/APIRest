<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="EtudiantRepository")
 */
class Etudiant extends Personne
{

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NoteC1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NoteC2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NoteEx;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Autre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NoteF;

    /**
     * @ORM\ManyToOne(targetEntity="Professeur", inversedBy="$etudiant")
     * @ORM\JoinColumn(name="profeseur_id", referencedColumnName="id", nullable=true)
     */
    private $professeur;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->NoteC1 = "0";
        $this->NoteC2 = "0";
        $this->NoteEx = "0";
        $this->Autre = "0";
        $this->NoteF = "0";
    }



    /**
     * Set NoteC1
     *
     * @param float $noteC1
     * @return Etudiant
     */
    public function setNoteC1($noteC1)
    {
        $this->NoteC1 = $noteC1;

        return $this;
    }

    /**
     * Get NoteC1
     *
     * @return float 
     */
    public function getNoteC1()
    {
        return $this->NoteC1;
    }

    /**
     * Set NoteC2
     *
     * @param float $noteC2
     * @return Etudiant
     */
    public function setNoteC2($noteC2)
    {
        $this->NoteC2 = $noteC2;

        return $this;
    }

    /**
     * Get NoteC2
     *
     * @return float 
     */
    public function getNoteC2()
    {
        return $this->NoteC2;
    }

    /**
     * Set NoteEx
     *
     * @param float $noteEx
     * @return Etudiant
     */
    public function setNoteEx($noteEx)
    {
        $this->NoteEx = $noteEx;

        return $this;
    }

    /**
     * Get NoteEx
     *
     * @return float 
     */
    public function getNoteEx()
    {
        return $this->NoteEx;
    }

    /**
     * Set Autre
     *
     * @param float $autre
     * @return Etudiant
     */
    public function setAutre($autre)
    {
        $this->Autre = $autre;

        return $this;
    }

    /**
     * Get Autre
     *
     * @return float 
     */
    public function getAutre()
    {
        return $this->Autre;
    }

    /**
     * Set NoteF
     *
     * @param float $noteF
     * @return Etudiant
     */
    public function setNoteF($noteF)
    {
        $this->NoteF = $noteF;

        return $this;
    }

    /**
     * Get NoteF
     *
     * @return float 
     */
    public function getNoteF()
    {
        return $this->NoteF;
    }

    /**
     * Set professeur
     *
     * @param \Prof\APIBundle\Entity\Professeur $professeur
     * @return Etudiant
     */
    public function setProfesseur(\Prof\APIBundle\Entity\Professeur $professeur = null)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get professeur
     *
     * @return \Prof\APIBundle\Entity\Professeur 
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }
}
