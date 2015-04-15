<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ProfesseurRepository")
 */
class Professeur extends Personne
{

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="professeur")
     */
    private $etudiant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etablissement = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add etudiant
     *
     * @param \Prof\APIBundle\Entity\Etudiant $etudiant
     * @return Professeur
     */
    public function addEtudiant(\Prof\APIBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant[] = $etudiant;

        return $this;
    }

    /**
     * Remove etudiant
     *
     * @param \Prof\APIBundle\Entity\Etudiant $etudiant
     */
    public function removeEtudiant(\Prof\APIBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant->removeElement($etudiant);
    }

    /**
     * Get etudiant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}
