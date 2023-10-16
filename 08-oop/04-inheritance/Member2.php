<?php 
/**
 * Check User Exist or Not
 */
class Member {
  protected $isLoggined = false;
  protected $role;
  protected $users = [
    ['username'=>'apple','password'=>'a123','role'=>'subscriber'],
    ['username'=>'banana','password'=>'b123','role'=>'admin'],
    ['username'=>'coconut','password'=>'c123','role'=>'super_admin']
  ];

  public function login( $user,$pass ) {
    foreach( $this->users as $user_info ) {
      extract( $user_info );
      
      if ( $username == $user && $password == $pass ) {
        $this->isLoggined = true;
        $this->role = $role;
      }
    }
  }
}

/**
 * Child class check user role
 */
class Role extends Member {
  function __construct($user,$pass) {
    $this->login($user,$pass);
    if ($this->isLoggined) {
      if ($this->role == 'subscriber') :
        echo "You're logged in as a Subscriber";
      endif;

      if( $this->role == 'admin' ):
        echo "You're logged in as an Admin";
      endif;

      if( $this->role == "super_admin" ) :
        echo "You're logged in as a Super Admin";
      endif;
    }else {
      echo "Invalid Username/Password";
    }
  }

}

new Role('banana','b123');