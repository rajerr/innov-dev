<?php
  //define("BASE_URL","http://innov-dev.alwaysdata.net/");
  define("BASE_URL","http://localhost/innov-dev");
  require_once("./libs/Router.php");
  $router=new Router();
  $router->route();


