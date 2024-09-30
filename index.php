<?php

include __DIR__ . '/service/GoogleSpreadSheet.php';

$spreadsheet = $service->spreadsheets_values->get(SPREADSHEET_ID, RANGE);
dd($spreadsheet);
