<?php get_header(); ?>

<main>

    <section id="home">
        <div class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coffee.png" alt="">
            <div class="description">
                <p>Small sips, bold flavors, perfect moments.</p>
                <button>Order now!</button>
            </div>
        </div>
    </section>

    <section id="about">

        <div class="aboutUs">
            <h1>About Us</h1>
            <div class="story">
                <div>
                    <img id="cafe" src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe.png" alt="">
                </div>
                <div id="story-box">
                    <p id="title">Our Story</p>
                    <p id="story-content">Your go-to coffee home in tagum! We serve fresh, flavorful coffee, bold
                        espresso shots,
                        and sweet treats in a warm, welcoming space. Fuel your days, celebrate small moments,
                        and make memories—one sip at a time.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="ourServices">
            <h1>Services</h1>
            <div class="services-container">

               
                <!-- Card 1 -->
                <div class="service-card">
                    <h3>Fresh Coffee Brews</h3>
                    <p>Rich espresso, creamy lattes, smooth cold brew, and signature blends made from premium beans.</p>
                </div>

                <!-- Card 2 -->
                <div class="service-card">
                    <h3>Sweet Treats & Snacks</h3>
                    <p>Delicious pastries, cakes, cookies, and light bites—perfect pairings for your favorite cup of
                        coffee.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="service-card">
                    <h3>Cozy Space</h3>
                    <p>Warm, comfortable spot to relax, work, study, or catch up with friends over great coffee.</p>
                </div>

                <!-- Card 4 -->
                <div class="service-card">
                    <h3>Quick Takeout & Delivery</h3>
                    <p>Fast service for your on-the-go days—order ahead, pick up easily, or get your coffee delivered
                        fresh.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contactUs">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <p><strong>📍 Location:</strong> Tagum City / Davao, Philippines</p>
                <p><strong>📞 Phone:</strong> +63 9XX XXX XXXX</p>
                <p><strong>⏰ Hours:</strong> Mon - Sat: 7:00 AM – 8:00 PM</p>
                <p><strong>✉️ Email:</strong> sipshotcafe@email.com</p>
            </div>
        </div>

    </section>



</main>

<?php get_footer(); ?>