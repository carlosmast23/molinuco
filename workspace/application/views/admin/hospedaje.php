<div class="container" data-aos="fade-up">
    <form action="<?= base_url() ?>index.php/welcome/loginVerificar" method="post" role="form">
        <div class="section-title">
            <h3><span>Gestionar </span>Hospedaje</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Nombre" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-2 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Capacidad" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Dirección" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Persona de Contacto" required>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin-top: 15px;" data-aos-delay="100">
            <div class="col-lg-4 offset-lg-4">
                <input type="text" name="usuario" class="form-control" placeholder="Número de Contacto" required>
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Hostal Rio Molinuco</td>
                        <td>50 personas</td>
                        <td>Capelo , ruta 2</td>
                        <td>
                            <button type="button" title="Editar" class="btn btn-success"><i class="bx bx-pencil"></i></button>
                            <button type="button" title="Eliminar" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Hostal Capelo Rivas</td>
                        <td>15 personas</td>
                        <td>Capelo, sector molinuco , casa #3</td>
                        <td>
                            <button type="button" title="Editar" class="btn btn-success"><i class="bx bx-pencil"></i></button>
                            <button type="button" title="Eliminar" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            
        </div>
    </div>

</div>