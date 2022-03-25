<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $Student;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $Teacher;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStudent(): ?User
    {
        return $this->Student;
    }

    public function setStudent(?User $Student): self
    {
        $this->Student = $Student;

        return $this;
    }

    public function getTeacher(): ?User
    {
        return $this->Teacher;
    }

    public function setTeacher(?User $Teacher): self
    {
        $this->Teacher = $Teacher;

        return $this;
    }
}
