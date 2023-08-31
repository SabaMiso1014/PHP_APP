<?php
/**
 * 四角形の面積を求める関数
 * $base   => 底辺
 * $height => 高さ
 */
    function getSquareArea($base = 1, $height = 1) {
        return $base * $height;
    }

/**
 * 三角形の面積を求める関数
 * $base   => 底辺
 * $height => 高さ
 */
    function getTriangleArea($base = 1, $height = 1) {
        return $base * $height / 2;
    }

/**
 * 台形の面積を求める関数
 * $upperBase => 上底
 * $lowerBase => 下底
 * $height    => 高さ
 */
    function getTrapezoidArea($upperBase = 1, $lowerBase = 1, $height = 1) {
        return ($upperBase + $lowerBase) * $height / 2;
    }
    echo getSquareArea(4, 5) . "\n"; // 20
    echo getTriangleArea(6, 8) . "\n"; // 24
    echo getTrapezoidArea(2, 3, 4); // 10
?>
