<?php

  // error_reporting(0); 
  set_time_limit(0);

  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  // header("Access-Control-Allow-Headers: Authorization");

  require_once("_databaseConnection.php");
  require_once("_generators.php");
  require_once("_timestamp.php");

  $db = new DB("127.0.0.1", "gestion_absences", "root", "");
  $gn = new Generators();
  $date = new Dates();

  define("DOMAIN_LINK", 'http://127.0.0.1:3000');
  // define("DOMAIN_LINK", 'http://efodia-owner-api-2020091500001.otgcom.com/');

  //API AUTHENTICATION  *******************************************************
  define("AUTH_USER", 'UHD435WUD5462Q4H5Q23764RT57D8H654Q3X37624RTCG4R76DX');
  define("AUTH_PW", 'UWIH645D7WJTX56Q7H5CB865C4QJ5X78OX58945QI786X5I6Q25');


  //OWNER STATUS  *******************************************************
  define("REQUEST_SUBMITED", 0);
  define("REQUEST_ACCEPTED", 1);
  define("REQUEST_REJECTED", 2);



  //Functions  *******************************************************
  function printResult($data){
    echo $data;
    http_response_code(200);
  }

?>