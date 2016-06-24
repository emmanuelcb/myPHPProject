<html>
  <head>
  	<title>PHP Test</title>
  </head>
  <body>
    <?php
  	echo '<p>'+pgConnectionStr()+'Hello World</p>';
    function pgConnectionStr(){
  		$pgConnectionStr = "dbname=devpm0vpe3687n ";
  		$pgConnectionStr += "host=ec2-54-243-42-108.compute-1.amazonaws.com ";
  		$pgConnectionStr += "port=5432 ";
  		$pgConnectionStr += "user=uwqryzqrrrnmwk ";
  		$pgConnectionStr += "password=h-LZdtvOsqn2bIifjq32FbKDdr ";
  		$pgConnectionStr += "sslmode=require";
  		return $pgConnectionStr;
    }
	$db = pg_connect(pgConnectionStr());
	if(!$db){
    	echo "Database connection error.";
        exit;
    }
    ?>
  </body>
</html>