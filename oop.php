<?php
    class Book {
        // TODO: Add properties as Private
        private $title, $availableCopies;
        public function __construct($title, $availableCopies) {
            // TODO: Initialize properties
            $this->title=$title;
            $this->availableCopies=$availableCopies;
            }
       
       // TODO: Add getTitle method
       public function getTitle(){
            return $this->title;
       }
       
        // TODO: Add getAvailableCopies method
        public function getAvailableCopies(){
        return $this->availableCopies;
       }
       
        // TODO: Add borrowBook method
        public function borrowBook(){
            if ($this->availableCopies > 0) {
                $this->availableCopies=$this->availableCopies-1;
                return $this->availableCopies;
            }else{
                $msg= 'No available copy.';
            }
        }

        // TODO: Add returnBook method
        public function returnBook(){
            $this->availableCopies=$this->availableCopies+1;
            return $this->availableCopies;
        }
       }
       
       class Member {
        // TODO: Add properties as Private
       private $name;
       public $book;
        public function __construct($name) {
             // TODO: Initialize properties
             $this->name=$name;
            }
       
        // TODO: Add getName method
        public function getName(){
            return $this->name;
        }
        
        // TODO: Add borrowBook method
        public function borrowBook($book){
            if($book->borrowBook()){
                $msg= "{$this->name} successfully borrowed '{$book->getTitle()}'.<br>";
                return $msg;
            }else{
                $msg= "Sorry,. '{$book->getTitle()}' is not available.<br>";
                return $msg;
            }
        }
       
        // TODO: Add returnBook method
        public function returnBook($book){
            $book->returnBook();
            $msg= "{$this->name} returned '{$book->getTitle()}'.<br>";
            return $msg;
        }
       }

       $book1=new Book('The Great Gatsby', 5);
       $book2=new Book('To Kill a Mockingbird', 3);

       $memberOne=new Member('John Doe');
       $memberTwo=new Member('Jane Smith');

       $memberOne->borrowBook($book1);
       $memberTwo->borrowBook($book2);


echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}";
?>