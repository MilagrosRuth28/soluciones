function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function MComensales(datos){
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", datos);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

function getClientes(){
	
	//var_buscar = $("#buscar").val();

	//alert(var_buscar);

    $.ajax({
		type: "post",
		data : "usuario",
		url: "../listadeCLIENTES.php",
		success: function(datos){
			registros = eval(datos);
			//alert(datos);
			html ="";		
			html += "<table class='container table table-hover table-responsive-sm'>";
			html += "<thead>";
			html += "<th>N°</th>";
			html += "<th>Nombre</th>"; 
			html += "<th>Apellidos</th>";
			html += "<th>Correo</th>";	
			html += "<th>Nombre de USUARIO</th>";
			html += "<th>Acciones</th>";
			html += "</thead>";
			html += "<tbody>";
			
			for (var i=0; i < registros.length; i++) {
				html += "<td>"+(i+1)+"</td>";
				html += "<td>"+registros[i].nombre+"</td>";
				html += "<td>"+registros[i].apellidos+"</td>";
				html += "<td>"+registros[i].correo+"</td>";
				html += "<td>"+registros[i].usuario+"</td>";
				html += "<td><a href='#' class='btn btn-sm btn-primary' onclick=editarUser('"+registros[i].usuario+"')>Editar</a>";
				html += "<a href='#' class='btn btn-sm btn-danger' onclick=eliminarUser('"+registros[i].usuario+"'); >Eliminar</a></td>";
				html += "</tr>";
			}
			html += "</tbody>";
			html += "</table>" 
			//$('#resultado').empty();
			//$('#resultado').append(html);

			document.getElementById('resultado').innerHTML = html;
	  }
	});

}

function eliminarUser(id){
	$.ajax({
		type: "post",
		data: "login="+id, 
		url: "../phps/crud/eliminarUSer.php",
		success: function(){
			
			getClientes();
			alert("Eliminado...");	
	  }
	});
}

function editarUser(id){
	$.ajax({
		type: "post",
		data: "login="+id, 
		url: "../phps/crud/editarUSer.php",
		success: function(){
			
			alert("");	
	  }
	});
}
