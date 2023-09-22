<?php include_once "includes/templates/header.php"; ?>

<section class="section container">
  <h2>User Registration</h2>
  <form id="register" class="register" action="validate_register.php" method="POST">
    <div id="user_data" class="register box clearfix">
      <div class="field">
        <label for="name">Name:</label>
        <input type="text" id="nombre" name="name" placeholder="Your name" />
      </div>
      <div class="field">
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" placeholder="Your surname" />
      </div>
      <div class="field">
        <label for="email">Email:</label>
        <input type="email  " id="email" name="email" placeholder="Your Email" />
      </div>
      <div id="error"></div>
    </div>
    <!--user data-->

    <div id="packages" class="packages">
      <h3>Choose the number of tickets</h3>

      <ul class="prices-list clearfix">
        <li>
          <div class="price-table">
            <h3>Day pass (Friday)</h3>
            <p class="number">30£</p>
            <ul>
              <li><i class="fas fa-check"></i>Free snacks</li>
              <li><i class="fas fa-check"></i>All conferences</li>
              <li><i class="fas fa-check"></i>All workshops</li>
            </ul>
            <div class="order">
              <label for="day_pass">Tickets</label>
              <input type="number" min="0" id="day_pass" size="3" name="tickets[]" placeholder="0" />
            </div>
          </div>
        </li>
        <li>
          <div class="price-table">
            <h3>4-days pass</h3>
            <p class="number">50£</p>
            <ul>
              <li><i class="fas fa-check"></i>Free snacks</li>
              <li><i class="fas fa-check"></i>All conferences</li>
              <li><i class="fas fa-check"></i>All workshops</li>
            </ul>
            <div class="order">
              <label for="full_pass">Tickets</label>
              <input type="number" min="0" id="full_pass" size="3" name="tickets[]" placeholder="0" />
            </div>
          </div>
        </li>
        <li>
          <div class="price-table">
            <h3>2-Days pass (Friday & Saturday)</h3>
            <p class="number">45£</p>
            <ul>
              <li><i class="fas fa-check"></i>Free snacks</li>
              <li><i class="fas fa-check"></i>All conferences</li>
              <li><i class="fas fa-check"></i>All workshops</li>
            </ul>
            <div class="order">
              <label for="twodays_pass">Tickets</label>
              <input type="number" min="0" id="twodays_pass" size="3" name="tickets[]" placeholder="0" />
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!---packages-->

    <div id="events" class="events clearfix">
      <h3>Choose your workshops</h3>
      <div class="box">
        <div id="friday" class="day-content clearfix">
          <h4>Friday</h4>
          <div>
            <p>Workshops:</p>
            <label><input type="checkbox" name="register[]" id="workshop_01" value="workshop_01" /><time>10:00</time> Responsive Web Design</label>
            <label><input type="checkbox" name="register[]" id="workshop_02" value="workshop_02" /><time>12:00</time> Flexbox</label>
            <label><input type="checkbox" name="register[]" id="workshop_03" value="workshop_03" /><time>14:00</time> HTML5 & CSS3</label>
            <label><input type="checkbox" name="register[]" id="workshop_04" value="workshop_04" /><time>17:00</time> Drupal</label>
            <label><input type="checkbox" name="register[]" id="workshop_05" value="workshop_05" /><time>19:00</time> WordPress</label>
          </div>
          <div>
            <p>Conferences:</p>
            <label><input type="checkbox" name="register[]" id="conf_01" value="conf_01" /><time>10:00</time> How to be a Freelancer</label>
            <label><input type="checkbox" name="register[]" id="conf_02" value="conf_02" /><time>17:00</time> Technologies of the future</label>
            <label><input type="checkbox" name="register[]" id="conf_03" value="conf_03" /><time>19:00</time> Web security</label>
          </div>
          <div>
            <p>Seminars:</p>
            <label><input type="checkbox" name="register[]" id="sem_01" value="sem_01" /><time>10:00</time> UI & UX design</label>
          </div>
        </div>
        <!--#Friday-->
        <div id="saturday" class="day-content clearfix">
          <h4>Saturday</h4>
          <div>
            <p>Workshops:</p>
            <label><input type="checkbox" name="register[]" id="workshop_06" value="workshop_06" /><time>10:00</time> AngularJS</label>
            <label><input type="checkbox" name="register[]" id="workshop_07" value="workshop_07" /><time>12:00</time> PHP & MySQL</label>
            <label><input type="checkbox" name="register[]" id="workshop_08" value="workshop_08" /><time>14:00</time> Advanced JavaScript</label>
            <label><input type="checkbox" name="register[]" id="workshop_09" value="workshop_09" /><time>17:00</time> SEO on Google</label>
            <label><input type="checkbox" name="register[]" id="workshop_10" value="workshop_10" /><time>19:00</time> From Photoshop to HTML5 & CSS3</label>
            <label><input type="checkbox" name="register[]" id="workshop_11" value="workshop_11" /><time>21:00</time> Medium & advanced PHP</label>
          </div>
          <div>
            <p>Conferences:</p>
            <label><input type="checkbox" name="register[]" id="conf_04" value="conf_04" /><time>10:00</time> How to create an online store that sells
              millions in a few days</label>
            <label><input type="checkbox" name="register[]" id="conf_05" value="conf_05" /><time>17:00</time> The best places for find a job</label>
            <label><input type="checkbox" name="register[]" id="conf_06" value="conf_06" /><time>19:00</time> Steps to create a profitable
              business</label>
          </div>
          <div>
            <p>Seminars:</p>
            <label><input type="checkbox" name="register[]" id="sem_02" value="sem_02" /><time>10:00</time> Learn how to code in one day</label>
            <label><input type="checkbox" name="register[]" id="sem_03" value="sem_03" /><time>17:00</time> UI & UX design</label>
          </div>
        </div>
        <!--#saturday-->
        <div id="sunday" class="day-content clearfix">
          <h4>Sunday</h4>
          <div>
            <p>Workshops:</p>
            <label><input type="checkbox" name="register[]" id="workshop_12" value="workshop_12" /><time>10:00</time> Laravel</label>
            <label><input type="checkbox" name="register[]" id="workshop_13" value="workshop_13" /><time>12:00</time> Create your own API</label>
            <label><input type="checkbox" name="register[]" id="workshop_14" value="workshop_14" /><time>14:00</time> JavaScript & jQuery</label>
            <label><input type="checkbox" name="register[]" id="workshop_15" value="workshop_15" /><time>17:00</time> Creating WordPress templates</label>
            <label><input type="checkbox" name="register[]" id="workshop_16" value="workshop_16" /><time>19:00</time> Virtual store on Magento</label>
          </div>
          <div>
            <p>Conferences:</p>
            <label><input type="checkbox" name="register[]" id="conf_07" value="conf_07" /><time>10:00</time> How to do online marketing</label>
            <label><input type="checkbox" name="register[]" id="conf_08" value="conf_08" /><time>17:00</time> What language should i start with?</label>
            <label><input type="checkbox" name="register[]" id="conf_09" value="conf_09" /><time>19:00</time> Open Source Frameworks & libraries</label>
          </div>
          <div>
            <p>Seminars:</p>
            <label><input type="checkbox" name="register[]" id="sem_04" value="sem_04" /><time>14:00</time> Creating an App on Android in an
              afternoon</label>
            <label><input type="checkbox" name="register[]" id="sem_05" value="sem_05" /><time>17:00</time> Creating an App on iOS in an
              afternoon</label>
          </div>
        </div>
        <!--#sunday-->
      </div>
      <!--.box-->
    </div>
    <!--#events-->

    <div id="summary" class="summary">
      <h3>Payment & extras</h3>
      <div class="box clearfix">
        <div class="extras">
          <div class="order">
            <label for="event_shirt">Event shirt 10$ <small>(Promotion 7% dis.)</small></label>
            <br />
            <input type="number" min="0" id="event_shirt" size="3" name="order_shirt" placeholder="0" />
          </div>
          <!--.order-->
          <div class="order">
            <label for="labels">Pack of 10 labels 2$
              <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
            <input type="number" min="0" id="labels" size="3" name="order_labels" placeholder="0" />
          </div>
          <!--.order-->
          <div class="order">
            <label for="gift">Select a gift</label> <br />
            <select id="gift" name="gift" required>
              <option value="">--Select a gift --</option>
              <option value="2">Labels</option>
              <option value="1">Bracelet</option>
              <option value="3">Pen</option>
            </select>
          </div>
          <!--.order-->

          <input type="button" id="calculate" class="button" value="Calculate" />
        </div>
        <!--.extras-->

        <div class="total">
          <p>Summary:</p>
          <div id="list_products"></div>
          <p>Total:</p>
          <div id="total-amount"></div>
        </div>
        <input type="hidden" name="total_order" id="total_order">
        <input type="submit" id="button_register" class="button" name="submit" value="pay" />
        <!--.total-->
      </div>
      <!--.box-->
    </div>
    <!--.summary-->
  </form>
</section>

<?php include_once "includes/templates/footer.php"; ?>