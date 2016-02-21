// Slicing steps hover

$(function(){

	$("#steps .st").mouseenter(function(){
		
		$("#steps .st_active").animate({ height : "0px" }, 600);
		$("#steps .st_active p.active a.naruci_sad").animate({ bottom: "-70px" }, 500)
		$("#steps .st_active p.active a.info_btn").animate({ bottom: "-70px" }, 400)
		
		//svaki div box ima dvije klase. prva je ".st", a druga st_imekoraka.
		var  klasa = $(this).attr("class");
		
		//maknem st iz klase i ostaje mi samo pravo ime koraka u varijabli "klasa"		
		klasa =  klasa.replace(/st st_background /, "");
		
		//samo za definiciju vrijednost je za otkrivanje errora, nikad se nebi smjelo pojaviti na stranici
		var height_active="10px";
		
		//svaki box ima drukciju visinu, u "height_active" varijablu se sprema vrijednost 
		if(( klasa=="st_idea") || ( klasa=="st_deployment")){ height_active="279px"; }
		if(( klasa=="st_design") || ( klasa=="st_coding")){ height_active="309px"; }
		if ( klasa=="st_slicing"){ height_active = "339px" }
		
		//otvaranje boxa na kojemu je miš
		$("." + klasa + ':not(.st_background)').animate({ height:height_active }, 600); //
		
		
		//micanje klase st_active s prozora koji se zatvara
		$("#steps .st_active").removeClass("st_active");
		
		//postavljanje klase st_active na box koji je otvoren
		$("." + klasa + ':not(.st_background)').addClass("st_active");
		
		//animiranje naruci sad i info gumbova
		setTimeout('$(".st_active p.active a.naruci_sad").animate({ bottom: "9px" }, 400);',500);
		setTimeout('$(".st_active p.active a.info_btn").animate({ bottom: "9px" }, 350);',400);		
	
	})//end mouseenter .st

})