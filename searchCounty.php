<?php  
 $connect = mysqli_connect("localhost", "root", "", "locations"); 
 mysqli_set_charset($connect,"utf8");
 if(isset($_POST["query"]))  
 {  
      $country = $_POST["query"]; 
      $countryIdQuery = "SELECT id FROM countries WHERE country = '".$country."'";
      $countryIdArray = mysqli_query($connect, $countryIdQuery); 
      $countryId = mysqli_fetch_assoc($countryIdArray);
      $output = "";
      
      $query = "SELECT name FROM counties WHERE country_id = '".$countryId["id"]."'";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) != null)  
      {  
          $output .= "<option disabled selected>Select county</option>";
          
           foreach ($result as $value) {
              $output .= '<option class="counties">'.$value["name"].'</option>';  
          }
      }  
      else
      {
          $output .= "<option disabled selected>No counties found</option>";
      }
       echo $output; 
 }  
 ?>  