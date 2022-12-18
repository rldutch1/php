var Tooltip = {
init: function(){
	//get all the links
	var theLinks = document.getElementsByTagName("");

	if ( theLinks ){
		for (var i = 0; i < theLinks.length; i++){
		if ( theLinks[i].title.length ){
			theLinks[i].addEventListener("mouseover",Tooltip.showTip);
			theLinks[i].addEventListener("mouseout",Tooltip.hideTip);
			}
			}
		}
	},
	showTip: function( event ){
		//create and add a span element to act as a tooltip
		var spanElm = document.createElement("Span");
		spanElm.className = "tooltip";
		spanElm.innerHTML = event.target.title;

		//set target element's title to nothing
		event.target.title = "";
		event.target.appendChild( spanElm );
		event.target._spanRef = spanElm;
		},
	hideTip: function( event ){
		event.target.title = event.target._spanRef.innerHTML;
		event.target.removeChild( event.target._spanRef );
		}

	};

window.addEventListner("load",Tooltip.init);
