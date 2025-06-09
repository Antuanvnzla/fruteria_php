<section>
    <h2>Registro</h2>
    <div class="registro"><br>
        <form action="include/proceso_registro.php" method="post">
            <div class="formulario">
                <label for="nombre">Nombre <span style="color: red;">*</span>:</label>
                <input type="text" id="nombre" name="nombre" required>
                <br><br>

                <label for="apellido">Apellidos <span style="color: red;">*</span>:</label>
                <input type="text" id="apellido_id" name="apellido" required>
                <br><br>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion">
                <br><br>

                <label for="email">Email <span style="color: red;">*</span>:</label>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="password">Contraseña <span style="color: red;">*</span>:</label>
                <input type="password" id="password" name="password" required>
                <br><br>

                <label for="confirm_password">Confirmar Contraseña <span style="color: red;">*</span>:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <br><br>

                <label for="poblacion">Población: </label>
                <select name="poblacion" id="poblacion">
                    <option value="">Selecciona la población</option>
                    <option value="xativa">Xàtiva</option>
                    <option value="llosa">La Llosa de Ranes</option>
                    <option value="novetle">Novetlè</option>
                    <option value="genoves">Genovés</option>
                </select>
                <br><br>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">
                <br><br>

                <legend>Horario de reparto.</legend>
                <br>
                <input type="radio" id="manana" name="horario" value="manana">
                <label for="manana">Mañana</label>
                <input type="radio" id="tarde" name="horario" value="tarde">
                <label for="tarde">Tarde</label>
                <br><br>

                <legend>Estilos de registro</legend>
                <br>
                <input type="radio" id="normal" name="estilos" value="normal" />
                <label for="estilos">Normal</label>
                <input type="radio" id="retro" name="estilos" value="retro" />
                <label for="estilos">Retro</label>
                <br><br>

                <div class="formulario">
                    <label for="puntuacion">Puntúa la página (1-5) <span style="color: red;">*</span>:</label>
                    <select name="puntuacion" id="puntuacion" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label for="slider"></label>
                    <input type="range" id="slider" name="multiplicador" min="1" max="100" class="slider">
                    <output for="slider" id="valor"></output>
                    <br><br>

                    <label>Frutas Preferidas:</label><br>
                    <input type="checkbox" name="frutas[]" value="fresa"> Fresa
                    <input type="checkbox" name="frutas[]" value="manzana"> Manzana
                    <input type="checkbox" name="frutas[]" value="melon"> Melón
                    <input type="checkbox" name="frutas[]" value="caqui"> Caqui
                    <input type="checkbox" name="frutas[]" value="uva"> Uva
                    <br><br>
                </div>

                <br>
                <button type="submit" name="action" value="enviar" class="btn">Enviar</button>
                <button type="reset" class="btn">Borrar</button><br><br>
            </div>
        </form>
    </div>
</section>