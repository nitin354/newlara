</div><!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Copyright © 2023 Company Name
                </p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js')}}"></script>
    <script src="{{ asset('assets/js/mixitup.js')}}"></script>
    <script src="{{ asset('assets/js/accordions.js')}}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Use a class or ID to select the links you want to handle
            $('.no-reload-link').on('click', function (event) {
                // Prevent the default link behavior (page reload)
                event.preventDefault();

                // Get the href attribute of the clicked link
                var href = $(this).attr('href');

                // Use AJAX to load the content without page reload
                $.ajax({
                    url: href,
                    type: 'GET',
                    success: function (data) {
                        // Replace the content of a specific container with the loaded data
                        $('#content-container').html(data);
                    },
                    error: function () {
                        console.error('Failed to load content.');
                    }
                });
            });
        });
    </script>
    </body>

    </html>