<?php

include __DIR__ . '/service/GoogleSpreadSheet.php';

use Google\Service\Sheets\ValueRange;

$range = 'Sheet1';
$values = [
    [
        '08123123'
    ]
];

$body = new ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW',
];
$insert = [
    'insertDataOption' => 'INSERT_ROWS',
];

$result = $service->spreadsheets_values->append(SPREADSHEET_ID, RANGE, $body, $params, $insert);
dd($result);