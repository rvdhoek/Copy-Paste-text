<html>
<HEAD>
<meta name="robots" content="noindex">
<meta https-equiv="cache-control" content="max-age=0" />
<meta https-equiv="cache-control" content="no-cache" />
<meta https-equiv="expires" content="0" />
<meta https-equiv="expires" content="Tue, 01 Jan 2030 1:00:00 GMT" />
<meta https-equiv="pragma" content="no-cache" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

<TITLE>Copy-Paste tool</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">

<?php
$string= "--";
?>
<table  border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="80%" cellspacing="5" cellpadding="3">
<font size="+2">Copy-Paste tool.</font>
<tr>
<?php
echo '</tr><tr><td>';
// Clipboard_CopyTo only uses the word before the first space
echo '</tr><tr><td color:red;><select onchange="Clipboard_CopyTo(value);"  style="width: 90%">';
$file_array = file("file1.txt");
//				sort($file_array);
foreach ($file_array as $string)
// places a - character after the first space.
echo '<option value="'.$string.'">'.substr($string, 0, strpos($string, ' ')).' - '.substr(strstr($string, ' '), 2).'</option>'.PHP_EOL;
echo "</select>";
echo '</td></tr><tr><td valign="middle" align="center" color:red;>';
?>
<tr>
<?php
echo '</tr><tr><td>';
// Clipboard_CopyTo2 only uses the whole text line
echo '</tr><tr><td color:red;><select onchange="Clipboard_CopyTo2(value);" style="width: 90%">';
$file_array = file("/var/www/html/BarCode128/file2.txt");
//                              sort($file_array);
foreach ($file_array as $string)
echo '<option value="'.$string.'">'.$string.'</option>'.PHP_EOL;
echo "</select>";
echo '</tr><tr><td valign="middle" align="center" color:red;>';
?>


	<tr><td>
		<a href="http://google.com/">
		<input type="button" value="Exit" style="color:wheat;background-color:rosybrown" />
		</a>
		<INPUT TYPE="button" VALUE="Back" style="color:wheat;background-color:rosybrown" onClick="history.go(-1);">
 		</td>
	</tr>
</table>

<script>
function Clipboard_CopyTo(value) {
  var tempInput = document.createElement("input");
  tempInput.value = value.split(" ")[0]+ " ";
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
}
function Clipboard_CopyTo2(value) {
  var tempInput = document.createElement("input");
  tempInput.value = value;
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
}

</script>

</BODY>
</html>

