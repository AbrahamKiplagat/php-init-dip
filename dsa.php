<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] == $target) {
            return $mid;
        }
        if ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1;
}

// Usage
$array = [2, 3, 5, 7, 9, 11, 13, 17, 19];
$target = 11;
$result = binarySearch($array, $target);
echo "binary seach = ";
echo $result; // Outputs: 5 (index of the target element)
///
echo "<br/>";
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Usage
$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($array);
echo "bubble sort = ";
print_r($sortedArray); // Outputs: Array ( [0] => 11 [1] => 12 [2] => 22 [3] => 25 [4] => 34 [5] => 64 [6] => 90 )
echo "<br/>";
// Stack implementation using array_push and array_pop
echo "Stacks =  ";
$stack = [];
array_push($stack, 1);
array_push($stack, 2);
array_push($stack, 3);
echo array_pop($stack); // Outputs: 3
echo "<br/>";
echo "Queues =  ";
// Queue implementation using array_push and array_shift
$queue = [];
array_push($queue, 1);
array_push($queue, 2);
array_push($queue, 3);
echo array_shift($queue); // Outputs: 1

echo "<br/>";
echo "Linked list =  ";
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function display() {
        $current = $this->head;
        while ($current != null) {
            echo $current->data . ' ';
            $current = $current->next;
        }
    }
}

// Usage
$linkedList = new LinkedList();
$linkedList->insert(3);
$linkedList->insert(5);
$linkedList->insert(7);
$linkedList->display(); // Outputs: 7 5 3
?>
