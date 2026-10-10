<?php

// ১. Interface (চুক্তি: সবার এই মেথডটি থাকতে হবে)
interface Workable {
    public function doWork(): string;
}

// ২. Parent Class
class Employee implements Workable {
    public function __construct(
        public string $name,
        public float $salary
    ) {}

    public function doWork(): string {
        return "$this->name is working standard hours.";
    }
}

// ৩. Child Class (Inheritance)
class SoftwareEngineer extends Employee {
    public function __construct(
        string $name,
        float $salary,
        public string $primaryLanguage // নতুন প্রোপার্টি
    ) {
        // Parent Class-এর কন্সট্রাক্টর কল করা (Dart-এর super-এর মতো)
       parent::__construct($name, $salary);
    }

    // Method Override (আচরণ পরিবর্তন)
    public function doWork(): string {
        return "$this->name is writing code in $this->primaryLanguage.";
    }
}

// টেস্ট করা
$dev = new SoftwareEngineer("Yasir", 80000, "PHP/Laravel");
echo $dev->doWork(); // Output: Yasir is writing code in PHP/Laravel.