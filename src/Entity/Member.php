<?php

namespace App\Entity;

class Member
{
    private ?int $id;

    private ?string $firstName;

    private ?string $lastName;

    private ?string $address;

    private ?string $city;

    private ?string $zipCode;

    private ?string $guardianFirstName;

    private ?string $guardianLastName;

    private ?string $iban;

    private ?\DateTimeInterface $birthday;

    private ?string $membershipCardNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): Member
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): Member
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): Member
    {
        $this->address = $address;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Member
    {
        $this->city = $city;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): Member
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getGuardianFirstName(): ?string
    {
        return $this->guardianFirstName;
    }

    public function setGuardianFirstName(?string $guardianFirstName): Member
    {
        $this->guardianFirstName = $guardianFirstName;
        return $this;
    }

    public function getGuardianLastName(): ?string
    {
        return $this->guardianLastName;
    }

    public function setGuardianLastName(?string $guardianLastName): Member
    {
        $this->guardianLastName = $guardianLastName;
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): Member
    {
        $this->iban = $iban;
        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): Member
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getMembershipCardNumber(): ?string
    {
        return $this->membershipCardNumber;
    }

    public function setMembershipCardNumber(?string $membershipCardNumber): Member
    {
        $this->membershipCardNumber = $membershipCardNumber;
        return $this;
    }
}