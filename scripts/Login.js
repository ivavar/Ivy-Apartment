$(document).ready(() => {
  let isAuthenticated = false;
  
  $.ajax({
	  url: "API.php?action=isAuthenticated",
	  dataType: "json"
  }).done(data => {
	  isAuthenticated = data.isAuthenticated;
	  adaptUI();
  }).fail(e => console.log("Error",e));

  function adaptUI(){
    $("#login-logout-button").text(isAuthenticated ? "Logout" : "Login");
    $("body").toggleClass("not-authenticated", !isAuthenticated);
  }

  const $loginOverlay = $("#login-overlay");
  $("#login-logout-button").on("click", () => {
    if(!isAuthenticated){
      $loginOverlay.addClass("shown");
    }
    else {
      $.ajax({
		url: "API.php?action=logout",
		dataType: "json"
	}).done(data => {
		isAuthenticated = false;
		adaptUI();
	}).fail(e => console.log("error", e));
	}
  });

  
  $(document).on("keyup", e=>{
	  if(e.keyCode == 27){
		  $loginOverlay.removeClass("shown");
  }
  });
  
  
  $("#login-overlay .close-button").on("click", () => {
    $loginOverlay.removeClass("shown");
  });

  $("#login-button").on("click", () => {
    const email = $("#email").val();
    const password = $("#password").val();
	

    $("#login-overlay .message").text("");
	
	$.ajax({
		url: "API.php?action=login",
		data: {
			email: email,
			password: password
		},
		dataType: "json"
	}).done(data => {
		isAuthenticated = data.isAuthenticated;
		
		if(isAuthenticated){
			$loginOverlay.removeClass("shown");
			adaptUI();
		}
		else{
			$("#login-overlay .message").text("Invalid login data");
		}
	}).fail(e => console.log("error", e));
  });
})
