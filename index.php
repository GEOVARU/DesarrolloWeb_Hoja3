<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Solicitud de Pasaporte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    .modal-content {
        color: white;
        background: rgb(2, 0, 36);
        background: -moz-linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        background: -webkit-linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024", endColorstr="#00d4ff", GradientType=1);
    }
</style>

<body>
    <div class="container mt-5">
        <h1>Formulario de Solicitud de Pasaporte</h1>
        <form id="passportForm">
            <div class="mb-3">
                <label for="fullName" class="form-label">Nombre Completo:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/vusrdugn.json" trigger="loop" colors="primary:#121331,secondary:#b26836,tertiary:#4bb3fd,quaternary:#f9c9c0,quinary:#ebe6ef" state="hover-glance" style="width:50px;height:50px">
                        </lord-icon>
                    </span>
                    <input type="text" class="form-control" placeholder="Nombre Completo" id="fullName" aria-describedby="basic-addon1" required>
                </div>

            </div>
            <div class="mb-3">
                <label for="passportNumber" class="form-label">Número de Pasaporte:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/ttioogfl.json" trigger="loop" colors="primary:#121331,secondary:#b26836,tertiary:#4bb3fd,quaternary:#f9c9c0,quinary:#ebe6ef" state="loop" style="width:50px;height:50px">
                        </lord-icon>
                    </span>
                    <input type="text" class="form-control" placeholder="Número de Pasaporte:" id="passportNumber" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Fecha de Nacimiento:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/rfbqeber.json" trigger="loop" delay="1500" colors="primary:#121331,secondary:#b26836,tertiary:#4bb3fd" style="width:50px;height:50px">
                        </lord-icon>

                    </span>
                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="dob" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nationality" class="form-label">Nacionalidad:</label>

                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/oaflahpk.json" trigger="loop" delay="1500" colors="primary:#4bb3fd" state="hover-jump-spin" style="width:50px;height:50px">
                        </lord-icon>

                    </span>

                    <select class="form-control" placeholder="Nacionalidad" id="nationality" aria-describedby="basic-addon1" required>
                        <option value="argentina">Argentina</option>
                        <option value="brasil">Brasil</option>
                        <option value="chile">Chile</option>
                        <option value="colombia">Colombia</option>
                        <option value="espana">España</option>
                        <option value="estados-unidos">Estados Unidos</option>
                        <option value="francia">Francia</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="italia">Italia</option>
                        <option value="mexico">México</option>
                    </select>

                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/hjbsbdhw.json" trigger="loop" colors="primary:#4bb3fd,secondary:#f24c00,tertiary:#848484,quaternary:#ebe6ef" state="loop" style="width:50px;height:50px">
                        </lord-icon>

                    </span>
                    <textarea class="form-control" id="address" rows="3" required placeholder="Dirección"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        </form>

    </div>


    <!-- El modal -->
    <div class="modal" id="MODAL_INFO">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-10 ">
                    </div>
                    <div class="m-5">
                        <h2>Área de Resultados</h2>
                        <hr width="80%">
                        <p id="result"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>