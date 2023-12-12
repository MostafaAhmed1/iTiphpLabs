<h3>=================>>> 5 string functions</h3><br/>
<?php
// replace string
$str = "Hello, World!";
$newStr = str_replace("World", "Mostafa", $str);
echo $newStr."<br/>";

// count the words in a string
$str2 = "hello my friends my name is mostafa";
$wordCount = str_word_count($str2);
echo "Number of words : $wordCount"."<br/>";

// replace string with an index
$str3 = "hello my friends my name is mostafa";
$result = substr_replace($str3, "I'm", 17, 10);
echo $result."<br/>";

// wrab string
$result = wordwrap($str3, 6, "<br/>");
echo $result."<br/>";

// get metaphone key of string
$result = metaphone("mostafa");
echo $result."<br/>";

?>
<h3>=================>>> 5 array functions</h3><br/>
<?php
// Merge two arrays 
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<br/>";

// Reverse the order of array
$reversedLetters = array_reverse($mergedArray);
print_r($reversedLetters);
echo "<br/>";

// Search for value index
$colors = ['red', 'blue', 'green'];
$searchResult = array_search('blue', $colors);
print_r($colors); 
echo "<br/>"."Index of blue = ".$searchResult."<br/>";

// Remove duplicate values
$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers); 
echo "<br/>";

// Extract a part of an array
$numbers = [1, 2, 3, 4, 5];
$slice = array_slice($numbers, 2, 2);
print_r($slice); 
echo "<br/>";

//=================>>> form validation

$usersList=
[
    "user1"=>["username"=>"asd","password"=>"123"],
    "user2"=>["username"=>"ali","password"=>"456"],
];

function IsEmpty($val)
{
    return empty($val);
}

function Validate($user, $pass, $lst = [])
{
    if (IsEmpty($user) || IsEmpty($pass))
    {
        echo "<h2>empty values not allowed</h2>";
        return;
    }
    
    strip_tags($user);
    strip_tags($pass);
    trim($user);
    trim($pass);
    htmlspecialchars($user);
    htmlspecialchars($pass);
    
    $login = false;
    foreach ($lst as $usr)
    {
        if($user == $usr['username'] && $pass == $usr['password'])
        {
            echo $usr['username'].$usr['password'];
            $login = true;
            break;
        }
    }
    if($login) 
    {
        echo "<h2>Logged in success :)</h2>";
    }
}
?>

<h3>=================>>> form validation</h3><br/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <lable>User Name</lable>    
    <input type="text" name="userName" >
        
    <lable>Password</lable>
    <input type="password" name="password" >

    <button type="submit" name="submit" value="ok">Log in...</button> 
</form>

<?php 
    if (isset($_POST['submit']))
    {
        Validate($_POST['userName'], $_POST['password'], $usersList);
    }
?>