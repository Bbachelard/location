<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteDec = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteSpor = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteTyro = null;

    #[ORM\Column(nullable: true)]
    private ?int $moneyCB = null;

    #[ORM\Column(nullable: true)]
    private ?int $moneyCheque = null;

    #[ORM\Column(nullable: true)]
    private ?int $moneyEspece = null;

    #[ORM\Column(nullable: true)]
    private ?int $money = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateJour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getQuantiteDec(): ?int
    {
        return $this->quantiteDec;
    }

    public function setQuantiteDec(?int $quantiteDec): static
    {
        $this->quantiteDec = $quantiteDec;

        return $this;
    }

    public function getQuantiteSpor(): ?int
    {
        return $this->quantiteSpor;
    }

    public function setQuantiteSpor(?int $quantiteSpor): static
    {
        $this->quantiteSpor = $quantiteSpor;

        return $this;
    }

    public function getQuantiteTyro(): ?int
    {
        return $this->quantiteTyro;
    }

    public function setQuantiteTyro(?int $quantiteTyro): static
    {
        $this->quantiteTyro = $quantiteTyro;

        return $this;
    }

    public function getMoneyCB(): ?int
    {
        return $this->moneyCB;
    }

    public function setMoneyCB(?int $moneyCB): static
    {
        $this->moneyCB = $moneyCB;

        return $this;
    }

    public function getMoneyCheque(): ?int
    {
        return $this->moneyCheque;
    }

    public function setMoneyCheque(?int $moneyCheque): static
    {
        $this->moneyCheque = $moneyCheque;

        return $this;
    }

    public function getMoneyEspece(): ?int
    {
        return $this->moneyEspece;
    }

    public function setMoneyEspece(?int $moneyEspece): static
    {
        $this->moneyEspece = $moneyEspece;

        return $this;
    }

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(?int $moneyCB, int $moneyCheque, int  $moneyEspece): static
    {
        $this->money =  $moneyCB+$moneyCheque+$moneyEspece;

        return $this;
    }

    public function getDateJour(): ?\DateTimeInterface
    {
        return $this->dateJour;
    }

    public function setDateJour(\DateTimeInterface $dateJour): static
    {
        $this->dateJour = $dateJour;

        return $this;
    }
    public function isDate($dateD){
        return $this->dateJour == $dateD;
    }
    
}
