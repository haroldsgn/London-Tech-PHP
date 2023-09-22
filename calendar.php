<?php include_once "includes/templates/header.php"; ?>

<section class="section container">
    <h2>Events Calendar</h2>

    <?php
    try {
        require_once('includes/funciones/db_connection.php');
        $sql = " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`";
        $sql .= "FROM `eventos`";
        $sql .= "INNER JOIN `categoria_evento`";
        $sql .= "ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`";
        $sql .= "INNER JOIN `invitados`";
        $sql .= "ON `eventos`.`id_inv` = `invitados`.`invitado_id`";
        $sql .= "ORDER BY `evento_id`";
        $result = $db->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="calendar">
        <?php
        $calendar = array();
        while ($events = $result->fetch_assoc()) {

            // Obtiene la fecha del evento 

            $date = $events['fecha_evento'];

            $event = array(
                'titulo' => $events['nombre_evento'],
                'fecha' => $events['fecha_evento'],
                'hora' => $events['hora_evento'],
                'categoria' => $events['cat_evento'],
                'icono' => 'fa' . " " . $events['icono'],
                'invitado' => $events['nombre_invitado'] . " " . $events['apellido_invitado']
            );

            $calendar[$date][] = $event;

        ?>

        <?php } // while de fetch_assoc() 
        ?>

        <?php
        // Imprime todos los eventos
        foreach ($calendar as $day => $event_list) { ?>

            <h3>
                <i class="fa fa-calendar"> </i>
                <?php echo date("F j, Y", strtotime($day)); ?>
            </h3>

            <?php foreach ($event_list as $event) { ?>

                <div class="day">
                    <p class="tittle"><?php echo $event['titulo']; ?></p>
                    <p class="hour">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo $event['fecha'] . " " . $event['hora']; ?>
                    </p>
                    <p>
                        <i class="<?php echo $event['icono']; ?>" aria-hidden="true"></i>
                        <?php echo $event['categoria']; ?>
                    </p>
                    <p>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo $event['invitado']; ?>
                    </p>
                </div>
            <?php } // Fin foreach event 
            ?>
        <?php } // Fin foreach day
        ?>
    </div>
    <!--.Calendar-->

    <?php
    $db->close();
    ?>
</section>
<?php include_once "includes/templates/footer.php"; ?>