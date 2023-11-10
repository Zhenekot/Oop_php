<?php 
namespace App\Normalizer;
use Symfony\Component\String\UnicodeString;
function getQuestions(string $text):string {
    $uString = new UnicodeString($text);
    $lines = $uString->split("\r\n");

    $questions = array_filter($lines, fn (UnicodeString $line) => $line->trim()->endsWith('?'));

    $questionsStrings = array_map(fn (UnicodeString $question) => $question->trim()->toString(), $questions);

    return implode("\n", $questionsStrings);
}