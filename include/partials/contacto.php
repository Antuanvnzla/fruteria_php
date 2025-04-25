<section>
    <h2>Contacto</h2>
    <form action="include/proceso_contacto.php" method="post">
        <div style="background-color: #fffbcc; border: 2px solid #cccc99; padding: 15px; border-radius: 10px;">
            <h3 style="background-color: #99ccff; color: white; padding: 10px; border-radius: 5px;">Benvinguda</h3>

            <div class="grupo-contacto">
                <label for="email">Email <span style="color: red;">*</span></label>
                <input type="email" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>">
            </div>

            <div class="grupo-contacto">
                <label for="asunto">Asunto <span style="color: red;">*</span></label>
                <input type="text" id="asunto" name="asunto" required value="<?php echo isset($asunto) ? $asunto : ''; ?>">
            </div>

            <div class="grupo-contacto">
                <label for="mensaje">Mensaje: <span style="color: red;">*</span></label>
                <textarea id="mensaje" name="mensaje" rows="4" required><?php echo isset($mensaje) ? $mensaje : ''; ?></textarea>
            </div>

            <br><br>

            <div class="grupo-contacto">
                <button type="submit">Enviar</button>
                <button type="reset">Borrar</button>
            </div>
        </div>
    </form>
</section>
