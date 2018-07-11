<?php /* Template Name: Resume Template */ ?>

<?php get_header(); ?>

<div class="wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/page/main-intro', get_post_format() ) ?>
         <div class="container">

         <div class="resume">
            <div class="resume-heading">
                <h1>Derek Hargest</h1>
                <h4>Front-end Web Developer</h4>
                <h4>Baltimore, MD</h4>
            </div>
         
            <h2>Objective</h2>

            <p>To further my career as a front-end developer by taking on either a full-time or extended freelance position using my knowledge of current technologies and platforms to help deliver great experiences for end-users on the web.</p>

            <h2>Skills</h2>

            <p>I am a proficient front-end web developer with a passion for helping teams bring well designed products to the web. I specialize in solving problems that come as a part of a project or maintaining a current site build.</p>

            <p>My daily skillset includes using semantic HTML and CSS with preprocessors (SCSS), JavaScript (JQuery and Prototype), PHP with frameworks, and version control (git). I have worked primarily on eCommerce platforms such as Magento and Shopify, marketing platforms such as Hubspot and Luminate, and Content Management Systems such as WordPress and Concrete5. I can also use different APIs to bring data into different environments. I have keen interest in responsive web design and development and also confident in my ability to use the command line and my ability to use NPM. I am comfortable working in an Agile environment.</p>

            <p>I have a passionate eye for design and how it can help a brand translate itself to web assets to create a great experience for the end-user.</p>

            <p>With my experience as a freelancer, I am proficient in matching a client with the correct web product to manage their website and have worked in a consultant role for web and business development.</p>

            <p>Certified Magento Front End Developer and Certified Hubspot COS designer.</p>

            <p>Proficient in using the Adobe Creative Suite and Microsoft Suite in my workflow.</p>

            <h2>Experience</h2>

            <h4 class="roles">Freelance Web Developer</h4>
            
            <span>September 2011 - Present</span>

            <ul>

                <li>Front End Web developer responsible for designing, developing, maintaining and providing project management for multiple client sites</li>

                <li>Worked closely with several clients to build custom solutions on multiple platforms</li>

                <li>Managed daily work load as well as client facing account management activities</li>

                <li>Designed and developed custom themes for use on client sites</li>

                <li>Worked in a consultant role to manage the different working parts of a site build efficiently</li>

                <li>Spent time on site for client education and consultancy, building relationships with different members of teams</li>

            </ul>

            <h4 class="roles">Groove</h4>
            
            <span>August 2012 - August 2015</span>

            <ul>

                <li>Front-end Web Developer responsible for full site builds as well as maintaining existing builds, focusing mainly on eCommerce and lead generation</li>

                <li>Worked as a lead developer on projects, working closely with other developers to customize functionality of different platforms to obtain desired results</li>

                <li>Showed leadership and coordination skills, being able to consistently break down problems to scope needed resources and time</li>

                <li>Focused on pushing company to implement responsive web design on client products, becoming the in house go-to on responsive workflows</li>

                <li>Used problem solving skills to maintain the front end needs of many existing client site builds by implementing bug fixes, making UI enhancements, and developing custom modules to fit client needs</li>

                <li>Worked closely with design and marketing teams to fulfill service engagements using email campaigns and landing pages as well as facilitating changes for SEO and SEM</li>

            </ul>

            <h4 class="request">References and site examples available upon request.</h4>

            </div>

        </div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
