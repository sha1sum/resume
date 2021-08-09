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

		<div id="content">
			<header class="left">
				<a href='mailto:&#097;&#110;&#116;&#104;&#111;&#110;&#121;&#064;&#112;&#111;&#108;&#121;&#103;&#108;&#111;&#116;&#046;&#101;&#110;&#103;&#105;&#110;&#101;&#101;&#114;'>&#097;&#110;&#116;&#104;&#111;&#110;&#121;&#064;&#112;&#111;&#108;&#121;&#103;&#108;&#111;&#116;&#046;&#101;&#110;&#103;&#105;&#110;&#101;&#101;&#114;</a>
			</header>
			<header class="right">
				<a href="tel:&#055;&#050;&#055;&#052;&#056;&#055;&#050;&#054;&#051;&#051;">(727) ITS-CODE (487-2633)</a>
			</header>
			<div id="developers_note">
				&gt; polyglot software engineer<span class="blink">|</span>
			</div>
			<div class="left">
				<div class="inner">
					<div id="objective">
						<h1>Objective</h1>

						<section>
							<p>
								To utilize the maximum portion of my skill set possible,
								while providing opportunities to grow the productivity and
								effectiveness of the business, using technology to create
								results and turn complex business logic into simple,
								meaningful software.
							</p>
						</section>
					</div>

					<h1>Professional Experience</h1>

					<p>
						Some of those listed as contacts under each entry below are my references.
						As you can probably understand, references' contact information will not be posted online.
						You may contact me and request reference information if desired.
					</p>

					<section>
						<header>
							<h2>PowerChord, Inc.</h2>
							<div><span>Software Engineering Team Lead</span> &mdash; 2019-2021</div>
							<div><span>Lead Developer in Test</span> &mdash; 2017-2019</div>
							<div><span>Server Software Engineer</span> &mdash; 2016-2017</div>
						</header>
						<p>
							The experience I gained from PowerChord, Inc.&mdash;located in St. Petersburg,
							FL&mdash;was extensive and invaluable. I held three positions with the company,
							which allowed me to cross-train in a myriad different technologies. PowerChord
							connects brands with local customers through providing a platform with which to
							manage content and marketing for dealers of brands' products. Their client list
							includes Stihl, Alkota, Morbark, Grasshopper Mowers, Mercury Marine, and many
							others.
						</p>
						<p>
							I started as a Server Software engineer with PowerChord, working on the HTTP
							REST API for the platform, which is written in Go. My duties included planning
							and implementing the data schemas for resources, building the business logic
							surrounding the resources, testing said logic, adding the appropriate endpoints
							for the resources, and testing the endpoints.
						</p>
						<p>
							I was offered a lead role in the Quality Assurance department shortly into my
							time at PowerChord, which I accepted. The quality assurance department was
							tasked with testing both the HTTP API and the front-end interface for clients
							to administer their data on the platform. At the time I joined, testing in the
							department was still mostly manual. I was tasked with leading the charge on
							automating testing procedures, both on single API endpoints and on the
							front-end. Technologies used include Mocha and Chai using Node.js. Since I had
							worked on the API engineering team, I also advised my three other team members
							when they had questions regarding the platform.
						</p>
						<p>
							My most recent position at PowerChord was as Lead Software Engineer for a
							newly-formed team of four engineers for a project that would allow site
							templates to be created using modularized "components" that could be reused
							on multiple websites and added/configured using a web interface. We utilized
							Go for the building of the site rendering pipeline, Go templates for the
							markup and styling (which used Sass), and client-side JavaScript. I was
							tasked with mentoring the two junior engineers and one engineer on any
							issues they may experience in their development, as well as planning
							quarterly goals for team members and the team as a whole, analyzing the
							platform and designing and recommending improvements to be made, pull request
							review, triaging new issues and refining the backlog of tickets, running
							meetings to decide story points for sprints using planning poker, and
							stepping in to help with development when workload was high or urgent issues
							arose.
						</p>
						<footer>
							<span>
								<a rel="noopener" href="http://powerchord.com" target="_blank">
									PowerChord.com
								</a>
								&bull;
							</span>
							Reference: <strong>Dale Smith</strong> &mdash; Director of Engineering
						</footer>
					</section>

					<section>
						<header>
							<h2>SalesMakers, Inc.</h2>
							<span>Senior Developer</span> &mdash; 2010-2015
						</header>
						<p>
							Saint Petersburg, Florida-based retail management, staffing, and training
							outsourcer, SalesMakers, Inc. (formerly Retail Business Development), hired
							me on as the first full-time developer. The company has since expanded to a
							four-developer team.
						</p>
						<p>
							We created an enterprise web application
							for a mobile workforce that delivers powerful sales and inventory tracking across
							multiple clients and projects, payroll and commission automation, complex business
							reporting, contest and bonus calculation, support services, online training
							resources to sales associates in the field, executives, management
							and back-office personnel. This solution efficiently managed over 1,500 sales
							associates in hundreds of retail stores across the U.S. at its peak, accounting
							for up to a 4.5x increase in productivity/performance and up to an 80% cost savings
							as opposed to previous methods of manual tracking, calculation, and training.
						</p>
						<p>
							The initial application was designed and implemented using a Java/J2EE backend ERP
							system named Openbravo, along with lightweight, responsive, mobile-friendly HTML5
							and CSS3. Also developed as a frontend was a native Android application for sales
							associates and management. Even in the first year of my employment, the solutions
							processed millions of dollars in revenue and tracked hundreds of thousands of
							customer interactions.
						</p>
						<p>
							As the business grew, it was evident that we required a custom software application
							not based on any pre-made solution. Our team developed a Ruby on Rails application
							to replace the existing Java application, built completely from the ground up,
							following test-driven development methodology, and adhering closely to Agile
							principles. We also added in more large features such as an employee scheduler and
							a job applicant tracking system.
						</p>
						<p>
							Over the course of my employment, I used technologies including Twilio,
							high-complexity PostgreSQL queries, Foundation, AJAX, jQuery, multiple automated
							ETL import and export processes, Nginx and Passenger 5, Memcached, Capistrano,
							CodeShip continuous integration with Rackspace servers, Pundit, Sunspot/Solr,
							Google and Bing Maps integration, and a myriad web services APIs.
						</p>
						<footer>
							<span>
								<a rel="noopener" href="http://www.salesmakersinc.com" target="_blank">
									SalesMakersInc.com
								</a>
								&bull;
							</span>
							Reference: <strong>Peter Quintas</strong> &mdash; Former CTO and Supervisor
						</footer>
					</section>

					<section>
						<header>
							<h2>Web Work</h2>
							<span>Sole Proprietor and Web Developer</span> &mdash; 2007-2010, 2013
						</header>
						<p>
							In 2007, I opened Lumination Solutions, a sole proprietorship in Polk County,
							Florida, with the intent of designing and developing websites for clients in the area.
							As the business quickly grew, I realized that my true strength was in
							development and, though	I had a reasonable working knowledge of design, development
							was my true strength. For this reason, I acquired a partner to complement my
							development knowledge with excellent design.
						</p>
						<p>
							Lumination Solutions became heavily involved in delivering beautiful, high-functioning
							Wordpress solutions for clients, using PHP to tailor the themes and custom plugins to
							provide exactly the functionality and appearance that clients desired. Later, after
							joining Retail Business Development, more web work was created for the company that
							runs along the same lines as the work that I was involved in when self-employed.
						</p>
					</section>
					<div id="education">
						<h1>Education</h1>
						<section>
							<p>
								I completed courses for Cisco CCNA (Cisco-Certified Network Associate) certification
								in 2008 at Polk Community College and received a high school diploma from Lake Wales
								High School in 2002.
							</p>
							<p>
								A self-proclaimed "nerd" for the past twenty-seven years (since 1994) starting at the
								age of eleven, much of my knowledge is self-taught, Google-taught (or Yahoo!-taught if
								you go back far enough), or the result of the teachings of a few respected mentors
								throughout my adolescence. Want proof? Consider testing my skills to be impressed!
							</p>
						</section>
					</div>
				</div>
			</div>

			<div class="right">
				<div class="inner">
					<h1>Skills &amp; Proficiencies</h1>
					<section>
						<p>
							I am familiar with a large number of technologies, with familiarity levels
							ranging the gamut from beginner to advanced. Listed here you'll find my skills
							and the level of proficiency with which I've reached regarding them. My ability
							to learn new things is off the charts, however, so had to be left off of the
							list!
						</p>
						<div class="skills">
							<!-- INLINE-BLOCKS IN FIREFOX AND SOME SAFARI VERSIONS HAVE SPACES IF ANY CHARACTERS
								EXIST BETWEEN THE CLOSING AND OPENING TAGS OF EACH -->
							<div class="column">
								<div class="skill">
									<span>
										Go
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Ruby/Rails
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Sass &amp; CSS
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Git[Hub]
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										GTD Methodology
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										HAML &amp; YAML
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										HTML &amp; XML
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Networking
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										TDD
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										SQL
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Docker
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										Kubernetes
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										WordPress
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div>
									</div>
								</div>
								<div class="skill">
									<span>
										AJAX
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="skill">
									<span>
										Apache &amp; Nginx
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										BASH Scripts
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div><div class="no-skill"></div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Computer Hardware
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										JavaScript
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Node.js
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										React
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Linux
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Photoshop
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										AWS
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Google Cloud
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Java
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Android Development
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										PHP
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div>
									</div>
								</div>
								<div class="skill">
									<span>
										Illustrator
									</span>
									<div class="skill-stars">
										<div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="skill-star">&#x272D</div><div class="no-skill"></div><div class="no-skill"></div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<footer>
			Looking for a resume? <a href="#" onClick="window.print()">Print this page</a> for a paper-styled version.
		</footer>
	</div>
</body>

</html>
