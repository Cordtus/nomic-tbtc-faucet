<?php
$WALLET = $_POST['WALLET_ADDR'];


if(empty($WALLET )) {
echo "<h2>You must enter an address to send the tokens to!</h2>\n" ;
die ("Click Back to start again.");
}
echo "<h2>Check the transaction to the address requested:</h2>";
echo "<b>Block explorer:</b><br><br>";
echo "https://blockstream.info/testnet/address/"$WALLET";
?>

<?php
exec ( "/scripts/send.sh \"$WALLET\" );
?>
