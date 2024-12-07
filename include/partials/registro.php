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

                <button type="submit" name="action" value="enviar" class="btn">Enviar</button>
                <button type="reset" class="btn">Borrar</button>
            </form>
    </div>
</section>