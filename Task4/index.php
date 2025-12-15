<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>

<h2>To Do List</h2>

<form action="action.php" method="post">
    <input type="text" name="task" placeholder="Enter a task">
    <button type="submit" name="add">Add</button>
</form>

<hr>

<ul>
<?php
if (isset($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        echo "<li>$task</li>";
    }
}

echo "Project Name: " . basename(dirname(__FILE__)) . "<br>";
echo "Script Name: " . basename($_SERVER['PHP_SELF']) . "<br>";
echo "Page Requested Time: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "<br>";

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

$_SESSION['counter']++;

echo "Page Visits: " . $_SESSION['counter'];
echo "<br>";
$file = "visitors.txt";

if (!file_exists($file)) {
    file_put_contents($file, 0);
}

$count = file_get_contents($file);
$count++;
file_put_contents($file, $count);

echo "Number of Visitors: " . $count;

?>
</ul>

</body>
</html>
