<?php

namespace App\Services\Bkash;

class Payment {
    public function process(): string {
        return "Processing bKash payment...";
    }
}


// <?php

// namespace App\Services\Google;

// class Payment {
//     public function process(): string {
//         return "Processing Google payment...";
//     }
// }



// <?php

// // use কীবোর্ড দিয়ে নির্দিষ্ট নেমস্পেস ইমপোর্ট করা
// use App\Services\Bkash\Payment as BkashPayment;
// use App\Services\Google\Payment as GooglePayment;

// // একই নামের দুটি ক্লাসই সুন্দরভাবে ব্যবহার করা যাচ্ছে!
// $bkash = new BkashPayment();
// echo $bkash->process() . "\n";

// $google = new GooglePayment();
// echo $google->process() . "\n";