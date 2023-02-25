<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Main website
get('/', 'pages/index.php');

// Redirect
get('/l/$token', 'pages/redirect.php');

// Create link
post('/createLink', 'pages/createLink.php');

// Error 404
any('/404','pages/404.php');