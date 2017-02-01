<html>
<head>

    <style>

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
            font-size: 20px;
            line-height: 1;
            color: #262626;
            background-color: rgba(255, 255, 255, 0.1);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
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

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">test</div>
    <div class="row">

        <div class="col-lg-6 col-sm-6">
            <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg" alt="" src="https://pbs.twimg.com/profile_images/544525336994525184/7RUKg-On_400x400.png">
                    <!-- http://lorempixel.com/850/280/people/9/ -->
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
                    <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="hidden-xs">Updates</div>
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
                        <h3>About Me</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                        <h3>Current projects</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab3">
                        <h3>Interests</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab4">
                        <h3>Portfolio</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
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