<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>

<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <style>
  #div2 {
  	 width: 250px;
  	  height: 200px;
  	 padding: 0.5em;
  	 background:lightblue;
  	  }
  #div2 h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#div2" ).resizable();
  });
   $(function() {
    $( "#div3" ).draggable();
  });
  </script>

<script type="text/javascript" src="../js/save.js"></script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="savemoney_ok.php" method="post" name="saveform">


  <div id="div2" class="ui-widget-content" align="center">
  <div id="div3" align="center">
  <table class="div1" align="center" >
	<tr align="center">
		<td>
		<input type="text" placeholder="存款金额" name="save" class="txt"></td>
		
	</tr>
	<tr align="center">
	<td><input type="submit" class="btn" name="saveok" value="确定" onclick="return check(saveform);"></td></tr>
</table>
  </div>

</div>




</form>
