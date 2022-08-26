<?php

/**
 * url: https://leetcode.com/problems/longest-substring-without-repeating-characters/submissions/
 */
?>
<?php
/**
 * @param String $s
 * @return Integer
 */
function lengthOfLongestSubstring($s)
{
  $hash = [];
  $max = 0;
  $counter = 0;
  $startCounterAfter = 0;

  $N = strlen($s);
  for ($i = 0; $i < $N; $i++) {
    $c = $s[$i];

    if (!isset($hash[$c])) {
      $counter++;
      $hash[$c] = $i;
    } else {
      if ($hash[$c] > $startCounterAfter) {
        // print_r($hash);
        // echo 'Index - ' . $i . ' old ind '.$hash[$c]. PHP_EOL;
        // echo 'counter af ' . $startCounterAfter . PHP_EOL;
        $diff = $hash[$c] - $startCounterAfter;
        $counter = $counter - $diff;
        if ($counter == 1)
          $hash = [];
        $startCounterAfter = $i;
      } else {
        $startCounterAfter = $hash[$c];
        $counter = $i - $hash[$c];
        if ($counter == 1) {
          $hash = [];
          $startCounterAfter = $i;
        }
        // echo 'count dif is ' . $hash[$c] .' | ' . $c .' - '. $i  . ($counter) . PHP_EOL; 
        // print_r($hash);
      }
      // echo $counter . ' cou '. PHP_EOL;
      $hash[$c] = $i;
    }
    $max = max($counter, $max);

    // echo $counter . ' - '.$c . PHP_EOL;
  }
  return $max;
}
?>
<?php

/** 
Given a string s, find the length of the longest substring without repeating characters.

 

Example 1:

Input: s = "abcabcbb"
Output: 3
Explanation: The answer is "abc", with the length of 3.
Example 2:

Input: s = "bbbbb"
Output: 1
Explanation: The answer is "b", with the length of 1.
Example 3:

Input: s = "pwwkew"
Output: 3
Explanation: The answer is "wke", with the length of 3.
Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
 

Constraints:

0 <= s.length <= 5 * 104
s consists of English letters, digits, symbols and spaces.
 */
?>