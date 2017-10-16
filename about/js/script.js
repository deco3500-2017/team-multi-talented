/**
 * Theme configuration variable
 */
var starterConfig = {
    animationEffect: 'transition.slideUpIn',
    countdownDate: '2016/05/30',
    isMailchimp: false, // Whether to use mailchimp or simple email sending method
    backgroundSlideshow: {
        slides: [
            { src: "img/bg/bg1.jpg" },
            { src: "img/bg/bg3.jpg" },
            { src: "img/bg/bg4.jpg" },
            { src: "img/bg/bg5.jpg" },
            { src: "img/bg/bg6.jpg" },
            { src: "img/bg/bg8.jpg" },
            { src: "img/bg/bg9.jpg" },
            { src: "img/bg/bg10.jpg" }
        ],
        overlay: true,
        timer: true,
        // transition: 'random',
        animation: 'random',
        delay: 6000,
    },
}
$(function() {
    /**
     * * * GLOBAL SETTINGS * * *
     */
    // Variables
    var windowEl = $(window),
        windowScrollTop = windowEl.scrollTop(),
        aboutTop = $('#about').position().top,
        bigPic = $('.bg-pic'),
        homePage = $('#home'),
        aboutPage = $('#about'),
        aboutPageTop = aboutPage.offset().top,
        inputsTextareas = $('input, textarea'),
        bodyEl = $('body'),
        newsletterFormEl = $('#newsletter-form'),
        emailEl = $('#newsletter-form #id_email'),
        statusTextEl = $('#newsletter-form .status-msg'),
        subscribeButtonEl = $('.subscribe-button'),
        buttonText = subscribeButtonEl.find('.text'),
        htmlBodyEl = $('html, body'),
        navLink = $('a.nav-link'),
        mainHeader = $('.main-header'),
        windowInnerHeight = window.innerHeight;

    // Hide the loading effect and show the content
    $('.page-loader').remove();

    // Initializing slider background
    if (bodyEl.hasClass('slider')) {
        $("body").vegas(starterConfig.backgroundSlideshow);
    }
    // Scroll effects
    // When scrolled, hide or blur the homepage elements
    windowEl.scroll(function() {
        var scrollTop = windowEl.scrollTop();

        if (scrollTop >= 100) {
            $('body').addClass('scrolled');
            $('body').removeClass('not-scrolled');
        } else {
            $('body').removeClass('scrolled');
            $('body').addClass('not-scrolled');
        }

        if (scrollTop > (windowInnerHeight - 1)) {
            mainHeader.addClass('bg')
        } else {
            mainHeader.removeClass('bg')
        }


        if (scrollTop <= 160) {
            navLink.removeClass('active');

            // Set active on 'home' navigation link
            $('a.nav-link[href="#"]').addClass('active');
        }
    });

    // When window is loaded
    // Set a navigation item active
    var urlHash = window.location.hash;

    if (urlHash != '') {
        navLink.removeClass('active');
        $('a.nav-link[href="'+ urlHash +'"]').addClass('active');

        if (urlHash != '#') {
            htmlBodyEl.stop().animate({
                'scrollTop': $(urlHash).offset().top
            }, 500);
        } else {
            htmlBodyEl.stop().animate({
                'scrollTop': htmlBodyEl.offset().top
            }, 500);
        }
    }

    // When hash URL changes, set a navigation item active
    $(window).on('hashchange', function() {
        var urlHash = window.location.hash;

        navLink.removeClass('active');
        $('a.nav-link[href="'+ urlHash +'"]').addClass('active');
    });

/**
 * * * GLOBAL EVENTS * * *
 */
    // Input and Textarea element label animation
    inputsTextareas.on({
        focus: function() {
            var id = $(this).attr('id');
            $('label.input-label[for="' + id + '"]').addClass('shown');
        },
        blur: function() {
            var id = $(this).attr('id');
            $('label.input-label[for="' + id + '"]').removeClass('shown');
        }
    });

    // Mouse icon click event
    $('.scroll-down').on('click', function(e) {
        e.preventDefault();

        bodyEl.addClass('scrolled');
        bodyEl.removeClass('not-scrolled');
    });

    // Navigation event
    // Set active class and scroll to page
    navLink.on('click', function(e) {
        e.preventDefault();
        navLink.removeClass('active');
        $(this).addClass('active');

        var href = $(this).attr('href');

        if (href != '#') {
            htmlBodyEl.stop().animate({
                'scrollTop': $(href).offset().top
            }, 500);
        } else {
            htmlBodyEl.stop().animate({
                'scrollTop': htmlBodyEl.offset().top
            }, 500);
        }

        window.history.pushState('', '', href);
    });

    // Hamburger menu
    var responsiveNav = $('.responsive-nav'),
        responsiveNavLi = $('.responsive-nav li, .responsive-nav .social-links'),
        responsiveNavA = $('.responsive-nav a'),
        hamburgerMenu = $('.hamburger-menu');

    // Click, hamburger menu
    // Open responsive navigation
    // Add 'open' class to hamburger menu, change its shape to close button
    hamburgerMenu.on('click', function() {
        if (!$(this).hasClass('open')) {
            $(this).addClass('open');
            responsiveNav.addClass('open');

            responsiveNavLi.velocity('transition.slideRightIn', {stagger: 200, drag: true });
        } else {
            $(this).removeClass('open');
            responsiveNav.removeClass('open');
        }
    });
    // Click, responsive navigation
    // Hide the navigation
    // Change hamburger menu shape from close button back to hamburger
    responsiveNavA.on('click', function() {
        hamburgerMenu.removeClass('open');
        responsiveNav.removeClass('open');
    });


/**
 * * * HOMEPAGE SETTINGS * * *
 */
    // Home page elements animation
    $('#home .animated').velocity(starterConfig.animationEffect, {stagger: 200, drag: true });

    //Countdown
    $('.countdown').countdown(starterConfig.countdownDate, function(event) {
        $(this).html(event.strftime('<div class="days-hours clearfix"> \
                                        <div class="date"> \
                                            <div class="date-date">%D</div> \
                                            <div class="date-text">days</div> \
                                        </div> \
                                        <div class="date"> \
                                            <div class="date-date">%H</div> \
                                            <div class="date-text">hours</div> \
                                        </div> \
                                    </div> \
                                    <div class="minutes-seconds clearfix"> \
                                        <div class="date"> \
                                            <div class="date-date">%M</div> \
                                            <div class="date-text">minutes</div> \
                                        </div> \
                                        <div class="date"> \
                                            <div class="date-date">%S</div> \
                                            <div class="date-text">seconds</div> \
                                        </div> \
                                    </div>'));
    });

/**
 * * * HOMEPAGE EVENTS * * *
 */
    // Newsletter validation and submit event
    $('#newsletter-form').validate({
        submitHandler: function(form) {
            statusTextEl.removeClass('error success').text('');
            subscribeButtonEl.addClass('loading');
            buttonText.text('Sending');
            email = emailEl.val();

            if (starterConfig.isMailchimp) {
                // Mailchimp method
                $.ajax({
                    url: 'newsletter.php',
                    type: 'post',
                    data: {'email': email},
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 400) {
                            statusTextEl.addClass('shown error');
                            statusTextEl.text('Sorry! There was error registering your address.');
                        } else if (data.id){
                            statusTextEl.addClass('shown success')
                            statusTextEl.text('Thank you for subscribing! Please check your email to activate.');
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    },
                    complete: function() {
                        newsletterFormEl.find('label.error').remove();
                        subscribeButtonEl.removeClass('loading');
                        buttonText.text('Subscribe');
                    }
                });
            } else {
                // Email method
                $.ajax({
                    url: 'newsletter-by-email.php',
                    type: 'post',
                    data: { 'email': email },
                    success: function(data) {
                        if (data == 'sent') {
                            statusTextEl.addClass('shown success')
                            statusTextEl.text('Thank you for subscribing!');
                        } else {
                            statusTextEl.addClass('shown error');
                            statusTextEl.text('Sorry! There was error registering your address.');
                        }
                    },
                    error: function(data) {
                        statusTextEl.addClass('shown error');
                        statusTextEl.text('Sorry! There was error registering your address.');
                    },
                    complete: function() {
                        newsletterFormEl.find('label.error').remove();
                        subscribeButtonEl.removeClass('loading');
                        buttonText.text('Subscribe');
                    }
                });
            }
        },
        invalidHandler: function() {
            alert('Error');
        }
    });

    // Newsletter email input
    emailEl.on('keydown', function() {
        statusTextEl.removeClass('shown error success').text('');
    });

/**
 * * * SECTIONS SETTINGS * * *
 */
    // Show elements when scrolled
    var animateInElements = $('.section').waypoint({
        handler: function(direction) {
            var $thisEl = $(this.element);
            var animatedEls = $thisEl.find('.animated');

            if (animatedEls.first().css('opacity') == 0) {
                animatedEls.velocity(starterConfig.animationEffect, {stagger: 200, drag: true });
            }
        },
        offset: '30%'
    });
    // When scrolling up, set active navigation item
    var toggleActiveClassOnUp = $('.section').waypoint({
        handler: function(direction) {
            var $thisEl = $(this.element);
            var id = $thisEl.attr('id');

            if (direction == 'up') {
                if (id) {
                    navLink.removeClass('active');
                    $('a.nav-link[href="#'+ id +'"]').addClass('active');
                }
            }

        },
        offset: -30
    });

    // When scrolling down, set active navigation item
    var toggleActiveClassOnDown = $('.section').waypoint({
        handler: function(direction) {
            var $thisEl = $(this.element);
            var id = $thisEl.attr('id');

            if (direction == 'down') {
                if (id) {
                    navLink.removeClass('active');
                    $('a.nav-link[href="#'+ id +'"]').addClass('active');
                }
            }

        },
        offset: 30
    });

    // WORKS
    // Initialize Photoswipe plugin
    initPhotoSwipeFromDOM('.works-row');


/**
 * * * SECTIONS EVENTS * * *
 */

    // CONTACT
    // Contact form validation
    // and comment sending
    var sendStatus = $('#contact-form .status-msg');

    $('#contact-form').validate({
        submitHandler: function(form) {
            var nameEl = $(form).find('#id_name'),
                emailEl = $(form).find('#id_email'),
                subjectEl = $(form).find('#id_subject'),
                messageEl = $(form).find('#id_message'),
                sendButtonEl = $('#contact-form .send-button');

            var data = {
                'name': nameEl.val(),
                'email': emailEl.val(),
                'subject': subjectEl.val(),
                'message': messageEl.val()
            }

            sendButtonEl.addClass('loading');
            sendStatus.removeClass('error').text('');

            $.ajax({
                url: 'contact.php',
                type: 'post',
                data: data,
                success: function(data) {
                    sendStatus.addClass('shown success').text('Thank you! Your message is sent.');

                    setTimeout(function() {
                        sendStatus.removeClass('shown success').text('');
                    }, 3000)
                },
                error: function(data) {
                    sendStatus.addClass('shown error').text('Sorry! There was error sending your message. Please try again.');
                },
                complete: function() {
                    nameEl.val('');
                    emailEl.val('');
                    subjectEl.val('');
                    messageEl.val('');
                    sendButtonEl.removeClass('loading');
                }
            });
        }
    }); // contact-form

    // Open map modal, click
    var mapModal = $('#mapModal');

    $('.open-map').on('click', function() {
        mapModal.addClass('open');
    });
    mapModal.on('hide.bs.modal', function (e) {
        mapModal.removeClass('open');
    });

/**
 * * * COLOR CHOOSER * * *
 */
    var stColorChooser = $('.st-color-chooser');
    $('.chooser-toggler').on('click', function() {
        stColorChooser.toggleClass('open');
    });

    var colors = $('.colors .color-button');
    var selectedColor = '';

    colors.on('click', function() {
        selectedColor = $(this).attr('data-color');

        bodyEl.removeClass(function (index, css) {
            return (css.match (/\bcolor-\S+/g) || []).join(' ');
        });

        bodyEl.addClass('color-' + selectedColor);
        stColorChooser.removeClass('open');
    });

    $('#home').on('click', function() {
        if (stColorChooser.hasClass('open')) {
            stColorChooser.removeClass('open');
        }
    });

});
