<?php include ("header.php") ?>
<body>
    <section>
        <h1>Contacto</h1>

        <div>
            <form action="enviar_consulta.php" method="POST">
                <input type="text" name="nombre" class="contacto_input" placeholder="Nombre">
                <input type="text" name="apellido" class="contacto_input" placeholder="Apellido">
                <input type="text" name="email" class="contacto_input" placeholder="Ingrese su correo">
                <input type="text" name="telefono" class="contacto_input" placeholder="Ingrese su telefono">
                <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>

                <input type="submit" value="Enviar consulta" class="contacto_btn">

                <?php 
                if (isset ($_GET ['ok']))
                echo "<h3> Su mensaje ha sido enviado correctamente </h3>"
                ?>
                





            </form>




        </div>







    </section>












<?php include ("footer.php") ?>