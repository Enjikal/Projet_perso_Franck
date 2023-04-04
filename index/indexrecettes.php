<?php
session_start();
$page = 'indexrecettes';
include '../index/navbar.php';
$page = './navbar';
?>
<div class="backgroundindexrecettes">
	<ul id="menu-demo2">
		<li class="stickers"><a href="#">Rapide et facile</a>
			<ul>
				<li><a href="#">Aubergines farcies</a></li>
				<li><a href="#">Burgers au poulet croustillant</a></li>
				<li><a href="#">Cordons bleus "à ma façon"</a></li>
				<li><a href="#">Crevettes sautées pimentées</a></li>
			</ul>
		</li>
		<li class="stickers"><a href="#">Les Entrées</a>
			<ul>
				<li><a href="#">Makis et Sushis</a></li>
				<li><a href="#">Salade fraîcheur Thaï</a></li>
				<li><a href="#">Salade au magret fumé et noix </a></li>
				<li><a href="#">Taboulé façon "Mam"</a></li>
			</ul>
		</li>
		<li class="stickers"><a href="#">Les plats</a>
			<ul>
				<li><a href="#">Aubergines farcies</a></li>
				<li><a href="#">Poulet au citron</a></li>
				<li><a href="#">Sauté de veau printanier</a></li>
				<li><a href="#">Tajine d'agneau</a></li>
				<li><a href="#">Filet de poulet sauce BBQ</a></li>
				<li><a href="#">Pâtes bolognaises</a></li>
				<li><a href="#">Poulet au citron</a></li>
			</ul>
		</li>
		<li class="stickers"><a href="#">Les desserts</a>
			<ul>
				<li><a href="#">Bavarois aux fruits de la passion</a></li>
				<li><a href="#">Demies-sphères au chocolat</a></li>
				<li><a href="#">Gâteau aux pommes</a></li>
				<li><a href="#">Tarte fine aux abricots</a></li>
				<li><a href="#">Tarte au citron meringuée</a></li>
			    <li><a href="#">Petits choux caramel et craquelin</a></li>
			</ul>
		</li>
		  <li class="stickers"><a href="#">Pain et Pâtes</a>
			<ul>
				<li><a href="#">Pain façon "Mam"</a></li>
				<li><a href="#">Pâte à pizza</a></li>
				<li><a href="#">Pâte à quiche</a></li>
				<li><a href="#">Pâte à tarte</a></li>
				<li><a href="#">Pâte à baba</a></li>
				<li><a href="#">Pâte à crèpes</a></li>
			</ul>
		</li>
	</ul>
</div>
<?php
include '../index/footer.html';
?>