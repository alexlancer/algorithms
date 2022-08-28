<?php

/**
 * url: https://leetcode.com/problems/merge-two-sorted-lists/
 */
?>
<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
 class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val = 0, $next = null) {
         $this->val = $val;
         $this->next = $next;
     }
 }
class Solution
{

  /**
   * @param ListNode $list1
   * @param ListNode $list2
   * @return ListNode
   */
  function mergeTwoLists($list1, $list2)
  {
    //using recursion 
    if ($list1 == null) return $list2;
    if ($list2 == null) return $list1;
    if ($list1->val < $list2->val) {
      $list1->next = $this->mergeTwoLists($list1->next, $list2);
      return $list1;
    } else {
      $list2->next = $this->mergeTwoLists($list2->next, $list1);
      return $list2;
    }
  }
}

$arr1 = [4,2,1];
$prevNode = null;
for ($i=0; $i < count($arr1); $i++) {
  $list1 = new ListNode($arr1[$i], $prevNode);
  $prevNode = $list1;
}
$arr2 = [4, 3, 1];
$prevNode = null;
for ($i = 0; $i < count($arr2); $i++) {
  $list2 = new ListNode($arr2[$i], $prevNode);
  $prevNode = $list2;
}

$class = new Solution();
print_r($class->mergeTwoLists($list1, $list2));
?>
<?php
/**
You are given the heads of two sorted linked lists list1 and list2.

Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.

 

Example 1:


Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]
Example 2:

Input: list1 = [], list2 = []
Output: []
Example 3:

Input: list1 = [], list2 = [0]
Output: [0]
 

Constraints:

The number of nodes in both lists is in the range [0, 50].
-100 <= Node.val <= 100
Both list1 and list2 are sorted in non-decreasing order.
 */
?>