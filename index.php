<?php

?>
<html>
    <meta>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </meta>
    <body>  

    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  
}
</style>

<div class="container">
<h2>Formato de Titulación</h2>
    <h5>Ingenieria en computación, FES Aragón - UNAM</h5>
    <h6><span class="text-danger">Los campos con * son obligatorios</span></h6>
</div>
    <div class="container" style="border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;">
            <form method="post" action="./crearPDF.php" class="">
                <div class="form-group">
                    <label for="nombreAlumno">Nombre completo: <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="nombreAlumno" name="nombreAlumno" aria-describedby="nameHelp" placeholder="Ejemplo: López Hérnandez Jorge Arturo">
                    <small id="nameHelp" class="form-text text-muted">Empezando por el primer apellido.</small>
                </div>
                <br>
                
                <div class="form-group">
                    <label for="noCuenta">Número de Cuenta: <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="noCuenta" name="noCuenta" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="generacion">Generación: <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" id="generacion" name="generacion" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="direccion">Domicilio completo: <span class="text-danger">*</span></label>
                    <input required maxlength="100" type="text" class="form-control" id="direccion" name="direccion" aria-describedby="addresHelper" placeholder="Tu respuesta">
                    <small id="addresHelper" class="form-text text-muted">Max 100 caracteres.</small>

                </div>
                <br>

                <div class="form-group">
                    <label for="email">Correo Electrónico: <span class="text-danger">*</span></label>
                    <input required maxlength="100" type="email" class="form-control" id="email" name="email" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="facebook">Facebook:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="telefonoCasa">Teléfono de Casa: <span class="text-danger">*</span></label>
                    <input required maxlength="10" minlength="10" type="number" class="form-control" id="telefonoCasa" name="telefonoCasa" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="telefonoTrabajo">Teléfono de Trabajo:</label>
                    <input maxlength="10" minlength="10" type="number" class="form-control" id="telefonoTrabajo" name="telefonoTrabajo" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="telefonoCelular">Teléfono Celular: <span class="text-danger">*</span></label>
                    <input required maxlength="10" minlength="10" type="number" class="form-control" id="telefonoCelular" name="telefonoCelular" placeholder="Tu respuesta">
                </div>
                <br>

                <div class="form-group">
                    <label for="modalidad">Modalidad de Titulación: <span class="text-danger">*</span></label>
                    <select onchange="modalidadFuncion()" class="form-control" id="modalidad" name="modalidad" required>
                        <option value="" required selected >Seleccione</option>
                        <option value="Exámen General de Conocimientos" >Exámen General de Conocimientos</option>
                        <option value="Cursos y Diplomados de Actualización y Capacitación Profesional" >Cursos y Diplomados de Actualización y Capacitación Profesional</option>
                        <option value="Estudios de Posgrado" >Estudios de Posgrado</option>
                        <option value="Alto Nivel Académico" >Alto Nivel Académico</option>
                    </select>
                </div>
                <br>

                <div class="col-sm-12 col-lg-12 " class="form-group">
                    <p>Fecha de Registro: <b>La fecha de registro tiene que ser en un día hábil</b></p>
                </div>

                <div style="" class="row">
                    <div class="col-sm-12 col-lg-4 " class="form-group">
                        <label for="dia">Día <span class="text-danger">*</span></label><br>
                        <input oninput="validaDia()" max="31" required type="number" class="form-control" id="dia" name="dia">
                    </div>

                    <div class="col-sm-12 col-lg-4 " class="form-group">
                        <label for="mes">Mes<span class="text-danger">*</span></label>
                        <select onchange="validaMes()" style="margin-top:-1px" class="form-control" id="mes" name="mes" required>
                            <option value="" required selected >Seleccione</option>
                            <option value="Enero" >Enero</option>
                            <option value="Febrero" >Febrero</option>
                            <option value="Marzo" >Marzo</option>
                            <option value="Abril" >Abril</option>
                            <option value="Mayo" >Mayo</option>
                            <option value="Junio" >Junio</option>
                            <option value="Julio" >Julio</option>
                            <option value="Agosto" >Agosto</option>
                            <option value="Septiembre" >Septiembre</option>
                            <option value="Octubre" >Octubre</option>
                            <option value="Noviembre" >Noviembre</option>
                            <option value="Diciembre" >Diciembre</option>
                        </select>
                    </div>

                    <div class="col-sm-12 col-lg-4 " class="form-group">
                        <label for="anio">Año<span class="text-danger">*</span></label><br>
                        <input max="2999" required type="number" class="form-control" id="anio" name="anio">
                    </div>
                </div>

                <br>
                
                <button style="float:right" type="submit" class="btn btn-primary">Generar Formato</button>
            </form>
    </div>
    <p>&nbsp;</p>

    <script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

        function modalidadFuncion()
        {
            let element = document.getElementById('modalidad');

            if(element.value == 'Cursos y Diplomados de Actualización y Capacitación Profesional')
            {
                alert("Esta modalidad de titulación no requiere título ni capitulado");
            }

        }

        function validaDia()
        {
            let element = document.getElementById('dia');
            let dia = element.value;

            let elementMes = document.getElementById('mes');
            elementMes.value = '';

            if(dia < 1)
            {
                element.value = 1;
            }

            if(dia > 31)
            {
                element.value = 31;
            } 
        }

        function validaMes()
        {
            let elementMes = document.getElementById('mes');
            let mes = elementMes.value;

            let elementDia = document.getElementById('dia');
            let dia = elementDia.value;

            if(mes == 'Febrero')
            {
                if(dia > 29)
                {
                    alert("El mes seleccionado no puede tener mas de 29 dias");
                    elementDia.value = 29;
                }
            }

            if(mes == 'Abril' || mes == 'Junio' || mes == 'Septiembre' || mes == 'Noviembre')
            {
                if(dia > 30)
                {
                    alert("El mes seleccionado no puede tener mas de 30 dias");
                    elementDia.value = 30;
                }
            }
        }
        
    </script>

    <script>
        document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number"){
        document.activeElement.blur();
    }
});
        </script>
    </body>
</html>