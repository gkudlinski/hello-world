<?php

//require __DIR__ . '/vendor/autoload.php';
//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//$log->addWarning('Foo');
//echo'<br />';
//echo 'Hello world';

require_once __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));
?>



<head>
  <link href="/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if IE]>
      <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
</head>