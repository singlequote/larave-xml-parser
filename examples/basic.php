<?php

require_once '../vendor/autoload.php';

use SingleQuote\LaravelXmlParser\XML;

$notes = XML::import('notes.xml')->get();

// Use the xml here... e.g $notes->attribute('count');
