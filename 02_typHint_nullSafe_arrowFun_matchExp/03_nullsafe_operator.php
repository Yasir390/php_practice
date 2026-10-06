

<?php

// Dart: String? country = user?.address?.country;
// PHP 8:

$user = null;//"any object";
$country = $user?->address?->country;


/*
 Nullsafe Operator (?->)
 Dart-এর Null Awareness (?.) যেমন ইউজ করো, 
 PHP 8-এও ঠিক সেটাই হলো ?->। কোনো অবজেক্ট বা মান null হলে কোড ক্র্যাশ (Error) না করে সরাসরি null রিটার্ন করবে।
 */