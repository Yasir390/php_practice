<?php

// 1. String
$name = "Yasir Arafat";

// 2. Integer
$experienceYears = 3;

// 3. Float / Double
$rating = 4.9;

// 4. Boolean
$isFullStack = true;

// 5. Indexed Array (Dart List-এর মতো)
$techStack = ["Flutter", "Dart", "PHP", "Laravel"];

// 6. Associative Array (Dart Map-এর মতো)
$developerProfile = [
    "name" => $name,
    "role" => "Software Engineer", 
    "company" => "Swapnoloke",
    "is_active" => true
];

// 7. NULL (খালি মান)
$upcomingProject = null;

// ----------------------------------------------------
// আউটপুট দেখার ২টি উপায়:

// উপায় ১: var_dump() দিয়ে টাইপসহ বিস্তারিত দেখা
echo "--- Datatypes via var_dump() ---\n";
var_dump($name);
var_dump($experienceYears);
var_dump($rating);
var_dump($isFullStack);
var_dump($techStack);
var_dump($developerProfile);
var_dump($upcomingProject);

echo "\n-----------------------------------\n";

// উপায় ২: সাধারণ echo এবং Concatenation (.) দিয়ে সাজিয়ে আউটপুট
echo "Developer: $name\n";
echo "Experience: $experienceYears years\n";
echo "Rating: $rating\n";
echo "Primary Skill: " . $techStack[0] . "\n";
echo "Current Role: " . $developerProfile["role"] . "\n";
