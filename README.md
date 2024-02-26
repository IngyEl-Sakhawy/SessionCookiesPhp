# Unique Visits Counter

## Overview

This Unique Visits Counter is a PHP class designed to count the number of unique visits to a certain web page. 
It distinguishes between different users based on their browsers, ensuring that refreshing the page with the same browser counts as only one visit,
while visiting the page with different browsers counts as multiple visits.

## Features

- Counts unique visits to a web page.
- Tracks visits based on browser sessions.
- Ensures each user/browser is counted only once.

## Requirements

- PHP 5.4 or higher with session support enabled.

## Usage

1. Include the `Visitor.php` file in your PHP project.
2. Create an instance of the `Visitor` class.
3. Call the `getCount()` method to count unique visits.
4. Display the visit count on your web page.


## Notes
This counter relies on PHP sessions to track unique visits.
