<!DOCTYPE html>
<html lang="en">

@include('partials._head')
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="{{url('/')}}">
    <img src="{{asset('img/logo.png')}}" alt="Aida">
    <p>AIDA</p>
  </a>
  <p class="device-notification--message">Aida always has a solution to all your technical pangs. We not only build but inovate as well.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="{{url('/')}}">
            <img src="{{asset('img/logo.png')}}" alt="Aida">
            <p>Aida</p>
          </a>
          <button class="header--cta cta">Hire Us</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span>Works</span></li>
            <li><span>About</span></li>
            <li><span>Contact</span></li>
            <li><span>Hire us</span></li>
          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <span class="message" style="color:green;">
                @if(Session::has('success'))
                    {{Session::get('success')}}              
                @endif
              </span>
              <div class="intro--banner">
                <h1 style="color:#EACC3A;">We Are<br>The Web<br>Maestro.</h1>
                <!-- <button>
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                  <span class="btn-background"></span>
                </button> -->
                <img src="{{asset('img/introduction-visual2.png')}}" alt="Welcome">
              </div>
              <div class="intro--options">AIDA an Advertisement termalogy stands for Attention Interest Desire Action. As as organisation we design and develop products that seek attention of the customers and kindle in them an interest which intern creates an undying desire to associate himself with the service or product we create as their end action. 

              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="work">
              <h2>Selected work</h2>

              <div class="work--lockup">
                <ul class="slider">
                  <li class="slider--item slider--item-left">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="{{asset('img/bansuriyaa.jpg')}}" alt="Victory">
                      </div>
                      <p class="slider--item-title">Bansuriyaa</p>
                      <p class="slider--item-description">An ecommerce platform to grab the widest range of ethnic wears..</p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-center">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="{{asset('img/drtailorcartoon.jpg')}}" alt="Metiew and Smith">
                      </div>
                      <p class="slider--item-title">Dr. Tailor</p>
                      <p class="slider--item-description">It is a online solution to all your tailoring wooes.</p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-right">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="{{asset('img/janmukti.jpg')}}" alt="Alex Nowak">
                      </div>
                      <p class="slider--item-title">Microfinance Software</p>
                      <p class="slider--item-description">A microfinance company that disburse small sum of loans to the needy once..</p>
                    </a>
                  </li>
                </ul>
                <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="about">
              <div class="about--banner">
                <h2 style="color:#EACC3A;">We<br>Ensure<br>Quality<br>Products</h2>
                <a href="#0"><!-- Our Blogs --> About Us
                  <span>

                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;transform: rotate(90deg);" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
                <img src="{{asset('img/Market-Research.png')}}" alt="About Us">
              </div>
              <div class="about--options">
                <!-- <a href="#0">
                  <h3>Crypto Currency</h3>
                </a>
                <a href="#0">
                  <h3>Future of AI</h3>
                </a>
                <a href="#0">
                  <h3>How To Code</h3>
                </a> -->

The team that manages the operations at AIDA is comprised of a pack of Engineers and MBAs pan India.
We have a well equipped lab with a team of young and dedicated researchers to assess the pain point currently prevailing in the nation and build products accordingly that can suffice the purpose of eradicating or succumbing those pain points.

              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="contact">
              <div class="contact--lockup">
                <div class="modal">
                  <div class="modal--information">
                    <p> Near Baikunthapur, Tribeni, West Bengal, India</p>
                    <a href="mailto:ourteam@aidalabindia.com">team@aidalabindia.com</a>
                    <a href="tel:+8583049270">+91 8583049270</a>
                    <a href="tel:+8981527733">+91 9830561115</a>
                  </div>
                  <ul class="modal--options">
                    <li><a href="#0">Twitter</a></li>
                    <li><a target="_blank" href="https://www.facebook.com/Aida-Labs-2206283262931791/?ref=bookmarks">Facebook</a></li>
                    <li><a href="#0">Youtube</a></li>
                    <!-- <li><a href="mailto:ouremail@gmail.com">Contact Us</a></li>
 -->                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="hire">
              <h2>Our Services</h2>
              <span style="text-align:center;"> Hire us to get Higher </span>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request" action="{{route('contactus.store')}}" method="post">
                {{ csrf_field() }}
                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app development" name="service[]">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      App Development
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design" name="service[]">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Graphic Design
                    </label>
                    <input id="opt-3" type="checkbox" value="website development" name="service[]">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                        Website Development
                    </label>
                  </span>
                  <span class="options-b">
                    <input id="opt-4" type="checkbox" value="Prototype design" name="service[]">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Prototype Design
                    </label>
                    <input id="opt-5" type="checkbox" value="content Writing" name="service[]">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Content Writing
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing" name="service[]">
                    <label for="opt-6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Marketing
                    </label>
                  </span>
                </div>
                <div class="work-request--information">
                  <div class="information-name">
                    <input id="name" type="text" spellcheck="false" name="name" required>
                    <label for="name">Name</label>
                  </div>
                  <div class="information-email">
                    <input id="email" type="email" spellcheck="false" name="email" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <input type="submit" value="Send Request">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active">Home</li>
    <li>Works</li>
    <li>About</li>
    <li>Contact</li>
    <li>Hire us</li>
  </ul>
</div>
@include('partials._footer')

<script type="text/javascript">
  
  $(document).ready(function(){

    setInterval(function(){
        $('.message').html('');
    },5000);
  })
</script>
</body>
</html>
