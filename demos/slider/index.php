<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Slider - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
    <style id="full-width-slider">
        /* Hide the number input */
        .full-width-slider input {
            display: none;
        }
        .full-width-slider .ui-slider-track {
            margin-left: 15px;
        }
    </style>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p><span class="jqm-version"></span> Demos</p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>Slider</h1>

		<p>Sliders are used to enter numeric values along a continuum and can also be dual handle <a href="../rangeslider/">range sliders</a> or <a href="../slider-flipswitch/">flip switches</a>.
			</p>

                <h2>Basic slider</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-1">Slider:</label>
                    <input type="range" name="slider-1" id="slider-1" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Step attribute</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-10">Slider:</label>
                    <input type="range" name="slider-10" id="slider-10" min="0" max="10" step=".1" value="5">
				</form>
                </div><!-- /demo-html -->

                <h2>Highlight</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-2">Slider (default is "false"):</label>
                    <input type="range" name="slider-2" id="slider-2" data-highlight="true" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Theme</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-3">Slider:</label>
                    <input type="range" name="slider-3" id="slider-3" data-track-theme="b" data-theme="b" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Mini sized</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-4">Slider:</label>
                    <input type="range" name="slider-4" id="slider-4" data-mini="true" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Disabled</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-5">Slider:</label>
                    <input type="range" name="slider-5" id="slider-5" disabled="disabled" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Label hidden</h2>

                <div data-demo-html="true">
				<form>
                    <label for="slider-6" class="ui-hidden-accessible">Slider:</label>
                    <input type="range" name="slider-6" id="slider-6" min="0" max="100" value="50">
				</form>
                </div><!-- /demo-html -->

                <h2>Fieldcontain</h2>

                <div data-demo-html="true">
				<form>
					<div class="ui-field-contain">
                        <label for="slider-7">Slider:</label>
                        <input type="range" name="slider-7" id="slider-7" min="0" max="100" value="50">
					</div>
				</form>
                </div><!-- /demo-html -->

                <h2>Fieldcontain, mini sized</h2>

                <div data-demo-html="true">
				<form>
					<div class="ui-field-contain">
                        <label for="slider-8">Slider:</label>
                        <input type="range" name="slider-8" id="slider-8" data-mini="true" min="0" max="100" value="50">
					</div>
				</form>
                </div><!-- /demo-html -->

                <h2>Full width slider, no input</h2>

                <p>Here we show how you can hide the number input and make the slider full width with custom CSS.</p>

                <div data-demo-html="true" data-demo-css="#full-width-slider">
                <form class="full-width-slider">
                    <label for="slider-12" class="ui-hidden-accessible">Slider:</label>
                    <input type="range" name="slider-12" id="slider-12" min="0" max="100" value="50">
                </form>
                </div><!-- /demo-html -->

	</div><!-- /content -->

	<?php include( '../jqm-navmenu.php' ); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-search.php' ); ?>

</div><!-- /page -->

</body>
</html>
