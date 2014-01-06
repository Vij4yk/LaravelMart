@section("header1")
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active">
                {{ link_to_action('ProductsController@getIndex', 'Home' ) }}
            </li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Register') }}</li>   
                    <li>{{ HTML::link('users/login', 'Login') }}</li>   
                    @else
                    <li>{{ HTML::link('users/dashboard', 'Dashboard') }}</li>
                    <li>{{ HTML::link('users/profile', 'Profile') }}</li>
                    <li>{{ HTML::link('users/logout', 'logout') }}</li>
                    @endif
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <div class="navbar-form navbar-right" >
            {{ link_to_action('CartController@getIndex', 'Cart' ) }}
        </div>

    </div><!-- /.navbar-collapse -->
</nav>
@stop



@section('header')
<div class="megamenu_wrapper megamenu_light_theme"><!-- BEGIN MENU WRAPPER -->



    <div class="megamenu_container navbar navbar-default" role="navigation" ><!-- BEGIN MENU CONTAINER -->



        <ul class="megamenu"><!-- BEGIN MENU -->



            <li class="megamenu_button"><a href="#_">Mega Menu</a></li>


            <li><a href="#_" class="menuitem_drop">Home</a><!-- Begin Home Item -->


                <div class="dropdown_2columns"><!-- Begin columns container -->


                    <div class="col_full firstcolumn">            

                        <h2>Welcome !</h2>
                        <p>Hi and welcome here ! This is a showcase of the possibilities of this awesome Mega Drop Down Menu.</p>            
                        <p>This item comes with a large range of prepared typographic stylings such as headings, lists, <a href="http://codecanyon.net/user/Pixelworkshop/portfolio">links</a> etc.</p>                    
                        <h2 class="pusher">Cross Browser Support</h2>
                        <img src="img/browsers.png" alt="" />
                        <p>This mega menu has been tested in all major browsers.</p>
                        <h2 class="pusher">Compatible Browsers</h2>

                        <div class="col_half firstcolumn">

                            <ul class="plus">
                                <li>Internet Explorer</li>
                                <li>Firefox</li>
                                <li>Opera</li>
                            </ul>

                        </div>

                        <div class="col_half"> 

                            <ul class="plus">
                                <li>Chrome</li>
                                <li>Safari</li>
                                <li>What else ?</li>
                            </ul>

                        </div>

                    </div>


                </div><!-- End columns container -->


            </li><!-- End Home Item -->




            <li><a href="#_" class="menuitem_drop">Hot Offers</a>

                <div class="dropdown_3columns">
                    <h3>Today's Hot offers</h3>
                    <div class="grid">
                        <div class='w-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                        <div class='w-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                    </div>

                    <h3>Best Selling Products</h3>
                    <div class="grid">
                        <div class='w-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                        <div class='w-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </li>







            <li><a href="#_" class="menuitem_drop">Products</a><!-- Begin Elements Item -->


                <div class="dropdown_3columns"><!-- Begin columns container -->


                    <div class="grid">

                        <h2>Products</h2>

                        <div class="w-50">

                            <ul class="link-list">
                                <li> {{ link_to_action('ProductsController@getIndex', 'All Products' ) }}</li>

                                @foreach( Category::all() as $category)
                                <?php $active = (Request::segment(2) == 'category' && explode("--", Request::segment(3))[1] == $category->id ) ? 'active' : '' ?> 
                                <li>
                                    {{ link_to_action('ProductsController@getCategory', $category->name , [snake_case($category->name).'--'.$category->id],['class'=>$active]); }} 
                                </li>
                                @endforeach
                            </ul>   

                        </div>

                        <div class="w-50">

                            <ul class="link-list">
                                <li><a href="#">ThemeForest</a></li>
                                <li><a href="#">GraphicRiver</a></li>
                                <li><a href="#">ActiveDen</a></li>
                                <li><a href="#">VideoHive</a></li>
                                <li><a href="#">3DOcean</a></li>
                            </ul>   

                        </div>


                    </div>

                    <div class="grid">

                        <h3>Random Featured Products</h2>

                            <img data-src="holder.js/75x75" class='w-25' />
                            <p class='w-75'>Maecenas eros lorem, nec eget eros lorem, nec  vulputate, lorem sem condimentum.<br /><a href="#">Read more...</a></p>

                            <p class='w-75'>Aliquam t nec nisi. Aliquam pretium mollis fringilla. Vestibulum tempor facilisis malesuada.<br /><a href="#">Read more...</a></p>
                            <img data-src="holder.js/75x75" class='w-25' />

                    </div>


                </div><!-- End columns container -->


            </li><!-- End Elements Item -->




            <li><a href="#_" class="menuitem_drop">Account</a><!-- Begin Lists Item -->


                <div class="grid dropdown_3columns"><!-- Begin columns container -->


                    <div class="w-50">

                        <h3>Accounts</h3>
                        <ul>
                            @if(!Auth::check())
                            <li>{{ HTML::link('users/register', 'Register') }}</li>   
                            <li>{{ HTML::link('users/login', 'Login') }}</li>   
                            @else
                            <li>{{ HTML::link('users/dashboard', 'Dashboard') }}</li>
                            <li>{{ HTML::link('users/profile', 'Profile') }}</li>
                            <li>{{ HTML::link('users/logout', 'logout') }}</li>
                            @endif
                        </ul>
                    </div>

                    <div class="w-50">

                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="#">NetTuts</a></li>
                            <li><a href="#">VectorTuts</a></li>
                            <li><a href="#">PsdTuts</a></li>
                            <li><a href="#">PhotoTuts</a></li>
                            <li><a href="#">ActiveTuts</a></li>
                        </ul>   

                    </div>

                    <div class="w-50">

                        <h3>Other Stuff</h3>
                        <ul>
                            <li><a href="#">FreelanceSwitch</a></li>
                            <li><a href="#">Creattica</a></li>
                            <li><a href="#">WorkAwesome</a></li>
                            <li><a href="#">Mac Apps</a></li>
                            <li><a href="#">Web Apps</a></li>
                        </ul>   

                    </div>

                    <div class="w-50">

                        <h3>Misc</h3>
                        <ul>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Logo</a></li>
                            <li><a href="#">Flash</a></li>
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">More...</a></li>
                        </ul>   

                    </div>


                </div><!-- End columns container -->


            </li><!-- Begin Lists Item -->


            <li><a href="#_" class="menuitem_drop">About</a><!-- Begin Lists Item -->


                <div class="grid dropdown_4columns">
                    @include("abouts/aboutnav")
                </div>
            </li>

            <li class="menuitem_nodrop"><a href="http://codecanyon.net/user/Pixelworkshop/portfolio">Link</a></li><!-- No Drop Down Item -->




            <li class="menuitem_right"><a href="#_" class="menuitem_drop">Contact</a><!-- Begin Contact Item -->


                <div class="dropdown_2columns dropdown_right"><!-- Begin right aligned columns container -->


                    <h2>Contact Us</h2>

                    <p>Please fill in the following form to contact us</p>

                    <div class="contact_form">

                        <div class="message">
                            <div id="alert"></div>
                        </div>

                        <form method="post" action="js/sendmail.php" id="contactForm">

                            <label for="name">Name<span class="required"> *</span></label>
                            <input name="name" type="text" id="name" /> 

                            <br />
                            <label for="email">Email<span class="required"> *</span></label>
                            <input name="email" type="text" id="email" />

                            <br />
                            <label for="message">Message<span class="required"> *</span></label>
                            <textarea name="message" cols="40" rows="5" id="message"></textarea>

                            <p class="special"><label for="last">Don't fill this in :</label><input type="text" name="last" value="" id="last" /></p>

                            <div class="form_buttons">
                                <input type="submit" class="button" id="submit" value="Submit" />
                                <input type="reset" class="button" id="reset" value="Reset" />
                            </div>

                        </form>

                    </div>

                    <h2>Find us on social networks</h2>

                    <ul class="social">
                        <li><a href="#"><img src='img/twitter.png' alt="" /><span>Twitter</span></a></li>
                        <li><a href="#"><img src='img/facebook.png' alt="" /><span>Facebook</span></a></li>
                        <li><a href="#"><img src='img/flickr.png' alt="" /><span>Flickr</span></a></li>
                        <li><a href="#"><img src='img/rss.png' alt="" /><span>RSS Feed</span></a></li>
                        <li><a href="#"><img src='img/technorati.png' alt="" /><span>Technorati</span></a></li>
                        <li><a href="#"><img src='img/delicious.png' alt="" /><span>Delicious</span></a></li>
                    </ul>


                </div><!-- End right aligned columns container -->


            </li><!-- End Contact Item -->



        </ul><!-- END MENU -->



    </div><!-- END MENU CONTAINER -->



</div><!-- END MENU WRAPPER -->




<div class="pagecontentclear"></div>

@show