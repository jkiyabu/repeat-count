<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/counts', function() use ($app) {
        $count_repeats = new RepeatCounter;
        $search_word = $_GET['search'];
        $count_result = $count_repeats->countRepeats($_GET['phrase'], $_GET['search']);

        return $app['twig']->render('result.html.twig', array('searchword' => $search_word, 'result' => $count_result));
    });

    return $app;
?>
