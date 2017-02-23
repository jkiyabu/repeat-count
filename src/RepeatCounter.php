<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $search_word)
        {
            $count = 0;
            $word_replace = str_ireplace($search_word, " word ", $phrase);
            $words = explode(" ", $word_replace);
            foreach($words as $word) {
                if ($word == "word") {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
