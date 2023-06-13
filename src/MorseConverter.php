<?php

namespace App;

class MorseConverter
{
    const MORSE_ALPHABET = [
        "-----" => "0",
        ".----" => "1",
        "..---" => "2",
        "...--" => "3",
        "....-" => "4",
        "....." => "5",
        "-...." => "6",
        "--..." => "7",
        "---.." => "8",
        "----." => "9",
        "-.-.--" => "!",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "-..-." => "/",
        ".-" => "A",
        "-..." => "B",
        "-.-." => "C",
        "-.." => "D",
        "." => "E",
        "..-." => "F",
        "--." => "G",
        "...." => "H",
        ".." => "I",
        ".---" => "J",
        "-.-" => "K",
        ".-.." => "L",
        "--" => "M",
        "-." => "N",
        "---" => "O",
        ".--." => "P",
        "--.-" => "Q",
        ".-." => "R",
        "..." => "S",
        "-" => "T",
        "..-" => "U",
        "...-" => "V",
        ".--" => "W",
        "-..-" => "X",
        "-.--" => "Y",
        "--.." => "Z",
    ];

    public const MORSE_LETTER_SEPARATOR = ' ';
    public const MORSE_WORD_SEPARATOR = '   ';

    public function decode(string $morseMessage): string
    {
        $morseWords = explode(self::MORSE_WORD_SEPARATOR, $morseMessage);

        foreach ($morseWords as $morseWord) {
            $word = '';
            $morseLetters = explode(self::MORSE_LETTER_SEPARATOR, $morseWord);
            foreach ($morseLetters as $morseLetter) {
                $letter = self::MORSE_ALPHABET[$morseLetter] ?? '';
                $word .= $letter;
            }

            $words[] = $word;
        }

        return implode(' ', $words);
    }
}
