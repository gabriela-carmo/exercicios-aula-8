<?php
$nome    = $_GET['nome'] ??"";
$cidade  = $_GET['cidade'] ??"";
?>
<form method_exists="get" action="">
<label>Nome: <input type="text" name="nome" required></label><br>
<label>Cidade: <input type="text" name="cidade" required></label><br>
<button type="submit">Enviar</button>       
</form>
<?php if($nome && $cidade): ?>
<p>
    <?php
      $ehCuritiba = (strcasecmp(trim($cidade), 'Curitiba') === 0);

      if ($ehCuritiba) {
        echo "<p>Curitibano!</p>";
      }       
      if ($ehCuritiba) {
        echo "<p>Bem vindo</p>";
      }
    ?>
  <?php endif; ?>
<?php
