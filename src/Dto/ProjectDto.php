<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

class ProjectDto
{
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(max: 255, maxMessage: 'Le titre ne peut pas dépasser 255 caractères.')]
    public string $title = '';

    #[Assert\NotBlank(message: 'La description est obligatoire.')]
    public string $description = '';

    #[Assert\NotBlank(message: 'Les technologies sont obligatoires.')]
    #[Assert\Length(max: 255)]
    public string $techStack = '';

    public bool $isFeatured = false;

    #[Assert\Url(message: 'Veuillez saisir une URL valide.')]
    #[Assert\Length(max: 255)]
    public ?string $githubUrl = null;

    #[Assert\Url(message: 'Veuillez saisir une URL valide.')]
    #[Assert\Length(max: 255)]
    public ?string $liveDemoUrl = null;

    #[Assert\Image(
        maxSize: '2M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp'],
        mimeTypesMessage: 'Seules les images JPEG, PNG et WEBP sont autorisées.',
    )]
    public ?UploadedFile $image = null;
}
