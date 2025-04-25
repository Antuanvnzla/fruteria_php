<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>
        <input type="radio" name="estil" value="css/estil1.css"
            <?php if (!isset($_SESSION['estil']) || $_SESSION['estil'] == 'css/estil1.css') echo 'checked'; ?>>
        Amarillo
    </label>
    <label>
        <input type="radio" name="estil" value="css/estil2.css"
            <?php if (isset($_SESSION['estil']) && $_SESSION['estil'] == 'css/estil2.css') echo 'checked'; ?>>
        normal
    </label>
    <button type="submit">Canviar estil</button>
</form>
