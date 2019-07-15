<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployerRepository")
 * 
 */
class Employer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="matricule", type="string", length=255)
     * @Assert\NotBlank(message="Ce champs doit être renseigné")
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champs ne peut pas être vide")
     * @Assert\Length(min=8)
     */
    private $nomcomplet;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=8)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="ce champs ne peut pas être vide")
     * @Assert\GreaterThan(10000, message="Un salaire inférieur à 10.000 FCFA? Sérieux vous avez pas de coeur vous.")
     * @Assert\Positive
     */
    private $Salaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Service", inversedBy="employers")
     * @Assert\NotBlank(message="ce champs ne peut pas être vide")
     * 
     */
    private $idService;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     * @Assert\LessThan("-18 years", message="tu veux faire travailler des enfants? Tu mérite la mort")
     * @Assert\NotBlank(message="ce champs ne peut pas être vide")
     */
    private $ddn;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Ce champs ne peut pas être vide")
     */
    private $cni;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomcomplet(): ?string
    {
        return $this->nomcomplet;
    }

    public function setNomcomplet(string $nomcomplet): self
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->Salaire;
    }

    public function setSalaire(int $Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService(?Service $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getDdn(): ?\DateTimeInterface
    {
        return $this->ddn;
    }

    public function setDdn(\DateTimeInterface $ddn): self
    {
        $this->ddn = $ddn;

        return $this;
    }

    public function getCni(): ?int
    {
        return $this->cni;
    }

    public function setCni(int $cni): self
    {
        $this->cni = $cni;

        return $this;
    }
}
