<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TasikRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Tasik
{
    use Timestamps;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isComplite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TaskList", inversedBy="tasks")
     */
    private $list;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Note", mappedBy="task")
     */
    private $notes;

    public function __construct()
    {
        $this->notes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIsComplite(): ?bool
    {
        return $this->isComplite;
    }

    public function setIsComplite(bool $isComplite): self
    {
        $this->isComplite = $isComplite;

        return $this;
    }

    public function getList(): ?TaskList
    {
        return $this->list;
    }

    public function setList(?TaskList $list): self
    {
        $this->list = $list;

        return $this;
    }

    /**
     * @return Collection|Note[]
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes[] = $note;
            $note->setTask($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->contains($note)) {
            $this->notes->removeElement($note);
            // set the owning side to null (unless already changed)
            if ($note->getTask() === $this) {
                $note->setTask(null);
            }
        }

        return $this;
    }
}
