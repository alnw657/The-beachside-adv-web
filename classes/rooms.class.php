<?php
//modified product class to accept pagination
class Rooms extends Database {
  //result array for products
  public $rooms = array();
  //total of products without pages
  public $rooms_total = 4;
  //total of products for this page
  public $current_page_total;
  //products per page
  private $page_size = 3;
  //page number
  private $current_page = 1;
  //offset
  private $offset = 0;
  //total number of pages
  private $total_pages;
  //currently selected category
  private $selected_category = 0;
  
  
  public function __construct(){
    parent::__construct();
    //check [page] get variable and make sure it is an integer
    $page_var = $_GET["page"];
    if( isset( $page_var ) && filter_var( $page_var , FILTER_VALIDATE_INT )  ){
      $this -> current_page = $_GET["page"];
    }
    
    //check [page_size] and make sure it is an integer otherwise do not set
    //the page_size variable -- use the default value
    if( isset( $_GET["page_size"] ) && filter_var($_GET[""]) ){
      $this -> page_size = $_GET["page_size"];
    }
    

public function getRooms($pagination = false){

    $query = 'SELECT 
    room_id AS id,
    room_name AS name,
   
    
   
    FROM Rooms
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id';
    //remove grouping
    // "GROUP BY products.id';
    //apply product category if set in the get request
    if( $this -> selected_category !== 0 ){
      $query = $query . 
      " INNER JOIN products_categories 
      ON products_categories.product_id = products.id  
      WHERE products_categories.category_id=? AND products.active = 1";
    }