<!-- 
সহজ কথায়, array_map() হলো Dart-এর .map() মেথডের একদম হুবহু PHP রূপ!

Dart-এ তুমি যখন কোনো লিস্টের প্রতিটি আইটেম পরিবর্তন করতে এরকম কোড লেখো:

Dart
// Dart
var numbers = [1, 2, 3, 4];
var doubled = numbers.map((n) => n * 2).toList(); // Result: [2, 4, 6, 8]
 -->
                                      

<?php

$numbers = [1, 2, 3, 4];

$squared = array_map(fn($n) => $n * 2, $numbers);
var_dump($squared); // Output: [2, 4, 6, 8]




//!যদি foreach দিয়ে করতে
$numbers = [1, 2, 3, 4];
$squared = [];

foreach ($numbers as $n) {
    $squared[] = $n * 2; // নতুন অ্যারেতে গুণফল পুশ করা
}