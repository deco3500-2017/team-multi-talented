<?php 
if(isset($_POST['submit'])){
    $to = $_POST['email'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "E-invitation from CultureConnect to " . $name . " (" . $email . ")";
    $message = $name . " " . "(" . $email . ")" . " ticket detail:<br><br>" 
		. "\n\n" . "Name: " . "<b>" . $name . "</b><br>"
		. "\n\n" . "E-mail: " . "<b>" . $email . "</b><br>"
        . "\n\n" . "<b><h3>EVENT DETAILS: " . "</b></h3>". "</b><br>"
        . "\n\n" . "Event Name: " . "<b>" . "Dancing Night" . "</b><br>"
        . "\n\n" . "Event Host: " . "<b>" .  "UQU</b><br>"
        . "\n\n" . "Event Details: " . "<b>" .  "The largset dancing event in UQ, girls only! Lets find out whose the real dancing queen! </b><br>"
        . "\n\n" . "Event Location: " . "<b>" .  "11 High St</b><br>"
        . "\n\n" . "Event Date: " . "<b>" .  "Saturday, October 28th 2017 | 5.30 PM - 8.30 PM</b><br>"
        . "\n\n" . "<br><button href='https://calendar.google.com/calendar/ical/hvcokm8509151vtrccjkmeg6vs%40group.calendar.google.com/private-a8503583730b10baf24093b7d75d3c54/basic.ics'>" . "Add this event to my calendar" . "</button><br><br>"
        . "\n\n" . "Do not forget to show this e-invitation to the host at the time of the event. Please note that your detail will be sent to host for event-related information and notice.";

	$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n" . "From: CultureConnect <cultureconnect@uqcloud.net>";
    mail($to,$subject,$message,$headers);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dancing Night Event Channel</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="css/theme-styles.css">
    <link rel="stylesheet" type="text/css" href="css/blocks.css">

    <!-- Main Font -->
    <script src="js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });

    </script>

    <link rel="stylesheet" type="text/css" href="css/fonts.css">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Styles from index page -->
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css"> -->

    <!-- <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css"> -->
    <link rel="stylesheet" href="css/navstyle.css" type="text/css">


</head>

<body>

    <header id="page-header">
        <nav style="position: fixed">
            <div class="left">
                <a class="brand"><img src="img/cclogo.png" width="35" height="35">  CultureConnect</a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li><a href="arialHomeDN.html">Home</a></li>
                        <li><a href="arial_events.html">Events</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="has-child"><a>My Profile</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li><a href="arialProfile.html">Personal Info</a></li>
                                        <li><a href="arialAccountsettings.html">Account setting</a></li>
                                        <li><a href="arialChangepassword.html">Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="has-child"><a class="promoted">My Events</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li>
                                            <a href="photographyarialDN_joined.html">Photography</a>
                                        </li>
                                        <li>
                                            <a href="csse3002arialDN_joined.html">CSSE3002</a>
                                        </li>
                                        <li>
                                            <a href="kabukiarialDN_joined.html">Kabuki</a>
                                        </li>
                                        <li>
                                            <a class="promoted">Dancing Night</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="index.html">Log out</a></li>
                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->

                <!--end secondary-nav-->


                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->

    <!-- Profile Settings Responsive -->

    <!-- OPEN LEFT SIDEBAR -->
    <div class="profile-settings-responsive">

        <a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <div class="ui-block">
                <div class="your-profile">
                    <div class="ui-block-title ui-block-title-small">
                        <h2 class="title">The University of Queensland</h2>
                    </div>

                    <div id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-1">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
									<br><center><img src="img/dancingnight.jpg" alt="photo"><br><br>
										Dancing Night<br>
										Who is The Tru Dancing Queen</center> 
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
                                </h6>
                            </div>

                            <div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <ul class="your-profile-menu">
                                    <li>
                                        <center>
                                            Welcome to the Dancing Night Event channel, where all dancing challeng happen.
                                        </center>
                                    </li>

                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Profile Settings Responsive -->

    <div class="header-spacer header-spacer-small"></div>

    <!-- Your Account Personal Information -->

    <div class="container">
        <div class="row">
            <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Channels and Messages</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>

                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-r-0">
                            <ul class="notification-list chat-message">
                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar11-sm.jpg" alt="author">
                                        <img src="img/avatar12-sm.jpg" alt="author">
                                        <img src="img/avatar13-sm.jpg" alt="author">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend"><b>General</b><br></a>
                                        <span class="last-message-author">Ed:</span>
                                        <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar11-sm.jpg" alt="author">
                                        <img src="img/avatar9-sm.jpg" alt="author">
                                        <img src="img/avatar5-sm.jpg" alt="author">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend"><b>Random</b><br></a>
                                        <span class="last-message-author">Matt:</span>
                                        <span class="chat-message-item">That's interesting!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar1-sm.jpg" alt="author">
                                        <img src="img/avatar4-sm.jpg" alt="author">
                                        <img src="img/avatar6-sm.jpg" alt="author">
                                        <img src="img/avatar11-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend"><b>UML Modelling</b><br></a>
                                        <span class="last-message-author">Danny:</span>
                                        <span class="chat-message-item">I think you could try draw.io. Pretty easy.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <!-- DIRECT MESSAGES -->
                                <!-- <li>
								<div class="author-thumb">
									<img src="img/avatar8-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">General</a>
									<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							-->

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar11-sm.jpg" alt="author">
                                        <img src="img/avatar12-sm.jpg" alt="author">
                                        <img src="img/avatar13-sm.jpg" alt="author">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend"><b>Checkpoint 1</b><br></a>
                                        <span class="last-message-author">Becca:</span>
                                        <span class="chat-message-item">The weightage for this assignment is 20%.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 19th at 11.10 pm</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar1-sm.jpg" alt="author">
                                        <img src="img/avatar2-sm.jpg" alt="author">
                                        <img src="img/avatar9-sm.jpg" alt="author">
                                        <img src="img/avatar5-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend"><b>Final Exam</b></a>
                                        <span class="last-message-author">Smitty:</span>
                                        <span class="chat-message-item">I guess the most important thing is to understand the methodologies.
									</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 21st at 10:29am</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                    <br><br>
                                </li>
                            </ul>



                        </div>

                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-l-0">
                            <div class="chat-field">
                                <div class="ui-block-title">
                                    <h6 class="title">General</h6>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                                </div>
                                <div class="mCustomScrollbar" data-mcs-theme="dark">
                                    <ul class="notification-list chat-message chat-message-field">
                                        <li>
                                            <div class="author-thumb">
                                                <img src="img/avatar10-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10am</time></span>
                                                <span class="chat-message-item">Hi everyone, I hope everyone is doing well! Does anyone know where Building 49 is? I'm new here and I'm a bit lost. Right now, I'm at a 
											the Wordsmith cafe.</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="author-thumb">
                                                <img src="img/author-page.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <a href="#" class="h6 notification-friend">Logan Jones</a>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:30am</time></span>
                                                <span class="chat-message-item">Hi Elaine, nice to meet you! Hope you're doing great. Anyway, I think Building 49 is also known as Advanced Engineering Building. 
										You're close to the building. Just head to your left and go straight. You'll see it on your right. Here's the location on Google Maps! 
										</span>
                                                <div class="added-photos">
                                                    <img src="img/photo-message4.png" alt="location">
                                                    <span class="photos-name"><b>Detected location:</b> Building 49 - Advanced Engineering Building</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="author-thumb">
                                                <img src="img/avatar10-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8.35am</time></span>
                                                <span class="chat-message-item">Cheers. Thank you so much for your help! UQ has such a big campus. It's so easy to get lost but I love my view! </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <form>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Start by saying 'Hi'!</label>
                                        <textarea class="form-control" placeholder=""></textarea>
                                    </div>

                                    <div class="add-options-message">
                                        <a href="#" class="options-message">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>
                                        <a href="#" class="options-message">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>

                                        <button class="btn btn-primary btn-sm">Post Reply</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>

            <div class="col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12 responsive-display-none">
                <div class="ui-block">
                    <div class="your-profile">
                        <div class="ui-block-title ui-block-title-small">
                            <h1 class="title">The University of Queensland</h1>
                        </div>

                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">

                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<br><center><img src="img/dancingnight.jpg" alt="photo"><br><br>
										Dancing Night<br>
										Who is The True Dancing Queen<br><br></center>
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
                                    </h6>


<center><button data-toggle="modal" data-target="#myModal" style="color: white; background: #3d22a0" class="btn btn-breez btn-sm">Register to this event</button></center>

                                    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title" style="margin-bottom: 20px"><center>Register to the event</center></h2><br><br>

      </div>
      <div class="modal-body">
        <form method="post">
        Fill in the details below and we will send you an e-invitation for this event. <br><br>Please note that you will receive the updates from event host and the channel you are joined to.</p>
                        <input name="name" type="text" class="form-control" placeholder="Name" required><br>
                        <input name="email" type="email" class="form-control" placeholder="Email" required><br>
                        <input style="background: #3d22a0; color: white" type="submit" name="submit" class="form-control submit" value="Count Me In">
                        <input type="button" name="submit" class="form-control submit" value="Maybe Later">

      </div>
    </div>

  </div>
</div>

                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <ul class="your-profile-menu">
                                        <li>
                                            <center>
                                                Welcome to the Dancing Night Event channel, where all dancing chanllenges happen.
                                            </center>
                                        </li>
                                        <br>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- 
					<div class="ui-block-title">
						<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
						<a href="#" class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
						<a href="#" class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->

                        <!-- jQuery first, then Other JS. -->
                        <script src="js/jquery-3.2.0.min.js"></script>
                        <!-- Js effects for material design. + Tooltips -->
                        <script src="js/material.min.js"></script>
                        <!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
                        <script src="js/theme-plugins.js"></script>
                        <!-- Init functions -->
                        <script src="js/main.js"></script>

                        <!-- Select / Sorting script -->
                        <script src="js/selectize.min.js"></script>

                        <!-- Datepicker input field script-->
                        <script src="js/moment.min.js"></script>
                        <script src="js/daterangepicker.min.js"></script>

                        <script src="js/mediaelement-and-player.min.js"></script>
                        <script src="js/mediaelement-playlist-plugin.min.js"></script>

</body>

</html>
