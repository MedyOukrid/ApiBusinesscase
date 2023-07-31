<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie implements SlugInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomSousCategorie = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSousCategorie(): ?string
    {
        return $this->nomSousCategorie;
    }

    public function setNomSousCategorie(string $nomSousCategorie): static
    {
        $this->nomSousCategorie = $nomSousCategorie;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
    public function getNom():?string{
        return $this->nomSousCategorie;
    }
}
