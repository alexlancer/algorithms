<?php

/**
 * url: https://leetcode.com/problems/search-insert-position/
 */
?>
<?php
class Solution
{

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer
   */


  //basically we need to implement binary search
  function searchInsert($nums, $target)
  {
    $N = count($nums);
    $min_index = 0;
    $max_index = $N - 1;
    $i = 0;
    while($min_index <= $max_index){
      $distance = floor(($max_index - $min_index + 1) / 2);
      $midIndex = $distance + $min_index;
      $item = $nums[$midIndex];
      if($item == $target){
        return $midIndex;
      }else if($item < $target){
        $min_index = $midIndex + 1;
      }else if($item > $target){
        $max_index = $midIndex - 1;
      }
     
      $i++;
     
    }
 
    if($min_index < 0 || $max_index < 0){
      return 0;
    }else if($max_index < $min_index){
      return $min_index;
    }elseif($min_index > $N || $max_index >= $N){
      return $N;
    }else if($min_index < $max_index){
      return $min_index + 1;
    }else if($min_index == $max_index){
      $item = $nums[$min_index];
      if($target < $item){
        return $min_index--;
      }else{
        return $min_index++;
      }
    }

    return -1;
  }
}

$nums = [1, 3, 5, 6]; $target = 2;
// $nums = array_merge(range(1,49), array_merge([51],range(51, 100))); $target = 50;

$class = new Solution();
print_r($class->searchInsert($nums, $target));
?>
<?php
/**
Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

You must write an algorithm with O(log n) runtime complexity.

 

Example 1:

Input: nums = [1,3,5,6], target = 5
Output: 2
Example 2:

Input: nums = [1,3,5,6], target = 2
Output: 1
Example 3:

Input: nums = [1,3,5,6], target = 7
Output: 4
 

Constraints:

1 <= nums.length <= 104
-104 <= nums[i] <= 104
nums contains distinct values sorted in ascending order.
-104 <= target <= 104
Accepted
1,662,203

 */
?>