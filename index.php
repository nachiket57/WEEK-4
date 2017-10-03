<?php
echo "<h2> Nachiket Week 4 Homework </h2>";
$date =  date('Y-m-d', time());
echo " The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
$amplitude;
echo '<hr>';
echo '<br>';
$nach= new nachiket();
$desai=str_replace ("-","/","$date");
$nach->rp($date);
$nach->comp($desai,$tar);
$nach->snp($desai);
$nach->cnt($desai);
$nach->len($desai);
$nach->aval($desai);
$nach->two($desai);
$nach->spaces($desai);
$nach->leaps($year);
class nachiket
{
public function rp ($date)
{
echo "Replace <br>";
$amplitude = str_replace ("-","/","$date");
echo $amplitude;
echo '<br>';
echo '<hr>';
}

public function comp($desai,$tar)
					   {    
echo "  Comparing string <br> ";
       
$alpine=strcmp($desai,$tar);
if($alpine>0)
{
echo 'THE FUTURE <br>';
}
elseif($alpine<0)
{
echo 'THE PAST <br>';
}
else 
{
echo 'OOPSSSSSS!<br>';
}
echo '<hr>';
}
public function snp($desai) 
{
echo "  Search & print out <br> ";
$ar = str_split($desai);

for ($i=0; $i < sizeof($ar); $i++) {
       
if($ar[$i] == '/') {

echo  $i. " ";
               
}
}    
echo '<hr>';
}
 public function cnt($desai)
{
echo '<br>';
echo " Words in string-<br>";
$word = explode("/",$desai);
echo "word number " . sizeof($word);
echo "<br>";
echo "words are-";
echo "<br>";
foreach ($word as $wo)
{
echo $wo . "<br>";
}
echo '<hr>';
}
  
public function len($desai)
{
echo "  length <br> ";
echo strlen($desai);
echo '<hr>'; 
}
            
public function aval($desai)
{
if (ord($desai) );
{
echo '<br>';
echo " ASCII VAL"."<br>" . ord($desai);
}
echo '<hr>';
}
    
public function two($desai)
{
echo '<br>';
}
     
public function spaces($desai)
{
echo " last 2 char" ."<br>" .substr ("$desai",-2);
echo '<hr>';
{        
    
echo "spacing  <br>";
$b= explode('/',$desai);
foreach($b as $mango)
{
echo $mango;
echo " ";
}
}
echo '<hr>';     
}
public function leaps($year)
{
echo " LEAP YEARS <br>(FOREACH)";
echo "<br>";
foreach ($year as $ya )
{
switch((($ya % 4) == 0) && ((($ya % 100) != 0) || (($ya % 400) == 0)))
{
case True:
echo $ya . " - Yes";
break;
default:
echo $ya . " - No";
}
echo "<br>";
}
echo "<br>";
echo "<hr>";
echo "(FOR )";
echo "<br>";
for($xy=0; $xy< sizeof($year); $xy++){
switch((($year[$xy] % 4) == 0) && ((($year[$xy] % 100) != 0) || (($year[$xy] % 400) == 0))){
case True:
echo $year[$xy] . " - Yes";
break; 
default:
echo $year[$xy] . " - No ";
}
echo "<br>";
   
}
echo '<hr>';
}
    
}

echo "<body style='background-color:yellow'>";
?>