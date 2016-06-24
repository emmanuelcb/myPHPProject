<html>
  <head>
  	<title>PHP Test</title>
  </head>
  <body>
    <?php
  	$strDbName = 'd4upkaqv1a0h6k';
	$strHost = 'ec2-174-129-212-133.compute-1.amazonaws.com';
	$strPort = '5432';
	$strUser = 'tyaypcjudjvlvv';
	$strPass = '2Lv-0uNgjILBlgcx-Qt3aX2sbe';
	$strSSLMode = 'require';
    function getStrPgConnection(){
      	$strPgConnection = 'dbname='.$strDbName.' host='.$strHost.' port='.$strPort.' ';	
        $strPgConnection .= 'user='.$strUser.' password='.$strPass.' sslmode='.strSSLMode;
      	return $strPgConnnection;
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