<?php get_header(); ?>
<?php get_template_part('includes/section','nav');?>

    <!-- Hero -->
    <section id="hero" class="hero">
      <div class="hero-image">
        <div class="wrapper">
          <h1>Want To Be Eco Friendly?</h1>
          <p> Green Cape Engineering offers a highly skilled team that specializes in the field of electrical engineering 
            with focus on renewable energy, electrical installations, lighting and electronics.</p>
        </div>
      </div>
    </section>
    <!-- Sidebar -->
    <div class="cookies-box">
      <h3 class="cookies__title">Register your solar system</h3>
      <div class="cookies__buttons">
        <button id="acceptBtn" class="cookies__btn cookies__btn--accept">
          Take me
        </button>
      </div>
    </div>
    <!-- Sidebar End -->
    <!-- About -->
    <section id="about" class="feature">
      <div class="feature__content container container--pall">
        <div class="feature__intro">
          <h2>About Us</h2>
          <p>
            We specialize in managing of residential, commercial, and industrial SSEG installations from the process of applications to the local municipality (City of Cape Town) up until final commissioning. 
           </p>
          <p>
            Using our vast expertise,we also offer general electrical and electronic solutions. 
            These services range from general wiring of premises, residential and commercial/industrial lighting as well smart home systems.
          </p>
        </div>

        <div id="articles" class="feature__grid">
          <div class="feature__item">
            <div class="feature__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-ok-64.svg" />
            </div>
            <div class="feature__title">Cost-Effectiveness</div>
            <div class="feature__description">
              We believe in making our solutions affordable to each sector of society.
            </div>
          </div>

          <div class="feature__item">
            <div class="feature__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-ok-64.svg" />
            </div>
            <div class="feature__title">Quality Assurance</div>
            <div class="feature__description">
              All services offered are strictly in compliance with the relevant local SANS standards.
            </div>
          </div>

          <div class="feature__item">
            <div class="feature__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-ok-64.svg" />
            </div>
            <div class="feature__title">Environmentally Conscious</div>
            <div class="feature__description">
              Making an impact towards environmental sustainability in the global strive towards energy efficiency.
            </div>
          </div>

          <div class="feature__item">
            <div class="feature__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons8-ok-64.svg" /></div>
            <div class="feature__title">Speedy Service</div>
            <div class="feature__description">
              Our customer support is available 24/7 for any queries. 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services -->
    <section id="services" class="services">
          <div class="container">
            <div class="services__image"></div>
    
            <div class="services__text container--pall">
              <h2>Solar PV</h2>
              <p>
                Grid-connected rooftop solar installations ensure that the consumer’s load requirements are fully met. PV systems are like any other electrical power generating systems; however, the key difference lies in the equipment required. The principles of operation and interfacing with other the electricity network remain the same and are guided by a well-established body of electrical codes and standards. 
              </p>
              <p>There are off-grid PV systems and grid-tied PV systems. There are three parts to a solar PV installation, which are energy generation, power conversion and energy utilisation. The generation of electrical energy is done by the solar panels when light falls onto them.
              </p>
              
              <a href="#contact" class="button services__cta">Request Quote</a>
            </div>
          </div>
    </section>
    <!-- Articles -->
    <section class="articles">
      <div class="article__content container container--pall">
        <h2>Latest Articles</h2>

        <div class="article__grid">
          <a href="https://businesstech.co.za/news/energy/667161/tax-breaks-for-rooftop-solar-in-south-africa-come-with-a-big-catch/" target="_blank" class="article__item">
            <div
              class="article__image"
              style="background-image: url('https://businesstech.co.za/news/wp-content/uploads/2023/02/Godongwana-05.png')"
            ></div>
            <div class="article__text">
              <div class="article__author">By BusinessTech</div>
              <div class="article__title">
                Tax breaks for rooftop solar in South Africa come with a big catch
              </div>
              <div class="article__description">
                National Treasury is offering a tax break for businesses and individuals investing in solar and renewable – but there’s a big caveat …
              </div>
            </div>
          </a>

          <a href="https://www.biznews.com/sarenewal/2022/07/12/ct-buy-electricity-businesses-households" target="_blank" class="article__item">
            <div
              class="article__image"
              style="background-image: url('https://www.biznews.com/wp-content/uploads/2022/07/Geordin-Hill-Lewis-1.png')"
            ></div>
            <div class="article__text">
              <div class="article__author">By Alec Hogg</div>
              <div class="article__title">
                Cape Town set to buy electricity from businesses, households
              </div>
              <div class="article__description">
                The City of Cape Town is poised to use SA’s electricity crisis to abrogate power over the electricity supply long centralized in Pretoria …
              </div>
            </div>
          </a>

          <a href="https://www.westerncape.gov.za/static/solar-pv-mapping/" target="_blank" class="article__item">
            <div
              class="article__image"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/map-municipalities.jpg')"
            ></div>
            <div class="article__text">
              <div class="article__author">Western Cape Tariff Map</div>
              <div class="article__title">
                Find my SSEG Traffic
              </div>
              <div class="article__description">
                Small-Scale Embedded Generation (SSEG) Feed-In Tariff Map …
              </div>
            </div>
          </a>

          <a href="https://www.instagram.com/green_cape_engineering/" target="_blank" class="article__item">
            <div
              class="article__image"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/GCE.jpg')"
            ></div>
            <div class="article__text">
              <div class="article__author">By GCE</div>
              <div class="article__title">
                Check out our social media
              </div>
              <div class="article__description">
                We’re excited to
                to make a change, follow us to see our green footprint …
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
            <!-- Review -->
            <section class="reviews" id="reviews">
          <div class="revwrapper">
            <div class="testimonial-revcontainer" id="testimonial-revcontainer"></div>
            <button class="revbutton" id="prev">&lt;</button>
            <button class="revbutton" id="next">&gt;</button>
          </div>
        </section>
        <!-- End Review -->
    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container">
        <h2 class="contact__text">Contact</h2>
        <div class="contact-grid">
          <div class="contact__details">
            <ul class="unstyled-list" >
              <li>Address: 145 Murray Street, Vasco Estate, Cape Town</li>
              <li>info@greencapeengineering.com</a></li>
              <li>(061)4452597 - (065)8370118</li>
           </ul>
          </div>

          <form class="contact__form" id="submit-form" action="">
            <h3>Send us a message</h3>
            <p>
              <input size="40" id="name" class="form-input" type="text" placeholder="Your Name*" required>
              <small class="name-error"></small>
            </p>
            <p>
              <input size="40" id="email" class="form-input" type="email" placeholder="Your Email*" required>
              <small class="name-error"></small>
            </p>
    
            <p class="full-width">
              <textarea rows="8"  minlength="10" id="message" cols="40"  placeholder="Your Message*" required></textarea>
              <small></small>
            </p>
            <p class="full-width">
              <button class="form-button" value="Send" type="submit">Send</button>
            </p>
          </form>

          <div class="contact__partners">
            <h3>Our Partners</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/2713-electricals-logo.png" width="150px" height="50px"  alt="2713-electricals">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Sunpro.png" width="150px"                height="50px" alt="Sunpro">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ASTRecycling.png" width="150px"          height="50px" alt="ASTRecycling">
          </div>
          <div class="contact__accredidations">
            <h3>Accredidations</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/SABS-logo-300x213.jpg" width="150px" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ECSA_logo.png" width="100px" alt="">
          </div>
          <div class="contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6623.215861724063!2d18.5512106!3d-33.89975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5bb97a8c843d%3A0x84f97504cd079d3b!2s145%20Murray%20St%2C%20Vasco%20Estate%2C%20Cape%20Town%2C%207460!5e0!3m2!1sen!2sza!4v1679644204095!5m2!1sen!2sza" width="580" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>