<?php
namespace bookstore\Domain\Customer;
use bookstore\Domain\Customer;
class Premium extends Customer{
    public function getMonthlyFee():float {
        return 10.0;
    }
    public function getAmountToBorrow():int {
        return 10;
    }
    public function getType(): string {
        return 'تجاری';
    }
}
