<?php

namespace mheap;

class Fibonacci {

    public function generate($input) {
        $p1 = null;
        $p2 = null;

        $res = [];
        for ($i=0; $i < $input; $i++) {
            if (count($res) == 0) {
                $res[] = 0;
            }
            else if (count($res) == 1) {
                $res[] = 1;
            } else {
                $len = count($res);
                $res[] = $res[$len-1] + $res[$len-2];
            }
        }

        return $res;
    }
}
