<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class ContactDto
{
    #[Assert\NotBlank(message: 'Votre nom est obligatoire.')]
    #[Assert\Length(max: 255)]
    public string $name = '';

    #[Assert\NotBlank(message: 'Votre adresse e-mail est obligatoire.')]
    #[Assert\Email(message: 'L\'adresse e-mail n\'est pas valide.')]
    #[Assert\Length(max: 255)]
    public string $email = '';

    #[Assert\NotBlank(message: 'Le sujet est obligatoire.')]
    #[Assert\Length(max: 255)]
    public string $subject = '';

    #[Assert\NotBlank(message: 'Le message est obligatoire.')]
    #[Assert\Length(min: 10, minMessage: 'Le message doit contenir au moins 10 caractères.')]
    public string $message = '';
}
