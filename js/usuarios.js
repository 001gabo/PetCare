
var tbl_usuarios;

//$('#tbl_usuarios').DataTable();

$(document).ready(function(){
  //tbl_usuarios("#tbl_usuarios").DataTable();
    tbl_usuarios= $('#tbl_usuarios').DataTable({

        ajax:'mantenimiento/usuarioResultado'
    });
});

/*
function editUser( id =null) {

    if(id){
        $.ajax({
            url: 'mantenimiento/obtenerTodo'
        });

    }
    else{
        alert('error');
    }

}
*/