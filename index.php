<!DOCTYPE html>
<html>
  <head>
      <title> PHP Store</title>
  </head>
  <body>
    <?php
      //Using comments
      //Defining PHP variables
      $name = "PHP Store";
      $credit = 1000;
      echo "<h1>Welcome to ".$name ."!</h1>";
      echo "<h2> You have $".$credit." in your wallet.</h2>";


      //Example of Array variables
      $products['Computer'] = 750;
      $products['Car'] = 15000;
      $products['iPhone'] = 1000;
      $products['Toaster'] = 75;

      //foreach loop
      foreach($products as $key => $value){
         echo "<p>The ".$key." costs $".$value."</p>";
      }

      echo "<h2>Items you can afford</h2>";
      //foreach loop with conditional statement
      foreach($products as $key => $value){
        if($value <= $credit){
          echo "<p>".$key."</p>";
        }
      //  echo "<p>The ".$key." costs $".$value."</p>";
      }

      //math funstions
      $amount = 800;
      $taxRate = 0.0825;
      $addedTax = $amount*$taxRate;
      echo $addedTax;

      //custom function
      function tax_calc($amount,$tax){
        $calculate_tax = $amount*$tax;
        $amount = round($amount+$calculate_tax,2);
        return $amount;
      }

      echo "<p>".tax_calc(750,0.223)."</p>";

     ?>
  </body>

</html>
