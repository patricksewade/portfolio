<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;

class ChangePasswordDto
{
    #[Assert\NotBlank(message: 'Veuillez saisir votre mot de passe actuel.')]
    #[SecurityAssert\UserPassword(message: 'Le mot de passe actuel est incorrect.')]
    public string $currentPassword = '';

    #[Assert\NotBlank(message: 'Veuillez saisir le nouveau mot de passe.')]
    #[Assert\Length(min: 8, minMessage: 'Le mot de passe doit faire au moins 8 caractères.')]
    public string $newPassword = '';

    #[Assert\NotBlank(message: 'Veuillez confirmer le nouveau mot de passe.')]
    #[Assert\EqualTo(propertyPath: 'newPassword', message: 'Les nouveaux mots de passe ne correspondent pas.')]
    public string $confirmPassword = '';
}
