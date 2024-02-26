<?php
require_once 'vendor/autoload.php';
//parameter of a cookie (name, value, expire, path, domain, secure, httponly);

$currentCookieParams = session_get_cookie_params();

// foreach ($currentCookieParams as $key => $value) {
//     echo $key . ': ' . $value . '<br>';
// }

$currentCookieParams['lifetime']=3600;
$currentCookieParams['path']='/';
$currentCookieParams['domain']='';
$currentCookieParams['secure']= false;
$currentCookieParams['httponly']= true;


session_set_cookie_params($currentCookieParams['lifetime'],$currentCookieParams['path'],$currentCookieParams['domain'],$currentCookieParams['secure'],$currentCookieParams['httponly']);
//These parameters determine how the session cookie behaves when sent to the client's browser.

session_start(); // it creates a temporary file on the server of which to store session data, and also sends a cookie to the user's browser.


$tracker = new Visitor();

if ($tracker->hasVisitedBefore()) {
    echo "Welcome back!";
    
} else {
    echo "First time visitor!";
    $tracker->markVisitorAsVisited();


    $currentCount = Counter::getCount();
    echo "Current count: $currentCount <br>";
    
    Counter::incrementCount();
    echo "Count incremented. <br>";
    
    $updatedCount = Counter::getCount();
    echo "Updated count: $updatedCount";

}



