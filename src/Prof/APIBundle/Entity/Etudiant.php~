<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="EtudiantRepository")
 */
class Etudiant extends Personne
{
    /**
     * @ORM\Column(type="integer", length=10, nullable=true)
     */
    private $CNE;

    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     */
    private $NoteC1;

    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     */
    private $NoteC2;

    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     */
    private $NoteEx;

    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     */
    private $Autre;

    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     */
    private $NoteF;

    /**
     * @ORM\ManyToMany(targetEntity="Module", mappedBy="etudiant")
     */
    private $module;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->module = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set CNE
     *
     * @param integer $cNE
     * @return Etudiant
     */
    public function setCNE($cNE)
    {
        $this->CNE = $cNE;

        return $this;
    }

    /**
     * Get CNE
     *
     * @return integer 
     */
    public function getCNE()
    {
        return $this->CNE;
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
     * Add module
     *
     * @param \Prof\APIBundle\Entity\Module $module
     * @return Etudiant
     */
    public function addModule(\Prof\APIBundle\Entity\Module $module)
    {
        $this->module[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \Prof\APIBundle\Entity\Module $module
     */
    public function removeModule(\Prof\APIBundle\Entity\Module $module)
    {
        $this->module->removeElement($module);
    }

    /**
     * Get module
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModule()
    {
        return $this->module;
    }
}
