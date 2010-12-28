<?php
require('shorten.php');
define("BITLY_LOGIN"  , 'owni');
define("BITLY_APPKEY", 'R_dc86bfec245634b90385d874f0fda12c');
define("BITLY_FORMAT", 'json');

//App Woerth

	//Nom de l'app (utilisé pour l'ancre)
	$config[$woerth]['ancre'] = $woerth = 'woerth';
	
	//Url de l'article (pour le share) SANS http://
	$config[$woerth]['url'] =	'owni.fr/2010/08/16/woerth-non-implosable-owni-lance-l’appli-bete-en-cours#woerth';
	
	$config[$woerth]['short'] = make_bitly_url('http://' . $config['woerth']['url']);
	
	//Titre de l'app (question)
	$config[$woerth]['question'] = 	'Woerth&nbsp;&nbsp;&nbsp;doit-il&nbsp;&nbsp;&nbsp;demissioner?';
	
	//Reponse 1
	$config[$woerth]['reponse-1'] = 	'Bonne&nbsp;&nbsp;reponse!';
	
	//Reponse 2
	$config[$woerth]['reponse-2'] = 	'Toi,&nbsp;&nbsp;tu&nbsp;&nbsp;es&nbsp;&nbsp;militant&nbsp;&nbsp;UMP!';
	
	//URL de l'image d'attente
	$config[$woerth]['attente'] =	'http://app.owni.fr/animviewer/images/woerth.png';
	
	//URL de l'image 1
	$config[$woerth]['image-1'] =	'http://app.owni.fr/animviewer/images/3-.gif';
	
	//URL de l'image 2
	$config[$woerth]['image-2'] =	'http://app.owni.fr/animviewer/images/2-.gif';
	
	//Height des images
	$config[$woerth]['height'] =	'450';
	
	//Width des images
	$config[$woerth]['width'] =		'450';
	
	//Durée des gifs (délai entre clic bouton et affichage popup)
	$config[$woerth]['time'] =		'5100'; //en milisecondes
	
	//Intitulé bouton 1
	$config[$woerth]['bouton-1'] = 	'OUI';
	
	//Intitulé bouton 2
	$config[$woerth]['bouton-2'] = 	'NON';
	
	//Commentaire Share par défaut
	$config[$woerth]['comment'] =	'J\'ai fais pleurer Eric Woerth!';
	
	//Hashtag (sans #)
	$config[$woerth]['hashtag'] =	'OWNI';
	
	$mincount = 140 - (1 + strlen($config['woerth']['short']) + strlen($config['woerth']['hashtag']));
	
//Fin App Woerth	

//App Woerth2

	//Nom de l'app (utilisé pour l'ancre)
	$config[$woerth2]['ancre'] = $woerth2 = 'woerth2';
	
	//Url de l'article (pour le share) SANS http://
	$config[$woerth2]['url'] =	'owni.fr/2010/08/16/woerth-non-implosable-owni-lance-l’appli-bete-en-cours#woerth2';
	
	$config[$woerth2]['short'] = make_bitly_url('http://' . $config['woerth2']['url']);
	
	//Titre de l'app (question)
	$config[$woerth2]['question'] = 	'Quand&nbsp;&nbsp;je&nbsp;&nbsp;dis&nbsp;&nbsp;\'Woerth\',&nbsp;&nbsp;tu&nbsp;&nbsp;penses';
	
	//Reponse 1
	$config[$woerth2]['reponse-1'] = 	'Tu&nbsp;&nbsp;repands&nbsp;&nbsp;des&nbsp;&nbsp;calomnies&nbsp;&nbsp;trotskistes!';
	
	//Reponse 2
	$config[$woerth2]['reponse-2'] = 	'Ah,&nbsp;&nbsp;tu&nbsp;&nbsp;crois?';
	
	//URL de l'image d'attente
	$config[$woerth2]['attente'] =	'http://app.owni.fr/animviewer/images/woerth.png';
	
	//URL de l'image 1
	$config[$woerth2]['image-1'] =	'http://app.owni.fr/animviewer/images/1-.gif';
	
	//URL de l'image 2
	$config[$woerth2]['image-2'] =	'http://app.owni.fr/animviewer/images/4-.gif';
	
	//Height des images
	$config[$woerth2]['height'] =	'450';
	
	//Width des images
	$config[$woerth2]['width'] =		'450';
	
	//Durée des gifs (délai entre clic bouton et affichage popup)
	$config[$woerth2]['time'] =		'5100'; //en milisecondes
	
	//Intitulé bouton 1
	$config[$woerth2]['bouton-1'] = 	'corruption';
	
	//Intitulé bouton 2
	$config[$woerth2]['bouton-2'] = 	'president';
	
	//Commentaire Share par défaut
	$config[$woerth2]['comment'] =	'Toi aussi, fais exploser Woerth!';
	
	//Hashtag (sans #)
	$config[$woerth2]['hashtag'] =	'OWNI';
	
	$mincount = 140 - (1 + strlen($config['woerth2']['short']) + strlen($config['woerth2']['hashtag']));
	
//Fin App Woerth	
?>
