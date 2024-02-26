<?php
require_once 'vendor\autoload.php';

class Visitor
{   
    private $visitedAddresses = [];
    
    public function __construct() {
        $this->loadVisitedAddresses();
    }

    public function hasVisitedBefore() {
        $visitorAddress = $_SERVER['REMOTE_ADDR'];
        return isset($this->visitedAddresses[$visitorAddress]);
    }

    private function loadVisitedAddresses() {
        if (isset($_SESSION['visited_addresses'])) {
            $this->visitedAddresses = $_SESSION['visited_addresses'];
        }
    }

    public function markVisitorAsVisited() {
        $visitorAddress = $_SERVER['REMOTE_ADDR'];
        $this->visitedAddresses[$visitorAddress] = true;
        $_SESSION['visited_addresses'] = $this->visitedAddresses;
    }
}


