<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
    # change input number here
      $input = 5;
      # a text to describe program function to user
      echo "<h3>finding factorial of a number</h3>
            <p>This program calculates the factorial of given number using loop statements. The given number is <b>".$input."</b><br>Notice: \"The given number must be in the range (0 to 20)\"</p>";
      echo  fact($input);
      # this function calculates the factorial of a given number
      function fact($input){
        # chacking if the given number is in the required renge (0 to 20)
        if(0 <= $input && $input <= 20){
          # a loop to calculate the factorial of the given number
          for($i = $input-1,$output = $input; $i > 0; $i--){
            $output *= $i;
          }
          # a statement to print the result
          echo "<div class='result'>
          The factorial for <b>".$input."</b> is: <b>".$output."</b></div>";
        }
        else
          # error message to print if the given number is out of the required range
          echo "<div class='error'>
          Error: Input number must be between 0 and 20
          </div>";
      }
    ?> 
  </body>
</html>