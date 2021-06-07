<div class="container" data-aos="fade-up">
    <form action="<?= base_url() ?>index.php/welcome/loginVerificar" method="post" role="form">
        <div class="section-title">
            <h3><span>Gestionar </span>Usuario</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="password" name="clave" class="form-control" placeholder="Clave" required>
            </div>
        </div>
        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="password" name="clave" class="form-control" placeholder="Repetir Clave" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Nombres y Apellidos" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Correo Electrónico" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                Tipo Usuario:
                <select name="cars" id="cars">
                    <option value="volvo">Administrador</option>
                    <option value="saab">Empleado</option>
                    <option value="mercedes">Turista</option>
                </select>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <button type="submit" style="width: 100%;" class="btn btn-primary">Grabar</button>
            </div>
        </div>
    </form>

    <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
        <div class="col-lg-12 ">            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Admin</td>
                        <td>Administrador</td>
                        <td>admin@gmail.com</td>
                        <td>
                            <button type="button" title="Editar" class="btn btn-success"><i class="bx bx-pencil"></i></button>
                            <button type="button" title="Eliminar" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Soporte</td>
                        <td>Soporte</td>
                        <td>soporte@gmail.com</td>
                    </tr>
                </tbody>
            </table>

            
        </div>
    </div>

</div>