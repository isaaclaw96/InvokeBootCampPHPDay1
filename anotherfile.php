<html>

<body>
<form action='anotherfile.php' method='post'>
Name:
<input type = "text" name="name">
<input type = "submit">
</form>
<?php 
$fname = $_POST['name'];
echo "Your Name is"." ".$fname."<br>";
//Calculate length of name
$length = strlen($_POST['name']);
echo "The length of your name is"." ".$length."<br>";

switch($length){  //instead of using a lot of else if
    case ($length<5):
        echo "Too Short";
        break;
    case ($length >=5 && $length < 10):
        echo "Just Enough";
        break;
    case ($length >= 10):
    echo "Too Much";
        break;
}
?>
<form action="size.php" method="post">
<button>Return</button>
</form>

</body>
</html>


<!-- what string can do, how to change the context of a string/number or manipulate data, php.net string manipulation, term 'explode' -->