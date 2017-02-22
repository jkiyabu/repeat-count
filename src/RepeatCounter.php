<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $search_word)
        {
            $count = 0;
            $phrase_no_punc = preg_replace( "/[^a-z]/i", " ", $phrase);
            $words = explode(" ", $phrase_no_punc);
            foreach($words as $word) {
                if (strtolower($word) == strtolower($search_word)) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
