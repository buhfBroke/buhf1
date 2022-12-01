<?php 
namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;
 class Page extends Controller 
 {
   public function showOne() {
      return '111';  
   }
   public function showall(){
      return 'wasy';
   }
   public function buhf($param){
      return $param;
   }
   public function buhf1($id){
      return $id*$id;
   }
   public function showOne1($id){
          $pages = 
      [ 
      1 => 'страница 1', 
      2 => 'страница 2', 
      3 => 'страница 3', 
      4 => 'страница 4', 
      5 => 'страница 5', ];

      return $pages[$id];

      }
 }