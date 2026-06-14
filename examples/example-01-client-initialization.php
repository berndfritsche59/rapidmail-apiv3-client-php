<?php

use Rapidmail\ApiClient\Client;
use Rapidmail\ApiClient\Exception\IncompatiblePlatformException;

// Require class autoloader

require_once '../vendor/autoload.php';

// Display all errors during development. Configure properly for production environments

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Authentication credentials can be found within the API section of your rapidmail account

$username = '6940b77004af5bc600e6c3661019b084df902a8b';
$password = '5f272bbc55f52cfabeb9fc39d5419376ca572297';

// Create a new client

try {
    $client = new Client($username, $password);
} catch (IncompatiblePlatformException $e) {

    die(
        'Please configure your PHP runtime to match the libraries system requirements. '
        . $e->getMessage()
    );

}
