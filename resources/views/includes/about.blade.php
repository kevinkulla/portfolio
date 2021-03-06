<section class="aboutPopup">
	<a href="#" class="close">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='25px' height='25px'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z'/></svg>
    </a>

    <h3 class="desktop"><a href="{{ route('work') }}">Work</a></h3>
    <h3 class="desktop"><a href="{{ url('about') }}">About</a></h3>

   {{--  <article class="collections">
        <h3>Collections</h3>
        <ul>
            @foreach($collections as $c)
                <li><a href="{{ url($c->slug) }}">{{ $c->title }}</a></li>
            @endforeach
        </ul>
    </article> --}}

    <article class="connect">
        <h3>Connect</h3>
        <ul>
            <li>
                <a href="mailto:contact@kevinkulla.com" class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40px" height="40px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 4H2.01v16H22V4zm-2 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    Email
                </a>
            </li>
            <li>
                <a href="https://instagram.com/kevin.kulla" class="instagram">
                    <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-brand-instagram' width='40' height='40' viewBox='0 0 24 24' stroke-width='1' stroke='none' stroke-linecap='round' stroke-linejoin='round' aria-hidden='true'>
                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                        <rect x='4' y='4' width='16' height='16' rx='4' />
                        <circle cx='12' cy='12' r='3' fill='white' stroke='none' />
                        <line x1='16.5' y1='7.5' x2='16.5' y2='7.501' stroke='white' />
                    </svg>
                    Instagram
            </a></li>
        </ul>
    </article>
    <h3 class="desktop"><a href="#" class="newsletter">Join Newsletter</a></h3>
    <article class="newsletter">
    	<h3 class="mobile">Join Newsletter</h3>
        <div class="newsletterBlock">
        	<a href="#" class="closeNewsletter desktop">
		        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='25px' height='25px'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z'/></svg>
		    </a>
			<form id="registerNewsletter" action="{{ route('submitEmail') }}" method="POST">
				@csrf

				<label for="emailAddress">Enter your email address</label>
				<input type="email" name="user_email" id="emailAddress" class="form-control">

				<button type="submit" class="submitEmailAddress">Submit</button>
			</form>
			<p>Your email address will only be used to send updates about me and my artwork. It will not be sold or shared with any third-parties without your explicit permission.</p>
		</div>
    </article>

</section>