<?php

  // initialize the numbers as an empty string
  $numbers = "";

  // Get the user's number
  $userNumber = intval($_POST["user-number"]);
  
  // get the user's min
  $userMin = intval($_POST["user-min"]);

  // get the user's max
  $userMax = intval($_POST["user-max"]);

  $counter = $userMin;

  // if min is bigger than max
  if ($userMax < $userMin) {
    echo "Please make your min smaller than your max";
  } else {
    // use a while loop to display all the sums
    while ($counter <= $userMax) {
      // build the string of numbers with a line break each time
      $numbers .= $userNumber . " + " . $counter . " = " . ($userNumber + $counter) . "<br>";
      // Increment the counter
      $counter++;
    }
  }

  // display the results back to the user
  echo $numbers;

?>