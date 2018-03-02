<?php include('init.php'); ?>


<?php


$rec=mysqli_query($db,"SELECT * FROM users WHERE id=$id;");
$record=mysqli_fetch_array($rec);
$username=$record['username'];
$bankacc2=$record['bankacc2'];

echo $username,$bankacc2;


$json=file_get_contents($url_bank2);
$array_bank2=json_decode($json,true);


echo $array_bank2[$bankacc2]['Name'].'<br>';
echo $array_bank2[$bankacc2]['IfscCode'].'<br>';
echo $array_bank2[$bankacc2]['AccType1'].'<br>';
echo $array_bank2[$bankacc2]['Saving'][0]['ActualBalance'].'<br>';
echo $array_bank2[$bankacc2]['Saving'][0]['WithdrawlBalance'].'<br>';
echo $array_bank2[$bankacc2]['AccType2'].'<br>';
echo $array_bank2[$bankacc2]['Dmat'][0]['StockName'].'<br>';
echo $array_bank2[$bankacc2]['Dmat'][0]['Quantity'].'<br>';
echo $array_bank2[$bankacc2]['Dmat'][0]['CurrPrice'].'<br>';
echo $array_bank2[$bankacc2]['Dmat'][0]['FaceValue'].'<br>';
echo $array_bank2[$bankacc2]['FundInv'].'<br>';
echo $array_bank2[$bankacc2]['FD'][0]['Balance'].'<br>';
echo $array_bank2[$bankacc2]['FD'][0]['RateOfIntrest'].'<br>';
echo $array_bank2[$bankacc2]['FD'][0]['MaturityAmount'].'<br>';
echo $array_bank2[$bankacc2]['FD'][0]['MaturityDate'].'<br>';
echo $array_bank2[$bankacc2]['Loan'].'<br>';
echo $array_bank2[$bankacc2]['101'][0]['LoanAmount'].'<br>';
echo $array_bank2[$bankacc2]['101'][0]['IntrestRate'].'<br>';
echo $array_bank2[$bankacc2]['101'][0]['NoOfInstallment'].'<br>';
echo $array_bank2[$bankacc2]['101'][0]['PurposeOfLoan'].'<br>';
echo $array_bank2[$bankacc2]['Insaurance'].'<br>';
echo $array_bank2[$bankacc2]['Health'][0]['AmountPerMonth'].'<br>';
echo $array_bank2[$bankacc2]['Health'][0]['NoOfInstallment'].'<br>';







//$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
//mysqli_query($db,$sql);






/*echo $array_bank2['status'].'<br>';
echo "<br>";
echo $array_bank2['articles'][0]['title'].'<br>';
echo "<br>";
echo $array_bank2['1000']['Name'].'<br>';
echo $array_bank2['1000']['Saving'][0]["Actual Balance"].'<br>';

echo "<br>";*/

?>

