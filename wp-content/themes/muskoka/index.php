<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


  <section class="home-banner animated fadeIn">
    <div id="home-banner" class="carousel carousel-fade slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-banner.jpg);"> </div>
        <div class="item" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-banner1.jpg);"> </div>
      </div>
    </div>
  </section>
  <div class="container">
    <section class="welcome-home wow bounceInUp">
      <h1>Welcome Home</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget porttitor libero. Pellentesque placerat, nibh a vulputate tempor, ipsum sapien viverra elit, quis ultrices dolor dolor ut ante. Vestibulum ante ipsum prim.</p>
      <div class="explore-track"><a href="#" class="explore-btn wow fadeIn">Explore Property Listings</a></div>
    </section>
    <section class="middle clearfix">
      <div class="three-blocks"> <a href="#" class="wow bounceInUp">
        <figure class="follow-icon"></figure>
        <h3>Follow</h3>
        <p>Market Trends</p>
        </a> <a href="#" class="wow bounceInUp" data-wow-duration="1.5s">
        <figure class="discover-icon"></figure>
        <h3>Discover</h3>
        <p>Our Listings</p>
        </a> <a href="#" class="wow bounceInUp" data-wow-duration="2s">
        <figure class="explore-icon"></figure>
        <h3>Explore</h3>
        <p>Muskoka’s Beauty</p>
        </a> </div>
      <div class="testimonials wow fadeInUp">
        <div id="testimonials" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <h3>Proud to Refer This Team</h3>
              <p> I can’t sing my praises for Peter and his Team loud enough.</p>
              <p>The property that was SOLD wasn’t without it’s challenges and I was impressed by their endless follow-up, communication, not to mention the calming effect they instilled throughout a trying time.</p>
              <p>Whenever I am asked who I would hire to take care of my real estate needs, I proudly refer the Peter de Graaf Real Estate Team!</p>
              <cite>
              <h4>Heather Arczewski</h4>
              Muldrew Lake, Muskoka</cite> </div>
            <div class="item">
              <h3>Proud to Refer This Team</h3>
              <p> I can’t sing my praises for Peter and his Team loud enough.</p>
              <p>The property that was SOLD wasn’t without it’s challenges and I was impressed by their endless follow-up, communication, not to mention the calming effect they instilled throughout a trying time.</p>
              <p>Whenever I am asked who I would hire to take care of my real estate needs, I proudly refer the Peter de Graaf Real Estate Team!</p>
              <cite>
              <h4>Heather Arczewski</h4>
              Muldrew Lake, Muskoka</cite> </div>
            <div class="item">
              <h3>Proud to Refer This Team</h3>
              <p> I can’t sing my praises for Peter and his Team loud enough.</p>
              <p>The property that was SOLD wasn’t without it’s challenges and I was impressed by their endless follow-up, communication, not to mention the calming effect they instilled throughout a trying time.</p>
              <p>Whenever I am asked who I would hire to take care of my real estate needs, I proudly refer the Peter de Graaf Real Estate Team!</p>
              <cite>
              <h4>Heather Arczewski</h4>
              Muldrew Lake, Muskoka</cite> </div>
            <div class="item">
              <h3>Proud to Refer This Team</h3>
              <p> I can’t sing my praises for Peter and his Team loud enough.</p>
              <p>The property that was SOLD wasn’t without it’s challenges and I was impressed by their endless follow-up, communication, not to mention the calming effect they instilled throughout a trying time.</p>
              <p>Whenever I am asked who I would hire to take care of my real estate needs, I proudly refer the Peter de Graaf Real Estate Team!</p>
              <cite>
              <h4>Heather Arczewski</h4>
              Muldrew Lake, Muskoka</cite> </div>
          </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#testimonials" data-slide-to="1"></li>
            <li data-target="#testimonials" data-slide-to="2"></li>
            <li data-target="#testimonials" data-slide-to="3"></li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team-wrapper">
      <h2>Our Team</h2>
      <div class="team-boxes clearfix">
        <div class="box-team wow fadeInLeft"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/peter.jpg" alt="Peter de Graaf">
          <h3>PETER de GRAAF</h3>
          <p>Team Leader & <br>
            Sales Representative </p>
          <h4>DIRECT: <a href="tel:(705)645-0772">(705) 645-0772</a><br>
            OFFICE: <a href="tel:(705)645-5281">(705) 645-5281</a></h4>
          <h5><a href="mailto:peter@remax-muskoka.com">peter@remax-muskoka.com</a></h5>
        </div>
        <div class="box-team wow fadeInRight"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jennifer.jpg" alt="Peter de Graaf">
          <h3>Jennifer Stilson</h3> 
          <p>Broker</p>
          <h4>DIRECT: <a href="tel:(705)641-9279">(705) 641-9279</a><br>
            OFFICE: <a href="tel:(705)645-5281">(705) 645-5281</a></h4>
          <h5><a href="mailto:jenny@remax-muskoka.com">jenny@remax-muskoka.com</a></h5>
        </div>
      </div>
    </section>
  </div>
  <section class="listings-wrapper wow fadeInUp">
    <div class="container">
      <h2>Your Best Move Starts Here!</h2>
      <div class="owl-carousel listings-slider">
        <div class="item">
          <div class="listing-box">
            <div class="ribbon-new">New</div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/prop-1.jpg">
            <div class="listing-content">
              <div class="listing-inner">
                <h3>$349,900</h3>
                <p>59 Terrace Heights Drive, Lacombe</p>
                <h5>7 Rooms <span class="separator">|</span> Single Family <span class="separator">|</span> $3,195.00 Taxes</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing-box">
            <div class="ribbon-new">New</div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/prop-2.jpg">
            <div class="listing-content">
              <div class="listing-inner">
                <h3>$349,900</h3>
                <p>59 Terrace Heights Drive, Lacombe</p>
                <h5>7 Rooms <span class="separator">|</span> Single Family <span class="separator">|</span> $3,195.00 Taxes</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing-box">
            <div class="ribbon-new">New</div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/prop-1.jpg">
            <div class="listing-content">
              <div class="listing-inner">
                <h3>$349,900</h3>
                <p>59 Terrace Heights Drive, Lacombe</p>
                <h5>7 Rooms <span class="separator">|</span> Single Family <span class="separator">|</span> $3,195.00 Taxes</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing-box">
            <div class="ribbon-new">New</div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/prop-2.jpg">
            <div class="listing-content">
              <div class="listing-inner">
                <h3>$349,900</h3>
                <p>59 Terrace Heights Drive, Lacombe</p>
                <h5>7 Rooms <span class="separator">|</span> Single Family <span class="separator">|</span> $3,195.00 Taxes</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php get_footer(); ?>