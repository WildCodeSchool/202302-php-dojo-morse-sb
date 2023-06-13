# MORSE

Écrire une fonction qui prend en entrée du code Morse et le convertit en caractères lisibles par l’homme

Le morse est composé de succession de points et de tirets. Chaque lettre est séparée par un espace, chaque mot par 3 espaces

ex : 
    '... --- ...' donne SOS
    '.-- .. .-.. -..' donne WILD
    '.-- .. .-.. -..   -.-. --- -.. .'; donne WILD CODE

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