(function($){
	//funkcja ustawiająca kólka w odpowiedniej pozycji
	function circle(){
	var windowW = $(window).width();
	var left1 = (windowW-1200)/2+220-74.5;
	var left2 = (windowW-1200)/2+496-74.5;
	var left3 = (windowW-1200)/2+781.5-74.5;
	var left4 = (windowW-1200)/2+1105-74.5;
	$("#circle1").css("left", left1);
	$("#circle2").css("left", left2);
	$("#circle3").css("left", left3);
	$("#circle4").css("left", left4);
	}

	function experienceHeader() {
	var windowW = $(window).width();
	var left = windowW + 600;
	var top = $("#experienceHeader").height()+30;
	$("#experienceHeader h2").css("left", left);
	$("#experienceHeader h2").css("top", top);
	}

	function margin() {
		var marginCircle = ($(window).width() -13)/2;
		$("#educationData .circle").css("margin-left", marginCircle);
		var marginImg = ($(window).width() - 37)/2;
		$(".section").css("margin-left", marginImg);
		var windowW = $(window).width();
		var margin4 =  marginCircle - 0.15*windowW;
		if(windowW<601){
		var marginSecretData = (windowW-256)/2;
		$("#secretData").css("margin-left", marginSecretData);
		var marginPhoto = ($(window).width() - 213)/2;
		$("#photo").css("margin-left", marginPhoto);
		}
		else {
		$("#secretData").width(windowW/2)-1;
		$("#secretData").css("float", "left");
		//var marginSecretData = (windowW/2-256)/2;
		$("#secretData").css("margin-left", 0);
		$("#secretData").css("position", "absolute");
		$("#secretData").css("left", windowW/2);
		var topSecret = $("#personalData>div:first-child").height();
		$("#secretData").css("top", topSecret);

		$("#photoWrap").width(windowW/2)-1;
		$("#photoWrap").css("float", "left");
		var marginPhoto = (windowW/2 - 213)/2;
		$("#photo").css("margin-left", marginPhoto);
		}
		if(windowW>599){
		$(".section2").css("margin-left", (0.76*windowW-40)/4);
		$(".section2").css("margin-top", 20);
		}
	}

	function changeOrder(){
	var place4 = $("#place4");
	var school4 = $("#school4");
	var circle4 = $("#circle4");
	var date4 = $("#date4");
	school4.insertAfter(circle4);
	place4.insertAfter(school4);
	circle4.insertBefore(place4);
	date4.insertBefore(circle4);

	var place3 = $("#place3");
	var school3 = $("#school3");
	var circle3 = $("#circle3");
	var date3 = $("#date3");
	school3.insertBefore(circle3);
	place3.insertBefore(school3);
	circle3.insertBefore(place3);
	date3.insertBefore(circle3);

	var place2 = $("#place2");
	var school2 = $("#school2");
	var circle2 = $("#circle2");
	var date2 = $("#date2");
	school2.insertBefore(circle2);
	place2.insertBefore(school2);
	circle2.insertBefore(place2);
	date2.insertBefore(circle2);

	var place1 = $("#place1");
	var school1 = $("#school1");
	var circle1 = $("#circle1");
	var date1 = $("#date1");
	school1.insertBefore(circle1);
	place1.insertBefore(school1);
	circle1.insertBefore(place1);
	date1.insertBefore(circle1);
	}

	function intrest(){
		var windowW = $(window).width();

		if(windowW>380 && windowW<800){
			var x1 = 100 + (windowW-380)/2;
			var x2 = (windowW-380)/2;
			var x3 = 50 + (windowW-380)/2;
			var x4 = 160 + (windowW-380)/2;
		$(".color1").css("left", x1);
		$(".color2").css("left", x2);
		$(".color3").css("left", x3);
		$(".color4").css("left", x4);
		}
	}


    //bezresize
	if($(window).width()>1199) {
		circle();
		var height = $("#experienceData>div:first-child").height();
		var height2 = 436-190;//height -105;
		$("#experienceData>div:nth-child(2)").height(height2);
    }
	
	if($(window).width()<1200) {
		margin();
		changeOrder();
		var target = $("#target");
		$(".bubbleleft").insertBefore(target);
	}

	//RESIZE

	$(window).resize(function(){

	if($(window).width()>1199) {
		circle();
		var height = $("#experienceData>div:first-child").height();
		var height2 = height -105;
		$("#experienceData>div:nth-child(2)").height(height2);
    }
	
	if($(window).width()<1200) {
		margin();
		changeOrder();
		intrest();
		var target = $("#target");
		$(".bubbleleft").insertBefore(target);
	}

	console.log($(window).width());

	if($(window).width()==1200 || $(window).width()==800 || $(window).width()==1200){
	window.location = location.href;
	location.reload();
	console.log("inside");
	}

	});	

})(jQuery);