<?php

  echo '<a href="?page=php">PHP Menu</a></br>';
  echo '<a href="?page=xml">XML Menu</a></br>';
  echo '<a href="?page=python">Python Menu</a></br>';
  echo '<a href="?page=java">Java Menu</a></br>';
  echo '<a href="?page=login">login Menu</a></p>';
  $obj = new $_REQUEST['page'];

  class page {

      function __construct() {
 
         echo 'I am the: ' . $_REQUEST['page'] . 'page';
      }

  }

  class php extends page {}
  class xml extends page {
     function __construct() {
      
               echo 'this is an object: ' . $_REQUEST['page'] . 'page';
	             }
  }
  class java extends page {}
  class python extends page {}
class login extends page {
     function __construct() {

                    echo 'this is an object: ' .
		    $_REQUEST['page'] . 'page';
		                         }
					   }

?>
