<script>
	function fileTest(input,id) {
	    validateFile(id,input);
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

	function validateFile(file_id,input) {
	    $("#"+file_id+"_error").html("");
	    var file_size = $("#"+file_id)[0].files[0].size;
	    if(file_size>2097152) {
	      $("#"+file_id+"_error").html("<b style='color:red'>File size is greater than 1.5 MB</b>");
	      $("#"+file_id).val('');
	      return false;
	    }	

	    var ext = $("#"+file_id).val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {		    
	      $("#"+file_id+"_error").html("<b style='color:red'>Only jpg and png format are allowed to upload</b>");
	      $("#"+file_id).val('');
		}    
	    readURL(input,file_id); 
	    return true;
	}

	//Doctor Information
	function checkDoctor() {
		var doctor = $("input[name='phy_status']:checked").val();
		if (doctor == 'yes') {
			$("#doctor_div").show();
			$('#doctor_div').find('input, select, textarea').each(function() {
				$(this).prop("required", "true");
		    });
		}else{			
			$("#doctor_div").hide();
			$('#doctor_div').find('input, select, textarea').each(function() {
				$(this).removeAttr('required');
		    });
		}
	}

	//present address check with permanent address
	function checkAddress() {
		var p_address = $("input[name='p_address_same']:checked").val();
		if (p_address == 'yes') {
			$("#r_address").val($("#p_address").val());
			$("#r_pin").val($("#p_pin").val());
			$("#r_dist").val($("#p_dist").val());
		}else{
			$("#r_address").val('');
			$("#r_pin").val('');
			$("#r_dist").val('');		
		}
	}

	//Doctor Information
	function checkFileDiv(id) {
		var file = $("input[name='"+id+"']:checked").val();
		if (file == 'yes') {
			$("#"+id+"_div").show();
			$("#"+id+"_div").find('input, select, textarea, file').each(function() {
				$(this).prop("required", "true");
		    });
		}else{			
			$("#"+id+"_div").find('input, select, textarea, file').each(function() {
				$(this).removeAttr('required');
		    });
			$("#"+id+"_div").hide();
		}
	}

	//qualification
	var qualification_count = 1;
	function qualificationAdd() {
		var html = `<span id="${qualification_count}div"><div class="form-group col-md-6">
					<h4 for="email">Name of the School/College/University</h4>
					<input type="text" class="form-control col-sm-12" name="q_name[]">
				</div>
				<div class="form-group col-md-2">
					<h4 for="date">Passing Year </h4>
					<input type="text" class="form-control col-sm-12" name="q_year[]">
				</div>
				<div class="form-group col-md-2">
					<h4 for="date">Proof </h4>
					<input type="file" class="form-control col-sm-12" name="q_file[]"  id="q_file${qualification_count}" onchange="validateFile('q_file${qualification_count}');">
					<span id="q_file${qualification_count}_error"></span>
				</div>
				<div class="form-group col-md-2">
					<button type="button" class="btn btn-danger" style="margin-top: 37px;margin-bottom:5px" onclick="qualificationRemove(${qualification_count})">+ Remove</button>
				</div>
				</span>`;
			qualification_count++;
		$("#qualification_div").append(html);
	}

	function qualificationRemove(id) {
		$("#"+id+"div").remove()
	}

</script>