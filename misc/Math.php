<?php
declare(strict_types=1);

class Math {
    public function fibonacci(float $n): float {
        if (is_float($n) && $n > 0) {
            $elements = array();
            $elements[1] = 1;
            $elements[2] = 1;
            for ($i = 3; $i <= $n; $i++) {
                $elements[$i] = bcadd((string) $elements[$i-1], (string) $elements[$i-2]);
            }
            return (float) $elements[$n];
        } else {
            throw new
                InvalidArgumentException('You should pass integer greater than 0');
        }
    }

    public function factorial(float $n): float {
        if (is_float($n) && $n >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        } else {
            throw new
                InvalidArgumentException('You should pass non-negative integer');
        }
    }
}
