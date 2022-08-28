<?php

/**
 * url: https://leetcode.com/problems/longest-common-prefix/
 */
?>
<?php
class Solution
{

  /**
   * @param String[] $strs
   * @return String
   */
  function longestCommonPrefix($strs)
  {
    if(strlen($strs[0]) < 1)
      return '';

    $maxChars = strlen($strs[0]);
    $prefix = $strs[0];
    while($maxChars > 0){
      $prefixFound = true;
      for ($i=0; $i < count($strs); $i++) { 
        $s = $strs[$i];
        $newMaxChars = strlen($s);
        if($newMaxChars < $maxChars)
        {
          $newPrefix = $s;
          $prefix = substr($prefix,0,$newMaxChars);
        }else{
          $newPrefix = substr($s, 0, $maxChars);
        }
        if($prefix != $newPrefix){
          $prefixFound = false;
          $maxChars--;
          $prefix = '';
          break;
        }
        
      }
      if (!$prefixFound) {
        $prefix = substr($strs[0], 0, $maxChars);
      } else {
        return $prefix;
      }
    }
    return $prefix;
  
  }
}

$strs = ["flower", "flowerness"];
$class = new Solution();
var_dump($class->longestCommonPrefix($strs));
?>
<?php
/**
Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
 

Constraints:

1 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lowercase English letters.
 */
?>