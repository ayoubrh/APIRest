<?php

namespace Prof\APIBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="EtablissementRepository")
 */
class Etablissement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=255)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false, options={"unsigned":true})
     */
    private $NomEtab;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Lieu;

    /**
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="etablissement")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id", nullable=false)
     */
    private $module;

    /**
     * @ORM\ManyToMany(targetEntity="Professeur", inversedBy="etablissement")
     * @ORM\JoinTable(
     *     name="Enseigner",
     *     joinColumns={@ORM\JoinColumn(name="etablissement_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="professeur_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $professeur;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->professeur = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set NomEtab
     *
     * @param string $nomEtab
     * @return Etablissement
     */
    public function setNomEtab($nomEtab)
    {
        $this->NomEtab = $nomEtab;

        return $this;
    }

    /**
     * Get NomEtab
     *
     * @return string 
     */
    public function getNomEtab()
    {
        return $this->NomEtab;
    }

    /**
     * Set Lieu
     *
     * @param string $lieu
     * @return Etablissement
     */
    public function setLieu($lieu)
    {
        $this->Lieu = $lieu;

        return $this;
    }

    /**
     * Get Lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->Lieu;
    }

    /**
     * Set module
     *
     * @param \Prof\APIBundle\Entity\Module $module
     * @return Etablissement
     */
    public function setModule(\Prof\APIBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \Prof\APIBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Add professeur
     *
     * @param \Prof\APIBundle\Entity\Professeur $professeur
     * @return Etablissement
     */
    public function addProfesseur(\Prof\APIBundle\Entity\Professeur $professeur)
    {
        $this->professeur[] = $professeur;

        return $this;
    }

    /**
     * Remove professeur
     *
     * @param \Prof\APIBundle\Entity\Professeur $professeur
     */
    public function removeProfesseur(\Prof\APIBundle\Entity\Professeur $professeur)
    {
        $this->professeur->removeElement($professeur);
    }

    /**
     * Get professeur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }
}
