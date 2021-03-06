<html>
<head>

    <style>
        html,body {
            background: url(/images/O9k8ESa.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 100%;
        }

        /* USER PROFILE PAGE */
        .card {
            margin-top: 20px;
            padding: 30px;
            background-color: rgba(214, 224, 226, 0.2);
            -webkit-border-top-left-radius:5px;
            -moz-border-top-left-radius:5px;
            border-top-left-radius:5px;
            -webkit-border-top-right-radius:5px;
            -moz-border-top-right-radius:5px;
            border-top-right-radius:5px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: #fff;
            background-color: rgba(255, 255, 255, 1);
        }
        .card.hovercard .card-background {
            height: 130px;
        }
        .card-background img {
            -webkit-filter: blur(25px);
            -moz-filter: blur(25px);
            -o-filter: blur(25px);
            -ms-filter: blur(25px);
            filter: blur(25px);
            margin-left: -100px;
            margin-top: -200px;
            min-width: 130%;
        }
        .card.hovercard .useravatar {
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
        }
        .card.hovercard .useravatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
        }
        .card.hovercard .card-info {
            position: absolute;
            bottom: 14px;
            left: 0;
            right: 0;
        }
        .card.hovercard .card-info .card-title {
            padding:0 5px;
            font-size: 32px;
            font-weight: 900;
            line-height: 1;
            color: #FFF;
            /*background-color: rgba(255, 255, 255, 0.1);*/
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
        }
        .card.hovercard .card-info {
            overflow: hidden;
            font-size: 12px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }
        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }
        .btn-pref .btn {
            -webkit-border-radius:0 !important;
        }

    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-social.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="description" content="Rusty MS About Me Website">
    <meta name="keywords" content="Rusty,Dev,Developer,PHP, MVC,OctoberCMS,SQL">
    <meta name="author" content="Rusty">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<title>Rusty</title>
<body>
<div class="container">
    <div class="row ">&nbsp;</div>
    <div class="row">

        <div class="col-lg-8 col-sm-10 col-lg-offset-2">
            <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg" alt="" src="https://pbs.twimg.com/profile_images/925908097801080832/jwJ1Cjc4_400x400.jpg">
                </div>
                <div class="useravatar">
                    <img alt="" src="https://pbs.twimg.com/profile_images/544525336994525184/7RUKg-On_400x400.png">
                </div>
                <div class="card-info"> <span class="card-title">Rusty</span>

                </div>
            </div>
            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <div class="hidden-xs">About</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                        <div class="hidden-xs">Projects</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="hidden-xs">Portfolio</div>
                    </button>
                </div>
            </div>

            <div class="well">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <h3>About Me</h3><hr />
                        Rusty is a hardware IT guy by trade. Computers, servers, networking, wireless, and even cellular - you name it; Rusty can manage it, repair it, install it, or upgrade it. Additionally, Rusty has his PMP and a lot of project management experience including IT auditing, IT security, and disaster recovery. <br />
                        <br />At night, Rusty is: <ol>
                            <li>Soccer Coach for U14, U16, and U8, E license.</li>
                            <li>Soccer Ref, Grade 8.</li>
                            <li>Soccer Board Member.</li>
                            <li>PHP Developer, including Laravel and MVC frameworks.</li>
                            <li>A father of a LOT of children.</li>
                            <li>Husband to a wonderful wife.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                        <h3>Current projects</h3>
                            <ol>
                                <li><a href="http://pickup.nwraasoccer.com">Pickup League<a/></li>
                                <li><a href="http://anime-planet.com">Anime Planet</a></li>
                                <li><a href="http://debugge.com">Debugge</a></li>
                                <li><a href="http://gunpladb.com">GunplaDB</a></li>
                                <li><a href="http://idealtechllc.com">Ideal Technologies LLC</a></li>
                                <li><a href="http://gaku.moe">Gaku</a></li>
                                <li><a href="http://chimu.org">Chimu</a></li>
                                <li><a href="#">As soon on (soon[tm])</a></li>
                                <li><a href="https://octobercms.com/theme/rusty-rustybootstrap4blank">Bootstrap OctoberCMS theme</a></li>
                                <li>Coaching and reffing</li>
                                <li>Currently studying and practicing Laravel and MVC frameworks</li>
                                <li>Working on some other fun projects coming soon...</li>
                            </ol>
                    </div>
                    <div class="tab-pane fade in" id="tab4">
                        <h3>Portfolio</h3>
                        <div class="row gallary-thumbs">

                            <div class="col-sm-6 col-md-4 branding">
                                <div class="gallary-item">
                                    <div class="hover-bg">
                                        <a href="#">
                                            <div class="hover-text">
                                                <h4>GunplaDB</h4>
                                                <small>Gunpla Database</small>
                                                <div class="clearfix"></div>
                                            </div>
                                            <img src="/images/gunpladb.png" class="img-responsive" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 branding">
                                <div class="gallary-item">
                                    <div class="hover-bg">
                                        <a href="#">
                                            <div class="hover-text">
                                                <h4>NWRAA Soccer</h4>
                                                <small>Wordpress Design & Mgmt</small>
                                                <div class="clearfix"></div>
                                            </div>
                                            <img src="/images/nwraasoccer.png" class="img-responsive" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 web">
                                <div class="gallary-item">
                                    <div class="hover-bg">
                                        <a href="#">
                                            <div class="hover-text">
                                                <h4>More</h4>
                                                <small>Coming soon...</small>
                                                <div class="clearfix"></div>

                                            </div>
                                            <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <hr />
                        <b>Certifications:</b><ol>
                            <li>PMP</li>
                            <li>A+</li>
                            <li>Project+</li>
                            <li>Server+</li>
                            <li>Security+</li>
                            <li>Linux+</li>
                            <li>OpenSUSE</li>
                            <li>LPIC-1</li>
                            <li>CCNA - Expired</li>
                            <li>Grade 8 Referee</li>
                            <li>U6/U8 Coaching License</li>
                            <li>U10/U12 Coaching License</li>
                            <li>E License from US Youth Soccer</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row ">&nbsp;</div>
    <!--<div class="row ">
        <div class="col-lg-10 col-sm-10 col-sm-offset-2 text-center">
            <div class="col-xs-3 text-center">&copy 2017 Rusty</div>
            <div class="col-xs-3 text-center">XX Open tasks</div>
            <div class="col-xs-3 text-center">XX Open Github issues</div>
        </div>
    </div>-->
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/7580b066b9.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
    });
</script>

</body>
</html>
