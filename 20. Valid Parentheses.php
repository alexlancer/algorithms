<?php

/**
 * url: https://leetcode.com/problems/valid-parentheses/
 */
?>
<?php
class Solution
{

  /**
   * @param String $s
   * @return Boolean
   */
  function isValid($s)
  {
    ///this is a pop, shift type of question
    $N = strlen($s);
    if($N % 2 === 1) // if length is odd than something is missing for sure
      return false;
    
    $nextPop = '';
    $stack = []; //last in first out
    $closingChars = [ // if we  get any of these then stack must contain the openning one of the same type
      ')' => '(',
      '}' => '{',
      ']' => '[',
    ];
    for ($i=0; $i < $N; $i++) { 
      $isClosingChar = false;
      $item = $s[$i];
      $K = count($stack);
      if(isset($closingChars[$item])){
        if($K === 0)
          return false; //meaning that we have a closing bracket but nothing is open

        $openingBracket = $closingChars[$item];
        if($stack[$K - 1] == $openingBracket)
          array_pop($stack);
        else
          return false;
      }else{
        $stack[] = $item;
      }
    }

    return empty($stack);
    
  }
}

$s = "()[]{}}";
$class = new Solution();
var_dump($class->isValid($s));
?>
<?php
/**
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
 

Example 1:

Input: s = "()"
Output: true
Example 2:

Input: s = "()[]{}"
Output: true
Example 3:

Input: s = "(]"
Output: false
 

Constraints:

1 <= s.length <= 104
s consists of parentheses only '()[]{}'.
 */
?>