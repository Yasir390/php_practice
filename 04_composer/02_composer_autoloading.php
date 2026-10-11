

<!-- Composer Autoloading (PSR-4 Standard)
Composer-এর সবচেয়ে জাদুকরী পার্ট হলো PSR-4 Autoloading।

ধরো তোমার src/ ফোল্ডারের ভেতর ১০টি ক্লাস তৈরি করেছ। index.php ফাইলে সবগুলো ব্যবহারের জন্য ১০বার require লিখতে হবে না। শুধু ১টি লাইন লিখতে হবে: -->


<?php

// প্রজেক্টের শুরুতে শুধু Composer-এর autoloader ফাইলটি একবার ইমপোর্ট করতে হয়
require_once __DIR__ . '/vendor/autoload.php';

use App\Services\PaymentService;
use App\Models\User;

// ফাইল ইমপোর্ট করা ছাড়াই ক্লাসগুলো সরাসরি ব্যবহার করা যাচ্ছে!
$user = new User();
$payment = new PaymentService();