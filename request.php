<?php
$WALLET = $_POST['WALLET_ADDR'];


if(empty($WALLET )) {
echo "<h2>You forgot to enter an address!!</h2>\n" ;
die ("Go back and try again.");
}
$LINK_ADDR = "https://blockstream.info/testnet/address/$WALLET";
echo "<h2>Check the transaction to the address requested:</h2>";
echo "<b>Block explorer:</b><br><br>";
echo '<a href="'.$LINK_ADDR.'">'.$WALLET.'</a>';
?>

<?php
exec ( "/scripts/send.sh \"$WALLET\" );
?>
