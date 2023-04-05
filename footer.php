<!-- footer div going -->
<div class="container-fluid">
    <div class="container">

        <div class="footer-logo-div ">
            <img src="./resources/logo.png" class="footer-logo" alt="SHAGAYU COMPANY LIMITED">
        </div>
    </div>
    <div class="footer container-fluid bg-shagayu py-5 text-white">
        <div class="container container-xs-fluid">
            <div class="row">
                <!-- first columAccept -->
                <div class="col-md-3 col-sm-12">
                    <h4 class="mb-md-5">
                        Contacts and Address
                    </h4>
                    <div>
                        <i class="text-light mb-2">Along New Bagamoyo Road,</i>
                        Physical Address
                        Along New Bagamoyo Road,
                        Plot No 2040, Block H, GdB Roman Catholic House
                        Tegeta- Kinondoni, Dar es Salaam

                    </div>
                </div>
                <!-- the second column showing the company links -->
                <div class="col-md-3 col-xs-6">
                    <h4 class="mb-md-2">Major Links</h4>
                    <div class="footer-links-list">

                        <a href="about.php">
                            <p class="footer-link-item  text-light">About</p>
                        </a>
                        <a href="team.php">
                            <p class="footer-link-item  text-light">Team</p>
                        </a>
                        <a href="projects.php">
                            <p class="footer-link-item  text-light">Projects</p>

                        </a>
                        <a href="equipments.php">
                            <p class="footer-link-item  text-light">Our Tools</p>

                        </a>
                        <a href="contacts.php">
                            <p class="footer-link-item  text-light">Contacts</p>
                        </a>
                    </div>
                </div>
                <!-- Other Useful Links -->
                <div class="col-md-3 col-xs-6">
                    <h4 class="mb-md-2">Useful Links</h4>
                    <div class="footer-links-list">
                        <a href="https://www.crb.go.tz/" target="_blank">
                            <p class="footer-link-item text-light">CRB</p>
                        </a>
                        <a href="https://www.brela.go.tz/" target="_blank">
                            <p class="footer-link-item text-light">BRELA</p>
                        </a>
                        <a href="https://erb.go.tz/" target="_blank">
                            <p class="footer-link-item text-light">ERB</p>
                        </a>
                        <a href="#">
                            <p class="footer-link-item text-light">CATA</p>
                        </a>
                    </div>
                </div>
                <!-- disclaimer and others -->
                <div class="col-md-3 col-xs-6">
                    <h3 class="text-light my-2">Contact Details</h3>
                    <div class="contact-detail-container">
                        <p>
                            <i class="fa fa-phone text-light justify-center mx-2" aria-hidden="true"></i>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center">&copy; Copyright 2023 Shagayu Construction LTD.</p>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
    let navigationBar = document.getElementById('navigation-bar')
    let toTopBtn = document.getElementById('back-to-top-btn')
    window.onscroll = function() {
        scrollFunction()
        stickHeader()
    }

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            toTopBtn.style.display = 'block';
        } else {
            toTopBtn.style.display = 'none';
        }
    }

    function stickHeader() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            navigationBar.classList.remove('d-none')
            navigationBar.classList.add("fixed-top")
        } else {
            navigationBar.classList.remove("fixed-top")
            navigationBar.classList.add('d-none')
        }
    }

    function scrollToTopFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


</html>