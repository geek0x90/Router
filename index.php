<?php
  require_once 'Router.php';

  Router::route('/test/:var', function($var) {
    echo 'test: '.$var;
  });

  Router::route('/test/:var/sub1/:foo/asd', function($var, $foo) {
    echo 'sub1: '.$var.' - '.$foo;
  });

  Router::route('/test/:var/sub2/:foo/asd', function($var, $foo) {
    echo 'sub2: '.$var.' - '.$foo;
  });

?>
