১. Class & Object
Dart-এর মতোই ক্লাসের ভেতর properties (ভেরিয়েবল) এবং methods (ফাংশন) থাকে।

<?php

class Developer
{
    // Properties
    // public string $name;
    // public string $skill;

    // // Constructor (Dart-এ ClassName() হয়, PHP-তে __construct() হয়)
    // public function __construct(string $name, string $skill) {
    //     $this->name = $name;
    //     $this->skill = $skill;
    // }
    public function __construct(
        public string $name,
        public string $skill
    ) {}
    // Method
    public function getDetails(): string
    {
        // Dart-এ 'this.name' লিখতে, PHP-তে '$this->name' লিখতে হয়
        return "$this->name builds apps with $this->skill.";
    }
}

// Object তৈরি করা
$dev = new Developer("Yasir", "Flutter & PHP");
echo $dev->getDetails(); // Output: Yasir builds apps with Flutter & PHP.



// 💡 ২টি মূল পার্থক্য খেয়াল করো:

// PHP-তে কন্সট্রাক্টরের নাম সবসময় __construct() (সামনে ২টা Underscore)।

// কোনো Property বা Method একসেস করতে ডট (.) এর বদলে -> (Arrow) ব্যবহার করতে হয়।