<?php 
    define("TITLE","Menu Item | Urban Degchi Restaurant");
    include('inlcudes/header.php');
    
    function strip_bad_chars( $input ) {
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
        return $output;
    }
    
    if (isset($_GET['item'])){
        $menuItem= strip_bad_chars($_GET['item']);
        $dish = $menuItems[$menuItem];
    }
    
    function suggestedTip($price, $tip) {
        $totalTip = $price * $tip;
        echo money_format('%.2n', $totalTip);
    }
?>
	<div id="dish">
		<h1><?php echo $dish[title]; ?> <span class="price"><sup>Rs</sup> <?php echo $dish[price]; ?> </span></h1>
		<p><?php echo $dish[blurb]; ?></p>		
		<br>
		<p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
		<p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>	
	</div>
	<a href="menu.php" class="button previous">&laquo; Back to Menu</a>
	
<?php include('inlcudes/footer.php');?>