/**
Match Expression (Dart-এর switch-এর আধুনিক রূপ)
PHP 8-এর match দিয়ে খুব সহজে ছোট লাইনে কন্ডিশন চেক করে মান রিটার্ন করা যায়।
এতে কোনো break লেখার দরকার হয় না!
*/

<?php

$status = 200;

$message = match($status){
200,201 => "Success",
404 => "not found",
500 => "server error",
default => "unknown status"
};

echo $message;