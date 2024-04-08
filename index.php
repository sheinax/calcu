<?php
session_start();

// Initialize session variables if not set
if (!isset($_SESSION['expression'])) {
    $_SESSION['expression'] = '';
}

// Handle number and operator inputs
if (isset($_POST['input'])) {
    $_SESSION['expression'] .= $_POST['input'];
} 

if (isset($_POST['operator'])) {
    $_SESSION['expression'] .= ' ' . $_POST['operator'] . ' ';
} 

// Handle dot input
if (isset($_POST['dot'])) {
    $_SESSION['expression'] .= '.';
}

// Clear the calculator
if (isset($_POST['clear'])) {
    $_SESSION['expression'] = '';
}

// Calculate the result
if (isset($_POST['equal'])) {
    $result = eval('return ' . $_SESSION['expression'] . ';');
    $_SESSION['expression'] = $result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>

<body>
<div class="calc">
    <h2> Basic Calculator </h2>
    <form action="" method="post">
        <input type="text" class="maininput" name="expression" value="<?php echo @$_SESSION['expression'] ?>" disabled><br><br>
       
        <input type="submit" class="numbtn" name="input" value="7">
        <input type="submit" class="numbtn" name="input" value="8">
        <input type="submit" class="numbtn" name="input" value="9">
        <input type="submit" class="calbtn" name="operator" value="/"><br>
        <input type="submit" class="numbtn" name="input" value="4">
        <input type="submit" class="numbtn" name="input" value="5">
        <input type="submit" class="numbtn" name="input" value="6">
        <input type="submit" class="calbtn" name="operator" value="*"><br>
        <input type="submit" class="numbtn" name="input" value="1">
        <input type="submit" class="numbtn"name="input" value="2">
        <input type="submit" class="numbtn"name="input" value="3">
        <input type="submit" class="calbtn"name="operator" value="-"><br>
        <input type="submit" class="numbtn" name="input" value="0">
        <input type="submit" class="equal" name="dot" value=".">
        <input type="submit" class="c" name="clear" value="c">
         <input type="submit" class="calbtn" name="operator" value="+">
         <input type="submit" class="equal eq" name="equal" value="=">
    </div>
    </form>
</body>
</html>
