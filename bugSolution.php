function myFunc() {
  $var = "hello";
  if (true) {
    $var = "world";
  } else {
    $var = "foobar";
  }
  return $var;
}

//This function will return 'world'
$result = myFunc();
echo $result; // Output: world

function anotherFunc() {
  $var = 10;
  if (false) {
    $var = 20;
  } else {
    $var = 30; // Added else block for clarity
  }
  return $var; 
}

//This will return 10 since the if statement is not executed.
$result = anotherFunc();
echo $result; // Output: 10

//Improved version with type hinting (PHP 7.0+)
function betterFunc(int $var): int {
  if ($var > 10) {
    return $var * 2;
  } else {
    return $var + 10; 
  }
}

$result = betterFunc(5); // Outputs 15
$result = betterFunc(15); // Outputs 30