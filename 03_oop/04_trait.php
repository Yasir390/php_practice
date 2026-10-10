<?php

// ১. Trait ডিফাইন করা
trait Logger {
    public function log(string $msg): void {
        echo "[LOG - " . date('Y-m-d H:i:s') . "]: $msg\n";
    }
}

trait ResponseHandler {
    public function sendSuccess(string $message): void {
        echo "[SUCCESS]: $message\n";
    }
}

// ২. ক্লাসে ব্যবহার করা
class UserController {
    // একের অধিক trait ব্যবহার করা যায়!
    use Logger, ResponseHandler;

    public function createUser(): void {
        // Trait-এর মেথডগুলো সরাসরি ব্যবহার করা যাচ্ছে
        $this->log("Creating a new user...");
        $this->sendSuccess("User created successfully!");
    }
}

$controller = new UserController();
$controller->createUser();