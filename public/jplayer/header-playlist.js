$(document).ready(function(){
	
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			artist:"Radio en vivo",
			title:"Tropikana",
			mp3:"http://40.114.110.162:8000/;",
			oga:"http://40.114.110.162:8000/;"
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