<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $search_word)
        {
            $words = explode(" ", $phrase);
            foreach($words as $word) {
                if ($word == $search_word) {
                    return 1;
                } else {
                    return 0;
                }
            }
        }
    }

?>
