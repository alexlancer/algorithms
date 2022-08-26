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
  $len = strlen($s);

  $freq = [];
  $start = 0;
  $max = 0;
  for ($end = 0; $end < $len; $end++) {
    $c = $s[$end];
    if (array_key_exists($c, $freq) && $freq[$c] == 1) {
      while ($start < $end) {
        $cStart = $s[$start];
        $freq[$cStart] = 0;
        $start++;
        if ($cStart == $c)
          break;
      }
    }
    $freq[$c] = 1;
    $max = max($max, 1 + $end - $start);
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