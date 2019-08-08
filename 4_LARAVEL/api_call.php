<?php

// Initialize a new cURL resource
$curl = curl_init();

// Define options
$options = [
  CURLOPT_URL => 'http://localhost:8000/api/books',
  CURLOPT_RETURNTRANSFER => true
];

// Apply the options to the cURL resource
curl_setopt_array($curl, $options);

// Execute the cURL to the API
$response = json_decode(curl_exec($curl));
$booksCollection = Book::hydrate($response);

// Close the resource to free the memory
curl_close($curl);

var_dump($booksCollection);
