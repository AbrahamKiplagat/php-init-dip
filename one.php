
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Hello World<br>";

$name = 'Alice'; // String variable
$age = 25; // Integer variable
$isStudent = true; // Boolean variable
$isMale = true; // Boolean variable for gender (assuming true is for male)
$namesArray = ['Alice', 'Bob', 'Charlie']; // Array of names

// Object 1
$person1 = (object) [
    'name' => 'John Doe',
    'age' => 30,
    'isStudent' => false,
    'isMale' => true
];

// Object 2
$person2 = (object) [
    'name' => 'Jane Smith',
    'age' => 28,
    'isStudent' => true,
    'isMale' => false
];

// Associative array representing a resource
$resource = [
    'name' => 'Sample Resource',
    'type' => 'Document',
    'size' => '10 MB',
    'isPublic' => true
];

// Displaying variables with <br> tags for line breaks
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Student: ";
if ($isStudent) {
    echo 'Yes';
} else {
    echo 'No';
}
echo "<br>";
echo "Gender: ";
if ($isMale) {
    echo 'Male';
} else {
    echo 'Female';
}
echo "<br><br>";

// Displaying array of names
echo "Names:<br>";
foreach ($namesArray as $n) {
    echo "- $n<br>";
}
echo "<br>";

// Displaying objects' properties
echo "Objects:<br>";
echo "Person 1: {$person1->name}, {$person1->age}, ";
if ($person1->isStudent) {
    echo 'Student';
} else {
    echo 'Not a student';
}
echo ", ";
if ($person1->isMale) {
    echo 'Male';
} else {
    echo 'Female';
}
echo "<br>";
echo "Person 2: {$person2->name}, {$person2->age}, ";
if ($person2->isStudent) {
    echo 'Student';
} else {
    echo 'Not a student';
}
echo ", ";
if ($person2->isMale) {
    echo 'Male';
} else {
    echo 'Female';
}
echo "<br><br>";

// Displaying resource properties
echo "Resource:<br>";
echo "Name: {$resource['name']}<br>";
echo "Type: {$resource['type']}<br>";
echo "Size: {$resource['size']}<br>";
echo "Public: ";
if ($resource['isPublic']) {
    echo 'Yes';
} else {
    echo 'No';
}
echo "<br>";

// Explode method example
$stringToExplode = "This is a sample string";
$explodedString = explode(" ", $stringToExplode); // Splitting string by spaces
echo "<br>Exploded String:<br>";
print_r($explodedString); // Displaying the resulting array
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<br>";
echo "<br>";
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
<?php
//There is an index array and associating array
// Indexed array example
$fruits = array('Apple', 'Orange', 'Banana', 'Grapes', 'Mango');

// Accessing elements by index
echo "Indexed Array:<br>";
echo "Fruit at index 0: " . $fruits[0] . "<br>"; // Accessing Apple
echo "Fruit at index 2: " . $fruits[2] . "<br>"; // Accessing Banana

// Looping through an indexed array
echo "<br>Looping through Indexed Array:<br>";
foreach ($fruits as $index => $fruit) {
    echo "Index: $index, Fruit: $fruit<br>";
}

// Displaying array contents with var_dump
echo "<br>Array contents using var_dump:<br>";
var_dump($fruits);

// Associative array example
$person = array(
    'name' => 'John Doe',
    'age' => 30,
    'gender' => 'Male',
    'occupation' => 'Engineer'
);

// Accessing elements by keys
echo "<br>Associative Array:<br>";
echo "Name: " . $person['name'] . "<br>"; // Accessing John Doe
echo "Age: " . $person['age'] . "<br>"; // Accessing 30

// Looping through an associative array
echo "<br>Looping through Associative Array:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Displaying array contents with var_dump
echo "<br>Array contents using var_dump:<br>";
var_dump($person);

?>