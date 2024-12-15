<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
 // classes helps us create custom made data type that will allow me to represent something i want
 //classes give us the blueprint or generic xtics of our custom datatype while the object of a class is an instance of that class.
 //lets supose we create a class to hel a library manage its books

 class Book{
  var $title; // these are the attributes of our book class. bc we know that every book has a title, an author and a number of pages.
  var $author; // the book class is just a template of what a generic book looks like in our case
  var $pages;

 }
 
$book1 = new Book; // here we just created an object of our book class, which is an actual book called book1.
$book1->title="Harry potter";
$book1->author="JK Rowlings";
$book1->pages=400;

echo $book1->title;

echo"<hr>";

// In classes we also have CONSTRUCTORS which are functions that get authomatically called when we create an object of a class
// lets consider the student class below

class Student{
    var $name;
    var$class;
    var $grade;

    function __construct(){ 
        echo"you just called me";
    }
}

$stud1 = new Student();// just the act of creating this object calles our contructor.
echo"<hr>";

// THE POWER OF CONSTRUCTORS come in handy when we realise that just like any function they too take parameters and often in programing we define the attributes of our class inside our constructor to save coding
// lets rewrite the book class that we wrote above, but this time using the constructor.


class Books{

var $titles; 
var $authors; 
var $page;

    function __construct($aTitle, $aAuthor, $aPages){
    $this-> titles = $aTitle;
   $this-> authors = $aAuthor;
   $this-> page = $aPages;
    }
  
   }

   $book2 = new Books("lord of the rings","Tolkien", 500);

   echo $book2->titles;

   echo"<hr>";

// now that we have talked about contructors we can now talk about OBJECT FUNCTIONS.
// OBJECT FUNCTIONS are functions that we can define inside of a class, so that the different objects of that class can use that or these functions 
// for the purpose of our course lets create a class of students 

class Students{
var $name;
var $major;
var $gpa;


function __construct($name,$major,$gpa){
$this -> name = $name;
$this -> major = $major;
$this -> gpa = $gpa;

}


function hasHonors(){ // here i am creating to see if a specific student is on the honor roll

    if($this->gpa >=3.5){
    return "true";
    }
    return "false"; // i could pass a boolean if i wanted, i use a string only bc its more directly visible.
}

}

 $student2 = new Students("pam","art",3.6);
 echo "$student2->major <br>";
  echo $student2->hasHonors();



   ?> 
</body>
</html>