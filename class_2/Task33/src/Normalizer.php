<?php 
namespace App\Normalizer;

use function Symfony\Component\String\s;
function getQuestions(string $text):string {
    $uString = s($text);
    $lines = $uString->split("\n");
    $questions = array_filter($lines, fn ($line) => $line->trim()->endsWith('?'));
    $questionsStrings = array_map(fn ($question) => $question->trim(), $questions);
    return implode("\n", $questionsStrings);
}