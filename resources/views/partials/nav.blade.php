<nav>

		<ul>
			<li class="{{ request()->routeIs('home') ?'active': '' }}"><a href="/" title="">home</a></li>
			<li class="{{ request()->routeIs('about') ?'active': '' }}"><a href="/about" title="">about</a></li>
			<li class="{{ request()->routeIs('portafolio') ?'active': ''}}"><a href="/portafolio" title="">Portafolio</a></li>
			<li class="{{request()->routeIs('contact') ?'active': ''}}"><a href="/contact" title="">Contact</a></li>
		</ul>
	</nav>