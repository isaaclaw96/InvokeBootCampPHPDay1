<html>

<body>

<?php 
$fname = $_POST['name'];
echo "Your Name is"." ".$fname."<br>";
//Calculate length of name
$length = strlen($_POST['name']);
echo "The length of your name is"." ".$length."<br>";

if ($length < 5){
    echo "TOO LITTLE WORDS";
} else if ($length >= 5 && $length <= 10) {
    echo "Just Right";
} else{
    echo "Too much alreadyyyy";
}
?>
<form action="size.php" method="post">
<button>Return</button>
</form>

</body>
</html>