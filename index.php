<html>
  <head>
  	<title>PHP Test</title>
  </head>
  <body>
    <?php
  	$strDbName = '';
	$strHost = '';
	$strPort = '';
	$strUser = '';
	$strPass = '';
	$strSSLMode = '';
    function getStrPgConnection(){
  		return 'dbname='.$strDbName.' host='.$strDbName.' port='.$strDbName.' user='.$strDbName.' password='.$strDbName.' sslmode='.;
    }
	$db = pg_connect(pgConnectionStr());
	if(!$db){
    	echo "Database connection error.";
        exit;
    }else{
    	echo '<p>Hello World</p>';
    }
    ?>
  </body>
</html>