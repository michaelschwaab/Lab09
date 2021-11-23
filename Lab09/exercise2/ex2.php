<?php




//access the global array called $_POST to get the values from the text fields
$totalCorrect = 0;
$q1answer = $_POST["q1"];
$q2answer = $_POST["q2"];
$q3answer = $_POST["q3"];
$q4answer = $_POST["q4"];
$q5answer = $_POST["q5"];

echo "Question 1: What is 1+1?<br>";
echo "You answered: ".$q1answer."<br>";
echo "Correct answer: 2<br><br>"; 
if($q1answer == "2")
{
  $totalCorrect++;
}

echo "Question 2: What is 8*9?<br>";
echo "You answered: ".$q2answer."<br>";
echo "Correct answer: 72<br><br>"; 
if($q2answer == "72")
{
  $totalCorrect++;
}

echo "Question 3: What is 5 factorial?<br>";
echo "You answered: ".$q3answer."<br>";
echo "Correct answer: 120<br><br>"; 
if($q3answer == "120")
{
  $totalCorrect++;
}

echo "Question 4: What is the derivative of x^2?<br>";
echo "You answered: ".$q4answer."<br>";
echo "Correct answer: 2x<br><br>"; 
if($q4answer == "2x")
{
  $totalCorrect++;
}

echo "Question 5: Whait is the atomic number of iron?<br>";
echo "You answered: ".$q5answer."<br>";
echo "Correct answer: 26<br><br>"; 
if($q5answer == "26")
{
  $totalCorrect++;
}

echo "Score: ". $totalCorrect."/5<br>";

?>
