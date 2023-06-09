<?php

namespace App\Service;

use Symfony\Component\String\UnicodeString;

class WordFilterService
{
    public function filterWords(string $text): string
    {
        // List of inappropriate words
        $inappropriateWords = [
            'badword1',
            'badword2',
            // Add more inappropriate words here
        ];

        // Replace inappropriate words with asterisks
        foreach ($inappropriateWords as $word) {
            $text = (new UnicodeString($text))->replace($word, '***')->toString();
        }

        return $text;
    }

}
