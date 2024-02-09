<nav>
	<a class=".start-home" href='{{route('home')}}'>Home</a>
	<a id="grps" class=".start-about" href='{{route('groups')}}'>Groups</a>
	<a id="knwp" class=".start-blog" href='{{route('knowladge')}}'>knowladge</a>
	<a id="debt" class=".start-portefolio" href='{{route('debate')}}'>Debate</a>
	<a id="logi" class=".start-contact" href='{{route('newuser')}}'>Login</a>
	<div class="animation start-home">hello</div>
</nav>
{!!"<script>
	// console.log(window.location.href);
	// console.log(window.location.href.includes('groups'));
	// console.log(document.querySelector('#grps').innerText);

	if(window.location.href.includes('groups')){
		document.querySelector('#grps').classList.add('groups-active');
	};
	if(window.location.href.includes('knowladge')){
		document.querySelector('#knwp').classList.add('knowladge-active');
	};
	if(window.location.href.includes('debate')){
		document.querySelector('#debt').classList.add('debate-active');
	};
	if(window.location.href.includes('login')){
		document.querySelector('#logi').classList.add('newuser-active');
	};
</script>"!!}
