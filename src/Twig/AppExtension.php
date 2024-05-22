<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use DateTime;

class AppExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('today', [$this, 'getToday']),
        ];
    }

    public function getToday(): string
    {
        return (new DateTime())->format('Y-m-d');
    }
}