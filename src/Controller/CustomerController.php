<?php

    namespace app\Controller;

    use app\Model\Customer;

    class CustomerController {

        public function save(string $new_customer) : string {
            //do validation and stuffs
            $customer = new Customer;
            if ($customer->save($new_customer))
                return "OK";

            return "Something went wrong!";
        }
    }