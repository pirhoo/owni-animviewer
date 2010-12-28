<?php
	echo $_POST['value'];
?>

<script type="text/javascript">	
		alert ('prout');
	$(document).ready(function(){
		var replace = $(".selectNtweet span").html();
		$("a#tweetit").attr("href", "http://twitter.com/?status="+(replace));
	});
</script>