<?php
 session_start();
function sanitize($data) {
$data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
$data = strip_tags($data);
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}
  

