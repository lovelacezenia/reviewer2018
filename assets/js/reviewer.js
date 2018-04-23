$(document).ready(function () {
	$.ajax({
		url: 'Reviewer/getClasscode',
		dataType: 'JSON',
		success: function ($data) {
		options = [];
			for(var i=0;i<=$data.length-1;i++){
                options.push('<option value='+$data[i].class_id+'>'+$data[i].classcode+' '+$data[i].description+'</option>');
			}
			$('#classcode').html(options);
        }
	});
});
function togglediv(){
	$('#signup').removeAttr('hidden');
	$('#login').attr('hidden','hidden');

}

