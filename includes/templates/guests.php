<?php
try {
    require_once('includes/funciones/db_connection.php');
    $sql = " SELECT * FROM `invitados`";
    $result = $db->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>

<section class="section container">
    <h2>Our Guests</h2>
    <ul class="guests-list clearfix">
        <?php
        while ($guests = $result->fetch_assoc()) { ?>

            <li>
                <div class="guest">
                    <a class="guest_info" href="#guest<?php echo $guests['invitado_id']; ?>">
                        <img src="img/<?php echo $guests['url_imagen']; ?>" alt="guest image" />
                        <p><?php echo $guests['nombre_invitado'] . " " . $guests['apellido_invitado']; ?></p>
                    </a>
                </div>
            </li>
            <div style="display: none;">
                <div class="guest_info" id="guest<?php echo $guests['invitado_id']; ?>">
                    <h2><?php echo $guests['nombre_invitado'] . " " . $guests['apellido_invitado']; ?></h2>
                    <img src="img/<?php echo $guests['url_imagen']; ?>" alt="guest image" />
                    <p><?php echo $guests['descripcion']; ?></p>
                </div>
            </div>
        <?php } // while de fetch_assoc() 
        ?>
    </ul>
</section>

<?php
$db->close();
?>