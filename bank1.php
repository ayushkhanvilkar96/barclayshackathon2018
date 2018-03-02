
<?php

$db=mysqli_connect('localhost','root','','registration');
	
$id=9;


$url_bank1='https://api.jsonbin.io/b/5a975ceea67185097469ab76';
$url_bank2='https://api.jsonbin.io/b/5a975d7873fb541c61a5a111';
$url_bank3='http://api.jsonbin.io/b/5a975dbf859c4e1c4d5da03f';


/*
https://api.jsonbin.io/b/5a9740bba67185097469aa38
https://api.jsonbin.io/b/5a9740ef859c4e1c4d5d9ef7
https://api.jsonbin.io/b/5a97414373fb541c61a59fd5
*/



/*
https://api.jsonbin.io/b/5a96fcdb859c4e1c4d5d9bed
http://api.jsonbin.io/b/5a96fc69859c4e1c4d5d9be6
https://api.jsonbin.io/b/5a971f42a121bc097fe75c51
*/

$rec=mysqli_query($db,"SELECT * FROM users WHERE id=$id;");
$record=mysqli_fetch_array($rec);
$username=$record['username'];
$bankacc1=$record['bankacc1'];

//echo $username,$bankacc1;


$json=file_get_contents($url_bank1);
$array_bank1=json_decode($json,true);


/*
echo $array_bank1[$bankacc1]['Name'].'<br>';
echo $array_bank1[$bankacc1]['IfscCode'].'<br>';
echo $array_bank1[$bankacc1]['AccType1'].'<br>';
echo $array_bank1[$bankacc1]['Saving'][0]['ActualBalance'].'<br>';
echo $array_bank1[$bankacc1]['Saving'][0]['WithdrawlBalance'].'<br>';
echo $array_bank1[$bankacc1]['AccType2'].'<br>';
echo $array_bank1[$bankacc1]['Dmat'][0]['StockName'].'<br>';
echo $array_bank1[$bankacc1]['Dmat'][0]['Quantity'].'<br>';
echo $array_bank1[$bankacc1]['Dmat'][0]['CurrPrice'].'<br>';
echo $array_bank1[$bankacc1]['Dmat'][0]['FaceValue'].'<br>';
echo $array_bank1[$bankacc1]['FundInv'].'<br>';
echo $array_bank1[$bankacc1]['FD'][0]['Balance'].'<br>';
echo $array_bank1[$bankacc1]['FD'][0]['RateOfIntrest'].'<br>';
echo $array_bank1[$bankacc1]['FD'][0]['MaturityAmount'].'<br>';
echo $array_bank1[$bankacc1]['FD'][0]['MaturityDate'].'<br>';
echo $array_bank1[$bankacc1]['Loan'].'<br>';
echo $array_bank1[$bankacc1]['101'][0]['LoanAmount'].'<br>';
echo $array_bank1[$bankacc1]['101'][0]['IntrestRate'].'<br>';
echo $array_bank1[$bankacc1]['101'][0]['NoOfInstallment'].'<br>';
echo $array_bank1[$bankacc1]['101'][0]['PurposeOfLoan'].'<br>';
echo $array_bank1[$bankacc1]['Insaurance'].'<br>';
echo $array_bank1[$bankacc1]['Health'][0]['AmountPerMonth'].'<br>';
echo $array_bank1[$bankacc1]['Health'][0]['NoOfInstallment'].'<br>';
*/
//BANK 2


$rec=mysqli_query($db,"SELECT * FROM users WHERE id=$id;");
$record=mysqli_fetch_array($rec);
$username=$record['username'];
$bankacc2=$record['bankacc2'];

//echo $username,$bankacc2;


$json=file_get_contents($url_bank2);
$array_bank2=json_decode($json,true);


/*
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
*/
//BANK 3


$rec=mysqli_query($db,"SELECT * FROM users WHERE id=$id;");
$record=mysqli_fetch_array($rec);
$username=$record['username'];
$bankacc3=$record['bankacc3'];
//echo $username,$bankacc3;


$json=file_get_contents($url_bank3);
$array_bank3=json_decode($json,true);
/*
echo $array_bank3[$bankacc3]['Name'].'<br>';
echo $array_bank3[$bankacc3]['IfscCode'].'<br>';
echo $array_bank3[$bankacc3]['AccType1'].'<br>';
echo $array_bank3[$bankacc3]['Saving'][0]['ActualBalance'].'<br>';
echo $array_bank3[$bankacc3]['Saving'][0]['WithdrawlBalance'].'<br>';
echo $array_bank3[$bankacc3]['AccType2'].'<br>';
echo $array_bank3[$bankacc3]['Dmat'][0]['StockName'].'<br>';
echo $array_bank3[$bankacc3]['Dmat'][0]['Quantity'].'<br>';
echo $array_bank3[$bankacc3]['Dmat'][0]['CurrPrice'].'<br>';
echo $array_bank3[$bankacc3]['Dmat'][0]['FaceValue'].'<br>';
echo $array_bank3[$bankacc3]['FundInv'].'<br>';
echo $array_bank3[$bankacc3]['FD'][0]['Balance'].'<br>';
echo $array_bank3[$bankacc3]['FD'][0]['RateOfIntrest'].'<br>';
echo $array_bank3[$bankacc3]['FD'][0]['MaturityAmount'].'<br>';
echo $array_bank3[$bankacc3]['FD'][0]['MaturityDate'].'<br>';
echo $array_bank3[$bankacc3]['Loan'].'<br>';
echo $array_bank3[$bankacc3]['101'][0]['LoanAmount'].'<br>';
echo $array_bank3[$bankacc3]['101'][0]['IntrestRate'].'<br>';
echo $array_bank3[$bankacc3]['101'][0]['NoOfInstallment'].'<br>';
echo $array_bank3[$bankacc3]['101'][0]['PurposeOfLoan'].'<br>';
echo $array_bank3[$bankacc3]['Insaurance'].'<br>';
echo $array_bank3[$bankacc3]['Health'][0]['AmountPerMonth'].'<br>';
echo $array_bank3[$bankacc3]['Health'][0]['NoOfInstallment'].'<br>';
*/
//Aggregation


//Total Actual Balance
//echo "--------".'<br>';
$ActualBalance=$array_bank1[$bankacc1]['Saving'][0]['ActualBalance']+$array_bank2[$bankacc2]['Saving'][0]['ActualBalance']+$array_bank3[$bankacc3]['Saving'][0]['ActualBalance'];

//DMAT QuantityxStock Price
$a=$array_bank1[$bankacc1]['Dmat'][0]['Quantity']*$array_bank1[$bankacc1]['Dmat'][0]['CurrPrice'];
$b=$array_bank2[$bankacc2]['Dmat'][0]['Quantity']*$array_bank2[$bankacc2]['Dmat'][0]['CurrPrice'];
$c=$array_bank3[$bankacc3]['Dmat'][0]['Quantity']*$array_bank3[$bankacc3]['Dmat'][0]['CurrPrice'];
$TotalStockInv=$a+$b+$c;


//Fixed Deposits total maturity amount
$TotalFD=$array_bank1[$bankacc1]['FD'][0]['MaturityAmount']+$array_bank2[$bankacc2]['FD'][0]['MaturityAmount']+$array_bank3[$bankacc3]['FD'][0]['MaturityAmount'];


//Insurance total to be paid in a month
$InsurancePerMonth=$array_bank1[$bankacc1]['Health'][0]['AmountPerMonth']+$array_bank2[$bankacc2]['Health'][0]['AmountPerMonth']+$array_bank3[$bankacc3]['Health'][0]['AmountPerMonth'];


//Profit/Loss made in stocks
$m=($array_bank1[$bankacc1]['Dmat'][0]['Quantity']*($array_bank1[$bankacc1]['Dmat'][0]['CurrPrice']-$array_bank1[$bankacc1]['Dmat'][0]['FaceValue']));
$n=($array_bank2[$bankacc2]['Dmat'][0]['Quantity']*($array_bank2[$bankacc2]['Dmat'][0]['CurrPrice']-$array_bank2[$bankacc2]['Dmat'][0]['FaceValue']));
$o=($array_bank3[$bankacc3]['Dmat'][0]['Quantity']*($array_bank3[$bankacc3]['Dmat'][0]['CurrPrice']-$array_bank3[$bankacc3]['Dmat'][0]['FaceValue']));
$TotalPL=$m+$n+$o;

/*
echo $ActualBalance."<br>";
echo $TotalStockInv."<br>";
echo $TotalFD."<br>";
echo $InsurancePerMonth."<br>";
echo $TotalPL."<br>";*/


//Stocks

$Stock_one=$array_bank1[$bankacc1]['Dmat'][0]['StockName'];
$QStock_one=$array_bank1[$bankacc1]['Dmat'][0]['Quantity'];
$Stock_two=$array_bank2[$bankacc2]['Dmat'][0]['StockName'];
$QStock_two=$array_bank2[$bankacc2]['Dmat'][0]['Quantity'];
$Stock_three=$array_bank3[$bankacc3]['Dmat'][0]['StockName'];
$QStock_three=$array_bank3[$bankacc3]['Dmat'][0]['Quantity'];



//Loan Table
$Loan_one=$array_bank1[$bankacc1]['101'][0]['LoanAmount'];
$Loan_two=$array_bank2[$bankacc2]['101'][0]['LoanAmount'];
$Loan_three=$array_bank3[$bankacc3]['101'][0]['LoanAmount'];

$LoanAmount1=$array_bank1[$bankacc1]['101'][0]['LoanAmount'].'<br>';
$IntrestRate1= $array_bank1[$bankacc1]['101'][0]['IntrestRate'].'<br>';
$PurposeOfLoan1=$array_bank1[$bankacc1]['101'][0]['PurposeOfLoan'].'<br>';

$LoanAmount2=$array_bank2[$bankacc2]['101'][0]['LoanAmount'].'<br>';
$IntrestRate2=$array_bank2[$bankacc2]['101'][0]['IntrestRate'].'<br>';
$PurposeOfLoan2=$array_bank2[$bankacc2]['101'][0]['PurposeOfLoan'].'<br>';


$LoanAmount3=$array_bank3[$bankacc3]['101'][0]['LoanAmount'].'<br>';
$IntrestRate3=$array_bank3[$bankacc3]['101'][0]['IntrestRate'].'<br>';
$PurposeOfLoan3=$array_bank3[$bankacc3]['101'][0]['PurposeOfLoan'].'<br>';

//BankBalance
$BankBalance1=$array_bank1[$bankacc1]['Saving'][0]['ActualBalance'];
$BankBalance2=$array_bank2[$bankacc2]['Saving'][0]['ActualBalance'];
$BankBalance3=$array_bank3[$bankacc3]['Saving'][0]['ActualBalance'];


//Mutual Funds
$MutualFund1= $array_bank1[$bankacc1]['MutualFund'].'<br>';
$AmountInv1= $array_bank1[$bankacc1]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV1= $array_bank1[$bankacc1]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav1= $array_bank1[$bankacc1]['MfDetail'][0]['CurrNav'].'<br>';
$unit1= $array_bank1[$bankacc1]['MfDetail'][0]['unit'].'<br>';

$MutualFund2= $array_bank2[$bankacc2]['MutualFund'].'<br>';
$AmountInv2= $array_bank2[$bankacc2]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV2= $array_bank2[$bankacc2]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav2= $array_bank2[$bankacc2]['MfDetail'][0]['CurrNav'].'<br>';
$unit2= $array_bank2[$bankacc2]['MfDetail'][0]['unit'].'<br>';

$MutualFund3= $array_bank3[$bankacc3]['MutualFund'].'<br>';
$AmountInv3= $array_bank3[$bankacc3]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV3= $array_bank3[$bankacc3]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav3= $array_bank3[$bankacc3]['MfDetail'][0]['CurrNav'].'<br>';
$unit3= $array_bank3[$bankacc3]['MfDetail'][0]['unit'].'<br>';



//Fixed Deposit
$FDBalance1=$array_bank1[$bankacc1]['FD'][0]['Balance'].'<br>';
$RateOfInterest1=$array_bank1[$bankacc1]['FD'][0]['RateOfIntrest'].'<br>';
$MaturityAmount1=$array_bank1[$bankacc1]['FD'][0]['MaturityAmount'].'<br>';
$MaturityDate1=$array_bank1[$bankacc1]['FD'][0]['MaturityDate'].'<br>';

$FDBalance2=$array_bank2[$bankacc2]['FD'][0]['Balance'].'<br>';
$RateOfInterest2=$array_bank2[$bankacc2]['FD'][0]['RateOfIntrest'].'<br>';
$MaturityAmount2=$array_bank2[$bankacc2]['FD'][0]['MaturityAmount'].'<br>';
$MaturityDate2=$array_bank2[$bankacc2]['FD'][0]['MaturityDate'].'<br>';

$FDBalance3=$array_bank3[$bankacc3]['FD'][0]['Balance'].'<br>';
$RateOfInterest3=$array_bank3[$bankacc3]['FD'][0]['RateOfIntrest'].'<br>';
$MaturityAmount3=$array_bank3[$bankacc3]['FD'][0]['MaturityAmount'].'<br>';
$MaturityDate3=$array_bank3[$bankacc3]['FD'][0]['MaturityDate'].'<br>';

/*
echo $Stock_one=$array_bank1[$bankacc1]['Dmat'][0]['StockName'].'<br>';
echo $QStock_one=$array_bank1[$bankacc1]['Dmat'][0]['Quantity'].'<br>';
echo $Stock_two=$array_bank2[$bankacc2]['Dmat'][0]['StockName'].'<br>';
echo $QStock_two=$array_bank2[$bankacc2]['Dmat'][0]['Quantity'].'<br>';
echo $Stock_three=$array_bank3[$bankacc3]['Dmat'][0]['StockName'].'<br>';
echo $QStock_three=$array_bank3[$bankacc3]['Dmat'][0]['Quantity'].'<br>';





$sql="UPDATE users SET ActualBalance=$ActualBalance,TotalStockInv=$TotalStockInv,TotalFD=$TotalFD,InsurancePerMonth=$InsurancePerMonth,TotalPL=$TotalPL WHERE id=$id";
mysqli_query($db,$sql);

echo $sql;*/



/*
echo $sql;
mysqli_query($db,$sql);*/







//$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
//mysqli_query($db,$sql);



/* $array_bank1['status'].'<br>';
 "<br>";
 $array_bank1['articles'][0]['title'].'<br>';
 "<br>";
 $array_bank1['1000']['Name'].'<br>';
 $array_bank1['1000']['Saving'][0]["Actual Balance"].'<br>';

 "<br>";*/

?>

