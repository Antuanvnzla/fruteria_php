<?php
session_start();

function mostrarFormulario($datos = [], $error = '') {
    // Extraemos valores o ponemos vacío para mostrar en el value de inputs
    $nombre = htmlspecialchars($datos['nombre'] ?? '');
    $apellido = htmlspecialchars($datos['apellido'] ?? '');
    $direccion = htmlspecialchars($datos['direccion'] ?? '');
    $email = htmlspecialchars($datos['email'] ?? '');
    $poblacion = htmlspecialchars($datos['poblacion'] ?? '');
    $telefono = htmlspecialchars($datos['telefono'] ?? '');
    $horario = $datos['horario'] ?? '';
    $estilos = $datos['estilos'] ?? '';
    $puntuacion = $datos['puntuacion'] ?? '';
    $frutas = $datos['frutas'] ?? [];

    if ($error) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <section>
    <h2>Registro</h2>
    <div style="background-color: #fffbcc; border: 2px solid #cccc99; padding: 15px; border-radius: 10px;">
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required value="<?= $nombre ?>">
            </div>

            <div class="form-group">
                <label for="apellido">Apellidos:</label>
                <input type="text" id="apellido_id" name="apellido" value="<?= $apellido ?>">
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="<?= $direccion ?>">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required value="<?= $email ?>">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="poblacion">Población: </label>
                <select name="poblacion" id="poblacion">
                    <option value="">Selecciona la población</option>
                    <option value="xativa" <?= $poblacion === 'xativa' ? 'selected' : '' ?>>Xativa</option>
                    <option value="novetle" <?= $poblacion === 'novetle' ? 'selected' : '' ?>>Novetle</option>
                    <option value="genoves" <?= $poblacion === 'genoves' ? 'selected' : '' ?>>Genovés</option>
                    <option value="la_llosa_de_ranes" <?= $poblacion === 'la_llosa_de_ranes' ? 'selected' : '' ?>>La Llosa De Ranes</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="<?= $telefono ?>">
            </div>

            <div>
                <legend>Horario</legend>
                <input type="radio" id="manana" name="horario" value="manana" <?= $horario === 'manana' ? 'checked' : '' ?>>
                <label for="manana">Mañana</label>
                <input type="radio" id="tarde" name="horario" value="tarde" <?= $horario === 'tarde' ? 'checked' : '' ?>>
                <label for="tarde">Tarde</label>
            </div>

            <legend>Estilos de registro</legend>
            <br>
            <input type="radio" id="normal" name="estilos" value="normal" <?= $estilos === 'normal' ? 'checked' : '' ?> />
            <label for="normal">Normal</label>
            <input type="radio" id="retro" name="estilos" value="retro" <?= $estilos === 'retro' ? 'checked' : '' ?> />
            <label for="retro">Retro</label>
            <br><br>

            <div class="formulario">
                <label for="puntuacion">Puntúa la página (1-5) <span style="color: red;">*</span>:</label>
                <select name="puntuacion" id="puntuacion" required>
                    <option value="">Selecciona</option>
                    <option value="1" <?= $puntuacion === '1' ? 'selected' : '' ?>>1</option>
                    <option value="2" <?= $puntuacion === '2' ? 'selected' : '' ?>>2</option>
                    <option value="3" <?= $puntuacion === '3' ? 'selected' : '' ?>>3</option>
                    <option value="4" <?= $puntuacion === '4' ? 'selected' : '' ?>>4</option>
                    <option value="5" <?= $puntuacion === '5' ? 'selected' : '' ?>>5</option>
                </select>
                <label for="slider"></label>
                <input type="range" id="slider" name="multiplicador" min="1" max="100" class="slider">
                <output for="slider" id="valor"></output>
                <br><br>

                <label>Frutas Preferidas:</label><br>
                <input type="checkbox" name="frutas[]" value="fresa" <?= in_array('fresa', $frutas) ? 'checked' : '' ?>> Fresa
                <input type="checkbox" name="frutas[]" value="manzana" <?= in_array('manzana', $frutas) ? 'checked' : '' ?>> Manzana
                <input type="checkbox" name="frutas[]" value="melon" <?= in_array('melon', $frutas) ? 'checked' : '' ?>> Melón
                <input type="checkbox" name="frutas[]" value="caqui" <?= in_array('caqui', $frutas) ? 'checked' : '' ?>> Caqui
                <input type="checkbox" name="frutas[]" value="uva" <?= in_array('uva', $frutas) ? 'checked' : '' ?>> Uva
                <br><br>
            </div>

            <button type="submit" name="action" value="enviar" class="btn">Enviar</button>
            <button type="reset" class="btn">Borrar</button>
        </form>
    </div>
    </section>

    <?php
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos todos los datos
    $datos = $_POST;

    $nombre = trim($datos['nombre'] ?? '');
    $email = trim($datos['email'] ?? '');
    $password = trim($datos['password'] ?? '');

    if (empty($nombre) || empty($email) || empty($password)) {
        mostrarFormulario($datos, 'Los campos nombre, email y contraseña son obligatorios.');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mostrarFormulario($datos, 'Correo electrónico no válido.');
        exit;
    }

    // Aquí iría tu lógica de guardar usuario y demás
    echo "<p style='color:green;'>Usuario registrado correctamente.</p>";
    // Puedes mostrar algo más o redirigir aquí

} else {
    mostrarFormulario();
}
?>
