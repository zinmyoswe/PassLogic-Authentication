//Table of random numbers
$(document).ready(function(){
	for(i=0; i<48; i++){
		var rand = Math.floor( Math.random() * 10 );
		document.getElementById(i).innerHTML = rand;
	}
});

//Authentication
var j = 0;
function login(){
var passwd = $("p#0").html();
	passwd += $("p#5").html();
	passwd += $("p#10").html();
	passwd += $("p#15").html();
	passwd += $("p#28").html();
	passwd += $("p#25").html();
	passwd += $("p#22").html();
	passwd += $("p#19").html();
	var inpasswd = $(":text").val();
	if(passwd==inpasswd){
		location.href="menu.html";
	}else if(j==0){
		$("#info").html("<p syle='color:red;'>The password is incorrect.</p>");
	    j++;
	}else{
		$("#info").html("<p syle='color:red;'>The password is incorrect.<br>The correct password has been highlighted above. Please enter it in the password field.<br><small>*You must enter the correct password to proceed.</small></p>");
		$("p#0").css('background-color','#FFBCBC');
	    $("p#5").css('background-color','#FFBCBC');
	    $("p#10").css('background-color','#FFBCBC');
	    $("p#15").css('background-color','#FFBCBC');
	    $("p#28").css('background-color','#FFBCBC');
	    $("p#25").css('background-color','#FFBCBC');
	    $("p#22").css('background-color','#FFBCBC');
	    $("p#19").css('background-color','#FFBCBC');
	    j++;
	}
};