<section class="aboutPopup">
    <a href="#" class="close">&nbsp;</a>
    <h3 class="desktop"><a href="{{ url('about') }}">About</a></h3>

    <article class="collections">
        <h3>Collections</h3>
        <ul>
            @foreach($collections as $c)
                <li><a href="{{ url($c->slug) }}">{{ $c->title }}</a></li>
            @endforeach
        </ul>
    </article>

    <article class="connect">
        <h3>Connect</h3>
        <ul>
            <li>
                <a href="mailto:contact@kevinkulla.com" class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#5F454A" width="40px" height="40px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 4H2.01v16H22V4zm-2 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    Email
                </a>
            </li>
            <li>
                <a href="https://instagram.com/art.by.kevin.kulla" class="instagram">
                    <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-brand-instagram' width='40' height='40' viewBox='0 0 24 24' stroke-width='1' stroke='none' fill='#5F454A' stroke-linecap='round' stroke-linejoin='round' aria-hidden="true">
                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                        <rect x='4' y='4' width='16' height='16' rx='4' />
                        <circle cx='12' cy='12' r='3' fill='white' stroke='none' />
                        <line x1='16.5' y1='7.5' x2='16.5' y2='7.501' stroke='white' />
                    </svg>
                    Instagram
            </a></li>
        </ul>
    </article>

</section>