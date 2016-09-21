<!--
	Looking at source code, eh?
	Trying to be a hacker?
░░░░░▄▄▄▀▀▀▀▀▀▀▀▀▄▄▄░░░░░░░░░
░░░▄▀░░░░░░░░░░░░░░░▀▀▄▄░░░░░
░░▄▀░░░░░░░░░░░░░░░░░░░░▀▄░░░
░▄▀░░░░░░░░░░░░░░░░░░░░░░░█░░
░█░░░░░░░░░░░░░░░░░░░░░░░░░█░
▐░░░░░░░░░░░░░░░░░░░░░░░░░░░█
█░░░░▀▀█▄▄▄░░░▄▌░░░░░░░░░░░░▐
▌░░░░░▌░██▀█▀▀░░░▄▄▄▄▄░░░░▌░▐
▌░░░░░▀▄▄▄▀░░░░░░▌░▀███▄▄▀░░▐
▌░░░░░░░░░░░░░░░░░▀▄▄▄▄▀░░░▄▌
▐░░░░▐▀░░░░░░░░░░░░░░░░░░░▄▀░
░█░░░▌░░▄▀▀▀▄▄▄░░░░░░░░░░▄▀░░
░░█░░▀░░░░▄▄▄▄░▀▀▌░░▌░░░█░░░░
░░░▀▄░░░░░░░░░▀░░░▄▀░░▄▀░░░░░
░░░░░▀▄▄▄░░░░░░░░░▄▄▀▀░░░░░░░
░░░░░░░░▐▀▀▀▀▀▀▀▀▀░░░░░░░░░░░
░░░░░░░░█░░░░░░░░░░░░░░░░░░░░
█▀▀█ █▀▀█ █▀▀ 　 █░░█ █▀▀█ █░░█
█▄▄█ █▄▄▀ █▀▀ 　 █▄▄█ █░░█ █░░█
▀░░▀ ▀░▀▀ ▀▀▀ 　 ▄▄▄█ ▀▀▀▀ ░▀▀▀
▒█░▄▀ ▀█▀ ▒█▀▀▄ ▒█▀▀▄ ▀█▀ ▒█▄░▒█ ▒█▀▀█
▒█▀▄░ ▒█░ ▒█░▒█ ▒█░▒█ ▒█░ ▒█▒█▒█ ▒█░▄▄
▒█░▒█ ▄█▄ ▒█▄▄▀ ▒█▄▄▀ ▄█▄ ▒█░░▀█ ▒█▄▄█
▒█▀▄▀█ ▒█▀▀▀ ▀█
▒█▒█▒█ ▒█▀▀▀ █▀
▒█░░▒█ ▒█▄▄▄ ▄░

		Well...

───────────────────██
──────────────────█─██
──────────────────█───█
──────────────────█───█
──────────────────█───█
──────────────────█───█
──────────────────█───█▓
──────────────────█───▓█
──────────────────█───░█
──────────────────█───░█
──────────────────█░░░─█
───────────▓███──██▓▓███
───────────██──▓██▓────██
───────────█▓────█▓─────▓█
───────────█▓─────█──────░█
██████─────█▓─────█────────█
████████▓███░──────█──█▓────█
█░░░░░░█───────────█░███────█▓
▓██████─────────────█▓██────██
███████░────────────────────▓█
▓██████░────────────────────░█
▓██████░────────────────────▓█
▓██████░────────────────────█▓
▓██████░────────────────────█
▓██████░───────────────────██
▓███░██░──────────────────█
▓███──████████████████████
██████
-->

<!DOCTYPE HTML>
<html>
<head>
    <title>Bombay Metal Scene :: Add/Edit Artists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="fantastico Responsive web template, Bootstrap Web Templates, Flat Web Templates,
    Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG,
    SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="../css/style.css" rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/ui-darkness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/autosize.min.js"></script>
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script>
        $(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });

        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });

        $(function () {
            $('input').tooltip({
                content: function () {
                    return $(this).attr('title');
                },
                position: {
                    my: "left top",
                    at: "right+5 top-5"
                }
            });
        });

        $(function () {
            $("#artistName").autocomplete({
                source: "search_artists.php",
                minLength: 2,
                select: function (event, ui) {
                    $('#artistName').val(ui.artistName);
                    $('#genre').val(ui.genre);
                }
            });
        });

        $(function () {
            var date = new Date(), y = date.getFullYear(), m = date.getMonth(), d = date.getDate();
            var SDate = new Date(1970, 0, 1);
            var EDate = new Date(y, m, d);

            $.datepicker.setDefaults({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                yearRange: '1970:2016',
                minDate: SDate,
                maxDate: EDate,
                showAnim: 'fadeIn'
            });
            $('#yearFormed').datepicker({
                onSelect: function(dateText, inst) {
                    var dateAsString = dateText;
                    var dateAsObject = $(this).datepicker('getDate');
                    $('#from0').datepicker('setDate', dateAsObject);
                }
            });

            $('.readonly').attr('readonly', true);

            $('#from0, #from1, #from2').datepicker();

            $('#add1, #add2').hide();

            $('#present').on('change', function () {
                var ischecked = $(this).is(':checked');
                if (ischecked) {
                    $('#from0').datepicker();
                    $('#to0').val("Present").datepicker("disable");
                    $('.readonly').attr('readonly', true);
                    $('#add1, #add2').hide();
                } else {
                    $('.readonly').removeAttr('readonly', false);
                    $('#to0').datepicker("enable").val("");
                    $('#add1').show();
                }
            });
            $('#present1').on('change', function () {
                var ischecked = $(this).is(':checked');
                if (ischecked) {
                    $('#from1').datepicker();
                    $('#to1').val("Present").datepicker("disable");
                    $('.readonly').attr('readonly', true);
                    $('#add2').hide();
                } else {
                    $('.readonly').removeAttr('readonly', false);
                    $('#to1').datepicker("enable").val("");
                    $('#add2').show();
                }
            });
        });

        $(function () {
            $('#artists #todo').on('change', function () {
                if (this.value === 'new') {
                    $('.required').attr('required', true);
                    $("#artists #red").addClass("red");
                }
                else if (this.value === 'edit') {
                    $('.required').removeAttr('required');
                    $("#artists #red").removeClass("red");
                }
            })
        });
    </script>
    <?php
    $needed = $artistName = $details = $genre = $yearFormed = $yearsActive = $lyricalTheme = $currentLabel = $members = $merch = $gigs = $disc = $contact = "";
    ?>
</head>
<body>
<noscript>
    <div id="noscript-padding"></div>
</noscript>
<div class="header" id="home">
    <div class="container ">
        <div class="head">
            <div class="logo">
                <a href="../index.html"><img src="../images/logo.png" alt="Bombay Metal Scene"/></a>
            </div>
            <div class="navigation inner">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../work.html">Download</a></li>
                    <li><a href="../404.html" class="active">Add/Edit In-app Data</a></li>
                    <li><a href="../about.html">About</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container body_wrap">
    <div class="col-md-7 form-container">
        <div class="form">
            <div class="form_title">
                <h2>Add/Edit Artists</h2></div>
            <div class="form_body" id="form">
                <form method="post" id="artists" action="upload.php">
                    <div class="field_select">
                        <select name="todo" id="todo" required title="">
                            <option value="">Select What You Want To Do</option>
                            <option value="new" <?php if ($needed == "yes") echo "selected"; ?>>Add a new Artist
                            </option>
                            <option value="edit" <?php if ($needed == "some") echo "selected"; ?>>Edit an existing
                                Artist
                            </option>
                        </select></div>
                    <div class="field_text">
                        <label for="name"><span class="red"></span> Name:</label>
                        <input type="text" name="artistName" class="required" id="artistName"
                               title="start typing, name will appear in auto-complete!<br />in case if it doesn't that means the record isn't available in my repository!">
                    </div>
                    <div class="field_text">
                        <label for="genre"><span id="red" class=""></span> Genre:</label>
                        <input type="text" name="genre" id="genre" class="question"
                               title="Must be at least 8 characters. <br> this <br> that"> <br></div>
                    <div class="field_text">
                        <div class="year">
                            <label for="yearFormed"><span id="red" class=""></span> Date Formed:</label>
                            <input type="text" name="yearFormed" id="yearFormed" class="required"
                                   min="1970"
                                   max="2016"></div>
                    </div>
                    <div class="field_text">
                        <label for="from"><span id="red" class=""></span> Years Active:</label>
                        <div id="add0" class="year">
                            <input type="text" id="from0" name="yearsActiveFrom" class="required">
                            <div class="to">to</div>
                            <input type="checkbox" id="present" value="present" checked>
                            <input type="text" id="to0" name="yearsActiveTo" class="required readonly" value="Present">
                        </div>
                    </div>
                    <div class="field_text">
                        <div id="add1" class="year">
                            <input type="text" id="from1" name="yearsActiveFrom" class="required">
                            <div class="to">to</div>
                            <input type="checkbox" id="present1" value="present" checked>
                            <input type="text" id="to1" name="yearsActiveTo" class="required readonly" value="Present">
                        </div>
                    </div>
                    <div class="field_text">
                        <div id="add2" class="year">
                            <input type="text" id="from2" name="yearsActiveFrom" class="required">
                            <div class="to">to</div>
                            <input type="checkbox" id="present2" value="present" checked>
                            <input type="text" id="to2" name="yearsActiveTo" class="required readonly" value="Present">
                        </div>
                    </div>
                    <div class="field_text">
                        <label for="lyricalTheme"><span id="red" class=""></span> Lyrical Theme:</label>
                        <input type="text" name="lyricalTheme" id="lyricalTheme" class="required">
                    </div>
                    <div class="field_text">
                        <label for="currentLabel"><span id="red" class=""></span> Current Label:</label>
                        <input type="text" name="currentLabel" id="currentLabel" class="required">
                    </div>
                    <div class="field_textarea">
                        <label for="members"><span id="red" class=""></span> Band Members:</label>
                        <textarea name="members" id="members" class=""></textarea></div>
                    <div class="field_textarea">
                        <label for="contact"><span id="red" class=""></span> Contact the Band:</label>
                        <textarea name="contact" id="contact" class=""></textarea></div>
                    <div class="field_textarea">
                        <label for="merch">Merchandise:</label>
                        <textarea name="merch" id="merch" class=""></textarea></div>
                    <div class="field_textarea">
                        <label for="gigs">Upcoming Gigs:</label>
                        <textarea name="gigs" id="gigs" class=""></textarea></div>
                    <div class="field_textarea">
                        <label for="disc">Discography:</label>
                        <textarea name="disc" id="disc"></textarea></div>
                    <div class="field_textarea">
                        <label for="details"><span id="red" class=""></span> Details:</label>
                        <textarea name="details" id="details" class="required"></textarea></div>
                    <div class="field_text">
                        <label for="image"><span id="red" class=""></span> Upload The Latest Artist Picture:</label>
                        <input type="file" id="image" name="image" class="image required"
                               title="Can upload only one image."
                               required>
                    </div>
                    <div class="contact-but">
                        <input type="submit" id="submit" name="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-right">
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twt"> </span></a></li>
                    <li><a href="#"><span class="gp"> </span></a></li>
                    <li><a href="#"><span class="in"> </span></a></li>
                </ul>
            </div>
            <div class="footer-copyright">
                <p>Copyright &copy; 2015 - <?php echo date("Y") ?> <a href="http://equitharn.in/">equitharn.in</a></p>
            </div>
        </div>
    </div>
    <noscript>
        <div id="noscript-warning">This site works best with JavaScript enabled. Please enable it before filling up this
            form.
        </div>
    </noscript>
    <script type="text/javascript">
        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
        });

        autosize(document.querySelectorAll('textarea'));
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                             style="opacity: 1;"> </span></a>
</div>
</body>
</html>