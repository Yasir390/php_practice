<?php

$skills = ['flutter', 'dart', 'php', 'laravel'];

// $skills array-র প্রতিটি আইটেম এক এক করে $a ভেরিয়েবলে আসবে
foreach ($skills as $a) {
    echo "Skill: $a\n";
}


echo "===============================================\n";
echo "===========Associative Array===================\n";

$developer = [
    "Name" => "Yasir",
    "Role" => "Full Stack Mobile Dev",
    "Experience" => "3+ Years",
    "Company" => "Swapnoloke"
];

foreach ($developer as $key => $value) {
    echo "$key: $value\n";
}


// প্রজেক্টের লিস্ট (Associative Array-র একটা Indexed Array / Array of Maps)
$projects = [
    ["title" => "AVMIS", "tech" => "Flutter"],
    ["title" => "Smart Admin Panel", "tech" => "Laravel"]
];

foreach ($projects as $project) {
    echo "Project: " . $project["title"] . " | Built with: " . $project["tech"] . "\n";
}
