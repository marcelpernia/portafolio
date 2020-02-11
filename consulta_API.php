

<h2>Consulta mercados cripto</h2>
<br>	
<?php

$url = 'https://api.coinmarketcap.com/v1/ticker/';
$args = array(
   'method' => 'GET',
);

$response = wp_remote_request( $url, $args )['body'];

$criptos = json_decode($response, true);
?>


<?php foreach ($criptos as $cripto) { ?>
	<h4><?php echo 'Moneda: ' . $cripto['name'] . ' - Símbolo: ' . $cripto['symbol']; ?></h4> 
<?php } ?>

<pre><code><?php var_dump($criptos); ?></code></pre>






