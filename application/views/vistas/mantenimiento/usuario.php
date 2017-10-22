


<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <a  type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addUser">
                <span class="glyphicon glyphicon-file"></span>
                Nuevo Usuario
            </a>
            <h1>Usuarios</h1>
        </div>

    </div>
</div>


<div class="table-responsive">
    <table class="table table-hover" id="tbl_usuarios">
        <thead>
        <tr>

            <th style="width: 10%; background-color: #2aabd2; color: white;">Nombre</th>
            <th style="width: 10%; background-color: #2aabd2; color: white;">Correo</th>
            <th style="width: 10%; background-color: #2aabd2; color: white;">Tipo de Usuario</th>
            <th style="width: 10%; background-color: #2aabd2; color: white;">Acciones</th>
        </tr>
        </thead>
    </table>
</div>


<!-- addUser -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Nuevo</h4>
            </div>
            <form action="agregar_usuario" method="post" id="createForm">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="Text" class="form-control" id="nombre" name="nombre" required aria-describedby="emailHelp" placeholder="Escriba su nombre">

                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="Text" class="form-control" id="apellido" name="apellido"  required placeholder="Escriba su apellido">

                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required placeholder="Escriba su correo">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Clave</label>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tipo de Usuario</label>
                        <div class="selectContainer">
                            <select class="form-control" name="tipoUsuario" id="tipoUsuario" required>
                                <option value="">Seleccionar</option>
                                <option value="3">Administrador</option>
                                <option value="2">Empleado</option>
                                <option value="1">Cliente</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- editUser -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
            </div>
            <form action="editar_usuario" method="post" id="editForm">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="Text" class="form-control" id="editNombre" name="editNombre" required aria-describedby="emailHelp" placeholder="Escriba su nombre">

                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="Text" class="form-control" id="editApellido" name="editApellido"  required placeholder="Escriba su apellido">

                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="editCorreo" name="editCorreo" aria-describedby="emailHelp" required placeholder="Escriba su correo">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Clave</label>
                        <input type="password" class="form-control" id="editClave" name="editClave" placeholder="Contraseña" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tipo de Usuario</label>
                        <div class="selectContainer">
                            <select class="form-control" name="editTipoUsuario" id="editTipoUsuario" required>
                                <option value="">Seleccionar</option>
                                <option value="3">Administrador</option>
                                <option value="2">Empleado</option>
                                <option value="1">Cliente</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- editUser -->
<div class="modal fade" id="removeUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
            </div>
            <form action="eliminar_usuario" method="post" id="editForm">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="Text" class="form-control" id="removeNombre" name="removeNombre" required aria-describedby="emailHelp" placeholder="Escriba su nombre">

                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="Text" class="form-control" id="removeApellido" name="removeApellido"  required placeholder="Escriba su apellido">

                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="removeCorreo" name="removeCorreo" aria-describedby="emailHelp" required placeholder="Escriba su correo">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Clave</label>
                        <input type="password" class="form-control" id="removeClave" name="removeClave" placeholder="Contraseña" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tipo de Usuario</label>
                        <div class="selectContainer">
                            <select class="form-control" name="removeTipoUsuario" id="removeTipoUsuario" required>
                                <option value="">Seleccionar</option>
                                <option value="3">Administrador</option>
                                <option value="2">Empleado</option>
                                <option value="1">Cliente</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>
