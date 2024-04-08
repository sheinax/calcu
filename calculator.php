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