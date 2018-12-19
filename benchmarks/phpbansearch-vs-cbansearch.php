<?php

//File will be expanded upon if pageloads are noticably slower after checking bans on every page action
//until now it can be considered junk
	
//get list
echo "<table border=1><tr><th>List size</th><th>PHP</th><th>C Shell Exec</th><th>C Exec</th></tr>";
exec("cd ../../../");
for($i = 2 ; $i <= 20 ; $i = $i + 2){
	echo "<tr>";
	echo "<td> $i * 10</td>";
	
	$ip_list = 0;
	
	for($j = 0 ; $j < $i * 10 ; $j++){
		
	}
	
	$start = explode(" ",microtime())[0];
	//findPHP();
	echo "<td>" . ((string) (explode(" ",microtime())[0] - $start)) . "</td>";
	
	
	echo shell_exec("./random-tests/shell-checklist");
	echo "<td>" . ((string) (explode(" ",microtime())[0] - $start)) . "</td>";
	
	echo exec("./random-tests/shell-checklist");
	echo "<td>" .  ((string)(explode(" ", microtime())[0] - $start)) . "</td>";
	echo "</tr>";
}
	echo $start ; 
echo "</table>";