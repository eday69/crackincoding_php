<?php

/*
 *
 * Write code to remove duplicates from an unsorted linked list
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
    * Remove duplicate from list
    */
   public function removeDups() {
     $uniques = array();
     if ($this->head != null) {
       $before=$this->head;
       $current = $before->next;
       while($current != null) {
         if (isset($uniques[$current->data])) {
            $before->next = $current->next;
            self::$count--;
         }
         else {
           $uniques[$current->data] = 1;
           $before = $before->next;
         }
         $current = $current->next;
       }
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
$ll->removeDups();
$ll->printList();
echo 'Total elements ' . $ll->getCount()."<br>";


?>
