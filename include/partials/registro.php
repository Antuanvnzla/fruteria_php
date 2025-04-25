<section>
<h2>Registro</h2>
    <div style="background-color: #fffbcc; border: 2px solid #cccc99; padding: 15px; border-radius: 10px;">
        <form action="include/proceso_registro.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" id="apellido_id" name="apellido">
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direcion" name="direccion" >
                </div>


                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" >
                </div>

                <div>
                    <label for="poblacion">Población: </label>
                    <select name="poblacion" id="poblacion">
                        <option value="">Seleciona la población</option>
                        <option value="xativa">Xativa</option>
                        <option value="novetle">Novetle</option>
                        <option value="genoves">Genovés</option>
                        <option value="la_llosa_de_ranes">La Llosa De Ranes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="telefono">telefono:</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>

                
                <div>
                    <legend>Horario</legend>
                    <input type="radio" id="manana" name="horario" value="manana">
                    <label for="manana">Mañana</label>
                    <input type="radio" id="tarde" name="horario" value="tarde">
                    <label for="tarde">Tarde</label>
                </div>

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

                <button type="submit" name="action" value="enviar" class="btn">Enviar</button>
                <button type="reset" class="btn">Borrar</button>
            </form>
    </div>
</section>