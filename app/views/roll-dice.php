<<!DOCTYPE html>
<html>
<head>
	<title>rolldice</title>
</head>
<body>
<h1>Hello, <?php echo "the dice rolled " . $num . " and your guess was   " . $guess; ?></h1>
<h2>you <?= ($guess == $num) ? 'win' : 'lose'; ?>!</h2>
</body>
</html>