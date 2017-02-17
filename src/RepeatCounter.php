<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $search_word)
        {
            $count = 0;
            $words = explode(" ", $phrase);
            foreach($words as $word) {
                if ($word == $search_word) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
