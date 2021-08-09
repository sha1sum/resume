<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Anthony Atkinson - Polyglot Software Engineer</title>
	<link rel="stylesheet" href="styles.css">
	<style>
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}
		article, aside, details, figcaption, figure,
		footer, header, hgroup, menu, nav, section {
			display: block;
		}
		body {
			line-height: 1;
		}

		#content section .skill {
			width: 100%;
			margin-bottom: 1rem;
			display: flex;
			align-items: center;
		}

		#content section .skill span {
			flex-basis: 50%;
			max-width: 6rem;
			margin: 0 1% 0 1%;
			display: block;
			padding: 0;
			text-align: right;
		}

		#content section .skill .skill-stars {
			flex-basis: 50%;
			display: flex;
			flex-grow: 1;
		}

		#content section .skill div.skill-star {
			background-color: #ad5f45;
			color: white;
			display: inline-block;
			vertical-align: middle;
			width: 20%;
			font-size: 2rem;
			padding: 0.25rem 0;
			text-align: center;
			border-left: 1px solid white;
		}

		@media only screen {
			body {
				font-family: Helvetica, Arial, sans-serif;
				background-color: white;
			}

			a {
				text-decoration: none;
				font-weight: bold;
			}

			strong {
				font-weight: bold;
			}

			p {
				line-height: 1.15rem;
			}

			#content .left a {
				color: #007a80;
			}

			#developers_note {
				padding: 0.75rem;
				color: #777;
				font-size: 2.25rem;
				text-align: center;
				margin: 0 5%;
				font-family: consolas, "Courier New", monospace;
			}

			#developers_note .blink {
				font-weight: lighter;
				animation: blinker 1s linear infinite;
			}

			body > div > header {
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
				text-transform: uppercase;
				font-weight: bold;
				color: white;
			}

			#content > header {
				text-align: center;
				font-size: 1.125rem;
				margin-top: 0.5rem;
			}

			body > div > header section.left {
				background-color: #009ca1;
			}

			body > div > header section.right {
				background-color: #ad5f45;
			}

			body > div > header section h1 {
				font-size: 3rem;
				text-align: center;
			}

			#content .inner {
				padding: 5% 5% 0 5%;
			}

			#content .inner h1 {
				font-size: 2rem;
				font-weight: bold;
				text-transform: uppercase;
				text-align: center;
			}

			#content .right a {
				color: #ad5f45;
			}

			#content .left .inner h1 {
				color: #007a80;
			}

			#content .right .inner h1 {
				color: #ad5f45;
			}

			#content section,
			#content .inner > p {
				color: #444;
				margin: 2rem 0;
			}

			#content .inner > section {
				margin-bottom: 3rem;
			}

			#content section header {
				margin-bottom: 0.75rem;
				color: #666;
			}

			#content section header h2 {
				font-size: 1.25rem;
				text-transform: uppercase;
				font-weight: bold;
				color: #007a80;
			}

			#content section header span {
				font-style: italic;
				font-weight: bold;
			}

			#content section p {
				text-align: justify;
				margin-bottom: 0.75rem;
				letter-spacing: 0.02rem;
			}

			body > div > footer {
				display: none;
			}
		}

		@media only screen and (min-width: 600px) {
			body > div > header {
				height: 6rem;
				font-family: Helvetica, Arial, sans-serif;
				text-transform: uppercase;
				font-weight: bold;
				color: white;
			}

			body > div > header section {
				width: 50%;
				float: left;
				height: 100%;
				background-repeat: no-repeat;
				background-size: auto 4.5rem;
			}

			body > div > header section.left {
				background-color: #009ca1;
				background-image: url('images/logo_white_left.png');
				background-position: right;
				text-align: right;
			}

			body > div > header section.right {
				background-color: #ad5f45;
				background-image: url('images/logo_white_right.png');
				background-position: left;
				text-align: left;
			}

			body > div > header section h1 {
				font-size: 3rem;
				padding-top: 0.2em;
			}

			body > div > header section.left h1 {
				padding-right: 1em;
				text-align: right;
			}

			body > div > header section.right h1 {
				padding-left: 1em;
				text-align: left;
			}

			#content section header h2 {
				text-transform: uppercase;
				font-weight: bold;
			}
		}

		@media only screen and (min-width: 900px) {
			body > div > header {
				height: 9rem;
			}

			body > div > header section {
				background-size: auto 7rem;
			}

			body > div > header section h1 {
				font-size: 4rem;
				padding-top: 0.5em;
			}

			body > div > header section.left h1 {
				padding-right: 1.25em;
			}

			body > div > header section.right h1 {
				padding-left: 1.25em;
			}

			.left,
			.right {
				width: 50%;
				float: left;
			}

			#content header.left,
			#content header.right {
				padding-bottom: 3rem;
			}

			#content div.left,
			#content div.right {
				padding-bottom: 6rem;
			}

			#content .inner h1 {
				font-size: 2.5rem;
			}

			#content section header h2 {
				font-size: 1.5rem;
			}

			body > div > footer {
				display: block;
				clear: both;
				width: 100%;
				position: fixed;
				bottom: 0;
				padding: 0.5em;
				font-size: 1.5rem;
				background-color: #009ca1;
				color: white;
				text-align: center;
			}

			body > div > footer a {
				color: white;
				font-weight: bold;
				text-decoration: underline;
				outline: none;
			}
		}

		@media only screen and (min-width: 1200px) {
			body > div > header {
				height: 12rem;
			}

			body > div > header section {
				background-size: auto 10rem;
			}

			body > div > header section h1 {
				font-size: 5.5em;
			}

			body > div > header section.left h1 {
				padding-right: 1.25em;
			}

			body > div > header section.right h1 {
				padding-left: 1.25em;
			}
		}

		@media only screen and (min-width: 1500px) {
			#content section .skill span {
				font-size: 1.25rem;
				max-width: 9rem;
			}
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div>
		<header>
            <section class="left">
                <h1>
                    Anthony
                </h1>
            </section>
            <section class="right">
                <h1>
                    Atkinson
                </h1>
            </section>
        </header>

		@yield('content')

        <footer>
            Looking for a resume? <a href="#" onClick="window.print()">Print this page</a> for a paper-styled version.
        </footer>
	</div>
</body>

</html>
