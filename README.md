# Find and Count

* Find and count the instances of a given word in a given phrase

#### February 17, 2017

#### By **Jayeson Kiyabu**

## Description
  Practice unit testing in PHP simulating with a find and count app.

| Behavior | Input Example | Output Example |
|----------|---------------|----------------|
|user inputs a string of text and a word to search for within the given phrase.  The app will let user know if given word is not in the phrase| "Hello World!", "Hello"| 0 |
|user inputs a string of text and a word to search for within the given phrase.  The app will let user know if given word is in the phrase| "Hello World!", "Hello"| 1 |
|user inputs a string of text and a word to search for within the given phrase.  The app will let user know how many times the word is in the given phrase| "Hello Hello World", "Hello" | 2 |
|user inputs a string of text and a word to search for within the given phrase.  The app will account for capitalization and let user know how many times the word is in the given phrase| "Hello Hello World", "hello" | 2 |
|user inputs a string of text and a word to search for within the given phrase.  The app will account for capitalization and punctuation and let user know how many times the word is in the given phrase| "Hello! Hello! World!", "hello" | 2 |

## Setup/Installation Requirements

*  Clone github repository for places webpage
*  From your parent directory in terminal, run "$ composer install"
*  Run php server in terminal (from web directory) by typing "$ php -S localhost:8000"
*  in your browser type "localhost:8000"
*  Webpage will load.

## Known Bugs
_No known bugs exist._

## Technologies Used
* _HTML_
* _PHP_
* _TWIG_
* _SILEX_
* _Composer_


### License
*MIT

Copyright (c) 2017 Jayeson Kiyabu All Rights Reserved.
