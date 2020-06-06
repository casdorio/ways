
<!-- ===============================Footer Area=================== -->
        <div class="footer-area">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <div class="footer">
                            <!-- Single Footer -->
                            <div class="single-footer footer-grow">
                                <h3>Help Us Grow!</h3>
                            </div>
                            <!-- Single Footer -->
                            <div class="single-footer footer-menu">
                                <h3>Sand N Soil</h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Us Do-It-Yourself</a></li>
                                </ul>
                            </div>
                            <!-- Single Footer -->
                            <div class="single-footer footer-menu">
                                <h3>Our Location</h3>
                                <address>
                                    <p>New Orleans Metro</p>
                                    <a href="tel:504-355-9000">504-355-9000</a>
                                </address>
                                <address>
                                    <p>Northshore</p>
                                    <a href="tel:985-326-5000">985-326-5000</a>
                                </address>
                                <address>
                                    <p>Baton Rouge</p>
                                    <a href="tel:225-304-9000">225-304-9000</a>
                                </address>
                                <address>
                                </address>
                            </div>
                            <!-- Single Footer -->
                            <div class="single-footer footer-menu">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="#">Calculator</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Delivery Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Request a Call</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                            <!-- Single Footer -->
                            <div class="single-footer footer-menu">
                                <h3>Products</h3>
                                <ul>
                                    <li><a href="#">Sand</a></li>
                                    <li><a href="#">Soil</a></li>
                                    <li><a href="#">Dirt</a></li>
                                    <li><a href="#">Gravel</a></li>
                                    <li><a href="#">Limestone</a></li>
                                    <li><a href="#">Recycled</a></li>
                                    <li><a href="#">Yeah Bags</a></li>
                                </ul>
                            </div>
                            <!-- Single Footer -->
                            <div class="single-footer footer-menu">
                                <h3>Services</h3>
                                <ul>
                                    <li><a href="#">Concrete Removal</a></li>
                                    <li><a href="#">Dumpster Rental</a></li>
                                    <li><a href="#">Spreading Services</a></li>
                                    <li><a href="#">Trucking Rental</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===============================Footer Bottom Area=================== -->
        <div class="footer-bottom-area">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell large-8 medium-12">
                        <p>Copyright &copy; 2015 - 2020 SAND N SOIL&reg;</p>
                        <p>SAND N SOIL is a registered trademark owned by SAND N SOIL LLC.</p>
                        <p>USPTO Registration Number 4881281 IC 035 US 100, 101, 102 | IC 03 US 100, 105</p>
                    </div>
                    <div class="cell large-4 medium-12">
                        <div class="social-links">
                            <a href="#"><img src="site/Assets/img/fb.png" alt="social"></a>
                            <a href="#"><img src="site/Assets/img/tw.png" alt="social"></a>
                            <a href="#"><img src="site/Assets/img/in.png" alt="social"></a>
                            <a href="#"><img src="site/Assets/img/yt.png" alt="social"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- jQuery -->
    <script src="site/Assets/js/jquery-1.11.2.min.js"></script>
    <script src="site/Assets/js/app.js"></script>
    <script src="site/Assets/js/slick.min.js"></script>
    <script src="site/Assets/js/slideout.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <script src="site/Assets/js/main.js"></script>
    <script type='text/javascript'>
    function init_map() {
        var myOptions = {
            zoom: 16,
            center: new google.maps.LatLng(40.730610, -73.935242),

            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        };
        var image = 'assets/img/map-icon.png';
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(40.730610, -73.935242),
            icon: image
        });

    }
    google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</body>

</html>