<?php 
    define("TITLE","Team | Urban Degchi Restaurant");
    include('inlcudes/header.php');
?>
<div id="team-members" class="cf">
	<h1>Our Team at Urban Degchi</h1>
	<p>We're small, but mighty. Urban Degchi Fine Dining has been a family-owned and run business
	 since the dirty thirties, and we're proud of it! When you get these three together,
	 you never know what can happen. But you can count on one thing:
	 <strong>The best food you've ever had. Ever.</strong></p>
	 <?php foreach ($teamMembers as $member) { ?>
	 	<div class="member">
	 		<img alt="<?php echo $member[name];?>" src="image/<?php echo $member["img"];?>.png">
	 		<h2><?php echo $member["name"]; ?></h2>
	 		<p><?php echo $member["bio"]; ?></p>
	 	</div>
	 <?php }?>
	 
</div>
<?php include('inlcudes/footer.php');?>