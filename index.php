<?php
ini_set ('display_errors', 0);
require_once('config-anim.php');
$animID=$_GET['id'];

if (!isset($config[$animID])) {
	echo 'NEED ID PLEASE';
	die();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<head>
		<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="<?php echo $config[$animID]['comment'] ?>" />
		<title><?php echo $config[$animID]['comment'] ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="jquery.js" type="text/javascript"></script>
		<script src="jquery.jeditable.js" type="text/javascript"></script>
		<script src="jquery.jeditable.charcounter.js" type="text/javascript"></script>
		<script src="jquery.charcounter.js" type="text/javascript"></script>
		<script type="text/javascript">
		
			$(document).ready(function(){
								
				$(".edit").editable("echo.php", { 
				      indicator 	: "Mise à jour...",
				      tooltip   	: "Modifier",
				      submit 		: "OK",
				      type      	: "charcounter",
				      width			: "301px",
				      event			: "mouseover",
				      onblur		: "cancel",
				      
				      charcounter	: {
				         characters : <?php echo $mincount; ?>
				      }
				  });
				  
				    if (document.images)
					    {
					      preload_image_object = new Image();
					      // set image url
					      image_url = new Array();
					      image_url[1] = "<?php echo $config[$animID]['image-1']; ?>";
					      image_url[2] = "<?php echo $config[$animID]['image-2']; ?>";
					
					       var i = 1;
					       for(i=1; i<=2; i++) 
					         preload_image_object.src = image_url[i];
					    }

				
				var sections = $("#boutons a");  
				var ready2click = true;
				var replace = $("b.edit").html();
				
				$("a#twitter").attr("href", "http://twitter.com/?status="+(replace)+" <?php echo $config[$animID]['short'];?> %23<?php echo $config[$animID]['hashtag']; ?>");
				
				sections.click(function(){
					if(ready2click) {
					    switch(this.id){  
					        case "bouton1":   
					        
									
							$("#question p").fadeOut(300, function() {
								
								$("#question p").html("<?php echo $config[$animID]['reponse-1']; ?>");
								
								$("#question p").fadeIn(300, function() {
									$("#content").html("<div id=\"image-1\" class=\"loadcontent\"><img src=\"<?php echo $config[$animID]['image-1']; ?>\" height=\"<?php echo $config[$animID]['height']; ?>\" width=\"<?php echo $config[$animID]['width']; ?>\" title=\"Image\" /></div>");	
								});   
						      });
							
							
					            break;  
					            
					        case "bouton2":
					        
							
							$("#question p").fadeOut(300, function() {
								
								$("#question p").html("<?php echo $config[$animID]['reponse-2']; ?>");
								
								$("#question p").fadeIn(300, function(){
									$("#content").html("<div id=\"image-2\" class=\"loadcontent\"><img src=\"<?php echo $config[$animID]['image-2']; ?>\" height=\"<?php echo $config[$animID]['height']; ?>\" width=\"<?php echo $config[$animID]['width']; ?>\" title=\"Image\" /></div>");
								}); 
							});	
							
					            break;  				    
					    }
					    
					    $("#boutons a").addClass("inactive");
					    ready2click = false;
					}
					
					setTimeout(function() { 
			       $("#popup").fadeIn({duration:800})
					; 
    			}, 	<?php echo $config[$animID]['time'];?>);
				});  
				
			});
	  </script>

	</head>
	<body>
		<div id="<?php echo $config[$animID]['ancre'] ?>">
		<div id="wrapper">
			<div id="top">
				<div id="question">
					<p>
						<?php 
							echo $config[$animID]['question'];
						?>
					</p>
				</div><!--question-->
				<div id="boutons"><!--ordre inversé !important-->
					<span>
						<a href="#" title="Choix 2" id="bouton2">
							<?php
								echo $config[$animID]['bouton-2']
							?>
						</a>
					</span>
					<span>
						<a href="#" title="Choix 1" id="bouton1">
							<?php
								echo $config[$animID]['bouton-1']
							?>
						</a>
					</span>
				</div><!--boutons-->
			</div><!--top-->
			<div id="popup">
				<div id="popuptop"></div>
				<div id="popupmid">
					<p>
						<b id="replace" class="edit" style="display: inline"><?php echo $config[$animID]['comment']; ?></b> &nbsp;<?php echo $config[$animID]['short'];?> &nbsp;&#35;<?php echo $config[$animID]['hashtag']; ?>
					</p>
					<div id="propulser">
						
						<a id="twitter" title="twitter" href="" target="_blank">
							<span>
								Partager sur Twitter
							</span>
						</a>
						<a 
							id="facebook" 
							title="facebook" 
							href="http://www.facebook.com/sharer.php?u=http://<?php echo trim(urlencode($config[$animID]['url'])); ?>&t=<?php echo urlencode($config[$animID]['comment']);?>" target="_blank">
							<span>
								Partager sur Facebook
							</span>
						</a>	
					<div style="clear:both"></div>
					</div>
				</div>
				<div id="popupbot"></div>
			</div><!--popup-->
			<div id="content" style="background:url('<?php echo $config[$animID]['attente']?>') no-repeat center;height:<?php echo $config[$animID]['height']?>px">
			</div><!--content-->
			<div id="footer">
				<a href="http://owni.fr" title="OWNI.fr" id="owni"><span>OWNI.fr</span></a>
				<?php require('share.php');?>	
			</div><!--footer-->
			<!--<?php echo $config[$animID]['image-1']?>-->
		</div<!--wrapper-->	
		</div><!--ancre-->
	</body>
</html>

