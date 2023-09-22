<?php if (isset($_POST['submit'])) :
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $gift = $_POST['gift'];
    $total = $_POST['total_order'];
    $date = date('D-m-y H:i:s');
    // Orders
    $tickets = $_POST['tickets'];
    $shirt = $_POST['order_shirt'];
    $labels = $_POST['order_labels'];
    include_once "includes/funciones/functions.php";
    $order = products_json($tickets, $shirt, $labels);
    // Events
    $events = $_POST['register'];
    $register = json_events($events);
    // DB prepare statement
    try {
        require_once('includes/funciones/db_connection.php');
        $stmt = $db->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $name, $surname, $email, $date, $order, $register, $gift, $total);
        $stmt->execute();
        $stmt->close();
        $db->close();
        header('Location: validate_register.php?successful=1');
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
?>
<?php endif; ?>
<?php include_once "includes/templates/header.php"; ?>
<section class="section container">
    <h2>Registration summary </h2>

    <?php if (isset($_GET['successful'])) :
        if ($_GET['successful'] = "1") :
            echo "Successful Registration";
        endif;
    endif; ?>
</section>
<?php include_once "includes/templates/footer.php"; ?>