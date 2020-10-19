<?php
			$ids = $_GET["id"];
			$token = $_GET["token"];

$json_options = [
  "http" => [
    "method" => "GET",
    "header" => "Authorization: Bot $token"
  ]
];

$json_context = stream_context_create($json_options);

$invites     = file_get_contents('https://discordapp.com/api/guilds/'.$ids.'/invites', false, $json_context);

$infos     = file_get_contents('https://discordapp.com/api/guilds/'.$ids.'', false, $json_context);
$svname  = json_decode($infos, false);
$json_decode  = json_decode($invites, true);
if($_GET){
      ?>
<?php if (!$json_decode) {
	echo 'not worked try again true usage emircanyildirim.com/inviteapi.php?id=SERVER_ID&token=BOT_TOKEN';
}else { ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $svname->name; ?> Invites</title>
  </head>
  <body>



<?php




 



echo '<h2>JSON Output</h2>';
echo '<pre>';
print_r($json_decode);
echo '</pre>'; 


?>






	
	


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } ?> <?php }else {

	echo '<form action="/inviteapi.php" method="GET">
  <label for="id">Server Id:</label>
  <input type="text" id="id" name="id"><br><br>
  <label for="token">Bot Token:</label>
  <input type="text" id="token" name="token"><br><br>
  <input type="submit" value="Submit">
</form>';

} 

?>
