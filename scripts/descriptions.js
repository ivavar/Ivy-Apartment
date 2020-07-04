$(document).ready(function(){
  let descriptions = [];
  
  $.ajax({
	  url: "API.php?action=getDescriptions",
	  dataType: "json"
	  
  }).done(response => {
	  descriptions = response;
	  descriptions.forEach(description => createAndInsertDescription(description));
  }).fail(error => console.log("Error getting descriptions", error));
  
  
function createAndInsertDescription(description){
	const descriptionTemplate = $("#description-template").html();
	const descriptionHTML = Mustache.render(descriptionTemplate,description);
	const $description = $(descriptionHTML); 
    $("#description-address-container .description").append(descriptionHTML);
}

	$("#description-address-container").on("click", ".description .edit-button", (e) =>{
    
	const descriptionButton = e.currentTarget;
    const desc = $(descriptionButton).siblings().filter(".p-description").text();
	const Description = prompt("Uredite opis", desc);
	
	$.ajax({
		url: "API.php?action=editDescription",
		dataType: "json",
		data: {
			id: 1,
			newDescription: Description
		}
	}).done(response => {
	}).fail(error => console.log("Error when editing description", error));
	
  });

});
