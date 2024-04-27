<?php

namespace App\Repository;

use App\Model\NavLink;

class NavLinkRepository
{
    public function __construct()
    {
    }

    public function headerLinks(): array
    {
        return [
            new NavLink(
                1,
                'Apparel',
                '#apparel'
            ),
            new NavLink(
                2,
                'Resources',
                '#resources'
            ),
            new NavLink(
                3,
                'Ladies Only',
                '#ladies-only'
            ),
        ];
    }

    public function footerLinks(): array
    {
        return [
            new NavLink(
                1,
                'Apparel',
                '#apparel'
            ),
            new NavLink(
                2,
                'Resources',
                '#resources'
            ),
            new NavLink(
                3,
                'Uniform Store',
                '#uniform-store'
            ),
        ];
    }

    public function socialLinks(): array
    {
        return [
            new NavLink(
                1,
                'facebook',
                'https://facebook.com'
            ),
            new NavLink(
                2,
                'instagram',
                'https://instagram.com'
            ),
            new NavLink(
                3,
                'twitter',
                'https://twitter.com'
            ),
            new NavLink(
                4,
                'youtube',
                'https://youtube.com'
            ),
        ];
    }
}
