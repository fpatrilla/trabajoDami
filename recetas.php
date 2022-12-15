<?php include ("header.php") ?>
<body >    
    <section>
        <div class="btn_recetas">
            <ul>
                <li> <a href="recetas.php ?ket=pan">Pan keto</a> </li>
                <li> <a href="recetas.php ?ket=cafe">Cafe Batido sin lacteos</a> </li>
                <li> <a href="recetas.php ?ket=truf">Trufas de chocolate</a> </li>
                <li> <a href="recetas.php ?ket=turr">Turron keto</a> </li>

            </ul>

        </div>
        

<?php 

    if (isset($_GET ["ket"])){
        switch (($_GET ["ket"])){
            case "pan":
                        $nombre = "Pan keto";
                        $ingredientes = "300 ml (140 g) harina de almendra, 5 cda. cáscaras de psilio en polvo,2 cdta. 
                                            polvo para hornear,1 cdta. sal marina, 2 cdta. vinagre de manzana o vinagre de 
                                            vino blanco, 240 ml agua hirviendo, 3 claras de huevo, 2 cda. semillas de sésamo
                                            (opcional)";
                        $info = "¡Úntalo con mantequilla y creerás que estás comiendo pan de verdad! Este pan keto es crocante
                                por fuera y suave por dentro. Una vez que le agarres la mano a esta receta, habrás encontrado 
                                    tu nuevo pan favorito, y podrás disfrutarlo a la par de seguir una alimentación cetogénica.";
                        $img = " ./img/pan.webp";
            break;

            case "cafe":
                $nombre = "Cafe Batido";
                $ingredientes = "1½ cda. café instantáneo en polvo espresso (sin endulzantes agregados)
                                1½ cda. eritritol
                                2 cda. agua caliente
                                1 cdta. extracto de vainilla
                                Extracto de vainilla
                                No confundir con la esencia de vainilla. La esencia de vainilla generalmente viene caramelizada
                                 y tiene azúcares agregados. El extracto de vainilla es puro, y no tiene endulzantes extra.
                                (opcional)
                                350 ml leche de almendras sin azúcar o leche de coco";
                $info = "Este café batido está tan bueno que es popular en muchos países. En Corea se conoce como
                         Dalgona, en Grecia como Frappe y en la India como café batido. ¡Lo reconocerás en cualquier 
                         idioma como un riquísimo café para darse un capricho! Además es bajo en carbohidratos.";
                $img = "./img/cafe.webp";
            break;
                
            case "truf":
                $nombre = "Trufas con Chocolate";
                $ingredientes = "1 (200 g) aguacate maduro
                                    ½ cdta. extracto de vainilla
                                    ½ lima, la corteza
                                    1 pizca sal
                                    140 g chocolate negro con un mínimo del 80% de sólidos de cacao
                                    1 cda. aceite de coco
                                    1 cda. cacao en polvo";
                $info = "¿Qué puede haber mejor que unas trufas de chocolate? Trufas de chocolate y aguacate. 
                        ¿Y qué hay mejor que trufas de chocolate y aguacate? ¡Trufas de chocolate y aguacate bajas 
                        en carbohidratos! Pequeñas maravillas sin lácteos con un delicioso sabor a chocolate y lima. 
                        ¡Sorprende a tus invitados con esta deliciosa combinación!";
                $img = "./img/trufas.webp";
            break;                        
            case "turr":
                $nombre = "Turron Keto";
                $ingredientes =     "240 ml (140 g) nueces de macadamia o almendras
                                    240 ml (180 g) eritritol
                                    2 cda. agua
                                    1 clara de huevo grande
                                    1 pizca sal";
                $info = "El turrón siempre ha sido uno de los dulces estrella de la navidad. Nosotros 
                        lo hemos recreado con nueces de macadamia, eritritol y ¡mucho amor keto! El resultado es
                        un dulce crocante y tostado para disfrutar en las fiestas sin que tu azúcar en sangre
                        se dispare.";
                $img = "./img/turron.webp";
            break;
        }
        
    }

    error_reporting (E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
?>


<div>
         <h2><?php echo $nombre ?></h2>
          <h4><?php echo $ingredientes ?></h4>
          <p><?php echo $info ?></p>
          <div class="recetas_img">
              <img src="<?php echo $img ?>">

          </div>

</div>

</section>




<?php include ("footer.php") ?>
</html>