<?php

/**
 * Inheritance কি?
 * 
 * ইংরেজি শব্দ inheritance অর্থ হচ্ছে উত্তরাধিকার। Object Oriented Programming এ এক class থেকে কিছু ফাংশনালিটি (Methods) ও বৈশিষ্ট্য (Property) অন্য class এ শেয়ার করার একটা পদ্ধতি হচ্ছে Inheritance.
 * 
 * একটা ক্লাসকে (Parent Class) Inherit (অনুসরণ) করে তার কিছু বৈশিষ্ট্য আরেকটি উত্তরসূরি (child class) এর মধ্যে ব্যবহার করার প্রক্রিয়াকে Inheritance বলা হয়।
 */


/**
 * PHP তে কিভাবে child class তৈরী হয় ?
 * 
 * child class তৈরী করতে হলে প্রথমে class কীওয়ার্ড এর পর child class এর নাম দিতে হয়, তারপর extends কীওয়ার্ড লিখে Parent Class এর নাম লিখতে হয়।
 */

class Member {
  public $username = "";
  private $loggedIn = false;

  public function login() {
    $this->loggedIn = true;
  }

  public function logout() {
    $this->loggedIn = false;
  }

  public function isLoggedIn() {
    return $this->loggedIn;
  }
}

// derived or sub or child class
class Administrator extends Member {
  public function createForum( $forumName ) {
    echo "{$this->username} creates a new forum : {$forumName}\n";
  }

  public function bandMember( Member $member ) {
    echo "{$this->username} banned the member : {$member->username}\n";
  }
}

$member = new Member();
$member->username = "Ariful";
$member->login();
echo "$member->username is " . ($member->isLoggedIn() ? "Logged In" : "Logged Out");
echo "\n";

$administrator = new Administrator();
$administrator->username = "Alom";
$administrator->login();
echo "{$administrator->username} is ".($administrator->isLoggedIn() ? "Logged In" : "Logged Out");

$administrator->createForum( "Management" );
$administrator->bandMember( $member );