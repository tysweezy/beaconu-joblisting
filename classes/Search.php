<?php

/***
   * Search class
   * extends from Form class
   *
***/

require_once 'Form.php';

class Search extends Form {
  
  
  public function __construct() {
    $form = new Form();
  }

  /**
    * Filters search by title
  **/
  public function searchByTitle() {
    //query `title` row from database
    $title = $this->db->prepare('SELECT `title` FROM `listings` WHERE `title` == '. $_POST['title_search']);
    
    $title->execute();


 

    //loop through results
  
    // check input -- see if it matches data


    //return results
  }

  public function searchByCompany() {
    
  }

  public function searchByType() {

  }

  public function searchByQualifications() {

  }

  public function searchBySalary() {

  }

  public function searchByApply() {
   
  }

}
