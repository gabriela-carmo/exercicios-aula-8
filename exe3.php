<?php
$n1 = $_POST['n1'] ?? null;
$n2 = $_POST['n2'] ?? null;
?>

  <form method="post" action="">
    <label>Número 1: <input type="number" name="n1" step="any" required></label><br>
    <label>Número 2: <input type="number" name="n2" step="any" required></label><br>
    <button type="submit">Somar</button>
  </form>

  <?php 

  if ($n1 !== null && $n2 !== null): ?>
    <pre>
<?php
var_dump($n1, $n2);

$a = (float)$n1;
$b = (float)$n2;
$soma = $a + $b;

var_dump($a, $b, $soma);

print "A soma é: $soma";
?>
    </pre>
  <?php endif; ?>
</body>
</html>
