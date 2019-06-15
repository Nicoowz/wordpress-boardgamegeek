<div class="bgg bgg-container">
    <div class="bgg-thumb"><img src="<?php echo $bg->thumbnail?>"></div>
    <div class="bgg-data">
        <h1><a href="https://boardgamegeek.com/boardgame/<?php echo $gameid?>/"><?php echo $bg->name[0]?></a> <span>(<?php echo $bg->yearpublished?>)</span></h1>
        <ul class="bgg-details">
            <li>
				<?php
/* Número Jugadores: */
if (2 > $bg->maxplayers):
    echo $bg->minplayers;
else:
    echo $bg->minplayers." - ".$bg->maxplayers;
endif;
?> 
<?php
/* Jugador/es: */
if (2 > $bg->maxplayers):
    echo "Player";
else:
    echo "Players";
endif;
?>
			</li>
            <li>
				<?php
$a = (string) $bg->minplaytime;

/* Duración */
if ( $a == $bg->maxplaytime): 
    echo $bg->minplaytime;
else:
    echo $bg->minplaytime." - ".$bg->maxplaytime;
endif;
?>
 Min</li>
            <li>Age: <?php echo $bg->age?>+</li>
			
        </ul>
    </div>
</div>
