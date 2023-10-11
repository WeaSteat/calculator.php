<?php
$result = "";

function addNumber($number) {
  global $result;
  $result .= $number;
}

function addOperator($operator) {
  global $result;
  $result .= " " . $operator . " ";
}

function clearResult() {
  global $result;
  $result = "";
}

function calculate() {
  global $result;
  $expression = $result;

  try {
    $resultValue = eval("return $expression;");

    if (is_numeric($resultValue) && is_finite($resultValue)) {
      $result = $resultValue;
    } else {
      $result = "Error";
    }
  } catch (Exception $error) {
    $result = "Error";
  }
}
?>
