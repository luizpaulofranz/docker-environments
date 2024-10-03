<?php 
  echo "<pre><h2>Criando um ambiente de desenvolvimento PHP com Docker Compose.</h2></pre><br/>";
  mysqli_connect("db", "root", "php") or die(mysqli_error()); 
  echo "<pre><h3>Connected to MariaDB<h3></pre><br/>"; 
  phpinfo();

