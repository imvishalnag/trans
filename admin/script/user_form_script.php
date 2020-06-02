<script>
	function fileTest(input,id) {
	    readURL(input,id);
	    // validateFile(id);
	}
	function readURL(input,id) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#'+id+"_src")
	                .attr('src', e.target.result)
	                .height(80);
	        };

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	function validateFile(input) {
	    $("#file_error").html("");
	    $(".demoInputBox").css("border-color","#F0F0F0");
	    var file_size = $('#file')[0].files[0].size;
	    if(file_size>2097152) {
	      $("#file_error").html("<b style='color:red'>File size is greater than 1.5 MB</b>");
	      $(".demoInputBox").css("border-color","#FF0000");
	      $('#file').val('');
	      return false;
	    } 
	    return true;
	}

	//Doctor Information
	function checkDoctor() {
		var doctor = $("input[name='phy_status']:checked").val();
		if (doctor == 'yes') {
			$("#doctor_div").show();
		}else{			
			$("#doctor_div").hide();
		}
	}

	//Doctor Information
	function checkFileDiv(id) {
		var file = $("input[name='"+id+"']:checked").val();
		if (file == 'yes') {
			$("#"+id+"_div").show();
		}else{			
			$("#"+id+"_div").hide();
		}
	}

	//qualification
	

</script>