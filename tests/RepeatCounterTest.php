<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_notInPhrase()
        {
            //Arrange
            $phrase = "Hello World";
            $search_word = "false";
            $test_RepeatCounter = new RepeatCounter($phrase, $search_word);

            //Act
            $result = $test_RepeatCounter->countRepeats($phrase, $search_word);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_isInPhrase()
        {
            //Arrange
            $phrase = "Hello World";
            $search_word = "Hello";
            $test_RepeatCounter = new RepeatCounter($phrase, $search_word);

            //Act
            $result = $test_RepeatCounter->countRepeats($phrase, $search_word);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countsInPhrase()
        {
            //Arrange
            $phrase = "Hello Hello World";
            $search_word = "Hello";
            $test_RepeatCounter = new RepeatCounter($phrase, $search_word);

            //Act
            $result = $test_RepeatCounter->countRepeats($phrase, $search_word);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countsInPhraseCapitalization()
        {
            //Arrange
            $phrase = "Hello Hello World";
            $search_word = "hello";
            $test_RepeatCounter = new RepeatCounter($phrase, $search_word);

            //Act
            $result = $test_RepeatCounter->countRepeats($phrase, $search_word);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countsInPhrasePunctuation()
        {
            //Arrange
            $phrase = "Hello! Hello! World!";
            $search_word = "hello";
            $test_RepeatCounter = new RepeatCounter($phrase, $search_word);

            //Act
            $result = $test_RepeatCounter->countRepeats($phrase, $search_word);

            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
