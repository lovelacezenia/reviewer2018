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
	var tab = $('#tab'+id);
	tab.prev().find('.nav-link').click();
	tab.remove();

}
function addbutton(){
	counter++;
	var num = $('#numberOfQuestions').val();
	var inputArr = [];


	for(var i=1;i<=num;i++){
		inputArr.push('<label>'+i+'</label>' +
			'<input class="form-control">' +
			'<button class="btn btn-primary" onclick="addchoice('+i+')">Add Choice</button></br>' +
            '<div id=q'+i+'></div>')
	}
        $('#inputQuestions').append(inputArr);

}
function addchoice(a){
	counter++;
	var addchoice = '<input type="text" id="addchoice" role="addchoice"></input></br>';
	$('#q'+a).append(addchoice);


}

//load for dashboard
$(document).ready(function(){
	$.get('Reviewer/totalofstudent', function(data){
        $("#totalofstudent").html(JSON.parse(data));
	});

});

//editprofile
$(document).ready(function(){
	$.ajax({
		url: 'Reviewer/editprofile',
		dataType: 'JSON',
		success: function(data){
			console.log(data);
			//$('firstname').val(data.name);
		}
	});
});
