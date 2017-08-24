<?php

$countLittle = 0;
$countSovereign = 0;
do {
	$kingAge = rand(1, 10);
    
	if ($kingAge <5){
		echo "<p>little king....</p>";
        $countLittle ++;
        
	}
	else {
		echo "<p>Welcome sovereign.</p>";
        $countSovereign ++;
    }
}
while ($kingAge <= 9);
      
	$str = "<p>The quick brown fox has ended the loop...</p>";
		echo $str . "<i>dabs</i> over the lazy dog...well... looks like there are " . $countLittle . " little kings, and " . $countSovereign . " Sovereign rulers.... multiple sovereign rulers is kind of a paradox right? damnit fox....";
?>
