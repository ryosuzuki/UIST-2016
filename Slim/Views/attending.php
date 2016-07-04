
<div class="ui stackable grid">
  <section id="notice" class="ten wide column centered">
    <h2 class="ui horizontal divider header">Attending</h2>
    <br>
    <br>
    <div class="ui icon message">
      <i class="fa fa-bell-o icon"></i>
      <div class="content">
        <div class="text text-bold">
          IMPORTANT NOTICE: Book your hotel early !
        </div>
        <br>
        <div class="text">
          If you plan to attend (or consider attending) the UIST2016 conference in Tokyo, please book your hotel early, ideally NOW. Because of extreme shortage of hotel rooms in Tokyo, it can be difficult to find reasonable hotels near the conference venue later. You can cancel the hotel room afterwards, so we recommend you to book your hotel room first. See <a href="#hotel-booking">Hotel Booking</a> to learn more.
        </div>
      </div>
    </div>
  </section>
</div>

<div id="registration" class="ui stackable grid background-grid inverted-grid">
  <?php $app->render('Partials/registration.php'); ?>
</div>

<div id="venue" class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Venue</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <div class="text">
          ACM UIST 2016 will be held in central Tokyo, Japan from October 16th to October 19th, 2016. The conference venue (Hitotsubashi Hall, National Center of Sciences Building) is right at the center of Tokyo, near the imperial palace and Tokyo Station. The main technical program starts on Monday, October 17th. Doctoral Symposium will be held on October 16th at the University of Tokyo.
        </div>
        <h1>
          <a href="http://www.hit-u.ac.jp/hall/" target="_blank">Hitotsubashi Hall, National Center of Sciences Building</a>
        </h1>
        <div class="venue-info">
          <p class="text text-middle">
            <i class="fa fa-map-marker fa-fw"></i>
            <span>2-1-2 Hitotsubashi, Chiyoda, Tokyo 101-0003, Japan</span>
            : <a href="https://www.google.com/maps?ll=35.692434,139.758192&z=16&t=m&hl=en-US&gl=US&mapclient=embed&cid=6466607924994961678" target="_blank"><b><i class="fa fa-map-o fa-fw"></i>&nbsp;Google Maps</b></a>
          </p>
          <p class="text text-middle">
            <i class="fa fa-phone fa-fw"></i>
            <span>Tel: +81-3-4212-2000 (Exchange)</span>
          </p>
          <p class="text text-middle">
            <i class="fa fa-link fa-fw"></i>
            <span><a href="https://www.nii.ac.jp/en/about/access/" target="_blank">https://www.nii.ac.jp/en/about/access/</a></span>
          </p>
        </div>
        <br>
        <img class="ui fluid image" src="<?php echo BASE_PATH; ?>/lib/img/venue/room-01.jpg">
        <br>
        <br>
        <img class="ui fluid image" src="<?php echo BASE_PATH; ?>/lib/img/venue/room-02.jpg">
      </div>
    </div>
  </section>
</div>


<div id="hotel-booking" class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Hotel Booking</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <div class="text">
          The conference venue is a university facility and we do not have any designated conference hotels. Please book a nearby hotel room by yourself. Early booking is strongly recommendaed becuase of constant shortage of hotel rooms in Tokyo. There are several hotels around the conference venue within walking distance. <a href="https://www.google.com/maps/d/edit?mid=zEQrhkQOwr5o.ks2qkUiXn81c&usp=sharing" target="_blank"><b><i class="fa fa-map-o fa-fw"></i>&nbsp;Open Google Maps</b></a>
        </div>
        <br>
        <div class="text">
          As an option, you can book a hotel through this web site (<a href="https://mice3.jtbgmt.com/uist2016/">https://mice3.jtbgmt.com/uist2016/</a>). The travel agency (JTB) secured a block of hotel rooms for us. However, the number of rooms are limited and we expect that this will be full soon. Afterwards, please book a hotel using any other service by yourself.
          <br>
          If you have any question about booking through the above web site, please directly contact JTB (<a href="mailto:uist2016@gmt.jtb.jp">uist2016@gmt.jtb.jp</a>)
        </div>
      </div>
    </div>
  </section>
</div>


<img class="centered image" style="width:100%;margin-top:60px;margin-bottom:30px" src="<?php echo BASE_PATH; ?>/lib/img/venue/building.jpg">


<div id="transportation" class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Transportation</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <div class="text">
          You can use either Narita International Airport or Haneda International Airport. It roughly takes 70 minutes from Narita and 50 minutes from Haneda by using public transportation.
          You can walk from Jimbocho Station or Takebashi Station to the venue. You can find several choices of transportation from both two airports.
          <br>
          <br>
          Route map to NII: <a href="https://www.nii.ac.jp/en/about/access/" target="_blank">https://www.nii.ac.jp/en/about/access/</a>
        </div>
      </div>
    </div>
  </section>
  <div class="eight wide column centered" style="margin-right:0">
    <h1><i class="fa fa-plane fa-fw"></i>From Haneda Airport</h1>
    <table class="ui single line table">
      <thead class="text">
        <tr>
          <th>Transportation</th>
          <th>Time</th>
          <th>Cost</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody class="text">
        <tr>
          <td><b><i class="fa fa-subway fa-fw"></i>Train</b></td>
          <td>40-50 min</td>
          <td>570 JPY</td>
          <td><a href="<?php echo BASE_PATH; ?>/lib/img/venue/train-haneda.pdf" target="_blank">PDF</a></td>
        </tr>
        <tr>
          <td><b><i class="fa fa-bus fa-fw"></i>Bus</b></td>
          <td>50-60 min</td>
          <td>1,100 JPY</td>
          <td><a href="<?php echo BASE_PATH; ?>/lib/img/venue/bus-haneda.pdf" target="_blank">PDF</a></td>
        </tr>
        <tr>
          <td><b><i class="fa fa-taxi fa-fw"></i>Taxi</b></td>
          <td>20-35 min</td>
          <td>7,000 JPY</td>
          <td>TBA</td>
        </tr>
      </tbody>
    </table>

    <h1><i class="fa fa-plane fa-fw"></i>From Narita Airport</h1>
    <table class="ui single line table">
      <thead class="text">
        <tr>
          <th>Transportation</th>
          <th>Time</th>
          <th>Cost</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody class="text">
        <tr>
          <td><b><i class="fa fa-subway fa-fw"></i>Train</b></td>
          <td>75-90min</td>
          <td>1,480 JPY</td>
          <td><a href="<?php echo BASE_PATH; ?>/lib/img/venue/train-narita.pdf" target="_blank">PDF</a></td>
        </tr>
        <tr>
          <td><b><i class="fa fa-bus fa-fw"></i>Bus</b></td>
          <td>80-120min</td>
          <td>3,100 JPY</td>
          <td>TBA</td>
        </tr>
        <tr>
          <td><b><i class="fa fa-taxi fa-fw"></i>Taxi</b></td>
          <td>130-140min</td>
          <td>22,000 JPY</td>
          <td>TBA</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="six wide column centered maps" style="margin-left:0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.407886964379!2d139.7589374!3d35.691579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x59be01a56f0cf10e!2sNational+Institute+of+Informatics!5e0!3m2!1sen!2sus!4v1448346801912" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>


<div class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">WiFi Access</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <div class="text">
          We plan to provide following WiFi access service to conference attendees.
          It will allow you to use 200,000 public WiFi spots accross Japan during your stay, in addition to the WiFi spot at the confernece venue.
          <br>
          wi2 300 <a href="http://wi2.co.jp/en/300/" target="_blank">http://wi2.co.jp/en/300/</a>
          <br>
          The conference venue also supports eduroam (<a href="https://www.eduroam.org/" target="_blank">https://www.eduroam.org/</a>). So, if your institute is a member of eduroam (universities and research centers), please obtain your online identity and password from your institute beforehand.
        </div>
      </div>
    </div>
  </section>
</div>


<div class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Food at the Conference</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <h2>Welcome Reception (Oct 16 (Sun) 6-8pm)</h2>
        <div class="about text">
          Welcome Reception takes place on Sunday October 16th evening from 6-8pm. The reception will take place at the Josui Kaikan next to the main conference building (National Center of Sciences Building). Finger foods, soft and alcoholic drinks will be served during the reception.
        </div>
        <h2>Demo Reception (Oct 17 (Mon) 6-9pm)</h2>
        <div class="text">
          Demo Reception takes place on Monday October 17th evening. The reception will take place at the Josui Kaikan (next to the conference venue). Our program will include excting demos selected in a competitive process as well as several of our sponsor demos. Finger foods, soft and alcoholic drinks will be served during the reception.
        </div>

        <h2>Conference Banquet (Oct 18 (Tue) 8-10:30pm)</h2>
        <div class="text">
          Conference banquet will be held at Diamond Hall of Hotel Grand Palace Tokyo. The event will be held on Tuesday October 18, from 8-10:30pm. The banquet venue is about 13 min walk or 5 minutes by taxi ride from the main conference venue. It will be a buffet style banquet featuring both Western and Japanese food with soft and alcoholic drinks.
        </div>

        <h3>Hotel Grand Palace Tokyo</h3>
        <div class="text text-middle">
          <i class="fa fa-map-marker fa-fw"></i>
          <span>1-1-1 Iidabashi, Chiyoda, Tokyo 102-0072, Japan</span>
          <br>
          <i class="fa fa-phone fa-fw"></i>
          <span>Tel: +81 3-3264-1111</span>
          <br>
          <i class="fa fa-link fa-fw"></i>
          <span><a href="http://www.grandpalace.co.jp/english/" target="_blank">http://www.grandpalace.co.jp/english/</a></span>
        </div>
        <br>
        <img class="ui fluid image" src="<?php echo BASE_PATH; ?>/lib/img/venue/reception.jpg">

        <br>
        <h2>Lunch Box</h2>
        <div class="stackable ui grid container">
          <div class="five wide column" style="padding-left:0">
            <img class="ui fluid image" src="<?php echo BASE_PATH; ?>/lib/img/venue/lunch-box.jpg" alt="">
          </div>
          <div class="eleven wide column" style="padding-right:0">
            <div class="about text">
              We plan to provide lunch box to all attendees during the conference (Monday-Wednesday). More information will be posted closer to the event.
            </div>
          </div>
        </div>
        <h2>Breakfast & Coffee Breaks</h2>
        <div class="text">
          We plan to provide light breakfast each morning before the first session (Monday-Wednesday 8:45am-9:30am). Each day, there will also be a morning and an afternoon coffee break where coffee, tea and light refreshments will be served.
        </div>
      </div>
    </div>
  </section>
</div>

<!-- <img class="centered image" style="width:100%;margin-top:60px;margin-bottom:30px" src="<?php echo BASE_PATH; ?>/lib/img/venue/sumo.jpg"> -->


<div class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Local Activities and Sightseeing</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <h2>Nearby popular areas</h2>
        <div class="text">
          <ul>
            <li>
              <a href="http://www.japan-guide.com/e/e3003.html" target="_blank">
              Akihabara
              </a>
            </li>
            <li>
              <a href="http://www.japan-guide.com/e/e3017.html" target="_blank">
              Imperial Palace
              </a>
            </li>
            <li>
              <a href="http://www.japan-guide.com/e/e3037.html" target="_blank">
              Marunouchi and Tokyo station
              </a>
            </li>
            <li>
              <a href="http://www.japan-guide.com/e/e3005.html" target="_blank">
              Ginza
              </a>
            </li>
            <li>
              <a href="http://www.japan-guide.com/e/e3021.html" target="_blank">
              Tsukiji Fish Market
              </a>
            </li>
            <li>
              <a href="http://www.japan-guide.com/e/e2321.html" target="_blank">
              Yasukuni Shrine
              </a>
            </li>
          </ul>
        </div>
        <h2>Tours provided by travel agencies</h2>
        <div class="text">
          <ul>
            <!--
            <li>
              <a href="http://www.japanican.com/en/tour/list/?GN_tours&ty=tyotours00" target="_blank">
              Japanican
              </a>
            </li>
            -->
            <li>
              <a href="https://www.hatobus.com/int/en/" target="_blank">
              Hato Bus
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Area Maps</h2>
  </section>
</div>

<div class="centered maps" style="width:100%;margin-top:60px;margin-bottom:30px">
  <iframe src="https://www.google.com/maps/d/embed?mid=zEQrhkQOwr5o.ks2qkUiXn81c" width="100%" height="580"  frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<script>
  $('.maps').on('click', function (e) {
    $('.maps iframe').css("pointer-events", "auto");
  });

  $('.maps').on('mouseleave', function() {
    $('.maps iframe').css("pointer-events", "none");
  });
</script>

