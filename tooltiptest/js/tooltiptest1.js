$(document).ready(function(){
	$(".thetip0").hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$("#tooltip00").css("display","block");
	},function(){
		//mouse leaves
			$("#tooltip00").css("display","none");
	});

	$(".thetip1").hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$("#tooltip01").css("display","block");
	},function(){
		//mouse leaves
			$("#tooltip01").css("display","none");
	});

	$(".thetip2").hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$("#tooltip02").css("display","block");
	},function(){
		//mouse leaves
			$("#tooltip02").css("display","none");
	});

	$(".thetip3").hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$("#tooltip03").css("display","block");
	},function(){
		//mouse leaves
			$("#tooltip03").css("display","none");
	});

	$(document).mousemove(function(event){
		var mx = event.pageX+15;
		var my = event.pageY+15;
		$("#tooltip00").css("left",mx+"px").css("top",my+"px");
		$("#tooltip01").css("left",mx+"px").css("top",my+"px");
		$("#tooltip02").css("left",mx+"px").css("top",my+"px");
		$("#tooltip03").css("left",mx+"px").css("top",my+"px");
	});
});


//$("#thetip td").tooltip01();

//$("#postop td[title]").tooltip00();
//$("#tester img[title]").tooltip00();
