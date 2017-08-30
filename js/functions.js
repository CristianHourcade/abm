$(document).ready(function(){

$(".btn-agregar").on("click",function(){
alert("hola");
	$.ajax({
		type:"POST",
		url:"alta.php",
		data:{
			nombre:$("#nombre").val(),
			apellido:$("#apellido").val(),
			dni:$("#dni").val(),
			sueldo:$("#sueldo").val()
		},
		success:function(result){
			alert(result);
		}
	});	

});
});