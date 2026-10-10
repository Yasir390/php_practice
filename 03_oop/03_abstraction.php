<?php

// Abstract Class
abstract class PaymentGateway {
    // Abstract Method (এর কোনো body থাকবে না, চাইল্ড ক্লাসকে লিখতে হবে)
    abstract public function pay(float $amount): string;

    // সাধারণ মেথড (যা সবাই শেয়ার করতে পারে)
    public function sendReceipt(): void {
        echo "Receipt sent to customer email.\n";
    }
}

// Chid Class 1
class Bkash extends PaymentGateway {
    public function pay(float $amount): string {
        return "Paid $amount via bKash API.";
    }
}

// Chid Class 2
class Nagad extends PaymentGateway {
    public function pay(float $amount): string {
        return "Paid $amount via Nagad PIN verification.";
    }
}

$payment = new Bkash();
echo $payment->pay(500) . "\n";
$payment->sendReceipt();