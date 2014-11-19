<html>

	<head>
		<title></title>
	</head>
	<body bgcolor="#D4E5FF">
	<div style="margin: 10px Auto;width:730px;padding: 10px;">
<?php
$string = stripslashes($_POST['code']);
echo 'Original Code:<br /><textarea cols="100" rows="4" readonly="readonly" style="background: #EFEFEF;">'.$string.'</textarea><br /><br /><br />';

	if($_POST['radio2']) { $wbrks = "<br />"; }

	$replaceitem = $_POST['radio1'];
	if($replaceitem == 'div') {
		echo '<span style="color: blue;">"replace div with span" was selected</span><br /><br />';
		$patterns = array("(<div)","(</div>)","(<DIV)","(</DIV>)");
		$replacements = array("<span","</span>".$wbrks,"<span","</span>".$wbrks);
	}
	elseif($replaceitem == 'p') {
		echo '<span style="color: blue;">"replace p with span" was selected</span><br /><br />';
		$patterns = array("(<p)","(</p>)","(<P)","(</P>)");
		$replacements = array("<span","</span>".$wbrks,"<span","</span>".$wbrks);
	}
	elseif($replaceitem == 'both') {
		echo '<span style="color: blue;">"replace both div and p" with span was selected</span><br /><br />';
		$patterns = array("(<p)","(</p>)","(<P)","(</P>)","(<div)","(</div>)","(<DIV)","(</DIV>)");
		$replacements = array("<span","</span>".$wbrks,"<span","</span>".$wbrks,"<span","</span>".$wbrks,"<span","</span>".$wbrks);
	}
	elseif($replaceitem == 'd2p') {
		echo '<span style="color: blue;">"replace both div with p" was selected</span><br /><br />';
		$patterns = array("(<div)","(</div>)","(<DIV)","(</DIV>)");
		$replacements = array("<p","</p>","<p","</p>");
	}
	elseif($replaceitem == 'p2d') {
		echo '<span style="color: blue;">"replace p with div" was selected</span><br /><br />';
		$patterns = array("(<p)","(</p>)","(<P)","(</P>)");
		$replacements = array("<div","</div>","<div","</div>");
	}

else { echo "uh-oh!"; }
	
?>

Output code:<br />
<textarea cols="100" rows="20" readonly="readonly"><?php echo preg_replace($patterns,$replacements, $string); ?></textarea>
<br /><button onclick="javascript:history.go(-1)">Go BACK</button><br />
<strong>This code will display roughly like this:</strong><br /><br />
<?php echo '<div style="width:100%; background-color:#FFFFFF;">'.preg_replace($patterns,$replacements, $string)."\n</div>"; ?>



<p style="font-size: 10pt; color: #999999;">by Mark Coleman</p>
</div>
</body>
<html>