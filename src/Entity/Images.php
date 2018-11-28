<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImagesRepository")
 */
class Images
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a jpeg or png file.")
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png" })
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="all_images", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $pseudo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getPseudo(): ?User
    {
        return $this->pseudo;
    }

    public function setPseudo(User $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
