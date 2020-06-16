<html>
<body>
<h1>ANAM</h1>
<h3>TERRAFORM</h3>

<p>WELCOME</p>
<p>WEBPAGE CREATED USING TERRAFORM</p>
<br>
<?php
  $cloudfront_url = `head -n1 my1.txt`;
  $img_path = "https://".$cloudfront_url."/new.jpg";
  echo "<br>";
  echo "<img src='{$img_path}' width=300 height=300>";
?>
</body>
</html>


