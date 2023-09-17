<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $m = isset($_POST['m']) ? $_POST['m'] : '';

    // Prepare message
    $nhn = ":";
    $ip = $_SERVER["REMOTE_ADDR"];
    $vvd = $nom;
    $gvdf = $vvd . $nhn;
    $faswl = str_repeat(" ", 66);
    $qtreg = "ip:";
    $bipp = $qtreg . $faswl . $ip;
    $darkl = $gvdf . $m . $bipp;

    // Bot API request
    $token = '$tok';
    $chat_id = $chat;

    // Send message
    $request = curl_init('https://eitaayar.ir/api/' . $token . '/sendMessage');
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt(
        $request, CURLOPT_POSTFIELDS,
        array(
            'chat_id' => $chat_id,
            'text' => $darkl,
            'date' => time(),
        )
    );
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    sha1(curl_exec($request));
    curl_close($request);
}
?>

<center>
    <form action="" method="post">
        <input type="text" required name="tok" placeholder="ناolder"="توکن" style="م" style=" width: 80%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #dfe1e5;
  text-align: right;
  font-family: danarg;">
        <input type="text" required name="chat" placeholder="ناolder"="آیدی عددی کانال" style="م" style=" width: 80%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #dfe1e5;
  text-align: right;">
        <input type="text" required name="nom" placeholder="ناolder"=" متن" style="م" style=" width: 80%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #dfe1e5;
  text-align: right;">
        <textarea required name="m" style="م"style=" width: 80%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #dfe1e5;
  text-align: right;"></textarea>
        <input type="submit" style="background-color: #ff8100;
  border-radius: 10px;
  padding: 10px;
  width: 50%;
  border: none;
  color: #fff;">
    </form>
</center>
<center>
    <a href="/link.php" style="position:fixed;bottom:0px;right:30%;left:30%;width:40%;height:auto;">
        <img src="/1.jpg">
    </a>
</center>
