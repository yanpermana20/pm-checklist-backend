<?php
require_once 'vendor/autoload.php';
const DEFAULT_URL = 'https://pm-checklist.firebaseio.com';
const DEFAULT_TOKEN = 'Q5VncsvDvHkFH2dzXoZziO9VMUZyyWwRdInpmGN7';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
?>
