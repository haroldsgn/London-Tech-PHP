<?php include_once "includes/templates/header.php"; ?>


<section class="section container">
  <h2>The best technology conference</h2>
  <p>
    Join us virtually at London Tech Week 2020 where we’ll be celebrating
    the best of tech innovation. Welcoming world-class speakers and brands
    from across the globe, this is the unmissable tech event of the year!
    London Tech Week is proud to be supported by the most influential tech
    leaders in the industry helping to shape the conference.
  </p>
</section>
<!--.section-->

<section class="schedule">
  <div class="video-container">
    <video autoplay loop poster="/img/bg-taller.jpg">
      <source src="/video/videoplayback.webm" type="video/webm" />
    </video>
  </div>
  <!--.video-container-->
  <div class="schedule-container">
    <div class="container">
      <div class="event-schedule">
        <h2>Event schedule</h2>

        <?php
        try {
          require_once('includes/funciones/db_connection.php');
          $sql = " SELECT * FROM `categoria_evento`";
          $result = $db->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>

        <nav class="schedule-menu">
          <?php while ($cat = $result->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $cat_event = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($cat_event); ?>">
              <i class=" fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $cat_event; ?>
            </a>
          <?php } ?>
        </nav>

        <?php
        try {
          require_once('includes/funciones/db_connection.php');
          $sql = " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`";
          $sql .= "FROM `eventos`";
          $sql .= "INNER JOIN `categoria_evento`";
          $sql .= "ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`";
          $sql .= "INNER JOIN `invitados`";
          $sql .= "ON `eventos`.`id_inv` = `invitados`.`invitado_id`";
          $sql .= "AND `eventos`.`id_cat_evento` = 1 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`";
          $sql .= "FROM `eventos`";
          $sql .= "INNER JOIN `categoria_evento`";
          $sql .= "ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`";
          $sql .= "INNER JOIN `invitados`";
          $sql .= "ON `eventos`.`id_inv` = `invitados`.`invitado_id`";
          $sql .= "AND `eventos`.`id_cat_evento` = 2 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`";
          $sql .= "FROM `eventos`";
          $sql .= "INNER JOIN `categoria_evento`";
          $sql .= "ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`";
          $sql .= "INNER JOIN `invitados`";
          $sql .= "ON `eventos`.`id_inv` = `invitados`.`invitado_id`";
          $sql .= "AND `eventos`.`id_cat_evento` = 3 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>

        <?php $db->multi_query($sql); ?>

        <?php

        do {
          $result = $db->store_result();
          $row = $result->fetch_all(MYSQLI_ASSOC); ?>

          <?php $i = 0; ?>
          <?php foreach ($row as $event) : ?>
            <?php if ($i % 2 == 0) { ?>
              <div id="<?php echo strtolower($event['cat_evento']);  ?>" class="course-info hide clearfix">
              <?php } ?>
              <div class="event-detail">
                <h3><?php echo $event['nombre_evento']; ?></h3>
                <p><i class="far fa-clock"></i> <?php echo $event['hora_evento']; ?></p>
                <p><i class="far fa-calendar-alt"></i> <?php echo $event['fecha_evento']; ?></p>
                <p>
                  <i class="fas fa-user-tie"></i> <?php echo $event['nombre_invitado'] . " " . $event['apellido_invitado']; ?>
                </p>
              </div>
              <?php if ($i % 2 == 1) { ?>
                <a href="calendar.php" class="button float-right">See all</a>
              </div>
            <?php } ?>
            <?php $i++; ?>
          <?php endforeach; ?>
          <?php $result->free(); ?>

        <?php  } while ($db->more_results() && $db->next_result()); ?>




      </div>
      <!--.event-schudele-->
    </div>
    <!--.container-->
  </div>
  <!--.schudele-container-->
</section>
<!--.schedule-->

<?php include_once "includes/templates/guests.php"; ?>

<div class="timer parallax">
  <div class="container">
    <ul class="event-summary clearfix">
      <li>
        <p class="number"></p>
        Guests
      </li>
      <li>
        <p class="number"></p>
        Workshops
      </li>
      <li>
        <p class="number"></p>
        Days
      </li>
      <li>
        <p class="number"></p>
        Conferences
      </li>
    </ul>
  </div>
</div>

<section class="prices section">
  <h2>Prices</h2>
  <div class="container">
    <ul class="prices-list clearfix">
      <li>
        <div class="price-table">
          <h3>Day pass</h3>
          <p class="number">30£</p>
          <ul>
            <li><i class="fas fa-check"></i>Free snacks</li>
            <li><i class="fas fa-check"></i>All conferences</li>
            <li><i class="fas fa-check"></i>All workshops</li>
          </ul>
          <a href="#" class="button hollow">Buy ticket</a>
        </div>
      </li>
      <li>
        <div class="price-table">
          <h3>4-day pass</h3>
          <p class="number">50£</p>
          <ul>
            <li><i class="fas fa-check"></i>Free snacks</li>
            <li><i class="fas fa-check"></i>All conferences</li>
            <li><i class="fas fa-check"></i>All workshops</li>
          </ul>
          <a href="#" class="button">Buy ticket </a>
        </div>
      </li>
      <li>
        <div class="price-table">
          <h3>2-Day pass</h3>
          <p class="number">45£</p>
          <ul>
            <li><i class="fas fa-check"></i>Free snacks</li>
            <li><i class="fas fa-check"></i>All conferences</li>
            <li><i class="fas fa-check"></i>All workshops</li>
          </ul>
          <a href="#" class="button hollow">Buy ticket</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<div id="map" class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19858.52699060748!2d-0.087367!3d51.525766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ca5f9afdaf5%3A0x6ab97202bd249a0e!2sEast%20London%20Tech%20City%2C%20London%20EC1Y%201BE%2C%20UK!5e0!3m2!1sen!2sco!4v1607908330005!5m2!1sen!2sco" width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<section class="section">
  <h2>Testimonials</h2>
  <div class="testimonials container clearfix">
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          rhoncus turpis massa, quis tincidunt dui fringilla sed.
        </p>
        <footer class="testimonial-info clearfix">
          <img src="/img/testimonial-2.jpg" alt="testimonial image" />
          <cite>Carol Terry <span>Designer at Pinterest</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--.testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          rhoncus turpis massa, quis tincidunt dui fringilla sed.
        </p>
        <footer class="testimonial-info clearfix">
          <img src="/img/testimonial-3.jpg" alt="testimonial image" />
          <cite>Susane Jones <span>Software developer at Google</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--.testimonial-->

    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
          rhoncus turpis massa, quis tincidunt dui fringilla sed.
        </p>
        <footer class="testimonial-info clearfix">
          <img src="/img/testimonial-4.jpg" alt="testimonial image" />
          <cite>Emma Williams <span>Computer programmer at Amazon</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--.testimonial-->
  </div>
</section>
<div class="newsletter parallax">
  <div class="content container">
    <p>Sign up for the newsletter:</p>
    <h3>London<span>techweek</span></h3>
    <a href="#mc_embed_signup" class="newsletter_button transparent button">Sign up</a>
  </div>
  <!--.content-->
</div>
<!--.newsletter-->

<section class="section container">
  <h2>Countdown</h2>
  <div class="countdown container">
    <ul class="clearfix">
      <li>
        <p id="days" class="number"></p>
        Days
      </li>
      <li>
        <p id="hours" class="number"></p>
        Hours
      </li>
      <li>
        <p id="minutes" class="number"></p>
        Minutes
      </li>
      <li>
        <p id="seconds" class="number"></p>
        Seconds
      </li>
    </ul>
  </div>
</section>
<!--.countdown-->
<?php include_once "includes/templates/footer.php"; ?>