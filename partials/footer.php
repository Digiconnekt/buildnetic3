<!-- footer section start -->
<footer class="footer-section container-fluid mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <p>
                    <a href="../index.html">
                        <img class="img-fluid logo" src="../images/buildnetic-logo.png" alt="Buildnetic" />
                    </a>
                </p>
                <p>
                    <a href="mailto:sales@buildnetic.com" class="text-decoration-none" target="_blank">
                        <i class="fa-solid fa-envelope me-2"></i>sales@buildnetic.com
                    </a>
                </p>
                <p>
                    <a href="tel:+6587993124" class="text-decoration-none" target="_blank"><i class="fa-solid fa-phone me-2"></i>+65 87993124</a>
                </p>
                <p>
                    <a href="tel:+918595334605" class="text-decoration-none" target="_blank"><i class="fa-solid fa-phone me-2"></i>+91 85953 34605</a>
                </p>
                <p>
                    <a href="tel:+12143770359" class="text-decoration-none" target="_blank"><i class="fa-solid fa-phone me-2"></i>+1 214 377 0359</a>
                </p>
                <p class="social-media-links d-flex">
                    <a href="https://www.facebook.com/buildnetic" class="me-3" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/buildnetic_" class="me-3" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/buildnetic/" class="me-3" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </p>
            </div>
            <div class="col-lg-3 col-sm-6 mt-3 mt-sm-0">
                <h5>COMPANY</h5>
                <div class="border-yellow mb-4"></div>
                <p>
                    <a href="../services.html" class="text-decoration-none">Services</a>
                </p>
                <p>
                    <a href="../engagement-model.html" class="text-decoration-none">Engagement Model</a>
                </p>
                <p>
                    <a href="../success-stories.html" class="text-decoration-none">Success Stories</a>
                </p>
                <p>
                    <a href="../about-us.html" class="text-decoration-none">About Us</a>
                </p>
                <p>
                    <a href="../contact-us.html" class="text-decoration-none">Contact Us</a>
                </p>
                <p><a href="../blogs.html" class="text-decoration-none">Blogs</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 mt-3 mt-sm-5 mt-lg-0">
                <h5>SERVICES</h5>
                <div class="border-yellow mb-4"></div>
                <p>
                    <a href="../services/mobile-development.html" class="text-decoration-none">Mobile Application Development</a>
                </p>
                <p>
                    <a href="../services/custom-application-development.html" class="text-decoration-none">Custom Application Development</a>
                </p>
                <p>
                    <a href="../services/devops-solutions.html" class="text-decoration-none">DevOps Solutions & Services</a>
                </p>
                <p>
                    <a href="../services/product-re-engineering.html" class="text-decoration-none">Product Re-Engineering</a>
                </p>
                <p>
                    <a href="../services/e-commerce-solutions.html" class="text-decoration-none">E-commerce Solutions</a>
                </p>
                <p>
                    <a href="../services/dedicated-developers.html" class="text-decoration-none">Dedicated Developers</a>
                </p>
                <p>
                    <a href="../services/data-analytics.html" class="text-decoration-none">Data Analytics</a>
                </p>
                <p>
                    <a href="../services/testing.html" class="text-decoration-none">Testing</a>
                </p>
            </div>
            <div class="col-lg-3 col-sm-6 mt-3 mt-sm-5 mt-lg-0">
                <h5>TECHNOLOGY</h5>
                <div class="border-yellow mb-4"></div>
                <p>
                    <a href="../services/nodejs-development.html" class="text-decoration-none">NodeJS</a>
                </p>
                <p>
                    <a href="../services/java.html" class="text-decoration-none">Java</a>
                </p>
                <p>
                    <a href="../services/python.html" class="text-decoration-none">Python</a>
                </p>
                <p>
                    <a href="../services/android-development.html" class="text-decoration-none">Android</a>
                </p>
                <p>
                    <a href="../services/ios-development.html" class="text-decoration-none">iOS</a>
                </p>
                <p>
                    <a href="../services/reactjs-development.html" class="text-decoration-none">ReactJS</a>
                </p>
                <p>
                    <a href="../services/react-native.html" class="text-decoration-none">React Native</a>
                </p>
                <p>
                    <a href="../services/angular-development.html" class="text-decoration-none">Angular</a>
                </p>
                <p>
                    <a href="../services/blockchain-development.html" class="text-decoration-none">Blockchain</a>
                </p>
            </div>
        </div>
    </div>


</footer>
<div class="copyright-block container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-12 pt-4 pb-3 text-center">
            <p>Copyright &copy; India rights @ Arunarcis Solutions Pvt Ltd, Singapore rights @ Macaire Solutions Pte Ltd</p>
        </div>
    </div>
</div>
<!-- footer section end -->

<!-- bootstrap 5 JS cdn link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom JS link start -->
<script src="../index.js"></script>

<!-- animate on scroll AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 50,
    });
</script>

<!-- lazyloading for hero image -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll(".hero-section img.lazy"));

        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(
                entries,
                observer
            ) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Fallback for unsupported browsers
            lazyImages.forEach(function(lazyImage) {
                lazyImage.src = lazyImage.dataset.src;
            });
        }
    });
</script>

<!-- script for contact number country flag and code start -->
<!-- <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script> -->
<!-- script for contact number country flag and code end -->
</body>

</html>