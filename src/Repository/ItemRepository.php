<?php

namespace App\Repository;

use App\Model\Item;

class ItemRepository
{
    public function __construct()
    {
    }

    public function itemObjects(): array
    {
        return [
            new Item(
                1,
                'Adult Children of Emotionally Immature Parents: How to Heal from Distant, Rejecting, or Self-Involved Parents',
                'Lindsay C. Gibson Psyd',
                'images/adultchildren.png',
                13.00
            ),
            new Item(
                2,
                'Accidental Pharisees: Avoiding Pride, Exclusivity, and the Other Dangers of Overzealous Faith',
                'Larry Osbourne',
                'images/accidental.png',
                17.50
            ),
            new Item(
                3,
                '2024 Spring Daily Devotional',
                'Anonymous',
                'images/devotional.png',
                1.50
            ),
        ];
    }
}
