<?php  
 $connect = mysqli_connect("localhost", "root", "", "locations"); 
 mysqli_set_charset($connect,"utf8");
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT country FROM countries WHERE country LIKE '".$_POST["query"]."%' LIMIT 0,6";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled" id="countryList">';  
      if(mysqli_num_rows($result) != null)  
      {  
          foreach ($result as $value) {
              $output .= '<div id="divv" style="padding: 4px;"><li class="countries">'.$value["country"].'</li></div>';
          }
      }  
      else  
      {  
           $output .= '<div id="divv" style="padding: 4px;"><li class="countries" disabled selected>Country Not Found</li></div>';  
      } 
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  