$(document).ready(function(){
	
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			artist:"Radio en vivo",
			title:"Tropikana.tk",
			mp3:"http://radio.ancashserver.com:9550/;",
			oga:"http://radio.ancashserver.com:9550/;"
		},
		
	], {
		swfPath: "jplayer",
		supplied: "mp3, oga",
		wmode: "window",
		globalVolume: true,
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
	
	


})