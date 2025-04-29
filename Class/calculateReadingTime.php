<?php

class ReadingTimeCalculator {
    private int $wordsPerMinute;

    public function __construct(int $wordsPerMinute = 200) {
        $this->wordsPerMinute = $wordsPerMinute;
    }

    public function calculateTime(string $text): string {
        $wordCount = str_word_count($text);
        $minutes = floor($wordCount / $this->wordsPerMinute);
        $seconds = ceil(($wordCount % $this->wordsPerMinute) / ($this->wordsPerMinute / 60));

        if ($minutes > 0) {
            return "$minutes min $seconds sec";
        }
        return "$seconds sec";
    }
}

/*
// Exemple d'utilisation
$text = "Ceci est un exemple de texte qui permet de tester le calcul du temps de lecture.";
$calculator = new ReadingTimeCalculator();
echo $calculator->calculateTime($text);
*/
?>
