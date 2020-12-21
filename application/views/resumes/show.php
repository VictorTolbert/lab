<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <title>Victor Tolbert</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
  /********************************************
* 	reset from
* 	http://meyerweb.com/eric/tools/css/reset/
*******************************************/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
}

body {
    line-height: 1;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}


/****************
*	COMMONS
****************/

body,
html {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-size: 13px;
    color: #40484f;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.46153846;
    text-align: left;
    -webkit-text-size-adjust: 100%;
}

p {
    display: block;
    margin-bottom: 1.3em;
}

a {
    color: #0095ff;
    text-decoration: none;
}

a:hover {
    color: #0c65a5;
    text-decoration: underline;
}

ul {
    margin-top: 1rem;
}

li {
    list-style-type: square;
    list-style-position: outside;
    margin-left: 1.3em;
}

.highlights>li>p {
    margin-bottom: 0.5em;
}

h1 {
    font-size: 2rem;
}

h2 {
    font-size: 1.67rem;
}

h3 {
    font-size: 1.27rem;
}

em {
    color: #757575;
}

blockquote {
    margin-bottom: 1em;
}

strong {
    font-weight: 700;
}


/* main container */

#resume {
    padding: 1rem;
    margin-top: 2rem;
}


/* every section wrapper */

.section {
    margin-bottom: 1rem;
}

section .location {
    margin-right: .5em;
    color: #606d76;
    font-weight: 700;
}

#contact {
    margin-top: .5rem;
}

#profiles .item {
    padding: 0;
}

#header>#profiles,
#header>#contact,
#skills,
#languages,
#interests {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
}

#header>div {
    line-height: 1.5;
}

#header>div>div {
    margin-right: 1.2em;
}

#header h1.name {
    font-size: 2.8rem;
    font-weight: 100;
    line-height: 100%;
}

#header h2.label {
    color: #202931;
    font-size: 1.47rem;
    font-weight: 300;
}

#header .picture {
    width: 11em;
    float: right;
    border-radius: 4px;
}

.main-summary {
    background: #f1f8ff;
    padding: 1.2em 1em;
    margin-top: 1rem;
}

.main-summary p {
    margin: .15em 0 0;
}

h2.section-title {
    display: inline-block;
    background: #fff;
    padding: 0 1em 0.3em 0;
    color: #ff6d1f;
    text-transform: uppercase;
    font-weight: 600;
    border: none;
    font-size: .9rem;
}

.section>header {
    position: relative;
}

.fa {
    margin-right: 0.25em;
}

.section>header::after {
    position: absolute;
    left: 0;
    top: .7em;
    height: 1px;
    background: #ccc;
    content: "";
    width: 100%;
    z-index: -100;
    display: block;
}

.section.main-summary>section {
    margin: 0;
}

.section>section>header {
    font-size: 1.38rem;
    position: relative;
    margin-top: .7em;
}

.section>section>header:first-of-type {
    margin: 0;
}

.section>section>header .space-left {
    position: absolute;
    left: -1.56rem;
    top: 5px;
    color: #aaa;
    line-height: 1;
    opacity: 0;
}

.position,
.company,
.organization,
.institution,
.date,
.area,
.studyType,
.title,
.awarder {
    display: inline;
}

.position,
.studyType,
.area,
.title,
.language,
.name {
    font-weight: 600;
}

.company::before,
.institution::before,
.organization::before,
.awarder::before {
    content: "at "
}

.company,
.institution,
.organization,
.awarder {
    color: #606d76;
    font-weight: 400;
}

.section header .date {
    font-size: 1rem;
    display: inline-table;
    padding: .1em 0;
    font-weight: 600;
}

ul.keywords,
ul.courses {
    margin-top: .5em;
}

ul.keywords li,
ul.courses li {
    display: inline-block;
    margin: 2px 2px 2px 0;
    padding: 4px 5px 5px;
    font-size: .9rem;
    line-height: 1;
    text-transform: lowercase;
    color: #3e6d8e;
    background-color: #dfeaf1;
    border: 0 solid #dfeaf1;
    white-space: nowrap;
}

ul.keywords li:hover,
ul.courses li:hover {
    background: #dfeaf0;
}

.item {
    padding: .5em 0;
}

.gpa {
    padding-bottom: .5em;
}

.fa.social {
    font-size: 1.1em;
}


/* Social Media Brand Colors */

.google-plus {
    color: #dd4b39;
}

.tumblr {
    color: #32506d;
}

.foursquare {
    color: #0072b1;
}

.facebook {
    color: #3b5998;
}

.linkedin {
    color: #007bb6;
}

.pinterest {
    color: #cb2027;
}

.dribbble {
    color: #ea4c89;
}

.instagram {
    color: #517fa4;
}

.twitter {
    color: #00aced;
}

.soundcloud {
    color: #ff3a00;
}

.wordpress {
    color: #21759b;
}

.youtube {
    color: #bb0000;
}

.github {
    color: #171515;
}

.stack-overflow {
    color: #828386;
    position: relative;
}

.flickr {
    color: #ff0084;
}

.stack-overflow::after {
    position: absolute;
    left: 0;
    content: '\f16c';
    color: #f68a1f;
    overflow: hidden;
    height: 100%;
}

.telegram {
    color: #2291c3;
}

#languages .item,
#skills .item,
#interests .item {
    width: 15em;
    padding: 0 .5em .5em 0;
    border-bottom: none;
}

#skills .item {
    width: 16em;
}

#skills .item .keywords {
    width: 15em;
}


/* Skill chart */

.level {
    margin-bottom: .5em;
}

.level .bar {
    border: 1px solid #ddd;
    display: block;
    width: 10em;
    height: 5px;
    position: relative;
}

.level .bar::after {
    position: absolute;
    content: " ";
    top: 0;
    left: 0;
    background: black;
    height: 5px;
}

.level.beginner .bar::after {
    background: #EB5F51;
    width: 2.5em;
}

.level.intermediate .bar::after {
    background: #ffdf1f;
    width: 5em;
}

.level.advanced .bar::after,
.level.fluent .bar::after {
    background: #5CB85C;
    width: 7.5em;
}

.level.master .bar::after,
.level.native.speaker .bar::after {
    background: #59C596;
    width: 10em;
}

#references .item {
    padding-left: .5em;
    border-left: 5px solid #ff6d1f;
}

.toggle-item {
  visibility: hidden;
}

/******************
*	HELPER CLASSES
******************/

.clear::after {
    content: "";
    display: table;
    clear: both;
}

.display {
    display: block;
    opacity: 1 !important;
}

.margin1 {
    margin-bottom: .5rem;
}


/****************
*		TABLET
****************/

@media screen and (min-width: 602px) {
    #resume {
        width: 80%;
        margin: 0 auto;
    }
}


/****************
*		LAPTOP
****************/

@media screen and (min-width: 1025px) {
    li {
        margin-left: 1.5em;
    }
    #resume {
        width: 820px;
        margin: 2rem auto;
    }
    .section>section>header .space-left {
        opacity: 1;
        cursor: pointer;
    }
    .section>section {
        margin-left: 1.67rem;
    }
    .toggle-item {
        transform: translate(-9999px);
    }
    .toggle-item+label {
        display: block;
        margin-top: -16px;
    }
    .toggle-item:checked+label:after {
        content: '\f0d7';
    }
    .toggle-item+label:after {
        float: left;
        cursor: pointer;
        margin-left: -20px;
        color: #aaa;
        font-size: 16px;
        content: '\f0da';
        font-family: Fontawesome;
    }
    .toggle-item~.item {
        height: 0;
        opacity: 0;
    }
    .toggle-item:checked~.item {
        height: auto;
        opacity: 1;
        transition: all .5s linear;
    }
    .company::before,
    .institution::before,
    .organization::before,
    .awarder::before {
        content: "| ";
    }
    .header-left {
        float: left;
        width: 70%;
        word-break: normal;
    }
    .section header .date {
        float: right;
        padding: .2em;
    }
    .display {
        display: none;
    }
    .display:not(.none) {
        display: block;
    }
}

@media print {
    #resume {
        margin: 0;
        padding: 0;
        -ms-word-wrap: break-word;
        word-wrap: break-word;
        line-height: 1.3;
        /*font-family: Arial, Georgia, "Lucida Grande", sans-serif;*/
    }
    @page {
        margin: 1cm 1.4cm;
    }
    .item-count {
        display: none;
    }
    .company::before,
    .institution::before,
    .organization::before,
    .awarder::before {
        content: "at ";
    }
    .main-summary {
        padding: 2rem 0;
    }
    .section {
        margin: .8rem 0;
        padding: 0;
    }
    .section header {
        padding-bottom: .15rem;
    }
    .section .location {
        padding-bottom: .15rem;
    }
    .stack-overflow::after {
        content: "";
    }
    .fa.social {
        color: #828386;
    }
    ul {
        margin-top: .4em;
    }
    ul,
    li {
        padding: 0;
    }
    ul.keywords li,
    ul.courses li {
        margin: 0;
        padding: 0;
        font-size: .8rem;
        text-transform: lowercase;
    }
    ul.keywords li::after,
    ul.courses li::after {
        padding: 0 0 0 .1rem;
        content: " |";
    }
    ul.keywords::before,
    ul.courses::before {
        font-size: .8rem;
        font-weight: 600;
    }
    ul.keywords::before {
        content: "Skills acquired: ";
    }
    #skills .keywords::before {
        content: '';
    }
    .section p {
        margin: 0;
        padding: 0;
    }
    ul.courses::before {
        content: "Major courses: ";
    }
    ul.keywords li:last-of-type::after,
    ul.courses li:last-of-type::after {
        content: "";
    }
    .level em {
        font-style: normal;
        padding: .1em 0;
    }
    .level .bar {
        display: none;
    }
    #profiles .item {
        padding: 0;
    }
    .item.display {
        display: block;
        opacity: 1 !important;
    }
}

  </style>

  </head>
  <body>

  <div id="resume">
    	<header id="header" class="clear">
    		<div>
    			<h1 class="name">Victor Tolbert</h1>
    			<h2 class="label">Lead User Interface Engineer</h2>
    		</div>

    		<span class="location">
    			<span class="address">1547 Boulder Walk Drive,</span>
    			<span class="postalCode">GA 30316,</span>
    			<span class="city">Atlanta,</span>
    			<span class="region">Georgia</span>
    			<span class="countryCode">GA</span>
    		</span>


    		<div id="contact">
    			<div class="email">
    				<span class="fa fa-envelope-o"></span>
    				<a href="mailto:victor@tolbert.design">victor@tolbert.design</a>
    			</div>
    			<div class="phone">
    				<span class="fa fa-mobile"></span>
    				<a href="tel:(678) 613-3400">(678) 613-3400</a>
    			</div>
    		</div>

    		<div id="profiles">
    			<div class="item">
    				<div class="username">
    					<span class="fa fa-github github social"></span>
    					<span class="url">
    						<a target="_blank" href="https://github.com/victortolbert">victortolbert</a>
    					</span>
    				</div>
    			</div>
    			<div class="item">
    				<div class="username">
    					<span class="fa fa-linkedin linkedin social"></span>
    					<span class="url">
    						<a target="_blank" href="https://linkedin.com/in/victortolbert">victortolbert</a>
    					</span>
    				</div>
    			</div>
    		</div>
    	</header>

    	<section class="section main-summary">
    		<section>
    			<div><p>I’m a front-end developer with expertise building responsive, standards-compliant solutions for some high-profile companies. My most relevant strengths include __ revenue generating web products for consumer-facing web platforms like AT&T, WebMD and AutoTrader. Currently, I’m seeking similar opportunities to continue to build delightful user experiences with a small team, using modern tooling and frameworks in an environment with others are passionate about their craft.</p></div>
    		</section>
    	</section>

    <section class="section margin1">
    	<header>
    		<h2 class='section-title'>Skills</h2>
    	</header>
    	<section id="skills">
    		<div class="item">
    			<h3 class="name">
    				Web Development
    			</h3>

    			<div class="level master">
    				<em>Master</em>
    				<div class="bar"></div>
    			</div>
    			<ul class="keywords">
    				<li>HTML</li>
    				<li>CSS</li>
    				<li>Javascript</li>
    			</ul>
    		</div>
    		<div class="item">
    			<h3 class="name">
    				Compression
    			</h3>

    			<div class="level master">
    				<em>Master</em>
    				<div class="bar"></div>
    			</div>
    			<ul class="keywords">
    				<li>Mpeg</li>
    				<li>MP4</li>
    				<li>GIF</li>
    			</ul>
    		</div>
    	</section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Work Experience <span class="item-count">(1)</span></h2>
      </header>

      <section id="work">
        <section class="work-item">

    			<span class="location">
    				<span class="fa fa-map-marker"></span>
    			</span>
         	<div class="item" id="work-item">
            <ul class="highlights">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        	</div>
        </section>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Projects <span class="item-count">(1)</span></h2>
      </header>
      <section id="projects">
        <section class="project-item">

          <header>
            <div class="position">Promise Serves</div>
            <div class="date">
              <span class="startDate">October 2018</span>
              <span class="endDate">- August 2020</span>
            </div>
          </header>
          <span class="website">
            <a target="_blank" href="https://funrun.com">https://funrun.com</a>
          </span>
          <ul class="keywords">
              <li>Vue.js</li>
              <li>Cypress</li>
              <li>Jest</li>
              <li>Laravel</li>
          </ul>
          <div class="item">
            <ul class="highlights">
                <li></li>
                <li></li>
                <li></li>
            </ul>
          </div>
        </section>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Volunteer</h2>
      </header>
      <section id="volunteer">
        <section class="volunteer-item">


          <header>
            <div class="header-left">
              <div class="organization">
                Project Open-hand
              </div>
            </div>
            <div class="date">
              <span class="endDate">
              - Current
              </span>
            </div>
          </header>
          <div class="item">
            <ul class="highlights">
              <li></li>
            </ul>
          </div>
        </section>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Education <span class="item-count">(1)</span></h2>
      </header>

      <section id="education">
        <section class="education-item">
          <header>
            <div class="header-left">
              <div class="studyType">
                Bachelor
              </div>
              <div class="area">
                Business Management
              </div>
              <div class="institution">
                Morehouse College
              </div>
            </div>
            <div class="date">
              <span class="startDate">
              1983
              </span>
              <span class="endDate">
              - 1987
              </span>
            </div>
          </header>



          <div class="item">
          </div>
        </section>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Awards</h2>
      </header>
      <section id="awards">
        <section class="award-item">
            <input id="award-item-0" type="checkbox" class="toggle-item" checked="checked" />
            <label for="award-item-0"></label>

          <header>
            <div class="header-left">
              <div class="title">
                Digital Compression Pioneer Award
              </div>
              <div class="awarder">
                Techcrunch
              </div>
            </div>
            <div class="date">
              2014
            </div>
          </header>

          <div class="item">
            <div class="summary">
              <p><p>There is no spoon.</p></p>
            </div>
          </div>
        </section>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>Publications</h2>
      </header>
      <section id="publications">
        <section class="publication-item">
            <input id="publication-item-0" type="checkbox" class="toggle-item" checked="checked" />
            <label for="publication-item-0"></label>

          <header>
            <div class="header-left">
              <span class="name">
              Video compression for 3d media
              </span>
              <span class="publisher">
              in Hooli
              </span>
            </div>
            <span class="date">
            1 October 2014
            </span>
          </header>

          <div class="item">
            <div class="summary">
              <p><p>Innovative middle-out compression algorithm that changes the way we store data.</p></p>
            </div>
          </div>
        </section>
      </section>
    </section>
    <section class="section margin1">
      <header>
        <h2 class='section-title'>Languages</h2>
      </header>
      <section id="languages">
        <div class="display">
          <h3 class="language">
            English
          </h3>
          <div class="item">
            <div class="level fluency native speaker">
              <em>Native speaker</em>
              <div class="bar"></div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <section class="section margin1">
      <header>
        <h2 class='section-title' class='section-title'>Interests</h2>
      </header>
      <section id="interests">
        <div class="item">
          <h3 class="name">
            Frontend Development
          </h3>
          <ul class="keywords">
            <li>Design Systems</li>
            <li>Modern JavaScript</li>
          </ul>
        </div>
      </section>
    </section>
    <section class="section">
      <header>
        <h2 class='section-title'>References</h2>
      </header>
      <section id="references">
        <div class="item">
          <blockquote class="reference">
            &#8220;&#32;Victor always showed me that there is something amazing to learn all the time. I found Victor&#x27;s attitude refreshing and inspiring, while motivating me and others to be the same.&#32;&#8221;
          </blockquote>
          <div class="name">
            Frankie Loscavio
          </div>
        </div>
      </section>
    </section>

  </body>
</html>
