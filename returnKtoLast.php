<?php

/*
 *
 * Implement an algorithm to find the kth to last element of a singly
 * linked list
 *
 */

class Node {
  public $data;
  public $next;

  public function __construct($item) {
    $this->data = $item;
    $this->next = null;
  }
}

class LinkList {
  public $head = null;

  private static $count = 0;

  /**
    * @return int
    */
   public function getCount() {
       return self::$count;
   }

   /**
    * @param mixed $item
    */
   public function insertItem($item) {
       if ($this->head == null) {
           $this->head = new Node($item);
       } else {
           /** @var Node $current */
           $current = $this->head;
           while ($current->next != null)
           {
               $current = $current->next;
           }

           $current->next = new Node($item);
       }

       self::$count++;
   }

   /**
    * Print the link list as string like 1->3-> ...
    */

   public function printList() {
       $current = $this->head;
       while($current != null) {
           echo $current->data." -> ";
           $current = $current->next;
       }

       echo "<br>";
   }

   /**
    * return kth to last from list
    */
   public function returnKLast($k) {
     $count=1;
     $pointer=$this->head;
     while (($pointer != null) && ($count <= $k)) {
       if ($count == $k) {
         $this->head=$pointer;
       }
       $pointer=$pointer->next;
       $count++;
     }
   }
}

// Create a sample list to test algorithm
$ll = new LinkList();


$ll->insertItem(30);
$ll->insertItem(20);
$ll->insertItem(20);
$ll->insertItem(10);
$ll->insertItem(10);
$ll->insertItem(50);
$ll->insertItem(30);
$ll->insertItem(40);


$ll->printList();
echo 'Total elements ' . $ll->getCount()."<br>";
$ll->returnKLast(5);
$ll->printList();
echo 'Total elements ' . $ll->getCount()."<br>";


?>
