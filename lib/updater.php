<?php
require_once('api.php');
$file_list = get_update_file();
if(isset($_POST['confirm']))
{
  $file_content = array();
  for ($i=0; $i < count($file_list); $i++) { 
    $file_content[$i] = get_file_content('https://raw.githubusercontent.com/racaljk/tieba_cloud/master/'.$file_list[$i]);
  }
  print_r($file_content);
}
?>
<head>	
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  	<meta charset="utf-8">
  	<title>Tieba Cloud - Update</title>
  	<meta name="generator" content="Bootply" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link href="../stylesheets/bootstrap.min.css" rel="stylesheet">
  	<link href="../stylesheets/styles.css" rel="stylesheet">
</head> 
<body>
<div  class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="text-center">贴吧云 - 更新</h1>
</div>
<div class="modal-body">
<div class="jumbotron">
  <?php
  if(empty($file_list)) 
  {
    echo '<h1>Just enjoy it!</h1>';
  }else{
    echo '<h2>更新列表:</h2><p>';
    for ($i=0; $i < count($file_list); $i++) { 
      echo "-".$file_list[$i]."<br>";
    }
    echo '</p>';
  }
  ?>
</div>
<form method="post" action="updater.php"><span class="label label-danger">更新时请不要关闭电源.请确保网络通畅,否则可能出错.
</span><br><br><button class="btn btn-primary" type="submit" name="confirm">更新文件</button></form></div><div class="modal-footer">
<div class="col-md-12"><p align="center">&copy;2014 <a href="https://github.com/racaljk">racaljk</a>,remember your dream.</p>
</div>	</div></div></div></div><script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../javascripts/bootstrap.min.js"></script></body>