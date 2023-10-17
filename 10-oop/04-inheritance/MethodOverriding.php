<?php

/**
 * Method Overriding কি?
 * 
 * সাধারণত যখন একটা child class তৈরী হয়, তখন সেটি তার parent class এর সব Protected Property এবং Method গুলোকে Inherit করে নিয়ে আসে। কিন্তু কখনো কখনো আমাদেরকে Parent Class এর যেকোনো Method কে Child Class এ নতুন করে একই নামে লেখার দরকার হয়, এটা সাধারণত তখনই দরকার হয় , যখন দেখা যায়, Parent Class এর Method টি child class এর সব পারপাস পূরণ করতে পারছেনা। অর্থাৎ, আরো কিছু feature add করার দরকার হয়। Object Oriented Programming এর পরিভাষায় এটাকে বলা হয় Method Overriding.
 * 
 * Parent Class এর কোনো Method কে Child Class এ একই নামে এবং সমান সংখ্যক parameter দিয়ে পুনরায় declare করলে Object Oriented Programming এর পরিভাষায় বলা হয় Method Overriding.
 */

 class ParentClass {
  public function myMethod($x) {
    // (method code here)
  }
}
class ChildClass extends ParentClass {
  public function myMethod($x) {
    // For ChildClass objects, this method is called
    // instead of the parent class's MyMethod()
  }
}


/**
 * Parent Class এর কোনো Method কে Child Class এর Method এর মধ্যে ব্যবহারের নিয়ম কি?
 * 
 * Parent Class এর কোনো Method কে child Class ব্যবহার করতে চাইলে Parent Keyword এবং scope resolution operator :: ব্যবহার করতে হয় ।
 */


// Real Life Example 


class Member {
  public $username = "";
  private $loggedIn = false;
  public function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
}
class Administrator extends Member {
  public function login() {
    parent::login(); // Using parent keyword
    echo "Log entry: $this->username logged in<br>";
  }
}
// Create a new member and log them in
$member = new Member();
$member->username = "Masud Alam";
$member->login();
$member->logout();
// Create a new administrator and log them in
$admin = new Administrator();
$admin->username = "Farhan";
$admin->login();           // Displays "Log entry: Farhan logged in"
$admin->logout();



/**
 * Inheritance বন্ধ (prevent) করার উপায় কি?
 * 
 * Class Inheritance বন্ধ বা Prevent করা মানে হচ্ছে ঐ class থেকে child class তৈরী এবং Method Overriding বন্ধ করা। অনেক সময় Inheritance এবং Method Overriding এর কারণে class এর security এর সমস্যা হতে পারে, আবার program complex আকার ধারণ করতে পারে। আর সে জন্য Class এবং Method এর security এর জন্য child class তৈরী এবং Method Overriding বন্ধ রাখতে হয়, আর child class তৈরী এবং Method Overriding বন্ধ করার জন্য PHP তে class এর নামের এবং Method এর নামের আগে final keyword ব্যবহার করতে হয়।
 */


 class Member2 {
  public $username = "";
  private $loggedIn = false;
  public final function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}
 
class NaughtyMember extends Member2 {
  // public function login() { // fatal error
  //   $this->loggedIn = true;
  //   // Do something bad
  // }
}

/**
 * Final keyword দিয়ে কিভাবে class Inheritance বন্ধ করা যায়:
 */

 /*
 final class Member3 {
  // This class can't be extended at all
}
class Administrator extends Member3{
// Will show Fatal Error
}