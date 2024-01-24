<?php
/**Create the Node Class**/
class Node{
    public $data; 
    public $next; 

    public function __construct($data)
    {
        $this->data=$data; 
        $this->next=null; 
    }

}
/**Create the Linked list Class**/
class Linked_list{
   public $head; 
   
    public function __construct()
    {
        $this->head=NULL;
    }
   /**Method to add a node at the beginning of the linked list**/
    public function addNode($data){
        $newNode=new Node($data);
        $newNode->next=$this->head;
        $this->head=$newNode; 
    }
    /**Method to display the linked list**/
    public function displayList(){
        $current = $this->head;
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}
// Create a linked list object
$linkedList = new Linked_list();

$linkedList->addNode(3);
$linkedList->addNode(7);
$linkedList->addNode(11);

// Display the linked list
$linkedList->displayList();