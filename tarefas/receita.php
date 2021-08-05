<?php
$ingredientes = [
   [
      'item'       => 'Leite',
      'quantidade' => 'xicara'
   ],
   [
      'item'       => 'fermento',
      'quantidade' => '1 colher de sopa'
   ],
   [
      'item'       => 'farinha de trigo',
      'quantidade' => '3 xicara'
   ],
   [
      'item'       => 'açucar',
      'quantidade' => '3 xicara açucar'
   ],
   [
      'item'       => 'Ovos',
      'quantidade' => '3'
   ],
   [
      'item'       => 'Margarina',
      'quantidade' => '4 colheres'
   ],
]; //var_dump( (object)$ingredientes);die;
?>
<ol>
   <?php
   foreach ($ingredientes[5] as $key => $value) {

   ?>
      <?= "<li>" . $value . "</li>" ?>
   <?php
   }
   ?> </ol>

</body>

</html>