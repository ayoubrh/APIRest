<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ModuleRepository")
 */
class Module
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=255)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $NomMod;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $DateDebut;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $DateFin;

    /**
     * @ORM\OneToMany(targetEntity="Etablissement", mappedBy="module")
     */
    private $etablissement;

    /**
     * @ORM\ManyToMany(targetEntity="Etudiant", inversedBy="module")
     * @ORM\JoinTable(
     *     name="Suivre",
     *     joinColumns={@ORM\JoinColumn(name="module_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="etudiant_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $etudiant;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etablissement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiant = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set NomMod
     *
     * @param string $nomMod
     * @return Module
     */
    public function setNomMod($nomMod)
    {
        $this->NomMod = $nomMod;

        return $this;
    }

    /**
     * Get NomMod
     *
     * @return string 
     */
    public function getNomMod()
    {
        return $this->NomMod;
    }

    /**
     * Set DateDebut
     *
     * @param \DateTime $dateDebut
     * @return Module
     */
    public function setDateDebut($dateDebut)
    {
        $this->DateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get DateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * Set DateFin
     *
     * @param \DateTime $dateFin
     * @return Module
     */
    public function setDateFin($dateFin)
    {
        $this->DateFin = $dateFin;

        return $this;
    }

    /**
     * Get DateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * Add etablissement
     *
     * @param \Prof\APIBundle\Entity\Etablissement $etablissement
     * @return Module
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

    /**
     * Add etudiant
     *
     * @param \Prof\APIBundle\Entity\Etudiant $etudiant
     * @return Module
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
