$(document).ready(function(){
	$("#cerrar_sesion").click(function(){
		Swal.fire({
		  title: '¿Cerrar sesión?',
		  text: "¿Seguro que quieres salir }",
		  type: 'warning',
		  showCancelButton: true,
		  cancelButtonText: 'Cancelar',
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Cerrar Sesión'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(
		      'Hasta la proxima!',
		      'Tu sesión ha sido cerrada.',
		      'success',
		      'timer: 2000'
		    ).then(
		        function (dismiss) {
		            $.ajax({
		                type: 'post',
		                data: '',
		                url: 'control/proceso_logout.php',
		                success: function(resultadoLogout){
		                    if(resultadoLogout == 1){
		                        window.location.href="../vista/";    
		                    }else{
		                    	alert("Error en el servidor");
		                    }
		                }
		            });
		        }
		    )
		  }
		})
	})
})