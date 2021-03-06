<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="NWRAA Pickup Soccer">
    <meta name="author" content="Rusty">

    <title>NWRAA Pickup Soccer</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-social.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <a href="/">
                    <center><img src="/images/nwraalogo.png" class="img-responsive" alt="NWRAA" style="max-width: 150px;"></center>
                </a>
            </li>
            <li style="text-indent:0px;">
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-sm-offset-2 text-center">
                        <div class="col-xs-3 text-center"><a href="https://twitter.com/home?status=Come%20join%20us%20at%20pickup%20games!%20http%3A//pickup.nwraasoccer.com" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-twitter"></span>
                            </a></div>
                        <div class="col-xs-3 text-center"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//pickup.nwraasoccer.com" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-facebook"></span>
                            </a></div>
                        <div class="col-xs-3 text-center"><a href="mailto:?&subject=Come to pikcup games!&body=Check%20out%20pickup%20games%20at%20NWRAA!%20http%3A//pickup.nwraasoccer.com" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-google"></span>
                            </a></div>
                    </div>
                </div>
            </li>
            <li><a href="http://nwraa.com">NWRAA</a></li>
            <li>
                <a href="https://drive.google.com/file/d/0B2W3rhUQY7Wma0Y3WHNnb1VmOWc/edit?usp=sharing">Field Map</a>
            </li>
            <li>
                <a href="mailto:r@usty.ms">Contact Rusty</a>
            </li>
            <li>
                <a href="http://www.usyouthsoccer.org/coaches/PolicyonPlayersandPlayingRules/">Rules</a>
            </li>
            <li>
                <a href="https://drive.google.com/file/d/0B2W3rhUQY7Wmblo1OElWUlUyZXM/view?usp=sharing">Waiver</a>
            </li>
            <li>
                <a href="https://www.google.com/maps/place/NWRAA+soccer+complex/@32.3840938,-90.0509101,17z/data=!4m5!3m4!1s0x0000000000000000:0x66ae7b69c69df9bf!8m2!3d32.3844113!4d-90.0503457">Directions</a>
            </li>
            <li>
                <a href="https://docs.google.com/document/d/1HSpYSfP8_eAg3hlYml35CgGu5mrG4w80yoZ5_twMNLo/pub">Are we playing? Click here!</a>
            </li>
            <li>
                <a href="http://eepurl.com/chltYX">JOIN OUR MAILING LIST!</a>
            </li>
            <li><a href="http://rusty.ms">&copy 2016-2017 Rusty</a></li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    <hr />
                    <?php
                    $doc_id = "1HSpYSfP8_eAg3hlYml35CgGu5mrG4w80yoZ5_twMNLo";
                    echo getGoogleDoc($doc_id);
                    ?><hr />
                    <h1>Welcome to NWRAA's Pickup Soccer Site</h1>
                    <p><h2>What are pickup games?</h2>
                    <ol>
                    <li>Everyone shows up at game starting time.</li>
                    <li>Rusty splits everyone into two teams (and will balance it throughout the game).</li>
                    <li>Play a full game and have fun.</li>
                    </ol>
                    <h2>What do I need to have?</h2>
                    <ol>
                    <li>You can only play during games that are within age requirements. This keeps everyone safe.</li>
                    <li>Remember this is for fun and development, no need to be rough.</li>
                    <li>Parents must sign a liability waiver if you didn't play D2 or D3 with an MSA affiliated club the previous season.</li>
                    <li>Currently: $0 in costs, but discussions with MSA may require a one-time registration fee for those not affiliated with MSA the previous season.</li>
                    </ol>
                    <h2>Why? Simple answer: Pickup games during the offseasons are perfect for improving the following:</h2>
                    <ol>
                    <li>Stamina (when they would normally be sitting indoors)</li>
                    <li>Communication and teamwork with stronger and weaker players. Also helps break people out of their comfort zone.</li>
                    <li>Ball skills naturally by playing with others at or above their skill level.</li>
                    <li>Getting to meet the kids, parents, & coaches in the age groups you are moving up to.</li>
                    <li>Prepare you for different formations, play styles, and bigger or smaller fields.</li>
                    <li>Helps us working folks have a fun thing to do to keep in shape.</li>
                    </ol>
                    <h2>When are games?</h2>
                    <ol>
                    <li>Sunday afternoons - Check the sidebar to the left for times. They vary due to weather, temperature, and events.</li>
                    <li>All ages are welcome, but attempts will be made to split stronger & older ages with younger ages due to safety.</li>
                    <li>We will always play 4 12-15 minute quarters to give everyone a chance to rest.</li>
                        <li>Fields will change occassionally depending on field usage. Main fields are 3 and 8. Check field map on the left.</li>
                    </ol>
                    <h2>I'm an older adult or I'm out of shape - Can I keep up?</h2>
                        <ol>
                        <li>This is for fun. We play safe. You have chances to leave and get water. You are not required to stay the entire time</li>
                        </ol>
                            </p><br />
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/7580b066b9.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

<?php
// Based on http://www.realisingdesigns.com/2009/10/29/using-google-docs-as-a-quick-and-easy-cms/
function getUrl($url, $expires = 5)
{
    $cache_file = __DIR__ . '/cache/' . preg_replace('~\W+~', '-', $url) . '.txt';
    if( ! is_dir(__DIR__ . '/cache') AND ! mkdir(__DIR__ . '/cache')) {
        die('Please create /cache directory');
    }
    if (file_exists($cache_file) && (filemtime($cache_file) > (time() - 60 * $expires ))) {
        return file_get_contents($cache_file);
    }
    /*
    $options = array(
        'http'=>array(
            'method'=> "GET",
            'header'=>
                    "Accept-language: en\r\nUser-Agent: Just A Simple Request-er :)\r\n" // i.e. An iPad
                    /*
                    //"Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
                    "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
                    *
        )
    );
    $file = file_get_contents($url, false, stream_context_create($options));
    */
    $file = file_get_contents($url);
    // Our cache is out-of-date, so load the data from our remote server,
    // and also save it over our cache for next time.
    $file = file_get_contents($url);
    file_put_contents($cache_file, $file, LOCK_EX);
    return $file;
}
function getGoogleDoc($id)
{
    $content = getUrl("https://docs.google.com/document/pub?id=".$id);
    $start = strpos($content,'<div id="contents">');
    $end = strpos($content,'<div id="footer">');
    $content = substr($content, $start, ($end-$start));
    // Fix all embeded image references
    $content = str_replace('src="', 'src="https://docs.google.com/document/', $content);
    return $content;
}
?>
