<?php
require_once("./vendor/autoload.php");

/* Marketplace DB:*/
/**
 * Load environment variables from .env to _ENV
 */
function load_env()
{
  $dotenvFilePath = dirname(__DIR__, 1);
  $dotenv = Dotenv\Dotenv::createImmutable($dotenvFilePath);
  $dotenv->safeLoad();
}

function open_db_conn()
{
  load_env();
  $host = $_ENV["DB_HOST"];
  $user = $_ENV["DB_USER"];
  $pass = $_ENV["DB_PASS"];
  $dbname = $_ENV["DB_NAME"];
  $conn =  mysqli_connect($host, $user, $pass, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return NULL;
  }

  return $conn;
}

function close_db_conn($conn)
{
  // Close MySQL connection
  mysqli_close($conn);
}
