<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

// Service initialization
$client = new Client;
$client->setApplicationName('Google Sheets API');
$client->setScopes([Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = __DIR__ . '/../storage/credentials.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new Sheets($client);

// Get spreadsheet
const SPREADSHEET_ID = 'YOUR_SPREADSHEET_ID';
const RANGE = 'YOUR_SHEET_NAME'; // ie: Sheet1 or Sheet2!A1:B2