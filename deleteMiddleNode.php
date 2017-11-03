<?php

/*
 *
 * Implement an algorithm to delete a node in the middle of a singly
 * linked list, given access only to that node.
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
   public function deleteMiddleNode($node) {
     if ($node->next != null) {
       $node->data = $node->next->data;
       $node->next = $node->next->next;
     }
   }
}

// Create a sample list to test algorithm
$ll = new LinkList();


$ll->insertItem(30);
$ll->insertItem(20);
$ll->insertItem(20);
$ll->insertItem(10);
$erase=$ll->head->next->next->next;
$ll->insertItem(10);
$ll->insertItem(50);
$ll->insertItem(30);
$ll->insertItem(40);


$ll->printList();
echo 'Total elements ' . $ll->getCount()."<br>";
$ll->deleteMiddleNode($erase);
$ll->printList();
echo 'Total elements ' . $ll->getCount()."<br>";


?>
