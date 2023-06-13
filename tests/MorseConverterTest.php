<?php

use App\MorseConverter;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class MorseConverterTest extends TestCase
{
    public function testOneLetter()
    {
        $morseConverter = new MorseConverter();
        $this->assertSame("A", $morseConverter->decode(".-"));
        $this->assertSame("B", $morseConverter->decode("-..."));
    }

    public function testTwoLetters()
    {
        $morseConverter = new MorseConverter();
        $this->assertSame("AB", $morseConverter->decode(".- -..."));
    }

    public function testWord()
    {
        $morseConverter = new MorseConverter();
        $this->assertSame("WILD", $morseConverter->decode(".-- .. .-.. -.."));
    }

    public function testSentence()
    {
        $morseConverter = new MorseConverter();
        $this->assertSame("WILD CODE", $morseConverter->decode(".-- .. .-.. -..   -.-. --- -.. ."));
        $this->assertSame("WILD CODE SOS", $morseConverter->decode(".-- .. .-.. -..   -.-. --- -.. .   ... --- ..."));
        $this->assertSame("1?", $morseConverter->decode(".---- ..--.."));
        $this->assertSame("1 ?", $morseConverter->decode(".----   ..--.."));
    }

    public function testBlank()
    {
        $morseConverter = new MorseConverter();
        $this->assertSame("", $morseConverter->decode(""));
    }
}
