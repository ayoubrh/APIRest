<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ProfesseurRepository")
 */
class Professeur extends Personne
{
    /**
     * @ORM\ManyToMany(targetEntity="Etablissement", mappedBy="professeur")
     */
    private $etablissement;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etablissement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etablissement
     *
     * @param \Prof\APIBundle\Entity\Etablissement $etablissement
     * @return Professeur
     */
    public function addEtablissement(\Prof\APIBundle\Entity\Etablissement $etablissement)
    {
        $this->etablissement[] = $etablissement;

        return $this;
    }

    /**
     * Remove etablissement
     *
     * @param \Prof\APIBundle\Entity\Etablissement $etablissement
     */
    public function removeEtablissement(\Prof\APIBundle\Entity\Etablissement $etablissement)
    {
        $this->etablissement->removeElement($etablissement);
    }

    /**
     * Get etablissement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
