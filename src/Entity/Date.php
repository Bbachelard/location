<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DateRepository::class)]
class Date
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateActual = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateUtile = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateActual(): ?\DateTimeInterface
    {
        return $this->dateActual;
    }

    public function setDateActual(\DateTimeInterface $dateActual): static
    {
        $this->dateActual = $dateActual;

        return $this;
    }

    public function getDateUtile(): ?\DateTimeInterface
    {
        return $this->dateUtile;
    }

    public function setDateUtile(\DateTimeInterface $dateUtile): static
    {
        $this->dateUtile = $dateUtile;

        return $this;
    }
}
