<?php
  $rireki = file_get_contents($_POST['username']."_histry.txt");
  printf('<meta name="viewport" content="width=device-width">');
  printf("<table>");
  printf($rireki);
  printf("</table>");
 ?>
