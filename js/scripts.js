$(document).ready(function(){

	$(".button, .button h3").mouseover(function() {
		$(".button").css("background", "#c8271c");
		$(".button h3").css("color", "#fff");
	}).mouseout(function() {
		$(".button").css("background", "#fff");
		$(".button h3").css("color", "#c8271c");
	});

});

function funkcja_1(){
    var change = document.getElementById('country').options[document.getElementById('country').selectedIndex].id
    document.getElementById('country_phone').value = change;
    console.log(change);
}

function check(form) {
	var btn = $('#btn-order');

	var name = $('#name').val();
	var tel = $('#phone').val();

	/*name = JSON.stringify(name);*/

    if(name.length < 5)
	  	alert("Imię i nazwisko powinno składać się z conajmniej 5 znaków");
	else if(tel.length < 9)
		alert("Numer telefonu powinien składać się z conajmniej 9 znaków");
	else
		form.submit();
	
}

