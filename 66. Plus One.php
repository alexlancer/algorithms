<?php

/**
 * url: https://leetcode.com/problems/plus-one/
 */
?>
<?php
class Solution
{

  /**
   * @param Integer[] $digits
   * @return Integer[]
   */
  function plusOne($digits)
  {
    $N = count($digits);
    $carry = 0;
    $i = $N - 1;
    for ($i; $i >= 0; $i--) { 
      $add = $i == ($N - 1) ? 1 : $carry;
      $item = $digits[$i] +  $add;
      $carry = 0;
      if($item > 9){
        $item = 0;
        $carry++;
      }
      $digits[$i] = $item;
      if($carry === 0)
        break;

      if($i === 0 && $carry > 0){
        if($item === 0)
          array_unshift($digits, 1);
      }
      # code...
    }
    
    return $digits;
  }
}
$digits = [1, 2, 3];
// $digits = [4, 3, 2, 1];
$digits = [9, 9,9,9];
// $digits = [8, 9, 9, 9];
// $digits = [9];
$class = new Solution();
print_r($class->plusOne($digits));
?>
<?php
/**
You are given a large integer represented as an integer array digits, where each 
digits[i] is the ith digit of the integer. The digits are ordered from most
significant to least significant in left-to-right order. 
The large integer does not contain any leading 0's.

Increment the large integer by one and return the resulting array of digits.

 

Example 1:

Input: digits = [1,2,3]
Output: [1,2,4]
Explanation: The array represents the integer 123.
Incrementing by one gives 123 + 1 = 124.
Thus, the result should be [1,2,4].
Example 2:

Input: digits = [4,3,2,1]
Output: [4,3,2,2]
Explanation: The array represents the integer 4321.
Incrementing by one gives 4321 + 1 = 4322.
Thus, the result should be [4,3,2,2].
Example 3:

Input: digits = [9]
Output: [1,0]
Explanation: The array represents the integer 9.
Incrementing by one gives 9 + 1 = 10.
Thus, the result should be [1,0].
 

Constraints:

1 <= digits.length <= 100
0 <= digits[i] <= 9
digits does not contain any leading 0's.
 */
?>