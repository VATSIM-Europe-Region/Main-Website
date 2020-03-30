<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <link rel="stylesheet" href="{{ asset('assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <!-- Top of page & Social Icons -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <div class="culmn">
        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="{{ config('app.url') }}">
                                            <img class="logo-lg" src="{{ asset('assets/images/vateur.png') }}"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">HOME</a></li>
                                            <li><a href="#history">ABOUT US</a></li>
                                            <li><a href="#clogo">DIVISIONS</a></li>
                                            <li><a href="#pricing">POLICIES</a></li>
                                            <li><a href="#team">STAFF</a></li>
                                            <li><a href="#contact">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->




        <!--home Section -->
        <section id="home" class="home">
            <div class="overlay">
                <div class="home_skew_border">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h3></h3>

                                            <h1>WELCOME TO VATEUR</h1>
                                            <div class="separator"></div>
                                            <p></p>
                                            <div class="home_btn">
                                                <a href="https://cert.vatsim.net/vatsimnet/signup.html" class="btn btn-lg m_t_10" target="new">GET STARTED NOW</a>
                                                <a href="https://www.vatsim.net/members/member-help" class="btn btn-default" target="new">MEMBERS HELP</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
</div>

<!--End of home section -->


<!--feature section -->


            <!--
            <section id="feature" class="feature sections">
                <div class="container">
                    <div class="row">
                        <div class="main_feature text-center">

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-clone"></i>
                                    </div>

                                    <h4>TEXT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-heart-o"></i>
                                    </div>

                                    <h4>TEXT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-lightbulb-o"></i>
                                    </div>
                                    <h4>TEXT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-comments-o"></i>
                                    </div>

                                    <h4>TEXT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--End of container -->
                <!-- </section><!--End of feature Section -->
                <!-- <hr /> -->

                <p><br /></p>
                <p><br /></p>

                <div style="background:#EEE">

                    <section id="history" class="history sections">
                        <div class="head_title text-center">
                            <h2>Welcome to VATSIM Europe Region (VATEUR)</h2>
                        </div>

                        
                        
                        <!-- End off Head_title -->

                        <center><img src="{{ asset('assets/images/map.png') }}"></center>
                        <ul>
                            <li style="padding:0px 100px 0px 100px;">

                                VATSIM is a community of around 200.000 members who share a passion for aviation. <br />  It makes no difference whether you want to be at the controls of the latest airliner, or experience the rush of managing chaotic airspace, VATISM is the place to do just that. <br />VATSIM is made for individuals, so the voice you hear on your headset when on final approach into London Heathrow is an actual person and not a computer generated voice.  <br />In addition, VATSIM is a collection of aviation enthusiasts and you’ll find that people will do whatever they can to help newbies and ensure that all members have fun.  <br />You can also expect your circle of friends to become larger as you meet new people who share the same passion as you.VATEUR consists of 3 distinct sub-divisions which are:<br />
                                VATEUD – our <a href="http://www.vateud.net" title="European Division - www.vateud.net" target="new">European Division</a><br />
                                VATUK – our <a href="http://www.vatsim.uk" title="British Division - www.vatsim.uk" target="new">British Division</a><br />
                                VATRUS – our <a href="http://vatrus.info" title="Russian Division - http://vatrus.info" target="new">Russian Division</a><br />
                                VATEUR is home to thousands of controllers and even more pilots as well as Virtual Airlines.  Our objective is to provide professional Air Traffic Control while ensuring a fun and friendly environment for all in our airspace.<br />
                                VATEUR has jurisdiction over the greatest landmass and airspace in the world.  Our territory stretches from Russia in the east to the United Kingdom in the west.  We are very proud to mention that in VATEUR we have a EUROCONTROL Division which in essence is a Single European Sky. This means that the European airspace is divided into functional blocks according to traffic flow and not national borders which results in easier transition through the airspace once you reach your cruise altitude.<br />
                                If you want to fly an airliner from Russia to Britain or take a slow and lazy VFR flight in the Mediterranean, or if you want to become an Air Traffic Controller at any one of the busiest airports in the world, VATEUR is your home.<br /><br />

                                Simon Irvine<br />
                                Region Director,VATSIM Europe<br />
                                VATSIM.net
                            </li>
                        </ul>


                    </div>       


                    <!-- History section -->
                    <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/atc.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>HAVE YOU EVER DREAMED OF BEING AN AIR TRAFFIC CONTROLLER?</h2>
                                        </div>
                                        <p>Well with VATSIM it is not only possible but can be quite easily achieved. The VATSIM network is a realistic simulation of procedures followed by pilots and air traffic controllers everyday around the world. Each day there are hundreds, sometimes thousands, of aircraft flying on the VATSIM network with each pilot following real world procedures for their flight. Pilots need Air Traffic Controllers to help them to conduct their flights as they takeoff off from A, fly hundreds of miles to B and land safely. All of this must be done while other aircraft are doing the same. The job of the Air Traffic Controller is to keep them moving but, more importantly, to keep them separated. Can you imagine how it will be controlling at London, Frankfurt, Athens or Vienna? There could be many aircraft in your airspace each needing precise instructions and clearance from you. Of course you will need a little training but that’s not a problem since VATSIM will provide the training and is there help you as you progress as a controller, see Controller Training.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--End of row -->
                    </div><!--End of container -->
                    </section>
                <!--End of history -->

                <!-- History section -->
                <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/scope.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>VATSIM - AN ENTHUSIAST'S NETWORK</h2>
                                        </div>
                                        <p>The Virtual Air Traffic Simulation Network, known as VATSIM.net or "VATSIM" was created in 2001 by a group of individuals who came together with a goal of creating an organization which truly served the needs of the flight simulation and online air traffic control community. With an eye towards more than just providing a network of computers for users to log into, VATSIM is an online community where people can learn and, at the same time, enjoy the pastimes of flight simulation and air traffic control simulation all while making new friends from all over the world. VATSIM is not just for individuals who have experience in online flight simulation and ATC. It is perfect for both the new user, and the long time "simmer". For someone who has just learned about online flight simulation and air traffic control and is interested in real world procedures, VATSIM and its members, many of whom bring real world experience and expertise to our community, offer an ideal environment to learn real world skills. For pilots, you'll be able to fly with radar service by air traffic controllers who issue instruction and assistance in all phases of flight from getting your clearance to arriving at your destination airport. For air traffic control enthusiasts, the entire world is simulated meaning you can work ATC virtually anywhere from a general aviation airport to the busiest airports in the world. Nearly all of the real world positions are available for you to choose and learn to work.

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div><!--End of row -->
                    </div><!--End of container -->
                </section><!--End of history -->

                <!-- History section -->
                <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/plane4.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>What's your benefit?</h2>
                                        </div>
                                        <p>The best part of all of this is that VATSIM brings real people together who share with you the passion for flight and air traffic control. When you contact that controller or pilot, you aren't contacting a computer generated voice or image - you will be communicating with a real person who shares the same interests as you!
                                            And VATSIM is even more than that. It is a worldwide community of approx. 200.000 members who share the idea, the fun and the adventure of flight simulation. The local communities around the world are really good places to meet and to share information, and of course: not everything we are talking about is about this hobby. The communities are real life member communities.
                                            You can be a part of VATSIM
                                            All it takes is a few moments to register and join VATSIM. Once you do, prepare to learn and be rewarded with friendships that will span the globe. In addition, you'll receive the appreciation and thanks of the online flight simulation and air traffic control communities.
                                            So why not head over to the VATSIM Members page and sign up? It is free of charge but not free of time. You will love flying in our environment.

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div><!--End of row -->
                    </div><!--End of container -->
                </section><!--End of history -->

                <!-- History section -->
                <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/b777.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>WHAT IS VATSIM AND WHAT MEANS TO BE A VIRTUAL PILOT?</h2>
                                        </div>
                                        <p>VATSIM is a global non profitable network (registration and connection to the network are free) where virtual pilots, connect via their Flight Simulatorin order to fly around the virtual airspace. There are also virtual Air Traffic Controller connecting on the network to provide air traffic control (ATC) to the virtual pilots. VATSIM allows each connected pilot to view others connected on the same geographical area (and consiquently they are able see you), while it is possible to simulate real weather conditions of the area you fly. If the area you fly is covered by an Air Traffic Controller then the comunication is performed over voice on the (virtual) radio frequency of each controller (or alternatively over text where voice is not applicable), while real radiotelephony and flight rules are being used. The scope is for each virtual pilot to perform a virtual flight as a real aircraft whould do it! Flying rules, based on real flight rules, also apply, in case the area you fly is not covered by a controller (uncontrolled airspace), where it is obligatory to announce your itentions over predifined commonly used radio frequency, called Unicom (freq.: 122.800). In VATSIM there are numerous virtual airlines (known as VAs) and communities such as aeroclubs, that either simulate flights of their real counterparts or even the internal procedures of an airline, such as promotions, virtual payments, and buy/sell of aircrafts! More about virtual airlines may be found here.

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div><!--End of row -->
                    </div><!--End of container -->
                </section><!--End of history -->



                <!-- History section -->
                <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/plane3.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>How to become a virtual pilot?</h2>
                                        </div>
                                        <p>First of all you have to read, understand and comply with the rules that apply to the VATSIM network. Do not forget that on this network many people coming from different habitats, from all over the world, with a common scope; to have a very nice simulation expirience. No one oblies you to connect to VATSIM, and it is not "your right", but your choice!
                                            Before your first connection, you have to learn the basics of flying rules, navigation and radiotelephony. If you have no previous experience you must read at least the bsics from Tutorial I. Almost everyone starts with very low knowledge and many.... misunderstandings regarding procedures! If you are one of the aviation lovers this will be your first step towards the fantastic world of aviation.
                                            Last but not least, you should have a minimal ability to control the aircraft you choose for your flights. That means, be able to properly navigate, maintain a constant speed and altitude and of course be able to takeoff and land.
                                            For the aforementioned knowledge, there is no absolute limit regarding what is required for flying, at least while being a beginner. Mood for learning and personal ability to see when you are ready to perform your first flight, is more than enought. Being a virtual pilot requires a certain ammount of studying, with the difference being that you are the only one to set the standards regarding the way you fly, as long as you will not spoil the fun of others, pilots and controllers.


                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div><!--End of row -->
                    </div><!--End of container -->
                </section><!--End of history -->

                <!-- History section -->
                <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/fssim.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>What do I need as a virtual pilot?</h2>
                                        </div>
                                        <p>
                                            <ul>
                                             <li type="square">A PC with Flight Simulator (2004, X, Prepar 3D, XPlane) installed. <br />This applications come with equivalent clients for connecting to 
                                                 the VATSIM network. <br />Most virtual pilots though use the Microsoft Flight Simulator (2004 / X)</li><br />
                                                 <li type="square">A headset or a microphone and speakers installed on your PC</li><br />
                                                 <li type="square">Internet connection</li><br />
                                                 <li type="square">The proper client for connecting to the network</li><br />
                                                 <li type="square">Active email account for registrations and further communication</li><br />
                                                 <li type="square">Good mood</li>
                                             </ul>
                                         </p>


                                     </div>
                                 </div>
                             </div>
                         </div><!--End of row -->
                     </div><!--End of container -->
                 </section><!--End of history -->

                 <!-- History section -->
                 <section id="history" class="history sections">
                    <div class="container">
                        <div class="row">
                            <div class="main_history">
                                <div class="col-sm-6">
                                    <div class="single_history_img">
                                        <img src="{{ asset('assets/images/plane2.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_history_content">
                                        <div class="head_title">
                                            <h2>What do I have to do in order to use the network as a virtual pilot?</h2>
                                        </div>
                                        <p>
                                           First of all you must <a href="https://cert.vatsim.net/vatsimnet/signup.html" title="Register to VATSIM here" target="new">register</a> 
                                           to VATSIM, to gain connection privilege. <br />Pay attention to the documents you will be asked to read. <br /><b>Do not forget to choose 
                                           preferred region:</b> 
                                           Europe, preferred division: Europe (except UK),UK or Russia and as vACC your desired from the list. <br />Use real world personal data, otherwise 
                                           your account may be locked down! <br />After registration, while having your VATSIM ID, you may continue with your desireable vACC register. 
                                        </p>


                                        </div>
                                    </div>
                                </div>
                            </div><!--End of row -->
                        </div><!--End of container -->
                    </section><!--End of history -->







                    <!-- Client Logo Section -->
                    <section id="clogo" class="clogo">
                        <div class="container">
                            <div class="row">
                                <div class="main_clogo sections text-center">
                                    <div class="head_title text-center">
                                        <h2>DIVISIONS</h2>

                                        <div class="separator"></div>
                                    </div><!-- End off Head_title -->

                                    <div class="col-sm-4 col-xs-6"> 
                                        <a href="http://www.vateud.net/" target="new" title="www.vateud.net"><img src="{{ asset('assets/images/vateud.png') }}" alt="" / width="200" height="57"></a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6"> 
                                        <a href="https://vatsim.uk/" target="new" title="vatsim.uk"><img src="{{ asset('assets/images/vatuk.png') }}" alt="" / width="250" height="63"></a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6"> 
                                        <a href="https://vatrus.info/" target="new" title="vatrus.info"><img src="{{ asset('assets/images/vatrus.png') }}" alt="" /width="220" height="80"></a>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </section><!-- End off clogo Section -->




                    <!-- Team Section -->
                    <section id="team" class="team">
                        <div class="main_team_area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="head_title textwhite text-center margin-top-80">
                                            <h2>VATSIM EUROPE STAFF</h2>
                                            <div class="subtitle">
                                                Meet the craziest team. Share your thoughts with them.
                                            </div>
                                            <div class="separator"></div>
                                        </div><!-- End off Head_title -->

                                        <div class="main_team">
                                            <ul>
                                                <li>
                                                    <div class="single_team_img">
                                                        <img src="{{ asset('assets/images/face.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="single_team_text">
                                                        <h4>Simon Irvine</h4>
                                                        <p>Director, Europe Region (VATEUR1)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single_team_img">
                                                        <img src="{{ asset('assets/images/face.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="single_team_text">
                                                        <h4>Nick Marinov</h4>
                                                        <p>Deputy Director, Europe Region (VATEUR2)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single_team_img">
                                                        <img src="{{ asset('assets/images/face.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="single_team_text">
                                                        <h4>Nikolas Goerlitz</h4>
                                                        <p>Membership Director, Europe Region (VATEUR3)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single_team_img">
                                                        <img src="{{ asset('assets/images/face.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="single_team_text">
                                                        <h4>VACANT</h4>
                                                        <p>Strategic Development Director, Europe (VATEUR4)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single_team_img">
                                                        <img src="{{ asset('assets/images/damkalis2.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="single_team_text">
                                                        <h4>Apostolos Damkalis</h4>
                                                        <p>Web Developer</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div><!-- End of main team contant --> 
                                </div>
                            </div><!-- End of container -->
                        </div>
                    </section><!-- End off Team Section -->

                    <!-- style="background:#EEE" --> 

                    <section id="conflicts">
                        <div class="container-fluid">
                            <div style="background:url(assets/images/cr3.jpg) no-repeat; background-color:#EEEEEE" class="row">
                                <div class="col-12 text-center" style="padding:2rem 0">
                                    <h4 style="padding-left:20px">Divisional Conflict Resolution Managers</h4>

                                    <ul>
                                        <li style="padding-left:20px"> Florian Harms - VATEUD   
                                        </li>
                                        <li style="padding-left:20px"> Sean Reedman - VATEUK 
                                        </li>
                                        <li style="padding-left:20px"> Andrew Sheyback - VATRUS 
                                        </li>   
                                    </ul><br />


                                    <h4 style="padding-left:20px">Regional Conflict Resolution Panel</h4>

                                    <ul>
                                        <li style="padding-left:20px"> Apostolos Damkalis (Chairman)   
                                        </li>
                                        <li style="padding-left:20px"> Daniel Gomes 
                                        </li>
                                        <li style="padding-left:20px"> Lee Redmayne 
                                        </li>
                                        <li style="padding-left:20px"> Stephan Reitinger 
                                        </li>  
                                        <li style="padding-left:20px"> Colin Tozer 
                                        </li>     
                                    </ul>
                                </div>
                            </div>
                        </div>   
                    </section>




                    <!-- Client Logo Section -->
                    <section id="pricing" class="clogo">
                        <div class="container">
                            <div class="row">
                                <div class="main_clogo sections text-center">
                                    <div class="head_title text-center">
                                        <h2>POLICIES</h2>

                                        <div class="separator"></div>
                                    </div><!-- End off Head_title -->

                                    <div class="col-sm-3 col-xs-6"> 
                                        <a href="{{ asset('assets/pdf/Region_Policy_AD.pdf') }}" title="Regional Policy" target="new"><img src="{{ asset('assets/images/button1.jpg') }}" alt="" />Regional Policy</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"> 
                                        <a href="{{ asset('assets/pdf/Global_Ratings_Policy.pdf') }}" title="Global Ratings Policy" target="new"><img src="{{ asset('assets/images/button2.jpg') }}" alt="" />Global Ratings Policy</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"> 
                                        <a href="{{ asset('assets/pdf/TVCP.pdf') }}" title="Transfer and Visiting Controller Policy" target="new"><img src="{{ asset('assets/images/button3.jpg') }}" alt="" />TVCP</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="https://www.vatsim.net/documents" title="VATSIM Policies" target="new"><img src="{{ asset('assets/images/button4.jpg') }}" alt="" />VATSIM Policies</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="{{ asset('assets/pdf/LoA_VATEUR_MACvACC_141201_v1.0.pdf') }}" title="LoA Greece - Fyrom" target="new"><img src="{{ asset('assets/images/button5.jpg') }}" alt="" />LoA Greece - Fyrom</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="{{ asset('assets/pdf/LoA6Mar2004.pdf') }}" title="LoA Cyprus - Turkey" target="new"><img src="{{ asset('assets/images/button6.jpg') }}" alt="" />LoA Cyprus - Turkey</a>
									</div>
                                     <div class="col-sm-3 col-xs-6">
                                        <a href="{{ asset('assets/pdf/GDPR_Policy(1).pdf') }}" title="GDPR Policy" target="new"><img src="{{ asset('assets/images/button7.jpg') }}" alt="" />Data Protection and Handling Policy</a>
									</div>

                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </section><!-- End off clogo Section -->





                    <section id="contact" class="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="contact_contant sections">
                                        <div class="head_title text-center">
                                            <h2>kEEP IN TOUCH</h2>

                                            <div class="separator"></div>
                                        </div><!-- End off Head_title -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="main_contact_info">
                                                    <div class="row">
                                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                                          <div align="center"> <img src="{{ asset('assets/images/email.png') }}" width="250" height="208"></div>

                                                          <div class="col-sm-12">
                                                            <div class="single_contact_info">
                                                                <div class="single_info_text">
                                                                 <div><p><br /></p></div>
                                                                 <div><p><br /></p></div>
                                                                   <p style="font-size:16px" align="center"><br />
                                                                     <b>Director:</b> director@vatsim.eu<br />
                                                                     <b>Dep. Director:</b> deputy@vatsim.eu<br />
                                                                     <b>Strategy Department:</b> strategy@vatsim.eu<br />
                                                                     <b>Membership Department:</b> membership@vatsim.eu<br />
                                                                     <b>Support:</b> support@vatsim.eu</p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div> 

                                         <!--<div class="col-sm-6">
                                            <div class="single_contant_left padding-top-90 padding-bottom-90">
                                                <form action="#" id="formid">
                                                    <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="name" placeholder="First Name" required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                                        </div>

                                                        <div class="">
                                                            <input type="submit" value="SEND MESSAGE" class="btn btn-lg">
                                                        </div>
                                                    </div> 
                                                </form>
                                            </div>
                                        </div>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End of contact section -->

                <section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                    <div class="main_trial_area">
                        <div class="video_overlay sections">
                            <div class="container">
                                <div class="row">
                                    <div class="main_trial">
                                        <div class="col-sm-12">
                                            <h2><span></span></h2>
                                            <br /><br />
                                            <h4></h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End of Trial section -->


                <!--Footer section-->
                <section class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="main_footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="flowus">
                                                <a href="https://www.facebook.com/VATEUR/" target="new"><i class="fa fa-facebook"></i></a>
                                                <a href="https://twitter.com/VATSIMEurope/" target="new"><i class="fa fa-twitter"></i></a>
                                                
                                                <!--<a href="https://www.instagram.com/" target="new"><i class="fa fa-instagram"></i></a>
                                                <a href="https://www.youtube.com" target="new"><i class="fa fa-youtube"></i></a>
                                                -->
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <div class="copyright_text">
                                                <p class=" wow fadeInRight" data-wow-duration="1s"> <a href="http://bootstrapthemes.co" target="new">Bootstrap Themes</a>{{ date('Y') }}. All Rights Reserved</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End off footer Section-->
            </div>

            <!-- START SCROLL TO TOP  -->

            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div>

            <script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

            <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.masonry.min.js') }}"></script>

            <!--slick slide js -->
            <script src="{{ asset('assets/css/slick/slick.js') }}"></script>
            <script src="{{ asset('assets/css/slick/slick.min.js') }}"></script>


            <script src="{{ asset('assets/js/plugins.js') }}"></script>
            <script src="{{ asset('assets/js/main.js') }}"></script>

            @if(session()->has("error") || session()->has("success") || session()->has("warn"))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
                <script src="sweetalert2.all.min.js"></script>
                <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
                <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
                @if(session()->has("error"))
                <script language="javascript">
                    Swal.fire({
                        title: "{{ session('error')[0] }}",
                        html: "{{ session('error')[1] }}",
                        type: 'error'
                    })
                </script>
                @endif
                @if(session()->has("warn"))
                <script language="javascript">
                    Swal.fire({
                        title: "{{ session('warn')[0] }}",
                        html: "{{ session('warn')[1] }}",
                        type: 'warning'
                    })
                </script>
                @endif
                @if(session()->has("success"))
                <script language="javascript">
                    Swal.fire({
                        title: "{{ session('success')[0] }}",
                        html: "{{ session('success')[1] }}",
                        type: 'success'
                    })
                </script>
                @endif
            @endif

        </body>
    </html>
