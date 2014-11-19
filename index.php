<html>

	<head>
		<title></title>	
		
	</head>
	<body bgcolor="#D4E5FF">
<div style="margin: 10px Auto;width:730px;padding: 10px;">
<h2 style="margin: 10px 0; padding: 0px;">div 2 span converter</h2>
<h4 style="margin: 0px; padding:0px;">This thang replaces div tags with span tags, yo. </h4>
<br />

<form method="post" action="replacer.php">
  Paste html code here:<br />
  <textarea name="code" cols="100" rows="4" style="background: #EFEFEF;"><?php $_REQUEST['code']; ?></textarea>
  <br /><br />
<h4>Select what you would like to do:</h4>
 
<table width="100%"><tbody><tr><td width="50%" valign="top">
  <input type="radio" name="radio1" value="div" checked> replace div's with span's<br />
  <input type="radio" name="radio1" value="p"> replace p's with span's<br />
  <input type="radio" name="radio1" value="both"> replace both div's and p's with span's<br><br />
  <input type="radio" name="radio1" value="d2p"> replace div's with p's<br>
  <input type="radio" name="radio1" value="p2d"> replace p's with div's<br><br />
  </td>
  <td valign="top">
  <input type="checkbox" name="radio2" value="lf" checked> Maintain Line Breaks (if changing to span's)<br />
  </td>
</tr></tbody></table>
  <input type="submit" value="Lets DO this thang" />
</form>
<br />

Note: Some attributes and styles that can be used in div and p tags, do nothing when applied to span tags.

<p style="font-size: 10pt; color: #999999;">by Mark Coleman</p>
</div>
	</body>
</html>