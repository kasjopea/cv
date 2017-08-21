(function($){
	//dopasowanie szerokosci main do aside
	var asideWidth = $("aside").width();
    var windowWidth = $( window ).width();
    var mainWidth = windowWidth-asideWidth;
    $("main").width(mainWidth);

    //dopasowanie szerokosci main do aside na zmiane szerokosci okna
    $( window ).resize(function() {
    	asideWidth = $("aside").width();
    	windowWidth = $( window ).width();

    	mainWidth = windowWidth-asideWidth;
    	$("main").width(mainWidth);
    });


    var linkColor 		= $( "ul>li:first-child" ),
    	linkData  		= $( "ul>li:nth-child(2)" ),
    	linkExperience  = $( "ul>li:nth-child(3)" ),
    	linkEducation   = $( "ul>li:nth-child(4)" ),
    	linkSkills      = $( "ul>li:nth-child(5)" ),
    	linkHobby       = $( "ul>li:nth-child(6)" );

    var data 			= $( "#data" ),
    	experience      = $( "#experience" ),
    	education       = $( "#education" );
    var choice = $("#choice");
    var choiceTab = ["", "Kolorystyka", "Dane osobowe", "Doświadczenie", "Edukacja", "Umiejętności", "Hobby"];

    linkColor.on("click", function(){
    	choice.text(choiceTab[1]);
    });

    linkData.on("click", function(){
    	choice.text(choiceTab[2]);
    	data.show();
    	experience.hide();
    	education.hide();
    });

    linkExperience.on("click", function(){
    	choice.text(choiceTab[3]);
    	experience.show();
    	education.hide();
    	data.hide();
    });

    linkEducation.on("click", function(){
    	choice.text(choiceTab[4]);
    	education.show();
    	data.hide();
    	experience.hide();
    });

    linkSkills.on("click", function(){
    	choice.text(choiceTab[5]);
    });

    linkHobby.on("click", function(){
    	choice.text(choiceTab[6]);
    });

})(jQuery);