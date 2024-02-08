<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="{{asset('cssfiles/groups.css')}}">
</head>
<body>
  {{-- for the navigation --}}
  @include('layout.navbar')
    <h1 id="head">Groups To Join</h1>
   
    {{-- for small cards using bootstrap --}}
    
    <div class="wrappercard">
        <section class="dark">
            <div class="container py-4">
                <h1 class="h1 text-center text-light" id="pageHeaderTitle">Movements Againest Social Evels</h1>
        
                <article class="postcard dark blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play blue">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play red">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play green">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play yellow">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
        
        <section class="light">
            <div class="container py-2">
                <div class="h1 text-center text-dark" id="pageHeaderTitle">For Casual Discussions</div>
        
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play blue">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play red">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play green">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play yellow">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
    </div>
     {{-- for the carousel --}}
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" width="100%" height="300px"   alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" width="100%" height="300px"  alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" width="100%" height="300px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- for the shortcuts cards --}}
      <div class="lastshortcuts">
      <div class="container card-cont-shortc h-100">
        <div class="row align-middle">
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-1">
              <div class="txt">
                <h1>BRANDING AND <br>
      CORPORATE DESIGN</h1>
                <p>Visual communication and problem-solving</p>
              </div>
              <a href="#">more</a>
              <div class="ico-card">
              <i class="fa fa-rebel"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-2">
              <div class="txt">
                <h1>Web Front-End <br>
      SOLUTIONS</h1>
                <p>How design is implemented on the web.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-codepen"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-3">
              <div class="txt">
                <h1>UX/UI WEBsite <br>AND MOBILE app</h1>
                <p>User Interface and User Experience Design.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-empire"></i>
            </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="container card-cont-shortc h-100">
        <div class="row align-middle">
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-7">
              <div class="txt">
                <h1>BRANDING AND <br>
      CORPORATE DESIGN</h1>
                <p>Visual communication and problem-solving</p>
              </div>
              <a href="#">more</a>
              <div class="ico-card">
              <i class="fa fa-rebel"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-8">
              <div class="txt">
                <h1>Web Front-End <br>
      SOLUTIONS</h1>
                <p>How design is implemented on the web.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-codepen"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-9">
              <div class="txt">
                <h1>UX/UI WEBsite <br>AND MOBILE app</h1>
                <p>User Interface and User Experience Design.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-empire"></i>
            </div>
            </div>
          </div>
          
        </div>
      </div>
      {{-- for the last 3 --}}
      {{-- <div class="container card-cont-shortc h-100">
        <div class="row align-middle">
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-4">
              <div class="txt">
                <h1>BRANDING AND <br>
      CORPORATE DESIGN</h1>
                <p>Visual communication and problem-solving</p>
              </div>
              <a href="#">more</a>
              <div class="ico-card">
              <i class="fa fa-rebel"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-5">
              <div class="txt">
                <h1>Web Front-End <br>
      SOLUTIONS</h1>
                <p>How design is implemented on the web.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-codepen"></i>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <div class="card gr-6">
              <div class="txt">
                <h1>UX/UI WEBsite <br>AND MOBILE app</h1>
                <p>User Interface and User Experience Design.</p>
              </div>
              <a href="#">more</a>
            <div class="ico-card">
              <i class="fa fa-empire"></i>
            </div>
            </div>
          </div> --}}
          
        </div>
      </div>
    </div>
    @include('layout/footerbar')
</body>
</html>