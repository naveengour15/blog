
function contactme(){
	var em = document.getElementById('emailId');
	var title = document.getElementById('title');
	var desc = document.getElementById('desc');
	console.log('hi');
	$.ajax({
		type: "POST",
		url: "/blog/models/connecting.php",
		data: "email="+em.val()+"&title="+title+"&desc="+desc+"&submit=true",
		success : function(response) {
			alert(response);
		}
	});
}
// /blog/models/contecting.php