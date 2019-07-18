<?php
declare(strict_types=1);


namespace App\Entity;

trait Timestamps
{
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\PrePersist()
     */
    public function createdAt()
    {
        $this->createdAt = new \DateTime();
        $this->updateddAt = new \DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function updatedAt()
    {
        $this->updateddAt = new \DateTime();
    }
}