<!DOCTYPE html>
<html lang="en">
<head>
  <title>Netflix Slider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

  <link rel="stylesheet" href="custom-style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>

  <section class="common-sec">
    <div class="container-fluid">
      <div class="netbeins-slide-description">
        <div class="close">
          <span class="fa fa-times" aria-hidden="true"></span>
        </div>

        <section class="netbeins-tab-container">
          <div id="tab-1" class="tab-content current">
            <section class="overview-tab-sec">
              <div class="video_container">
                <button class="volume-btn v_pause">
                  <span class="fa fa-volume-up" aria-hidden="true"></span>
                </button>

                <div class="video-bx"></div>
              </div>

              <div class="text_container">
                <div class="movie_title">LAST CHRISTMAS </div>
                <div class="desc_container">
                  Last Christmas is an upcoming British-American romantic comedy film directed by Paul Feig and written by Bryony Kimmings and Emma Thompson, who co-wrote the story with her husband, Greg Wise. It stars Emilia Clarke, Henry Golding, Michelle Yeoh and Thompson, and follows a depressed young woman who works in a Christmas supplies store who keeps bumping into the same young man.<span>wikipedia</span>
                </div>
                <div class="actions_container">
                  <button class="action-btn play-btn">
                    <i class="fa fa-play" aria-hidden="true"></i>
                    <span class="ml">Play</span>
                  </button>

                  <button class="action-btn mylist-btn">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="ml">My List</span>
                  </button>
                  <button class="action-btn like-btn">
                    <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                  </button>
                  <button class="action-btn dislike-btn">
                    <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                  </button>
                </div>

                <div class="meta-lists">
                  <p class="cast inline-list" label="Starring:">
                    <span class="list-label">Starring:</span>
                    <span class="list-items">
                      <a href="/browse/person/22588">Robert De Niro</a>, 
                      <a href="/browse/person/70729">Al Pacino</a>, 
                      <a href="/browse/person/72916">Joe Pesci</a>
                    </span>
                  </p>
                  <p class="genres inline-list" label="Genres:">
                    <span class="list-label">Genres:</span>
                    <span class="list-items">
                      <a href="/browse/genre/1159493">US Movies</a>, 
                      <a href="/browse/genre/9889">Movies Based on Books</a>, 
                      <a href="/browse/genre/5824">Crime Movies</a>
                    </span>
                  </p>
                  <p class="tags inline-list" label="This movie is:">
                    <span class="list-label">This movie is:</span>
                    <span class="list-items">
                      <a href="/browse/genre/100044">Gritty</a>
                    </span>
                  </p>
                </div>
              </div>
            </section><!-- overview-tab-sec -->
          </div>
          <div id="tab-2" class="tab-content">
            <section class="morelike-tab-sec">
              <div class="movie_title">LAST CHRISTMAS</div>
              
              <div class="morelike-slider">
                <?php for($s=1; $s<=10; $s++){ ?>
                  <div>
                    <div class="more-video-bx">
                      <div class="img">
                        <a href="javascript:void(0);">
                          <img src="https://netbeins.com/wp-content/uploads/2019/11/maxresdefault-4.jpg" alt="Video">
                        </a>
                      </div>
                      <div class="meta video-meta">
                        <div class="match-score">79% Match</div>
                        <div class="info">
                          <span class="year">1996</span>
                          <span class="maturity-rating"><span class="maturity-number">18+</span></span>
                          <span class="duration">1h 40m</span>
                        </div>
                        <div class="text">He's a cop with the Russian mob on his tail. And the FBI. Now he's his evil twin. Don't worry, he'll be kicking it.</div>
                      </div>
                    </div>
                  </div>
                <?php } ?>

              </div><!-- common-slider -->

            </section><!-- morelike-tab-sec -->
          </div>
          <div id="tab-3" class="tab-content">
            <section class="details-tab-sec">
              <div class="movie_title">LAST CHRISTMAS</div>
              <div class="custom-row">
                <div class="col-lg-3">
                  <div class="detailsItem detailsMedia">
                    <ul>
                      <li class="listLabel"><span>Director</span></li>
                      <li><a href="javascript:void(0);">Jaume Collet-Serra</a></li>
                      <li class="listLabel"><span>Cast</span></li>

                      <li><a href="javascript:void(0);">Liam Neeson</a></li>
                      <li><a href="javascript:void(0);">Vera Farmiga</a></li>
                      <li><a href="javascript:void(0);">Patrick Wilson</a></li>
                      <li><a href="javascript:void(0);">Jonathan Banks</a></li>
                      <li><a href="javascript:void(0);">Sam Neill</a></li>
                      <li><a href="javascript:void(0);">Elizabeth McGovern</a></li>
                      <li><a href="javascript:void(0);">Killian Scott</a></li>
                      <li><a href="javascript:void(0);">Shazad Latif</a></li>
                      <li><a href="javascript:void(0);">Andy Nyman</a></li>
                      <li><a href="javascript:void(0);">Clara Lago</a></li>
                      <li><a href="javascript:void(0);">Roland Møller</a></li>
                      <li><a href="javascript:void(0);">Dean-Charles Chapman</a></li>
                    </ul>
                  </div>
                </div><!-- col -->
                <div class="col-lg-3">
                  <div class="detailsItem detailsMedia">
                    <ul>
                      <li class="listLabel"><span>Cast</span></li>
                      <li><a href="javascript:void(0);">Florence Pugh</a></li>

                      <li class="listLabel"><span>Writers</span></li>
                      <li><a href="javascript:void(0);">Byron Willinger</a></li>
                      <li><a href="javascript:void(0);">Philip de Blasi</a></li>
                      <li><a href="javascript:void(0);">Ryan Engle</a></li>
                    </ul>
                  </div>
                </div><!-- col -->
                <div class="col-lg-3">
                  <div class="detailsItem detailsMedia">
                    <ul>
                      <li class="listLabel"><span>Genres</span></li>
                      <li><a href="javascript:void(0);">US Movies</a></li>
                      <li><a href="javascript:void(0);">Crime Movies</a></li>
                      <li><a href="javascript:void(0);">Action &amp; Adventure</a></li>
                      <li><a href="javascript:void(0);">Action Thrillers</a></li>

                      <li class="listLabel"><span>This movie is</span></li>
                      <li><a href="javascript:void(0);">Suspenseful</a></li>
                    </ul>
                  </div>
                </div><!-- col -->
                <div class="col-lg-3">
                  <div class="detailsItem detailsMedia">
                    <h4 class="listLabel">Maturity Ratings</h4>
                    <span class="maturity-rating">
                      <a href="javascript:void(0);" class="maturity-number">16+</a>
                      <p class="maturityDescription">Recommended for ages 16 and up</p>
                    </span>
                  </div>
                </div><!-- col -->
              </div>
            </section><!-- details-tab-sec -->
          </div>

          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">
              <span>OVERVIEW</span>
            </li>
            <li class="tab-link" data-tab="tab-2">
              <span>MORE LIKE THIS</span>
            </li>
            <li class="tab-link" data-tab="tab-3">
              <span>DETAILS</span>
            </li>
          </ul>
        </section><!-- netbeins-tab-container -->

      </div><!-- netbeins-slide-description -->
    </div><!-- container -->
  </section>

  <script src="custom-js.js"></script>
</body>
</html>
