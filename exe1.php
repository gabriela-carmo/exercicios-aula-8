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
echo "Nome: ".htmlspecialchars($nome)." | Cidade: ".htmlspecialchars($cidade);
?>
</p>
<?php endif; ?> 
<?php
