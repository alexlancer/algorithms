<?php

/**
 * url: https://leetcode.com/problems/add-two-numbers/
 */
?>
<?php
class myListNode
{
  public $val = 0;
  public $next = null;
  function __construct($val = 0, $next = null)
  {
    $this->val = $val;
    $this->next = $next;
  }
} 

function addTwoNumbers($l1, $l2)
{

  $keepInMind = 0;
  $list1 = true;
  $list2 = true;
  $reversedLS = null;

  //this while loop will create a Linked list that afterwards 
  //we will need to revese with a second loop
  while ($list1 || $list2) {
    $l1Val = $list1 ? $l1->val : 0;
    $l2Val = $list2 ? $l2->val : 0;

    if (!$l1->next) {
      $list1 = false;
    }
    if (!$l2->next) {
      $list2 = false;
    }

    $value = $l1Val + $l2Val + $keepInMind;
    $keepInMind = 0;
    if ($value > 9) {
      $value = $value - 10;
      $keepInMind = 1;
    }

    $reversedLS = new myListNode($value, $reversedLS);
    $l1 = $l1->next;
    $l2 = $l2->next;
  }
  if ($keepInMind > 0) {
    $reversedLS = new myListNode(1, $reversedLS);
  }
  $output = null;

  //second loop to reverse the list
  while (true) {
    $output = new myListNode($reversedLS->val, $output);
    $reversedLS = $reversedLS->next;
    if (!$reversedLS)
      break;
  }

  return $output;
}

$l1 = [2,4,3];
$l2 = [5,6,4];
addTwoNumbers($l1, $l2);
?>
<?php

/** 
 * You are given two non-empty linked lists representing two non-negative integers.
 * The digits are stored in reverse order, and each of their nodes contains a 
 * single digit. Add the two numbers and return the sum as a linked list.

You may assume the two numbers do not contain any leading zero, except the 
number 0 itself.

Example 1:


Input: l1 = [2,4,3], l2 = [5,6,4]
Output: [7,0,8]
Explanation: 342 + 465 = 807.
Example 2:

Input: l1 = [0], l2 = [0]
Output: [0]
Example 3:

Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
Output: [8,9,9,9,0,0,0,1]

Constraints:

The number of nodes in each linked list is in the range [1, 100].
0 <= Node.val <= 9
It is guaranteed that the list represents a number that does not have leading zeros.
 */
?>