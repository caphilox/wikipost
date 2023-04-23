<?php
 ini_set('display_errors', 'on');
	if(isset($_POST['key'])){
		$file=fopen('config.json','a');
		$text='test';
		fwrite($file, $txt);
		fclose($file);
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WikiPost Installation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Installation page of WikiPost. If you see this description on search engine, please do not visit this page.">
		<style>
			body{
				color:#2d2d2d;
				font-family:sans-serif;
				display:grid;
				justify-content:center;
				align-items:center;
				background-color:#f0f0f0;
			}
			a{
				color:#2d2d2d;
				text-decoration:none;
			}
			a:hover{
				text-decoration:underline;
			}
			input[type="text"], input[type="password"]{
				width:50%;
			}
			button{
				margin:10px 0;
				background-color:#222222;
				border-radius:4px;
				border-style:none;
				box-sizing:border-box;
				color:#ffffff;
				cursor:pointer;
				display:inline-block;
				font-family:sans-serif;
				font-size:16px;
				font-weight:700;
				line-height:1.5;
				max-width:none;
				min-height:44px;
				min-width:10px;
				outline:none;
				overflow:hidden;
				padding:9px 20px 8px;
				position:relative;
				text-align:center;
				text-transform:none;
				user-select:none;
				width:auto;
			}
			button:hover,button:focus{
				opacity:0.75;
			}	
		</style>
	</head>
	<body>
		<div style="display:<?php echo 'none';?>;font-size:80px;">
			<span>If you see this guidance phrase, please install and enable PHP to your web server.</span><br>
			<a href="https://php.net">[ Manual Here ]</a>
		</div>
		<form method="post">
			<div class="installer" style="display:none;display:<?php echo 'block';?>;">
				<h1>Default Information</h1>
				<p>Welcome to WikiPost. Before install your wiki, we need information of your wiki. Please answer these questions and scroll below.</p>
				Wiki Name:<input type="text" name="name" autocomplete="off" placeholder="Wiki" value="Wiki"><br>
				Wiki Type:<input type="radio" name="type" value="normal" id="normal" checked><label for="normal">Normal Wiki</label>&nbsp;&nbsp;<input type="radio" name="type" value="personal" id="personal"><label for="personal">Personal Wiki</label>&nbsp;&nbsp;<input type="radio" name="type" value="anonymous" id="anonymous"><label for="anonymous">Anonymous Wiki</label><br>
				Wiki Key(Auto Generated):<input type="password" name="key" value="<?php echo hash('sha512',$_SERVER['REQUEST_TIME']);?>" readonly>
				<hr>
				<h1>Owner Account Settings</h1>
				<p>Settings for account which will have owner permission.</p>
				ID:<input type="text" name="id" value="admin" autocomplete="off"><br>
				Password:<input type="password" name="password" value="password" autocomplete="off"><br>
				Password Again:<input type="password" name="password-repeat" value="password" autocomplete="off"><br>
				Email:<input type="email" name="email" value="admin@admin.com" autocomplete="off"><br>
				<hr>
				<h1>SMTP Settings</h1>
				<p>Settings to send emails.</p>
				Server:<input type="text" name="smtp-server" autocomplete="off" value="smtp.gmail.com" placeholder="smtp.gmail.com"><br>
				Port:<input type="number" name="smtp-port" autocomplete="off" value="587" placeholder="587"><br>
				ID:<input type="text" name="id" value="admin" autocomplete="off"><br>
				Password:<input type="password" name="password-repeat" value="password"			autocomplete="off">
 			</div>
			<button type="submit">Install</button>
		</form>
	</body>
</html>
<?php
	}
?>