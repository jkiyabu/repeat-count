<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $search_word)
        {
            $words = explode(" ", $phrase);
                if ($words != $search_word) {
                    return 0;
                }
        }
    }

?>
