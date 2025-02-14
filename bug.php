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
  }
  return $var; 
}

//This will return 10 since the if statement is not executed.
$result = anotherFunc();
echo $result; // Output: 10