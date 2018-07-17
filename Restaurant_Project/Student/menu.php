<?php 
    define("TITLE","Menu | Urban Degchi Restaurant");
    include('inlcudes/header.php');
?>
	<div id="menu-items">
		<h1>Our Delicious Menu</h1>
		<p>Like our team, our menu is very small but it is satisfying, and you will surely visit again to taste it.</p>
		<p><em>Click any menu item to learn more about it.</em></p>
		<ul>
			<?php foreach (menuItems as $dish => $item){?>
			<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a><sup>Rs.</sup>
			<?php echo $item[price]; ?></li>
			<?php }?>
		</ul>
	</div>
<?php include('inlcudes/footer.php');?>