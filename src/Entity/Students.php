<?php

namespace App\Entity;

use App\Repository\StudentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentsRepository::class)
 */
class Students
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="date", nullable=true, nullable=true)
     */
    private $dateBirth;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $fatherName;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $professionFather;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $motherName;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $professionMother;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $tutorName;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $professionTutor;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $adressTutor;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $contactMother;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $contactFather;

    /**
     * @ORM\Column(type="string", length=15,nullable=true)
     */
    private $contactTutor;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $adressParents;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getDateBirth(): ?\DateTimeInterface
    {
        return $this->dateBirth;
    }

    public function setDateBirth(?\DateTimeInterface $dateBirth): self
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    public function getFatherName(): ?string
    {
        return $this->fatherName;
    }

    public function setFatherName(?string $fatherName): self
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    public function getProfessionFather(): ?string
    {
        return $this->professionFather;
    }

    public function setProfessionFather(?string $professionFather): self
    {
        $this->professionFather = $professionFather;

        return $this;
    }

    public function getMotherName(): ?string
    {
        return $this->motherName;
    }

    public function setMotherName(?string $motherName): self
    {
        $this->motherName = $motherName;

        return $this;
    }

    public function getProfessionMother(): ?string
    {
        return $this->professionMother;
    }

    public function setProfessionMother(?string $professionMother): self
    {
        $this->professionMother = $professionMother;

        return $this;
    }

    public function getTutorName(): ?string
    {
        return $this->tutorName;
    }

    public function setTutorName(?string $tutorName): self
    {
        $this->tutorName = $tutorName;

        return $this;
    }

    public function getProfessionTutor(): ?string
    {
        return $this->professionTutor;
    }

    public function setProfessionTutor(string $professionTutor): self
    {
        $this->professionTutor = $professionTutor;

        return $this;
    }

    public function getAdressTutor(): ?string
    {
        return $this->adressTutor;
    }

    public function setAdressTutor(?string $adressTutor): self
    {
        $this->adressTutor = $adressTutor;

        return $this;
    }

    public function getContactMother(): ?string
    {
        return $this->contactMother;
    }

    public function setContactMother(?string $contactMother): self
    {
        $this->contactMother = $contactMother;

        return $this;
    }

    public function getContactFather(): ?string
    {
        return $this->contactFather;
    }

    public function setContactFather(?string $contactFather): self
    {
        $this->contactFather = $contactFather;

        return $this;
    }

    public function getContactTutor(): ?string
    {
        return $this->contactTutor;
    }

    public function setContactTutor(string $contactTutor): self
    {
        $this->contactTutor = $contactTutor;

        return $this;
    }

    public function getAdressParents(): ?string
    {
        return $this->adressParents;
    }

    public function setAdressParents(?string $adressParents): self
    {
        $this->adressParents = $adressParents;

        return $this;
    }
}
