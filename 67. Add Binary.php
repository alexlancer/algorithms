<?php

/**
 * url: https://leetcode.com/problems/add-binary/
 */
?>
<?php
class Solution
{

  /**
   * @param String $a
   * @param String $b
   * @return String
   */
  function addBinary($a, $b)
  {
    //will try first solution with php bindec function
    //this solution will break if large integers are used
    //return decbin(bindec($a) + bindec($b));

    //second solution is by adding zeros and ones and $carry

    //first find longest string then add leading zeros to a shorter string
    $diff = strlen($b) - strlen($a);
    if($diff < 0){
      $diff = abs($diff);
      $b = str_repeat('0', $diff) . $b;
    }else{
      $a = str_repeat('0', $diff) . $a;
    }
    $N = strlen($b);
    $i = $N - 1;
    $carry = 0;
    $newBinary = '';
    while($i >= 0){
      $numA = isset($a[$i]) ? (int) $a[$i] : 0;
      $numB = isset($b[$i]) ? (int) $b[$i] : 0;
      $numC = $numA + $numB + $carry;
      echo $numC . PHP_EOL;
      $carry = 0;
      // if($numC > 1){
      //   // echo $numC . PHP_EOL;
      // }
      if($numC == 2){
        $numC = 0;
        $carry = 1;
      }elseif($numC == 3){
        $numC = 1;
        $carry = 1;
      }
      $newBinary = (string) $numC . $newBinary;
     //echo " | carry $carry" . PHP_EOL;
      $i--;
    }
    if($carry > 0){
      $newBinary = "1".$newBinary;
    }
    return $newBinary;

  }
}
$a = "11"; $b = "1";
// $a = "1010"; $b = "1011";
$class = new Solution();
print_r($class->addBinary($a, $b));
?>
<?php
/**
Given two binary strings a and b, return their sum as a binary string.

 

Example 1:

Input: a = "11", b = "1"
Output: "100"
Example 2:

Input: a = "1010", b = "1011"
Output: "10101"
 

Constraints:

1 <= a.length, b.length <= 104
a and b consist only of '0' or '1' characters.
Each string does not contain leading zeros except for the zero itself.
 */
?>