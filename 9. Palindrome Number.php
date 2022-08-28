<?php
/**
 * url: https://leetcode.com/problems/palindrome-number/submissions/
 */
?>
<?php
class Solution
{

  /**
   * @param Integer $x
   * @return Boolean
   */
  function isPalindrome($x)
  {
    $x = (string) $x;
    $N = strlen($x);
    //if even
    if ($N % 2 === 0) {
      $j = $N / 2;
      $i = $N / 2 - 1;
    } else {
      $j = $i = (int) ($N / 2);
    }

    while ($i >= 0 && $j < $N) {
      $num1 = $x[$i];
      $num2 = $x[$j];
      if ($num1 != $num2)
        return false;

      $i--;
      $j++;
    }

    return true;
  }
}

$x = '121';
// $x = '-121';
// $x = '10';
$class = new Solution();
var_dump($class->isPalindrome($x));
?>
<?php
/**
Given an integer x, return true if x is palindrome integer.

An integer is a palindrome when it reads the same backward as forward.

For example, 121 is a palindrome while 123 is not.
 

Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 

Constraints:

-231 <= x <= 231 - 1
 */
?>