<?php
      if (isset($_POST['temp']) && isset($_POST['type'])) {
        $temp = $_POST['temp'];
        $type = $_POST['type'];
    
        if ($type == 'C') {
          $temp = ($temp * 9/5) + 32;
          echo "температура по фаренгейту: ". round($temp, 2). ".";
        } elseif ($type == 'F') {
          $temp = ($temp - 32) * 5/9;
          echo "температур по цельсию: ". round($temp, 2). ".";
        }
      }
   ?>