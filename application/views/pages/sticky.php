<style>
#top-nav {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255,255,255,var(--bg-opacity));
    border-bottom-width: 1px;
}

.nav-item {
    font-size: 1.25rem;
}

#top-nav .section-nav ul,.sub-nav-item {
    padding-top: .75rem;
}

@media (min-width:768px) {
    .nav-item {
        font-size: .875rem;
        font-weight: 700;
        --transform-translate-x: 0;
        --transform-translate-y: 0;
        --transform-rotate: 0;
        --transform-skew-x: 0;
        --transform-skew-y: 0;
        --transform-scale-x: 1;
        --transform-scale-y: 1;
        transform: translateX(var(--transform-translate-x)) translateY(var(--transform-translate-y)) rotate(var(--transform-rotate)) skewX(var(--transform-skew-x)) skewY(var(--transform-skew-y)) scaleX(var(--transform-scale-x)) scaleY(var(--transform-scale-y));
        display: inline-block;
        height: 4rem;
        padding-left: 1rem;
        padding-right: 1rem;
        text-decoration: none;
        position: relative;
        z-index: 1;
    }

    .sub-nav-item {
        pointer-events: none;
        position: absolute;
        z-index: 0;
        padding: .75rem 1rem;
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        opacity: 0;
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255,255,255,var(--bg-opacity));
        top: 60px;
        transition: transform .1s ease-in;
        transform-style: preserve-3d;
        will-change: transform;
        transform: translate3d(0,-10%,0) scaleX(1) rotateX(0deg) rotateY(0deg) rotate(3deg) skew(0deg,0deg);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.2),0 8px 2px -4px rgba(0,0,0,.2);
    }

    .sub-nav-item a:hover {
        --text-opacity: 1;
        color: #ff269e;
        color: rgba(255,38,158,var(--text-opacity));
    }

    .sub-nav-item-open {
        pointer-events: auto;
        opacity: 1;
        z-index: 50;
        transform: translate3d(5px,0,0) scaleX(1) rotateX(0deg) rotateY(0deg) rotate(-3deg) skew(0deg,0deg);
    };
}

.sub-nav-bg {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255,255,255,var(--bg-opacity));
    position: absolute;
    height: 100%;
    left: -100vw;
    top: auto;
    right: auto;
    bottom: 0;
    width: 200vw;
    z-index: -1;
}

.neverland #top-nav {
    display: none;
}

#logo:hover {
    -webkit-animation: squiggles .34s linear infinite;
    animation: squiggles .34s linear infinite;
}

#top-nav {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255,255,255,var(--bg-opacity));
    border-bottom-width: 1px;
}

#top-nav #logo {
    --text-opacity: 1;
    color: #ff269e;
    color: rgba(255,38,158,var(--text-opacity));
}

#top-nav #logo:hover {
    --text-opacity: 1;
    color: #191a1b;
    color: rgba(25,26,27,var(--text-opacity));
}

@media (max-width:768px) {
    .nav-item {
        display: block;
        font-weight: 400;
    }

    #top-nav .section-nav ul,.sub-nav-item {
        margin-left: .5rem;
        font-weight: 400;
    };
}

#main.home #top-nav.at-top {
    background: transparent!important;
    border: none!important;
}

#main.home #top-nav.at-top .sub-nav-item {
    top: 80px;
}

#main.home #top-nav.at-top #logo {
    --text-opacity: 1;
    color: #fff;
    color: rgba(255,255,255,var(--text-opacity));
}

@media (min-width:768px) {
    #main.home #top-nav.at-top .nav-item {
        height: 6rem;
    }

    #main.home #top-nav.at-top #logo {
        transform: scale(1.25);
    };
}

.footer-arrow {
    position: absolute;
    left: -22px;
    top: 5px;
}

#top-nav .links {
    display: none;
}

#main.home #top-nav.at-top button svg {
    --text-opacity: 1;
    color: #fff;
    color: rgba(255,255,255,var(--text-opacity));
}

#main.home #top-nav.at-top.mobile-open,#top-nav.mobile-open {
    --bg-opacity: 1!important;
    background-color: #fff!important;
    background-color: rgba(255,255,255,var(--bg-opacity))!important;
    min-height: 100vh!important;
    overflow-y: scroll!important;
}

#main.home #top-nav.at-top.mobile-open #logo,#main.home #top-nav.at-top.mobile-open a,#main.home #top-nav.at-top.mobile-open svg,#top-nav.mobile-open #logo,#top-nav.mobile-open a,#top-nav.mobile-open svg {
    --text-opacity: 1;
    color: #191a1b;
    color: rgba(25,26,27,var(--text-opacity));
}

#main.home #top-nav.at-top.mobile-open .links,#top-nav.mobile-open .links {
    display: flex;
    position: absolute;
    top: 4rem;
}

#main.home #top-nav.at-top.mobile-open .links .sub-nav-item,#main.home #top-nav.at-top.mobile-open .links ul,#top-nav.mobile-open .links .sub-nav-item,#top-nav.mobile-open .links ul {
    display: flex;
    flex-direction: column;
}

@media (min-width:768px) {
    #top-nav .links {
        display: block;
    };
}

.toc li {
    font-size: .875rem;
    margin-bottom: .75rem;
}

.toc li a:hover {
    --text-opacity: 1;
    color: #ff269e;
    color: rgba(255,38,158,var(--text-opacity));
}

.section-nav {
    display: none;
}

#top-nav .section-nav {
    display: block;
}

@media (min-width:768px) {
    #top-nav .section-nav {
        display: block;
    }

    .section-nav {
        max-width: 72rem;
        height: 2.5rem;
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255,255,255,var(--bg-opacity));
        border-width: 1px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-left: auto;
        margin-right: auto;
        font-family: code-saver,monospace;
        font-size: .875rem;
        top: .25rem;
        padding-left: 1rem;
        padding-right: 1rem;
        box-shadow: 0 3px 1px #faf77d;
        position: relative;
        z-index: 20;
    }

    .section-nav ul {
        display: flex;
        flex-wrap: wrap;
    }

    .section-nav ul a {
        height: 2.5rem;
        border-left-width: 1px;
        padding: .5rem 1rem;
    }

    .section-nav ul a:hover {
        --text-opacity: 1;
        color: #ff269e;
        color: rgba(255,38,158,var(--text-opacity));
    }

    .section-nav ul a.active {
        font-weight: 700;
        --bg-opacity: 1;
        background-color: #b8fff3;
        background-color: rgba(184,255,243,var(--bg-opacity));
        border-bottom-width: 1px;
    };
}

</style>
<div id="app" class="language-statamic">
	<main id="main" class="pt-15">
		<nav id="top-nav" x-data="{ mobile_open: false }" x-bind:class="{'mobile-open': mobile_open }" class="fixed top-0 z-50 w-full px-4 at-top">
			<div class="flex items-center justify-between max-w-6xl mx-auto">
				<a id="logo" href="/" class="relative z-50">
					<svg id="statamic-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 272.1" class="h-14 w-42">
						<path d="M172.9 195.7c10.9 0 14.9-4.7 14.9-16.2v-22.4c0-10.7 5.2-16.8 10.2-19.7 1.5-.9 1.5-3 0-4-5.2-3.3-10.2-10.2-10.2-19.4V92c0-12.4-3.4-16-14.3-16H75.6c-10.9 0-14.3 3.6-14.3 16v22c0 9.2-5 16.1-10.2 19.4-1.5.9-1.5 3.1 0 4 5 2.8 10.2 8.9 10.2 19.7v22.4c0 11.5 4 16.2 14.9 16.2h96.7zm-48.6-20.5c-11.7 0-20.2-3.5-28.1-10.4-1.3-1.2-1.8-2.7-1.8-4.2 0-1.2.3-2.5 1.2-3.5L98 154c1.2-1.5 2.5-2.2 4-2.2 1.7 0 3.3.7 5 1.8 5.4 3.5 11.4 5.5 18.6 5.5 5.5 0 9.9-2.3 9.9-7 0-12.2-40.6-5.5-40.6-32.9 0-14.7 12-22.9 27.6-22.9 11 0 19.1 3.2 25.1 7 1.5 1 2.5 3 2.5 5 0 1.2-.3 2.3-1 3.3l-1.8 2.7c-1.3 1.8-2.8 2.7-4.7 2.7-1.3 0-2.7-.5-4.2-1.2-4.5-2.3-9.2-3.5-14.9-3.5-5.9 0-9.4 3.2-9.4 6.5 0 12.5 40.6 5.7 40.6 32.3 0 14.9-12 24.1-30.4 24.1z" fill="currentColor"></path>
						<path d="M242.2 157.4c1-1.3 2.1-1.8 3.4-1.8s2.9.6 4.2 1.6c4.5 3 9.6 4.7 15.7 4.7 4.7 0 8.4-1.9 8.4-6 0-10.3-34.3-4.7-34.3-27.7 0-12.4 10.2-19.4 23.3-19.4 9.3 0 16.1 2.6 21.2 6 1.3.8 2.1 2.5 2.1 4.2 0 1-.2 1.9-.8 2.9l-1.6 2.3c-1.1 1.6-2.4 2.3-3.9 2.3-1.1 0-2.3-.5-3.6-1-3.8-1.9-7.8-3-12.5-3-4.9 0-7.9 2.6-7.9 5.5 0 10.5 34.3 4.8 34.3 27.2 0 12.5-10.2 20.3-25.7 20.3-9.9 0-17.1-3-23.7-8.7-1.1-1-1.6-2.3-1.6-3.6 0-1 .2-2.1 1-3l2-2.8zm98.2 6.6c.5.7.7 1.6.7 2.4 0 1.8-.8 3.7-2.4 4.5-4.8 2.9-9.6 4.2-15.9 4.2-14.3 0-19.7-9.3-19.7-25.6V97.9c0-2.9 2.4-5.3 5.3-5.3h5.7c2.9 0 5.3 2.4 5.3 5.3v12.4h15.3c2.9 0 5.3 2.4 5.3 5.3v4.8c0 2.9-2.4 5.3-5.3 5.3h-15.3v23.2c0 6.9 2.3 11.5 7.6 11.5 1.7 0 3.2-.2 4.5-.7 1.3-.5 2.3-.7 3.2-.7 1.8 0 3.2.8 4.4 2.9l1.3 2.1zm9.9-8.8c0-14 10.3-20.6 23.2-20.6 5.6 0 11.2 1.8 14.3 4.1v-1.9c0-9.3-3-14.3-11.8-14.3-4.8 0-7.9.7-10.9 1.7-.8.2-1.7.5-2.5.5-2.1 0-3.8-1-4.8-3l-.8-1.7c-.2-.7-.6-1.4-.6-2.3 0-1.8 1.3-3.7 3-4.5 5.5-2.5 11.8-4.2 18.3-4.2 18.8 0 25.3 9.6 25.3 26.4v33.4c0 2.9-2.4 5.3-5.3 5.3H394c-2.9 0-5.3-2.4-5.3-5.3v-2.1c-3.4 4.8-10.2 8.1-18.8 8.1-11.3-.1-19.6-7.3-19.6-19.6zm37.5-6.6c-2.9-2.1-6.5-3.1-11.1-3.1-5.4 0-10.2 2.5-10.2 7.9 0 4.8 3.9 7.5 9.1 7.5 6.8 0 10.3-3 12.3-5.7v-6.6zm67.8 15.4c.5.7.7 1.6.7 2.4 0 1.8-.8 3.7-2.4 4.5-4.8 2.9-9.6 4.2-15.9 4.2-14.3 0-19.7-9.3-19.7-25.6V97.9c0-2.9 2.4-5.3 5.3-5.3h5.7c2.9 0 5.3 2.4 5.3 5.3v12.4h15.3c2.9 0 5.3 2.4 5.3 5.3v4.8c0 2.9-2.4 5.3-5.3 5.3h-15.3v23.2c0 6.9 2.3 11.5 7.6 11.5 1.7 0 3.2-.2 4.5-.7 1.3-.5 2.3-.7 3.2-.7 1.8 0 3.2.8 4.4 2.9l1.3 2.1zm9.9-8.8c0-14 10.3-20.6 23.2-20.6 5.6 0 11.2 1.8 14.3 4.1v-1.9c0-9.3-3-14.3-11.8-14.3-4.8 0-7.9.7-10.9 1.7-.8.2-1.7.5-2.5.5-2.1 0-3.8-1-4.8-3l-.8-1.7c-.2-.7-.6-1.4-.6-2.3 0-1.8 1.3-3.7 3-4.5 5.5-2.5 11.8-4.2 18.3-4.2 18.8 0 25.3 9.6 25.3 26.4v33.4c0 2.9-2.4 5.3-5.3 5.3h-3.7c-2.9 0-5.3-2.4-5.3-5.3v-2.1c-3.4 4.8-10.2 8.1-18.8 8.1-11.2-.1-19.6-7.3-19.6-19.6zm37.5-6.6c-2.9-2.1-6.5-3.1-11.1-3.1-5.4 0-10.2 2.5-10.2 7.9 0 4.8 3.9 7.5 9.1 7.5 6.8 0 10.3-3 12.3-5.7v-6.6zm48.2-31.3c4.5-5 12-8.1 19.8-8.1 9.7 0 16.2 4.4 18.5 10.2 4.5-6 11.6-10.2 21.4-10.2 11.6 0 20.3 5.7 20.3 23.2v36.2c0 2.9-2.4 5.3-5.3 5.3h-5.7c-2.9 0-5.3-2.4-5.3-5.3v-32.1c0-7.9-3.2-12.2-10.9-12.2-6.1 0-10.9 3-13.1 7.3 0 1 .1 3.2.1 4.7v32.1c0 2.9-2.4 5.3-5.3 5.3H580c-2.9 0-5.3-2.4-5.3-5.3v-33c0-6.7-3.7-11-10.5-11-5.7 0-10.4 2.5-13.3 6.8v37.4c0 2.9-2.4 5.3-5.3 5.3h-5.7c-2.9 0-5.3-2.4-5.3-5.3v-53.1c0-2.9 2.4-5.3 5.3-5.3h5.7c2.9 0 5.3 2.4 5.3 5.3v1.8h.3zm116.7-29.9c0 6.5-4.7 10.2-9.3 10.2-5.5 0-10.2-3.7-10.2-10.2 0-5.7 4.7-9.4 10.2-9.4 4.6 0 9.3 3.7 9.3 9.4zm-6.8 22.9c2.9 0 5.3 2.4 5.3 5.3v53c0 2.9-2.4 5.3-5.3 5.3h-5.7c-2.9 0-5.3-2.4-5.3-5.3v-53.1c0-2.9 2.4-5.3 5.3-5.3h5.7v.1zm68 16.2c-3.8-1.8-7.1-2.5-11.2-2.5-9.1 0-17.7 6.9-17.7 18 0 11.2 8.7 18.2 18.3 18.2 5 0 8.6-1.3 12.3-3.7 1.1-.7 2.3-1.1 3.4-1.1 1.7 0 3.2.7 4.4 2.1l2.4 3c.7.7 1 1.8 1 2.9 0 1.7-.7 3.6-1.9 4.5-7.6 6.1-14.3 7.5-22.2 7.5-21 0-34.9-13.3-34.9-33.3 0-18.5 13.5-33.3 32.9-33.3 8.5 0 14.7 1.4 20.9 4.8 1.6.8 2.5 2.9 2.5 4.7 0 .8-.1 1.6-.6 2.3l-2.1 3.7c-1.1 1.8-2.9 3-4.8 3-.8-.2-1.8-.3-2.7-.8z" fill="currentColor"></path>
					</svg>
				</a>
				<button x-show="! mobile_open" x-on:click="mobile_open = true" class="p-2 outline-none md:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 30 30" width="30" height="30">
						<g transform="matrix(1.25,0,0,1.25,0,0)">
							<path d="M2.25 18.003L21.75 18.003" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
							<path d="M2.25 12.003L21.75 12.003" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
							<path d="M2.25 6.003L21.75 6.003" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
						</g>
					</svg>
				</button>
				<button x-bind:class="{ 'text-white': !mobile_open, 'text-black': mobile_open }" x-show="mobile_open" x-on:click="mobile_open = false" class="p-2 text-white outline-none md:hidden" style="display: none;">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 30 30" width="30" height="30" class="w-6 h-6">
						<g transform="matrix(1.25,0,0,1.25,0,0)">
							<path d="M0.75 23.249L23.25 0.749" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
							<path d="M23.25 23.249L0.75 0.749" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
						</g>
					</svg>
				</button>
				<div class="px-4 pb-8 md:flex links md:px-0 md:pb-0">
					<ul class="flex space-y-6 font-mono text-sm font-bold text-blue-darkest md:items-center md:space-y-0">
						<li x-data="{ open: false }" x-on:mouseover="open = true" x-on:mouseleave="open = false"><a x-bind:class="{'-rotate-3': open }" href="" class="nav-item"><span class="items-center md:flex md:h-full">
									Product
								</span></a>
							<ul x-bind:class="{ 'sub-nav-item-open': open }" class="space-y-4 sub-nav-item"><a href="/pricing">Pricing</a> <a href="/roadmap">Roadmap</a> <a href="/addons">Addons</a> <a href="/stories">Customer Stories</a>
								<li><a href="/vs/wordpress">Compare to WordPress</a></li>
							</ul>
						</li>
						<li x-data="{ open: false }" x-on:mouseover="open = true" x-on:mouseleave="open = false"><a x-bind:class="{'-rotate-3': open }" href="" class="nav-item"><span class="items-center md:flex md:h-full">
									Resources
								</span></a>
							<ul x-bind:class="{ 'sub-nav-item-open': open }" class="space-y-4 sub-nav-item"><a href="/blog">Blog</a> <a href="https://statamic.dev">Documentation</a> <a href="/discord">Discord</a> <a href="/forum">Forum</a> <a href="/support">Support</a></ul>
						</li>
						<li><a href="/marketplace" class="nav-item text-pink"><span class="items-center md:flex md:h-full">
									Marketplace
								</span></a>
							<ul class="space-y-4 sub-nav-item md:hidden"><a href="/addons">Addons</a> <a href="/cart">Cart</a></ul>
						</li>
						<li><a href="/partners" class="nav-item hover:-rotate-3"><span class="items-center md:flex md:h-full">
									Partners
								</span></a></li>
						<li x-data="{ open: false }" x-on:mouseover="open = true" x-on:mouseleave="open = false"><a href="/sign-in" class="nav-item hover:-rotate-3"><span class="items-center md:flex md:h-full"><span class="md:hidden">Account</span> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 32 32" width="32" height="32" class="hidden h-6 drop-shadow-yellow md:block">
										<g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)">
											<path d="M.75,6.751V2.25A1.5,1.5,0,0,1,2.25.75h4.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
											<path d="M23.25,6.751V2.25a1.5,1.5,0,0,0-1.5-1.5h-4.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
											<path d="M.75,17.25v4.5a1.5,1.5,0,0,0,1.5,1.5h4.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
											<path d="M23.25,17.25v4.5a1.5,1.5,0,0,1-1.5,1.5h-4.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
											<path d="M7.875 8.625 A4.125 4.125 0 1 0 16.125 8.625 A4.125 4.125 0 1 0 7.875 8.625 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
											<path d="M18.337,18.75a6.712,6.712,0,0,0-12.674,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
										</g>
									</svg></span></a>
							<ul x-bind:class="{ 'sub-nav-item-open': open }" class="space-y-4 sub-nav-item"><a href="/sign-in">Sign In</a> <a href="/register">Create Account</a></ul>
						</li>
						<li><a href="/get-started" class="relative z-10 md:ml-4 button">Get Started</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="relative z-20 w-full">
			<nav class="section-nav">
				<ul class="flex items-center"><a href="https://statamic.com/marketplace" class="pl-0 font-bold border-l-0">The Marketplace</a> <a href="https://statamic.com/addons" class="active">
						Addons
					</a> <a data-original-title="null" class=" has-tooltip">
						Starter Kits
					</a></ul>
				<div class="flex items-center flex-1">
					<div class="relative flex-1 h-full sub-nav-search"><input type="text" placeholder="Search the marketplace" class="w-full px-3 py-2 border-l border-r outline-none">
						<!---->
						<!---->
					</div> <a href="https://statamic.com/cart" class="flex items-center pl-4 space-x-2 hover:text-pink"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 24 24" width="24" height="24">
							<g transform="matrix(1,0,0,1,0,0)">
								<path d="M6,19.125h9.921A1.5,1.5,0,0,0,17.4,17.876l2.637-15.5a1.5,1.5,0,0,1,1.479-1.248H22.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
								<path d="M7.875,21.375a.375.375,0,1,1-.375.375.375.375,0,0,1,.375-.375" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
								<path d="M15.375,21.375A.375.375,0,1,1,15,21.75a.375.375,0,0,1,.375-.375" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
								<path d="M17.953,14.625H5.882a3,3,0,0,1-2.91-2.272l-1.45-5.8a.75.75,0,0,1,.728-.932H19.484" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
							</g>
						</svg> <span>empty</span></a>
				</div>
			</nav>
		</div>
		<div class="py-12 bg-splatter">
			<div class="max-w-6xl px-4 mx-auto">
				<h1 class="mb-6 text-5xl font-black font-blue-darkest text-blue-darkest">Addons</h1>
				<div class="flex flex-wrap md:flex-no-wrap">
					<div class="relative order-last w-full mt-8 md:order-first md:w-1/4 md:pr-16 md:mt-0">
						<div class="relative sticky md:top-24">
							<div class="absolute z-0 w-32 h-screen bg-itchy mb:hidden -top-4 left-8"></div>
							<div class="relative z-10 p-2 bg-white border shadow">
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons" class="font-bold text-grey-dark hover:text-pink-hot text-pink-hot">
										All
									</a></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/api" class="text-grey-dark hover:text-pink-hot ">
										API
									</a> <span class="pl-1 text-sm opacity-75 text-grey">14</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/blog" class="text-grey-dark hover:text-pink-hot ">
										Blog
									</a> <span class="pl-1 text-sm opacity-75 text-grey">2</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/cli" class="text-grey-dark hover:text-pink-hot ">
										CLI
									</a> <span class="pl-1 text-sm opacity-75 text-grey">10</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/comments" class="text-grey-dark hover:text-pink-hot ">
										Comments
									</a> <span class="pl-1 text-sm opacity-75 text-grey">5</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/commerce" class="text-grey-dark hover:text-pink-hot ">
										Commerce
									</a> <span class="pl-1 text-sm opacity-75 text-grey">10</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/control-panel" class="text-grey-dark hover:text-pink-hot ">
										Control Panel
									</a> <span class="pl-1 text-sm opacity-75 text-grey">42</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/css" class="text-grey-dark hover:text-pink-hot ">
										CSS
									</a> <span class="pl-1 text-sm opacity-75 text-grey">12</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/dates" class="text-grey-dark hover:text-pink-hot ">
										Dates
									</a> <span class="pl-1 text-sm opacity-75 text-grey">7</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/enhancement" class="text-grey-dark hover:text-pink-hot ">
										Enhancement
									</a> <span class="pl-1 text-sm opacity-75 text-grey">55</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/fieldtype" class="text-grey-dark hover:text-pink-hot ">
										Fieldtype
									</a> <span class="pl-1 text-sm opacity-75 text-grey">40</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/filter" class="text-grey-dark hover:text-pink-hot ">
										Filter
									</a> <span class="pl-1 text-sm opacity-75 text-grey">1</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/forms" class="text-grey-dark hover:text-pink-hot ">
										Forms
									</a> <span class="pl-1 text-sm opacity-75 text-grey">15</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/integration" class="text-grey-dark hover:text-pink-hot ">
										Integration
									</a> <span class="pl-1 text-sm opacity-75 text-grey">38</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/javascript" class="text-grey-dark hover:text-pink-hot ">
										JavaScript
									</a> <span class="pl-1 text-sm opacity-75 text-grey">14</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/landing" class="text-grey-dark hover:text-pink-hot ">
										Landing Page
									</a> <span class="pl-1 text-sm opacity-75 text-grey">1</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/maps" class="text-grey-dark hover:text-pink-hot ">
										Maps
									</a> <span class="pl-1 text-sm opacity-75 text-grey">8</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/media" class="text-grey-dark hover:text-pink-hot ">
										Media
									</a> <span class="pl-1 text-sm opacity-75 text-grey">15</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/minimal" class="text-grey-dark hover:text-pink-hot ">
										Minimal
									</a> <span class="pl-1 text-sm opacity-75 text-grey">3</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/modifier" class="text-grey-dark hover:text-pink-hot ">
										Modifier
									</a> <span class="pl-1 text-sm opacity-75 text-grey">19</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/social-media" class="text-grey-dark hover:text-pink-hot ">
										Social Media
									</a> <span class="pl-1 text-sm opacity-75 text-grey">10</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/spam" class="text-grey-dark hover:text-pink-hot ">
										Spam
									</a> <span class="pl-1 text-sm opacity-75 text-grey">8</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/suggest-mode" class="text-grey-dark hover:text-pink-hot ">
										Suggest Mode
									</a> <span class="pl-1 text-sm opacity-75 text-grey">3</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/tag" class="text-grey-dark hover:text-pink-hot ">
										Tag
									</a> <span class="pl-1 text-sm opacity-75 text-grey">58</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/tool" class="text-grey-dark hover:text-pink-hot ">
										Tool
									</a> <span class="pl-1 text-sm opacity-75 text-grey">48</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/users" class="text-grey-dark hover:text-pink-hot ">
										Users
									</a> <span class="pl-1 text-sm opacity-75 text-grey">9</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/utility" class="text-grey-dark hover:text-pink-hot ">
										Utility
									</a> <span class="pl-1 text-sm opacity-75 text-grey">53</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/utility" class="text-grey-dark hover:text-pink-hot ">
										Utility
									</a> <span class="pl-1 text-sm opacity-75 text-grey">2</span></div>
								<div class="flex items-center justify-between mb-2 font-mono text-sm text-md"><a href="https://statamic.com/addons/tags/widget" class="text-grey-dark hover:text-pink-hot ">
										Widget
									</a> <span class="pl-1 text-sm opacity-75 text-grey">7</span></div>
							</div>
						</div>
					</div>
					<div class="w-full md:w-3/4">
						<div class="flex items-center mb-3">
							<div class="flex flex-wrap items-center w-full p-4 mb-8 font-mono border bg-yellow shadow-bleed-yellow md:flex-no-wrap md:space-x-6"><select name="version" class="text-sm input-select z-1">
									<option value="">All Statamic Versions</option>
									<option value="3">Statamic 3</option>
									<option value="2">Statamic 2</option>
								</select> <select name="sort" class="text-sm input-select z-1">
									<option value="most-popular">Sort by Most Popular</option>
									<option value="name">Sort by Name</option>
									<option value="newest">Sort by Newest</option>
								</select> <select name="layout" class="text-sm input-select z-1">
									<option value="grid">Show in Grid</option>
									<option value="list">Show in List</option>
								</select></div>
						</div>
						<div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"><a href="https://statamic.com/addons/jonassiewertsen/oh-dear" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/x392H4qD12zwf59jT4wZQVwPXZ8pevpizvhdFxpv.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Oh Dear Integration</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A Oh Dear integration for Statamic v3. Check your monitored uptime, SSL certificates, mixed content and broken links easily from your Statamic control panel.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jonassiewertsen/statamic-butik" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/rZUFyc4JBRA9DbndltFHDsnE0eW15bDRdhUuOCM5.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Butik</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">"Butik" is a Scandinavian term for a small to medium sized shop, precisely what this has been crafted for. It just works.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$199</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/matt-rothenberg/location-fieldtype" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/v5vh0IGLSmvgB8w7gwvPQkr6dJOUhItSOQxnEIJ4.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/VYXldboY6xDtu2zTtPut83PoMPvaapNmqmki0pON.jpeg?fit=max&amp;w=300&amp;h=300" alt="Matt Rothenberg" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Location</div>
										<p class="text-xs">Matt Rothenberg</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A Location Autocomplete Field for Statamic V3</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jonassiewertsen/how-to-addon" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/urmeN7X40Fjmi08VfD5bRgAxERTBNmSJMJ5lDart.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">How To Addon</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Would you like to use less time to explain how your specific Statamic site has been build? This is your Addon then!</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$19</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jonassiewertsen/external-link-fieldtype" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/TwiaXo2SY5YRz5XhfkNq4crqrbhdEMMqFgiZl9Gh.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">External Link Fieldtype</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Dont't worry! This fieldtype makes sure to use https:// and gives you a button to test the link destination.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jrc9designstudio/2fa" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/mtIzvAhBiSHEUYNg1zHVrStDnERVFxaEcSfvftRu.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/uM3u1tSMbErKrEvSqmKdE4POgHFs1CwUKJ7BNF50.jpeg?fit=max&amp;w=300&amp;h=300" alt="JRC9 Design Studio" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">2FA</div>
										<p class="text-xs">JRC9 Design Studio</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Two Factor Login for Statamic V3</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$30</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/matt-rothenberg/webmentions" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/HDAKhpoPNxwqrWToBVf3map3bbwW25PGQ0CaXXa8.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/VYXldboY6xDtu2zTtPut83PoMPvaapNmqmki0pON.jpeg?fit=max&amp;w=300&amp;h=300" alt="Matt Rothenberg" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Webmentions</div>
										<p class="text-xs">Matt Rothenberg</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A custom tag for using Webmention.io data on your Statamic site!</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jrc9designstudio/login-notify" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/tr3s93aacwXfWhshTXNlZP1pLRUXXHHX6mBKYWS4.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/uM3u1tSMbErKrEvSqmKdE4POgHFs1CwUKJ7BNF50.jpeg?fit=max&amp;w=300&amp;h=300" alt="JRC9 Design Studio" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Login Notify</div>
										<p class="text-xs">JRC9 Design Studio</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Login notifications for new logins for Statamic V3</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$15</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/pinboard" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/61C0I0d8NlGkIvHtlGqSeOpAMY1iwtq7R3Nycgam.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Pinboard</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Pulls tagged links from your Pinboard account</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/spatie/responsive-images" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/E4whHNy9uxIXAdbOGf1978nAOeLMiTYBcBWAQxFZ.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/4ypqNkfRzFzHMX7KICZtvHSAbRieO970v1Eu7fb9.png?fit=max&amp;w=300&amp;h=300" alt="Spatie" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Responsive Images</div>
										<p class="text-xs">Spatie</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Automatically create responsive images</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/njed/toc" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/7E7JgLAzubY1NJIjFfvR2sloqEv3jnnMIshoJ7s1.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/7h4kUhhObwejsX4JwkoUG911MIByoY3YIfm3JWXw.jpeg?fit=max&amp;w=300&amp;h=300" alt="Nicholas Jedamzik" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Toc</div>
										<p class="text-xs">Nicholas Jedamzik</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Auto-Generated Table Of Contents from Markdown Fields</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/anvil" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/GTZmFCjU2Kk4UfC7ZJWw2c7PG9S1cYzpAx7gPZ7Z.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Anvil</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Forge - deploy &amp; see latest deployment log</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jrc9designstudio/unique-svg-css-v2" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/GdkxjFMheJ36exxVBTGhFV3FeAXl6uIvUl8j6QYK.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/uM3u1tSMbErKrEvSqmKdE4POgHFs1CwUKJ7BNF50.jpeg?fit=max&amp;w=300&amp;h=300" alt="JRC9 Design Studio" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Unique SVG CSS</div>
										<p class="text-xs">JRC9 Design Studio</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Avoid one SVG classes overwriting the CSS of another SVG.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$5</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/octoper/inline-assets-tag" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/I7a7hb9HdUY8KmNX3srHSfVgRpcMEwbFMMX4V2si.jpeg?fit=max&amp;w=300&amp;h=300" alt="Vaggelis Yfantis" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Inline Assets</div>
										<p class="text-xs">Vaggelis Yfantis</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Inline CSS or JS file for Statamic 3</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/duplicator" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/U7ml9sdQVgNZVxS5SzIko7403npdfY851huksfKK.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Duplicator</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Duplicate Entries in Statamic 3</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/statamic/seo-pro" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/YWbI8mGHSt4wbbrzAhiTyLM79nRQJZVZW0sSD8Er.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/V2npDLnVqlRkfEasZJRkCTxxjH35QUZtatIc4tQW.jpeg?fit=max&amp;w=300&amp;h=300" alt="Statamic" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none text-pink">SEO Pro</div>
										<p class="text-xs">Statamic</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">An all-in-one site reporting, metadata mastering, OG managing, Twitter card making, sitemap generating addon.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$49</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/oh-see-software/oh-see-gists" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/qECakbnAx93BPXUbKKhJVnfAui2UVrlIbfQ3JhnT.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/3lLOQUP7qEEtgtwYBiyVbPyMXofpTU117nM1roSQ.png?fit=max&amp;w=300&amp;h=300" alt="Oh See Software" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Oh See Gists</div>
										<p class="text-xs">Oh See Software</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A Statamic v3 add-on to use GitHub's Gists to host code blocks.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/charge" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/XKz28JhFXqCB3fdTFXJspdZEaBGn2fdt6Obupe7T.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Charge</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">One-time or recurring billing via Stripe</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$99</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/mailchimp" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/pBk49c7eidktvX9QIordf6HLBclTEKxT2TBmDZJP.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Mailchimp</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Subscribes a registering user or a contact form to a Mailchimp list</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$29</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/simple-commerce" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/fAyy25ljoz6X8T2qbRjGjZ9vdTD9lBc3jdY7LcOn.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Simple Commerce</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Simple Commerce is a simple e-commerce addon for Statamic 3. Built to feel as native to Statamic as possible.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$99</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jonassiewertsen/documentation" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/fs7TCgAHXoZEaDTKKBeZCh3245mNLRQbkAtcowX4.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Documentation</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A Statamic Addon to save any kind of documentation inside your control panel</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$25</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/austencam/instagram-feed" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/r4df98x54RFA5VXRI4bXLoeWgfehDcho6zglaxxk.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/E3vHDVjpkBefjrbdByU6F7LIgrOrgMs3av6lKVVZ.png?fit=max&amp;w=300&amp;h=300" alt="Austen Cameron" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Instagram Feed</div>
										<p class="text-xs">Austen Cameron</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Easily embed instagram feeds with this fieldtype for Statamic 3+</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jonassiewertsen/livewire" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/Iq1NPhoQ0Xg7BgCINmsTooWyjJfTC5UBodaHpDoN.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/GIc5xPkoyaxqGJL3D3UgK3xf6gU2Y1DT6WLezZbY.jpeg?fit=max&amp;w=300&amp;h=300" alt="Jonas Siewertsen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Livewire</div>
										<p class="text-xs">Jonas Siewertsen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A Laravel Livewire integration for Statamics Antlers template engine.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/link-it" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/XNS6N5qmgcGdrjfGdHSY6BTS7Bxbfe93uCbPUtfW.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">LinkIt</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A fieldtype to link to anything.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$25</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/cnj/seotamic" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/gY15srRETGv95wJ2AwqaVwR5kI6GkZZJDA9eCxiV.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="/img/marketplace/rubber-duck.svg" alt="CNJ" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Seotamic - SEO Addon</div>
										<p class="text-xs">CNJ</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A simple SEO add-on for basic Statamic functionality</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/spatie/mailcoach" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/3lRp4gTzb3bqpJg0BjzfB0Oj9RWg5KHQB9nMTs3O.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/4ypqNkfRzFzHMX7KICZtvHSAbRieO970v1Eu7fb9.png?fit=max&amp;w=300&amp;h=300" alt="Spatie" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Mailcoach</div>
										<p class="text-xs">Spatie</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Display a Mailcoach summary inside Statamic</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/cookie-notice" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/CvgVK1vbLrpua7jxPAqdI3vNKLJ4C2tMPodkPEat.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Cookie Notice</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Simple and Customisable Cookie Notice for Statamic</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$29</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/minify" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/1lIzSLVfWCjZDVo3UrExJ0Qb2TFSmY6v1Pg6TAnD.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Minify</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Minify your site's CSS &amp; JavaScript when it changes</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/button-box" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/xPLH32zPWlE5g31RtnxfgQ6Rv0DrYrFO3yTihefg.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Button Box</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Create beautiful choices for your clients</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$15</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aerni/snipcart" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/KAKhiD9E28VV5NOJczb9oN4TYATpZi7xB0671bmt.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/Il0wU2FMAT0wWDFQt9S1OXOHDD4cKdK4dyW0xO9H.jpeg?fit=max&amp;w=300&amp;h=300" alt="Michael Aerni" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Snipcart</div>
										<p class="text-xs">Michael Aerni</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">The easiest way to create a Snipcart shop on Statamic. Period.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$69</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/position-fieldtype" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/nncvQkmzYgylV17hNiiuTRYPjRTAz43jvknMuK6p.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Position Fieldtype</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Provide better UX to clients by letting them pick from icons.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$15</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/color-swatches" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/TTS4ID0ZsZyzm9nnvrlPVmxxfulh51POP9gpVf07.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Color Swatches</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Let clients choose from a predefined set of color swatches.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$15</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/luke/api-select" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/N9AMUaWSfAfisU4V5qIxwGcDFBKbStbymS7wpzqs.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/8rYFIg8JL9nUQB4cJiWtEFErF4s1VJb0GOAOjoia.jpeg?fit=max&amp;w=300&amp;h=300" alt="Luke Youell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">API Select</div>
										<p class="text-xs">Luke Youell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Utilise (and cache) API endpoints for your Select Fieldtype options.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$20</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/markdown-highlight" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/KmymLRegCsEcDXxsuMeAWO9vkjsmcrc3Tia7ozqZ.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Markdown Highlight</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">This Addon provides pre-rendered syntax highlighting based on highlight.js, so no need for any extra JavaScript to get some color in your code samples!</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/blade" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Blade Directives</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Access Statamic content in your Blade templates</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/sc-digital-products" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/GZrklK8tySBkYzKdsPRYy0aKpO4Cdo7TTjsCID27.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Simple Commerce - Digital Products</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Sell Digital Products with Simple Commerce</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/4rn0/imageoptimizer-v3" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/VAsey4nVRKXF0JqmJqiwMuiXXDvEpKkLx25f7S56.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/ZHFiyBEahvTPvpjrGqBiaqgB5zVBYxaLHp6Fgvxf.png?fit=max&amp;w=300&amp;h=300" alt="Arno Hoogma" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">ImageOptimizer (Statamic v3)</div>
										<p class="text-xs">Arno Hoogma</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Optimizes new Asset and Glide images</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$10</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aerni/imagekit" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/QuuMch98QUjoUhE1E5ydxoKbhhibkabJPda6Pbxe.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/Il0wU2FMAT0wWDFQt9S1OXOHDD4cKdK4dyW0xO9H.jpeg?fit=max&amp;w=300&amp;h=300" alt="Michael Aerni" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">ImageKit</div>
										<p class="text-xs">Michael Aerni</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">This addon provides an easy way to generate ImageKit URLs</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aerni/social-links" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/D5FSLXLI903oNT0ye9ILSBFJ4sLZbUO2BBKrXM7E.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/Il0wU2FMAT0wWDFQt9S1OXOHDD4cKdK4dyW0xO9H.jpeg?fit=max&amp;w=300&amp;h=300" alt="Michael Aerni" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">SocialLinks</div>
										<p class="text-xs">Michael Aerni</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Easily generate sharing links for your favorite social media channels.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/optimo-apps/statamic-rich-snippet" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/03Fa5WrYPRKoEvRaBTJZChGdQ53hSVmXbswCrqAn.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/0yRZ8nCQ1zrKEn2bkzqHwN9IlqQGh82XoKCSgqcn.png?fit=max&amp;w=300&amp;h=300" alt="Optimo Apps" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Schema.Org Json-Ld</div>
										<p class="text-xs">Optimo Apps</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Schema Json-ld Rich Snippet , supported type BlogPost, News Article, Article, Organization and Webpage</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$19</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jimblue/htmlmin" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/mdewMtBTPU4mCRuF0dJUyIxd76cAoRh6Uzc4Db4d.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/fmqJeoopo4pEow07R3oW09fa6MjDgzWiQF0CJa5a.png?fit=max&amp;w=300&amp;h=300" alt="Jim Blue" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">HTML Min</div>
										<p class="text-xs">Jim Blue</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Improve page speed by compressing HTML, inline JS and inline CSS</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$15</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/visuellverstehen/classify" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/RZG6woixeFgeg6d6exOebVidRMRsEbAGr7ihRyZ4.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/RXvFKyEuY3jFnwck9St46eMKWslqnwRy7NcPBUxS.png?fit=max&amp;w=300&amp;h=300" alt="visuellverstehen" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Classify</div>
										<p class="text-xs">visuellverstehen</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">This addon will provide a config to set stylesets for the bard editor.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/captcha" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/IVg8YlIMmT4F30hkZmMTuB1shWnXAZg2C68mYyDJ.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Captcha</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Protect your Statamic forms using a Captcha service.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/splash" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/BoH6thi06kbKP1SaP3JAF8L1PyvBTxg3Uh5QGnYY.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Splash</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Browse Unsplash images right from the CP.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/impersonator" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/i90aICVEYDrV23IOzaKmYWFsWAJPVBt0t5Y4mL96.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Impersonator</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Give Super Admins the ability to authenticate as any user for easier debugging.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/color-extractor" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/hNXsWxlwY7NfmG6Bo4qdYU9IM4zRG57rMfX6Uyqg.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Color Extractor</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Extract colors from images.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/logbook" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/dH0z6Zzw9eqCCpnVXDfrfq0vWQAxPX9YiizI3xe1.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Logbook</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">View log files in the CP.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aryeh-raber/font-awesome" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/FQVx2XnDla9IHSdBAIicTAnr4OvmNRapNOszIHMo.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/vj5XLdwgKnTgsDDVRdMw8JpAEDlCE4fW3o72vYDO.png?fit=max&amp;w=300&amp;h=300" alt="Aryeh Raber" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">FontAwesome</div>
										<p class="text-xs">Aryeh Raber</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Typeahead search for FontAwesome icons in the CP and easily output icons in templates using tags.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/optimo-apps/statamic-bard-text-align" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/KTQetGnZAjjpueZFyOyc8j8AN0ymfFJlhIYXAdid.gif??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/0yRZ8nCQ1zrKEn2bkzqHwN9IlqQGh82XoKCSgqcn.png?fit=max&amp;w=300&amp;h=300" alt="Optimo Apps" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Bard Text Align</div>
										<p class="text-xs">Optimo Apps</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Bard Text Align Extension</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/austencam/socialize" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/fUC1X8RgHdr525zImZxjJwHQIQnIAcBIrA3JQVLl.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/E3vHDVjpkBefjrbdByU6F7LIgrOrgMs3av6lKVVZ.png?fit=max&amp;w=300&amp;h=300" alt="Austen Cameron" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Socialize</div>
										<p class="text-xs">Austen Cameron</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Easily add and configure social sharing buttons for your site</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/octoper/html-minify" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/I7a7hb9HdUY8KmNX3srHSfVgRpcMEwbFMMX4V2si.jpeg?fit=max&amp;w=300&amp;h=300" alt="Vaggelis Yfantis" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">HTML Minify</div>
										<p class="text-xs">Vaggelis Yfantis</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Statamic v3 Addon to minify HTML.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jimblue/mapbox" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/LeLWlpKjRGl0uPVUUHMcWNyessaIh7Gjom51LBLL.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/fmqJeoopo4pEow07R3oW09fa6MjDgzWiQF0CJa5a.png?fit=max&amp;w=300&amp;h=300" alt="Jim Blue" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Mapbox</div>
										<p class="text-xs">Jim Blue</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">The simpler way to add amazing map to your website</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$25</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/octoper/blade-components" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/I7a7hb9HdUY8KmNX3srHSfVgRpcMEwbFMMX4V2si.jpeg?fit=max&amp;w=300&amp;h=300" alt="Vaggelis Yfantis" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Laravel Blade Components</div>
										<p class="text-xs">Vaggelis Yfantis</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A simple integration for Laravel Blade components in Statamic.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aerni/factory" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/HEM3GmZDYyQIjVXI6Uaxwd4zKPW12lTcReE9JmlV.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/Il0wU2FMAT0wWDFQt9S1OXOHDD4cKdK4dyW0xO9H.jpeg?fit=max&amp;w=300&amp;h=300" alt="Michael Aerni" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Factory</div>
										<p class="text-xs">Michael Aerni</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">The easy way to quickly whip up fake Statamic content</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/Phpsa/statamic-analytics" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/JJpFOzEOLnc7aBuAoM5Yw7iMAIVkSbsZjGSAgxe8.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="/img/marketplace/zombie.svg" alt="Phpsa" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Statamic Analytics</div>
										<p class="text-xs">Phpsa</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Display google analytics widgets on your control panel</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$5</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/Phpsa/free-shipping-simple-commerce" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/sHS6iFZkO8dgwrUm9p3E7TFJI8fLccSMcWTpskzo.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="/img/marketplace/parking-spot.svg" alt="Phpsa" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Free Shipping addon for Simple Commerce</div>
										<p class="text-xs">Phpsa</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Free shipping addon for Simple Commerce</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$5</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/pattern/business-mode" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/ZsmhT1CVQO7Gub7AA3uNeMpbq3a12EkHMjTAyfO3.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/FA1GYaMVXSDSpqFs3ah0eYK5jf1WQO4PSrEw6ylG.png?fit=max&amp;w=300&amp;h=300" alt="Pattern" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Business Mode</div>
										<p class="text-xs">Pattern</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">It’s business time</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/lbeauvisage/instagram-user-feed-using-API" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/GZIIeJarNaIkIW0XJO9JQyLzaEYEfRhF10scrJAQ.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/as4KVJuHyO6TZfx2LwB8o5Sde7qquGkkK9gHrcfD.jpeg?fit=max&amp;w=300&amp;h=300" alt="Laurent Beauvisage" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Instagram user feed using API</div>
										<p class="text-xs">Laurent Beauvisage</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">integrate Instagram Feed using Instagram Basic Display API</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/gioppy/metatags" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/dy7QSBVTauAM4wr2ZLEOUtBbKc7FbyFKp37p6rgH.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/bn3aa6o7GrarE8Mx5jM0S0SoaWa8o7KYAC3IQrzn.png?fit=max&amp;w=300&amp;h=300" alt="Giovanni Buffa" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Metatags</div>
										<p class="text-xs">Giovanni Buffa</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">An addon for managing and customizing any meta tag!</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/highland/array-get" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/MhGX8zUjqaCMIOjSlmPW0uPhOEBWlhswe97odtKw.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/3hLe9TQQ6lwKqUosiLpIbAAf5qDkvDubpEjJmPiN.png?fit=max&amp;w=300&amp;h=300" alt="Highland" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Array Get</div>
										<p class="text-xs">Highland</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Laravel's array_get() / Arr::get() helper for Statamic.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/simonridley/tracking-code-manager" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/ZPDhV4xreQhUuQv4J38DZQd9qCU7dEKddKIKB0hz.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/PD27zJy6TN3SWiIfOR83CsW9LNsqlDeN1gZJq05D.jpeg?fit=max&amp;w=300&amp;h=300" alt="Simon Ridley" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Tracking Code Manager</div>
										<p class="text-xs">Simon Ridley</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">For managing your various tracking/analytics and pixel scripts</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/akismet" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/zflwHZkBbcVp6uY3gWjijJ5KR0S0Amr27Ah12Zj2.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Akismet</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Prevent spam in your contact forms and user registrations.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$39</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/codedge/statamic-magiclink" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/GHhR7ZifzggQEl6NfdaDEgNH0LQbrTfANkUBiAJi.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/P3fvHWmi9ut5xa4ezRMo3yv6CvaP1h9g4CqdNpyE.png?fit=max&amp;w=300&amp;h=300" alt="codedge" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">MagicLink</div>
										<p class="text-xs">codedge</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Use magic links to login to Statamics Control Panel.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$25</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/redirect" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/p4nr1z2tPnotsUjDeFPvSmVSe5d8WuqtuAZ1DA8z.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Redirect</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Redirect allows you to redirect legacy URLs, so that you don't lose SEO value when rebuilding &amp; restructuring a website.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$29</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/jrc9designstudio/meili-search" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/0vhk1T6uaugSUSJqCW1L5sL6fBpZpnSvokFOjm9T.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/uM3u1tSMbErKrEvSqmKdE4POgHFs1CwUKJ7BNF50.jpeg?fit=max&amp;w=300&amp;h=300" alt="JRC9 Design Studio" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">MeiliSearch</div>
										<p class="text-xs">JRC9 Design Studio</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Use MeiliSearch to provide instant search</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$20</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/rias/data-import" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/jJalKeZMFWgnrcVAyXxnOpzmNvry91g8AdGDyYvC.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/1Q9wgNIrSY91OlEZSYuQqk9iilr45C7w5G8ZldC1.png?fit=max&amp;w=300&amp;h=300" alt="Rias.be" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Data Import</div>
										<p class="text-xs">Rias.be</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Import data from a CSV into a collection.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/serieseight/uuid" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/EaMMiL7LVkFY9pQhUoCpByrcphQ0WVmAVw33Vmwx.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/mgpnqJ3zBGBUAzUksXYYTxXzzrb9q2IIj0AGpRIH.jpeg?fit=max&amp;w=300&amp;h=300" alt="Series Eight" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Uuid</div>
										<p class="text-xs">Series Eight</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">One of its kind; unlike anything else</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/stillat/meerkat-statamic-3" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/BoOdYEeLiFO1VeYJfLovicIrmKDCUYakUJrqurYW.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/tN0ZHLYuyosGcI9durNAP0IvyMuc2sxoZlaEneKy.png?fit=max&amp;w=300&amp;h=300" alt="John Koster" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Meerkat Comments for Statamic 3 (Beta 2)</div>
										<p class="text-xs">John Koster</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Meerkat 2 is an extremely powerful, yet easy-to-use comment platform for Statamic 3. Meerkat 2 allows designers and developers to easily build comment threads into their existing projects, allowing them to retain their user engagement data.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$39</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/aerni/zipper" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/ArIZK3MCI7iXwKaFX9pVf3LGO5Bdxz0r9PbRw7mY.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/Il0wU2FMAT0wWDFQt9S1OXOHDD4cKdK4dyW0xO9H.jpeg?fit=max&amp;w=300&amp;h=300" alt="Michael Aerni" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Zipper</div>
										<p class="text-xs">Michael Aerni</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Zip your assets on the fly</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/spatie/algolia-places" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/yp6cBlh9sx1Q3XzytJ90YaYzoeAQUDXuGHw8wvXB.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/4ypqNkfRzFzHMX7KICZtvHSAbRieO970v1Eu7fb9.png?fit=max&amp;w=300&amp;h=300" alt="Spatie" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Algolia Places</div>
										<p class="text-xs">Spatie</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">An Algolia Places autocomplete dropdown fieldtype for the Statamic Control Panel</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/youfront/export" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/tRRzN8VsG6mmm4dlHcs1Q9CLXVfckshLD07Imfqc.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/RPMVcVZt1DZzNFCWJFTaBVR24TTWhG9kUI4ZhiEH.png?fit=max&amp;w=300&amp;h=300" alt="Youfront" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Export</div>
										<p class="text-xs">Youfront</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Export</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/objectivehtml/events" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/ndFGbj6FEt3WVu4wjfGGN4Ud0QHdedCV69f0aQfm.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="/img/marketplace/ukulele.svg" alt="Objective HTML" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Events</div>
										<p class="text-xs">Objective HTML</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Events is the easiest and most flexible way to turn your entries into a calendar. Events will transform simple entries into singular or robust recurring events.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/storychief/storychief-3" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/28uCK1h03lO54A9OFNWJcqfZ5Kq1Jk05uwC1UpVe.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/YoujLwL2DJTLufrvofGCsJQzw2obPvTn7WE0hTD5.png?fit=max&amp;w=300&amp;h=300" alt="StoryChief" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">StoryChief v3</div>
										<p class="text-xs">StoryChief</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Connect your Statamic website to StoryChief and publish straight to Statamic</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/variable" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Variable</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Get/set variables in Antlers</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/Phpsa/statamic-content-toc" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="/img/marketplace/rubber-duck.svg" alt="Phpsa" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Content Table of Contents</div>
										<p class="text-xs">Phpsa</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Content TOC Generator</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$5</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/silentz/forma" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/akhHZRej01F7gKJIYPooPF68Tv1hSUzR2S6Tcjeu.jpeg?fit=max&amp;w=300&amp;h=300" alt="Erin Dalzell" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Forma</div>
										<p class="text-xs">Erin Dalzell</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Give your addon a beautiful configuration page in the control panel</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/pecotamic/xml-sitemap" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="/img/marketplace/rubber-duck.svg" alt="Pecotamic" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">XML Sitemap</div>
										<p class="text-xs">Pecotamic</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3"></p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/facepalm" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/qlRggmBfj2uwa2Wi3m4lY2fTPN0yrbGlIF0EEnS3.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">facepalm</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">A dad joke a day keeps the sadness away.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/lol" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/DuCcj1SnZC2By5X4dDouRT9F0zytpbccGH8FtUxs.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">lol</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Sometimes you just need a good laugh.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/extraextra" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/Wgos2hZDqmb52FhLasP2zfdKwcxDYdCoyBTAoN0L.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">extraextra</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">The hottest news right in your Statamic dashboard.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/candour/aardvark-seo" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/VbvlvS9V50YEtl4lQbPhooF1vDfEPoSCoIR4CP53.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="https://statamic.com/images/storage/avatars/WSsLAs6bhQZbQ2GlfDDYO0bkDM3An5uvUbYx5wBY.png?fit=max&amp;w=300&amp;h=300" alt="Candour" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Aardvark SEO</div>
										<p class="text-xs">Candour</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Save time, rank better. Redirect management. Schema generation. On-page optimisation.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$49</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/pattern/silhouette" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/6akM5dNBqMwW22c57gr729lvZ0R3QNRRn73o5Pot.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/FA1GYaMVXSDSpqFs3ah0eYK5jf1WQO4PSrEw6ylG.png?fit=max&amp;w=300&amp;h=300" alt="Pattern" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Silhouette</div>
										<p class="text-xs">Pattern</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Dynamic user data for your static sites</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/peculiar" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/KdhI60CzcMOmcGRdSi23yHsLjROQEtYEQjD33V89.jpeg??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">peculiar pointer</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Pointers don't have to be boring.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/ghostwriter" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/storage/products/Pknl8N9vT5HkaC7h2til2BdDBZl0sKQ2mnVuBagz.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">ghostwriter</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Static text is boring, let's get it moving.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/sortarad/needledrop" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/yjDPDAG3KBIwf6cUPCD0SppjBdAmRFFIVO6rLRha.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/zZGgwFvGojqTufxgA8dhImXMsG000pHQrxzRerU1.png?fit=max&amp;w=300&amp;h=300" alt="sorta rad" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">needledrop</div>
										<p class="text-xs">sorta rad</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">The web is too quiet, let's make it noisy.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/kolaente/snippet" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:-rotate-1"><img src="https://statamic.com/images/img/marketplace/placeholder-addon.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t bg-blue-lightest"><img src="/img/marketplace/red-bird.svg" alt="kolaente" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Snippet</div>
										<p class="text-xs">kolaente</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Adds a snippet modifier to create beautiful snippets of strings. Very useful to generate preview texts of articles.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>$1</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a> <a href="https://statamic.com/addons/double-three-digital/runway" class="relative flex flex-col h-full overflow-hidden font-mono transform bg-white border shadow-bleed-yellow hover:rotate-1"><img src="https://statamic.com/images/storage/products/XxRI9RHd52VnMv1xsAaBr42OEMKObbN8dE9teg0i.png??w=512&amp;h=320&amp;fit=crop" class="object-cover w-full h-40" width="256" height="160">
								<div class="flex items-center px-3 py-2 border-t "><img src="https://statamic.com/images/storage/avatars/KSLRkVXsr50mUid2ZXZVSym995AlUTtXqyMZBatQ.jpeg?fit=max&amp;w=300&amp;h=300" alt="Duncan McClean" class="w-8 h-8 border rounded-full">
									<div class="ml-3">
										<div class="text-base font-bold leading-none ">Runway</div>
										<p class="text-xs">Duncan McClean</p>
									</div>
								</div>
								<div class="flex flex-col h-full py-2 text-xs border-t">
									<p class="flex-1 px-3">Use Eloquent in Statamic like never before.</p>
									<div class="flex items-center justify-between w-full px-3 pt-1 mt-1 font-bold">
										<div>Free</div>
										<div class="flex items-center has-tooltip" data-original-title="null"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100.5 79.02" class="w-5 h-5">
												<defs>
													<linearGradient id="a" x1="37.55" y1="4.11" x2="64.79" y2="80.19" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#da2fb6"></stop>
														<stop offset="1" stop-color="#fe1876"></stop>
													</linearGradient>
												</defs>
												<path d="M97.16,34.21c-2.61-1.11-5-3.81-5-9.57V14.22c0-3.65-.54-6.59-1.83-8.84C88.25,1.8,84.28,0,77.54,0H23C15.55,0,11.47,2.2,9.62,6.6a19.67,19.67,0,0,0-1.25,7.62V24.64c0,5.76-2.42,8.46-5,9.57S0,36.44,0,39.61c0,3,.84,4.18,3.35,5.11,2.69.93,5,3.35,5,8.55V65.45a17.74,17.74,0,0,0,1.25,7.14C11.62,77.2,16,79,22.31,79h56c5.71,0,9.83-1.51,12-5.28a16.15,16.15,0,0,0,1.83-8.29V53.27c0-5.2,2.33-7.62,5-8.55,2.51-.93,3.34-2.14,3.34-5.11C100.5,36.44,99.76,35.33,97.16,34.21Zm-46.48,31c-6.19,0-9.79-1.91-14.21-5.51a2.43,2.43,0,0,1-.89-2,2.21,2.21,0,0,1,.55-1.57L37.76,54a2.59,2.59,0,0,1,2-1,2.72,2.72,0,0,1,1.56.55c2.72,2,5.58,3.74,8.91,3.74,5.1,0,7.68-3,7.68-6.6C57.88,46.42,54.55,44,49,44h-.88a2.55,2.55,0,0,1-2.52-2.51V38.74a2.63,2.63,0,0,1,2.79-2.52c4.15,0,7.62-2.45,7.62-6.53,0-3.39-2-5.77-6-5.77-2.79,0-5,1.15-7.21,2.92a2.69,2.69,0,0,1-3.67-.41l-1.43-1.56a2.27,2.27,0,0,1-.61-1.57,2.7,2.7,0,0,1,.88-2c3.54-3.06,7.41-5.23,12.78-5.23,8.16,0,13.67,4.62,13.67,12.1,0,5.37-2.45,9.18-7.27,11.35,5.91,1.16,9.11,5.85,9.11,11.49C66.25,59.82,59.45,65.19,50.68,65.19Z" fill="url(#a)"></path>
											</svg></div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
		</div>
		<footer class="relative print:hidden">
			<div class="absolute right-4 -top-8">
				<div class="flex items-center font-hand parent" x-data="{ play: false }">
					<div x-show.transition.in.duration.1000ms.origin.right.out.duration.800="play" class="pb-1" style="display: none;">If do right no can defense</div>
					<div x-on:click="$refs.defense.play(); play = true; setTimeout(() => { play = false }, 2300)"><svg class="h-8 ml-2 text-black cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 313.47 742.77">
							<path fill="currentColor" d="M88.74,41.73,91.55,35l-9.85,4-6-4.63c2.21-2.59,4.38-4.89,6.27-7.39,2.35-3.11,4.38-6.47,6.76-9.56a8.47,8.47,0,0,1,3.7-3C104.54,10.61,116.76,6.92,128.91,3a55.18,55.18,0,0,0,6.52-3c15.65,6.7,31.41,13.56,47.25,20.21,15.57,6.54,30.56,14.47,47,21.2-.3-3.13-.43-4.53-.67-7l7.28,1.48-.23-.75,13.25-2.77c.69,3.54,1.2,6.2,1.77,9.13l7.68-2c-.74,3.48-1.28,6-1.91,9l4.65,2.62c-.6,5.56-2.19,10.81-1.41,15.67s3.91,9.59,5.8,13.88l7.43,1.15,6-9.18c8.07-1.17,8.82-.84,10.94,5L298.6,76c-1.23,2.72-1.81,4.31-2.64,5.75s-2,2.94-3.93,5.66l8.54-2.13A106.3,106.3,0,0,1,303.88,97c.16.93-1.94,3-3.27,3.32a128.58,128.58,0,0,1-17.6,2.87c-2.74.21-5.61-1.28-9.12-2.18.87,3.41,1.64,6.69,2.56,9.93,2.35,8.28,4.44,16.65,7.27,24.77a129.45,129.45,0,0,0,8.58,19.65c4.71,8.55,6.28,17.8,7,27.18,1,12.18,1.5,24.42,1.66,36.64.08,6.22-.87,12.49-1.79,18.68-.19,1.34-2.91,2.19-3.38,3.62-2.28,7-4.74,14.08-6,21.32-.52,3,1.36,6.79,2.94,9.81,3.79,7.25,5.28,14-1.91,20.11-.85.73-1.18,2.35-1.31,3.6-1.58,15.39-7,29.53-13.65,43.33-1.53,3.17-1.88,6.92-2.42,9-3.38,6.08-6.35,11.07-9,16.24-2.54,5-4.17,10.53-7.16,15.21a250.72,250.72,0,0,1-15.85,22C231.17,415,219.65,427,211.6,441.64c-2.65,4.83-2.91,8.75.92,11.45,18.48,13,26.34,31.68,29.06,53.24,1.34,10.66,1.42,21.77,4.68,31.82,3.51,10.83,9.88,20.78,15.36,30.91,6.37,11.79,13.36,23.25,19.59,35.11A34.74,34.74,0,0,1,284.73,617c.34,3.82-1.28,7.5-5.74,8.82-8,2.37-15.8,3.75-24.25,1.25-3.24-1-7.75.64-11.13,2.24-8.08,3.82-16.16,5.77-25.26,4.92-10-.94-20.17-.81-30.26-.73-3.37,0-5.17-1.23-5.69-4.13s0-5.41,3.46-6.77a163.6,163.6,0,0,0,15.17-7c11.34-5.85,22.6-11.86,33.87-17.84,1.52-.8,2.93-1.83,4.18-2.62a395.32,395.32,0,0,0-34.33-77.73c-7.52-13.21-15.41-26.23-23.42-39.16-3.48-5.62-7.75-10.74-11.46-16.23a21,21,0,0,1-2.37-5.9c-1.26-4.27-2.11-8.68-3.56-12.88-1.39-4-1.06-7.39.65-11.36,5.76-13.38,11.09-26.94,16.36-40.53,1.47-3.79,2.13-7.9,3.1-11.61l-6.15-6.56,6.41-13.09c5.57-3.45,8.46-10.82,11.15-18.38,1.3-3.65,0-6-3-7.91-2.75-1.76-5.38-3.71-8.19-5.67,2.16-5.23-.33-8.41-3.75-11.15Q165.77,305.22,151,293.53a16,16,0,0,0-3.5-1.55c-3.94,17.68-13.69,31.47-24.55,44.69-7.84,9.56-17.23,18-22.09,29.79-1.69,4.12-2.47,7.85-.83,12.41,1.71,4.75,2.34,10,2.81,15.06.6,6.55-2.24,10.12-8.71,11.05a82.09,82.09,0,0,1-16.31,1.13,45.71,45.71,0,0,0-24.87,5.38c-10.09,5.35-20.7,7.59-32.16,4-3.33-1-7.36-.76-10.87-.08-7.46,1.43-8.47,1-9.88-7.42,2.25-1.55,4.59-3.37,7.12-4.88C19.9,395.52,33,388.37,45.44,380.24c8.52-5.56,15.09-13.39,20-22.43q12-21.78,24-43.51c7.84-14.18,15.6-28.4,23.56-42.52,5.52-9.8,11-19.69,17.08-29.12,6.23-9.59,12.21-11.24,22.89-6.93,17.66,7.13,35.21,14.56,52.81,21.83,1.19.49,3.1,1.47,3.63,1,4.71-4.1,9.3-1.16,14.36.56l-.33-5.77,8-5.21L221.43,236l11.62-6c-2.34-7.49-4.63-14.8-7.14-22.82-9.15,7-17.78,13.38-26.2,20-4.51,3.57-8.37,4.22-13,1.08-17.12-11.63-31.85-25.75-45.09-41.69-7.9-9.51-16.57-18.64-28.48-23.56a8.36,8.36,0,0,0-2.36-.6c-5.25-.52-10.5-1-16.59-1.53-.81,1.78-1.9,4.12-2.94,6.47-2.08,4.69-3.83,5-8.14,1.53.88-3.71,1.77-7.44,2.88-12.09-6.91,3.47-9.16,13.21-19,9.63l10.7-17.52c-6.83,1.2-11.47,8.47-20,3.51L74.56,132c11.36.71,22.57,1.28,33.74,2.25,1.94.17,4.7,1.64,5.42,3.25,4.15,9.31,12,14.2,20.44,18.77,15.59,8.43,31,17.11,46.49,25.78,2.56,1.44,4.85,3.39,7.6,5.34l28.89-18.12c1.7-9.55,11.86-14.57,17.44-24.64l-4.24-4.06c-19.5,5.08-21.68,4.61-24.67-4.64l-1,.82-11.75-14.4.8-.67-5.37-2.84c1.3-6.36,2.55-12.46,3.81-18.64l-3.87-3.43V91.46c-4.53-.09-4.06-3.16-3.81-6.24.66-8.21,1.45-16.41,1.74-24.63a9.6,9.6,0,0,0-4.72-9.13c-12.1-7.49-24-15.36-36-23-3.09-2-6.05-2.49-9.63-.13-7.5,4.94-16.27,4.94-24.89,5.58-2.74.21-5.45,2.19-7.94,3.73-1.5.94-2.5,2.65-3.8,3.93C95.42,45.38,94,45.42,88.74,41.73ZM188,78.49v9l8.73,1c.29-3.64,1.26-7,.53-10-.39-1.6-3.66-2.51-6.63-4.34.56,4.54,6.57,6.55,1.68,10.84Zm14.15,9.76,1.44,1.2c1.17-1.69,3.07-3.26,3.33-5.08.4-2.84,1.94-6.5-2.52-8.78Z"></path>
							<path d="M305.61,622.78,289.82,619c8.78-2.44,15.73,1.32,23.62,3.33v11.76c0,15.82.09,31.63,0,47.45-.11,13.12-.58,26.24-.67,39.36-.05,5.61.4,11.24.71,16.85.2,3.63-1.41,5.06-5,5-39.61-.06-79.22,0-118.83-.06-4.51,0-7.83-4.9-7.85-9.39-.05-9.75-.83-19.49-1.09-29.23-.14-5.06.27-10.13.24-15.2,0-1.57-.92-3.13-1-4.72-.27-7-.13-14-.63-21-.4-5.49-4.49-9-11.18-10,8.24,7,7.75,16.42,8.36,25.12,1.38,19.83,1.89,39.73,2.68,59.6.05,1.09-.4,3.07-.87,3.15-4.12.68-8.35,1.54-12.43,1.17-1.32-.12-3.13-3.69-3.31-5.8-.68-8.09-.84-16.24-1.1-24.36-.39-12-.42-23.93-1.17-35.86-.39-6.32-2.27-12.55-2.85-18.88-.24-2.6,1.17-5.36,1.94-8.46-5.44-1.08-4.72-6.21-4.28-11.41l18-5.38.66,1.86-7.6,3.46,0,1.07c4.8.71,9.6,2,14.4,2,25.73.18,51.38-1.15,76.75-5.76,11.6-2.11,23.07-4.93,34.66-7.1C296.46,626.79,301.28,627.48,305.61,622.78Z"></path>
						</svg></div> <audio x-ref="defense">
						<source src="/audio/no-can-defense.mp3" type="audio/mpeg">
					</audio>
				</div>
			</div>
			<div class="relative px-8 pt-24 pb-16 overflow-hidden font-mono text-xs antialiased text-white bg-black lg:pt-32 lg:px-24"><svg viewBox="0 0 186 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="absolute w-32 h-32 text-white -left-20 -bottom-20">
					<defs>
						<path id="a" d="M.23.405H86.4V6H.23z"></path>
						<path id="c" d="M.463.441h80.185v5.454H.463z"></path>
					</defs>
					<g fill="none" fill-rule="evenodd">
						<path d="M107.425 94H0c.06 1.668.193 3.334.373 5h185.249c.182-1.662.314-3.328.378-5h-78.575zM106.94 159H31a90.501 90.501 0 007.04 5h109.887a92.68 92.68 0 007.073-5h-48.061zM107.44 133H11a81.227 81.227 0 003.243 5H172.805a79.424 79.424 0 003.195-5h-68.561zM107.457 106H2c.339 1.674.757 3.34 1.218 5h180.568a72.225 72.225 0 001.214-5h-77.544zM107.473 146H19a86.33 86.33 0 004.672 5H163.26a84.626 84.626 0 004.741-5h-60.527zM107.516 120H5a75.06 75.06 0 002.16 5h172.704a75.365 75.365 0 002.136-5h-74.484z" fill="currentColor"></path>
						<g transform="translate(50 172)">
							<mask id="b" fill="#fff">
								<use xlink:href="#a"></use>
							</mask>
							<path d="M57.325.405H.231a94.875 94.875 0 0013.582 5.596H72.914A94.233 94.233 0 0086.4.405H57.325z" fill="currentColor" mask="url(#b)"></path>
						</g>
						<path d="M107.52 32H167a86.714 86.714 0 00-4.911-5H24.882A84.01 84.01 0 0020 32h87.519z" fill="currentColor"></path>
						<g transform="translate(53)">
							<mask id="d" fill="#fff">
								<use xlink:href="#c"></use>
							</mask>
							<path d="M54.455 5.895H80.648A95.992 95.992 0 0065.388.439H15.575A94.989 94.989 0 00.463 5.895h53.992z" fill="currentColor" mask="url(#d)"></path>
						</g>
						<path d="M107.435 19H154a91.912 91.912 0 00-7.394-5H40.419c-.3.185-.61.351-.91.536A93.833 93.833 0 0033 19H107.436zM106.966 85H186a71.113 71.113 0 00-.442-5H.446A70.812 70.812 0 000 85h106.966zM106.99 59H181a74.543 74.543 0 00-2.239-5H7.21A75.397 75.397 0 005 59h101.99zM107.471 72H185c-.372-1.674-.8-3.34-1.295-5H3.286A73.91 73.91 0 002 72h105.471zM106.99 45H175a81.26 81.26 0 00-3.345-5H14.368A79.14 79.14 0 0011 45h95.99z" fill="currentColor"></path>
					</g>
				</svg>
				<div class="flex flex-wrap justify-between max-w-6xl pb-12 mx-auto hover-within:underline-grow">
					<div class="w-1/2 pb-12 pr-4 lg:w-auto">
						<h6 class="relative pb-4 text-sm font-bold uppercase"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg" class="footer-arrow">
								<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							Product
						</h6>
						<ul class="space-y-2">
							<li><a href="/get-started">Get Started</a></li>
							<li><a href="/pricing">Pricing</a></li>
							<li><a href="/vs/wordpress">Statamic vs WordPress</a></li>
							<li><a href="/stories">Customer Stories</a></li>
							<li><a href="/roadmap">Roadmap</a></li>
							<li><a href="/release-notes">Release Notes</a></li>
							<li class="opacity-50"><a href="https://v2.statamic.com">Statamic 2 (legacy)</a></li>
						</ul>
					</div>
					<div class="w-1/2 pb-12 pr-4 lg:w-auto">
						<h6 class="relative pb-4 text-sm font-bold uppercase"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg" class="footer-arrow">
								<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							Marketplace
						</h6>
						<ul class="space-y-2">
							<li><a href="/marketplace">What's New</a></li>
							<li><a href="/addons">Addons</a></li>
							<li><a>Starter Kits</a> <span class="opacity-50">(coming soon)</span></li>
							<li><a href="/sell">Become a Seller</a></li>
						</ul>
					</div>
					<div class="w-1/2 pb-12 pr-4 lg:w-auto">
						<h6 class="relative pb-4 text-sm font-bold uppercase"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg" class="footer-arrow">
								<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							Resources
						</h6>
						<ul class="space-y-2">
							<li><a href="https://statamic.dev">Documentation</a></li>
							<li><a href="/marketplace">Marketplace</a></li>
							<li><a href="/blog">Blog</a></li>
							<li><a href="/support">Support Center</a></li>
							<li><a href="/partners">Partners</a></li>
							<li><a href="https://builtwithstatamic.com">Showcase</a></li>
							<li><a href="/branding">Brand Kit</a></li>
						</ul>
					</div>
					<div class="w-1/2 pb-12 pr-4 lg:w-auto">
						<h6 class="relative pb-4 text-sm font-bold uppercase"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg" class="footer-arrow">
								<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							Community
						</h6>
						<ul class="space-y-2">
							<li><a href="https://twitter.com/statamic">Twitter</a></li>
							<li><a href="/discord">Discord</a></li>
							<li><a href="/forum">Forum</a></li>
						</ul>
					</div>
					<div class="w-1/2 pb-12 pr-4 lg:w-auto">
						<h6 class="relative pb-4 text-sm font-bold uppercase"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg" class="footer-arrow">
								<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							Company
						</h6>
						<ul class="space-y-2">
							<li><a href="/about">About Us</a></li>
							<li><a href="/license">License Agreement</a></li>
							<li><a href="/terms">Terms</a></li>
							<li><a href="/privacy">Privacy</a></li>
						</ul>
					</div>
				</div>
				<div class="flex flex-wrap items-end justify-between max-w-6xl mx-auto">
					<div class="lg:max-w-md">
						<h3 class="mb-6 text-2xl antialiased italic font-bold font-display">Sign up for our newsletter</h3>
						<p class="mb-6">A monthly firehose of news, updates, and whismy from the weird wide world of Statamic.</p>
						<div>
							<div class="flex p-1 border border-white rounded-sm focus-within:border-yellow"><input type="email" required="required" placeholder="stefan.urquelle@example.com" class="flex-1 pl-1 bg-transparent outline-none"> <button type="submit" name="subscribe" class="p-2 rounded-sm hover:bg-teal"><svg width="14" height="10" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.749 1.394l3 3a.857.857 0 010 1.212l-3 3a.857.857 0 01-1.212-1.212l1.17-1.17a.214.214 0 00-.151-.367H1.857a.857.857 0 010-1.714h7.699a.214.214 0 00.152-.366L8.537 2.606a.857.857 0 011.212-1.212z" fill="#FFF" fill-rule="nonzero" stroke="#191A1B" stroke-width=".857" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg></button></div>
						</div>
					</div>
					<p class="w-full pt-8 lg:w-auto lg:text-right text-2xs">© Copyright 2020 Wilderborn, LLC<br>All rights reserved.</p>
				</div>
			</div>
		</footer>
	</main>
</div>
