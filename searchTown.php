<?php  
 $connect = mysqli_connect("localhost", "root", "", "locations"); 
 mysqli_set_charset($connect,"utf8");
 if(isset($_POST["query"]))  
 {  

      $countyIdQuery = "SELECT id FROM counties WHERE name = '". $_POST["query"] ."'";
      $countyIdArray = mysqli_query($connect, $countyIdQuery); 
      $countyId = mysqli_fetch_assoc($countyIdArray);
      $output = "";
      
      $query = "SELECT townName FROM towns WHERE countyid = '".$countyId["id"]."'";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) != null)  
      {  
          $output .= "<option disabled selected>Select town</option>";
           foreach ($result as $value) {
              $output .= '<option>'.$value["townName"].'</option>';  
          }
      }  
      else
      {
          $output .= '<option>Towns Not Found</option>';
          
      }
      echo $output;
       
 }  
 ?> 
