<!-- Flutter-এ তুমি ডেটা হ্যান্ডেল করার জন্য প্রতিদিন List আর Map ব্যবহার করো। PHP-তে এই দুইটা আলাদা জিনিস নয়—দুটোই হলো Array!
PHP-তে Array প্রধানত ২ প্রকার:
1. Indexed Array (Dart-এর List-এর মতো)
2. Associative Array (Dart-এর Map-এর মতো) -->

<?php

//!Indexed Array
$skills = ["Flutter", "Dart", "PHP", "Laravel"];

echo $skills[0] . "\n";
echo $skills[2] . "\n";

$skills[] = "Firebase";
echo $skills[4] . "\n";


//! Associative Array তৈরি (Key => Value)

$user = [
    "name" => "yasir",
    "age" => 26,
    "role" => "Software Engineer",
    "isAvailable" => true
];

echo $user["isAvailable"] . "\n";

// কোনো নির্দিষ্ট Key আছে কি না চেক করা (Dart-এর containsKey-র মতো)
if (array_key_exists("role", $user)) {
    echo "role is set";
}
