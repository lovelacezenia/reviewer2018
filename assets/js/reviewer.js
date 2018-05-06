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
var counter = 1;
function addrow(){
    counter++;
    var tab = ' <li id="tab' + counter + '" class="nav-item">\n' +
        '     <a  class="nav-link" data-toggle="tab" href="#" role="tab">\n' +
        '     <span class="hidden-sm-up"><i class="ti-home"></i></span>\n' +
        '     <span class="hidden-xs-down">Section ' +counter +' <a onclick="removerow('+counter+')" ' +
		'class="btn btn-danger">x</a> </span>\n' +
        '     </a>\n' +
        '   </li>';
    var sec = '<div id="sec" role="sec"> </div>';
    $('#tab').append(tab);
    $('#sec').append(sec);
    $('#tab'+counter).find('.nav-link').click();
}
function removerow(id) {
	$('#tab'+id).remove();

}