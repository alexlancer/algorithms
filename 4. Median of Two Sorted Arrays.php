<?php

/**
 * url: https://leetcode.com/problems/median-of-two-sorted-arrays/
 */
?>
<?php

class Solution
{

  /**
   * @param Integer[] $nums1
   * @param Integer[] $nums2
   * @return Float
   */
  function findMedianSortedArrays($nums1, $nums2)
  {

    $i = 0;
    $j = 0;
    $n = count($nums1);
    $m = count($nums2);
   
    $mergedArr = [];
    while($i < $n || $j < $m){
      $n1 = isset($nums1[$i]) ? $nums1[$i] : false;
      $n2 = isset($nums2[$j]) ? $nums2[$j] : false;
      if($n1 !== false && $n2 !== false){
        if ($n1 <= $n2) {
          $mergedArr[] = $n1;
          $i++;
        } else if ($n2 <= $n1) {
          $mergedArr[] = $n2;
          $j++;
        }
      }else if($n2 === false && $n1 !== false){
        $mergedArr[] = $n1;
        $i++;
      }else if($n1 ===false && $n2 !== false){
        $mergedArr[] = $n2;
        $j++;
      }
      if($j == $m && $i == $n)
        break;
    }
    $k = count($mergedArr);
    if($k < 1)
      return 0;
    if($k % 2){
      $median = $mergedArr[(int) ($k / 2)];
    }else{
      $median = ($mergedArr[$k / 2 - 1] + $mergedArr[$k / 2]) / 2;
    }
    return $median;
  }
}

$nums1 = [1,3]; $nums2 = [2,3,4,5];
$nums1 = [1, 2]; $nums2 = [3,4];
$nums1 = [0]; $nums2 = [0];
$class = new Solution();
echo '<pre>';
 print_r($class->findMedianSortedArrays($nums1, $nums2));
echo '</pre>';
?>
<?php
/**
 * Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.

The overall run time complexity should be O(log (m+n)).

 

Example 1:

Input: nums1 = [1,3], nums2 = [2]
Output: 2.00000
Explanation: merged array = [1,2,3] and median is 2.
Example 2:

Input: nums1 = [1,2], nums2 = [3,4]
Output: 2.50000
Explanation: merged array = [1,2,3,4] and median is (2 + 3) / 2 = 2.5.
 

Constraints:

nums1.length == m
nums2.length == n
0 <= m <= 1000
0 <= n <= 1000
1 <= m + n <= 2000
-106 <= nums1[i], nums2[i] <= 106
 */
?>