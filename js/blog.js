 function contactme(){
      var em = document.getElementById('emailId').value;
      var title = document.getElementById('title').value;
      var desc = document.getElementById('desc').value;
      alert(title + em + desc);
      $.ajax({
		        type  : "POST",
		        url   : "blog/models/connecting.php",
		        async : false,
		        data  : "email="+em+"&title="+title+"&desc="+desc,
		        success : function(response) {
		           alert(response);
		        }
      });

    }