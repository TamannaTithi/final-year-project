<!--Start Footer-->
<footer class="footer-area">
    <div class="footer-wave-box">
        <div class="footer-wave footer-animation">                
        </div>
    </div>
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-6">
                <h1 class="subtitle2 yellow">NEVER MISS A OFFER!</h1>
            </div>
            <div class="col-md-6 submit-right">
                <form  method="post" action="{{action('User\ContactController@store')}}">
                    @csrf
                    <input type="text"  name="footer_email" placeholder="Enter e-mail address">
                
                    <button type="submit" class=" btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="single-footer">
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                <div class="footer-social">
                    <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/?lang=en"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/?lang=en"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://facebook.com/?lang=en"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="single-footer">
                <h4>main menu</h4>
                <ul>
                    <li><a href="{{action('User\IndexController@index')}}"><i class="fas fa-chevron-right"></i> home</a></li>
                    <li><a href="{{action('User\IndexController@about')}}"><i class="fas fa-chevron-right"></i> about us</a></li>
                    <li><a href="{{action('User\IndexController@event')}}"><i class="fas fa-chevron-right"></i> services</a></li>
                    <li><a href="{{action('User\IndexController@offer')}}"><i class="fas fa-chevron-right"></i> offers</a></li>
                    <li><a href="{{action('User\IndexController@contact')}}"><i class="fas fa-chevron-right"></i> contact us</a></li>
                </ul>
            </div>
            <div class="single-footer">
                <h4>service we provide</h4>
                <ul>
                    <li><a href="{{action('User\IndexController@event')}}"><i class="fas fa-chevron-right"></i> Event</a></li>
                    <li><a href="{{action('User\IndexController@parlourList')}}"><i class="fas fa-chevron-right"></i> Parlour</a></li>
                    <li><a href="{{action('User\IndexController@photoList')}}"><i class="fas fa-chevron-right"></i> Photographer</a></li>
                </ul>
            </div>
            <div class="single-footer">
                <h4>contact us</h4>
                <ul>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i> Zindabazar, Sylhet, Bangladesh</a></li>
                    <li><a href=""><i class="fas fa-mobile-alt"></i> +88 0163 456 789</a></li>
                    <li><a href=""><i class="far fa-envelope"></i> eras234@gmail.com</a></li>
                    <li><a href=""><i class="fas fa-globe-europe"></i> www.eras.com</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copy">
        <p>all rights reserved to ERAS &copy; 2020 </p>
    </div>
</footer>