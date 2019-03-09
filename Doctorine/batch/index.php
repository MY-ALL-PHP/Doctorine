<!DOCTYPE html>
<html>
<head>
    <title>Batch Processing..|</title>
</head>
<body>
<form method="post" action="index.php">
<table border="1">
<th>
	<tr>
		<td>name</td>
		<td>Mobile No</td>
	</tr>
</th>
<?php
for($i=0; $i<10; $i++){
	echo '<tr>';
	echo'<td>'.'<input type="text" name="empno[]"></td>';
	echo'<td>'.'<input type="text" name="mobile[]"></td>';
	echo '</tr>';
}
?>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Add Records..">
	</td>
</tr>
</table>
</form>

<?php
if(!empty($_POST)) {
require_once('BatchProcessing.php');
$BatchData = new BatchProcessing($_POST);
$BatchData -> assignParams();
$FinalValue = $BatchData -> formatArray();

$externalDB = array();
$externalQr  = array();

foreach($FinalValue as $Key => $Value){
    array_push($externalDB, 'name');
    array_push($externalQr, $Value['name']);
    array_push($externalDB, 'mobileno');
    array_push($externalQr, $Value['phone']);
}

//$QueryString = '';
//$i = 0;
//foreach($_POST as $Key){
//	$QueryString .= '(NULL,'.'\''.$_POST['Empno'][$i].'\''.','.'\''.$_POST['Mobile'][$i].'\''.'),';
//	++$i;
//}
//$QueryString .= $QueryString.';';
//$Query = 'Insert into batch(Id, Name,MobileNo) values'.$QueryString;

    $hn = 'localhost';
    $un = 'root';
    $db = 'test';
    $pw = '';
    $conn = new mysqli($hn, $un, $pw, $db);
    //if ($conn->connect_error) die('Unable To Connect To The Database so the script exiting here...');

//print_r($conn->query($Query));
//$conn->query($Query);
//$Result = $conn->query('SELECT * FROM batch');
//print_r($Result);


    $ArrayKeys = array_values($externalDB);
    $ArrayValues = array_values($externalQr);
    echo '<pre>';
    print_r($ArrayValues);//exit;
    print_r($ArrayKeys);

 $Values = '';
 foreach ($ArrayValues as $key1 => $ley) {
     $Values .= '\''.$ley.'\',';
 }
 $Values = rtrim($Values, ',');

    $table = 'batchinsert';
    function _insert_batch($table, $ArrayKeys, $ArrayValues)
    {
        global $Values;//removeable
        global $FinalValue;
        return 'INSERT INTO ' . $table . ' (' . implode(', ', $ArrayKeys) . ') VALUES (' . $Values.')';//implode(', ', $ArrayValues).')';
    }
    $Qs = _insert_batch($table, $ArrayKeys, $ArrayValues);
    //print_r($Qs);

    $Res = $conn->query($Qs);
    print_r($Res);
    //$conn->close();
    if ($Res) {
        echo 'Sucessfull Insertion...';
    } else
        echo 'Bad Try..!! @@Never Give Up..  ^^Keep Trying^^';
}





/* .idea
 * To generate a query i need to first extract the post values such as "name" and "mobile-number" in this case
 * then i will assign the property value of a DATA class as an array and , i will create as many property, as there in the rqd data
 * 
 * After that i will acess the property value and iterate those value and create a final string. Like as below ::
 * $Obj->prop1[$Counter] . $Obj->prop2[$Counter]  Where the counter value will be increased with the for loop
 * For the first itration the  value will be (00) and subsequent iteratiion the value willl be (11), (22), (33), (44) & So on..
 * 

 * Keeping DataObject as separate {Data Class}
 * 
 * Keeping Batch Processing Class As Separate will make sense
 * 
 * 
 */


?>