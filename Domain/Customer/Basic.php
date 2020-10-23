<?php
namespace bookstore\Domain\Customer;
use bookstore\Domain\Customer;
class Basic extends Customer{
    public function getMothlyFee():float {
        return 5.0;
    }
    public function getAmountToBorrow():int {
        return 3;
    }
    public function getType(): string {
        return 'معمولی';
    }
}

