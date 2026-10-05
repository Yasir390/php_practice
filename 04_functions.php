<?php

function greetUser(string $name)
{
    return "Welcome back, $name!\n";
}
echo greetUser("Yasir");

//=====================================================================



function calculateExperience(int $startYear, $currentYear = 2026)
{
    $years = $currentYear - $startYear;
    return "Total experience: $years year";
}
echo calculateExperience(2023);
//=====================================================================


function formatApiStatus(string $service, int $code){
    if($code === 200){
        return "$service status: success ($code)";
    }
    else{
        return "$service status: failed ($code)";
    }
}

echo formatApiStatus("Auth Service", 200)."\n";
echo formatApiStatus("Payment Service", 500)."\n";

//=====================================================================

// একটি ফাংশন যা ইউজার অবজেক্ট (Associative Array) নিয়ে একটি মেসেজ ব্যাক করবে
function formatUserProfile(array $user): string {
    $name = $user["name"];
    $role = $user["role"];
    $exp = $user["exp"];

    return "$name is a $role with $exp+ years of experience.";
}

// ডাটা তৈরি
$myProfile = [
    "name" => "Yasir",
    "role" => "Software Engineer",
    "exp" => 3
];

// ফাংশন কল ও প্রিন্ট
echo formatUserProfile($myProfile);