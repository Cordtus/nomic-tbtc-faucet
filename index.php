<?php
$WALLET = $_POST["WALLET_ADDR"];
$LINK_ADDR = "https://blockstream.info/testnet/address/$WALLET";

$MSG_NO_ADDRESS = "";

if (isset($_POST["WALLET_ADDR"]) && empty($_POST["WALLET_ADDR"])) {
    #echo "<h2>You forgot to enter an address!!</h2>\n" ;
    #die("Go back and try again.");
    $MSG_NO_ADDRESS = "<h2>You forgot to enter an address!!</h2><br>Go back and try again.";
} else {
    echo "<h2>Check the transaction to the address requested:</h2>";
    echo "<b>Block explorer:</b><br><br>";
    echo '<a href="'.$LINK_ADDR.'">View wallet on block explorer</a>';
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Request testnet BTC</title>
</head>
<link href="stylesheets/common.css" type="text/css" rel="stylesheet">
<body>

<h1>Enter Nomic-testnet-4d BTC deposit address</h1>

<form method="post" action="echo <?php $_SERVER['PHP_SELF'];?>">
  <input type="text" name="WALLET_ADDR" size="35">
  <br>
  <input type="submit" value="Request Tokens">
</form>
<font size = "2">
Must start with '<i>tb1</i>..' or tx will fail!<br />
</font>
<br />
<?php
echo $MSG_NO_ADDRESS;
?>
</body>
</html>
