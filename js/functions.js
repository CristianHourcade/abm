$(document).ready(function(){

Listar();

$(".btn-add").on("click",function(){

	$.ajax({
		url:"modal/modalstore.php",
		success:function(result){
			$("#ModalUser").html("");
			$("#ModalUser").html(result);
			$("#ModalUser").modal("show");
			$(".btn-agregar").on("click",function(){

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
						Listar();	
						$("#ModalUser").modal("hide");
						$("#ModalUser").html("");
					}
				});	

			});
		}
	});

});

$(".btn-delet").on("click",function(){
	var sel="";
		$(".tilde" ).each(function(){
			if(this.checked==true){
				sel+="|"+this.value;					
			}
		});
		$.ajax({	
			type:"POST",
			url:"destroy.php",
			data: {
				"sel":sel
			},
			success: function(result){
				alert(result);
				Listar();
			}
		});
	});



});

function Listar(){
	$.ajax({

		url:"select.php",
		success:function(result){
			$(".tabla").html(result);
			
		}

	});
}

