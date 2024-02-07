<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');
* {
  box-sizing: border-box;
  margin: 0;
}
html, body {
  margin: 0;
  font-family: 'Montserrat', helvetica, arial, sans-serif;
  font-size: 14px;
  font-weight: 400;
}
.movie_card {
  position: relative;
  display: block;
  width: 800px;
  height: 350px;
  margin: 100px auto;
  overflow: hidden;
  border-radius: 10px;
  transition: all 0.4s;
}
.movie_card:hover {
  transform: scale(1.02);
  transition: all 0.4s;
}
.movie_card .info_section {
    border: 2px solid wheat;
  position: relative;
  width: 100%;
  height: 100%;
  background-blend-mode: multiply;
  z-index: 2;
  border-radius: 10px;
}
.movie_card .info_section .movie_header {
  position: relative;
  padding: 25px;
  height: 40%;
}
.movie_card .info_section .movie_header h1 {
  color: #fff;
  font-weight: 400;
}
.movie_card .info_section .movie_header h4 {
  color: #9ac7fa;
  font-weight: 400;
}
.movie_card .info_section .movie_header .minutes {
  display: inline-block;
  margin-top: 10px;
  color: #fff;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid rgba(255, 255, 255, 0.13);
}
.movie_card .info_section .movie_header .type {
  display: inline-block;
  color: #cee4fd;
  margin-left: 10px;
}
.movie_card .info_section .movie_header .locandina {
  position: relative;
  float: left;
  margin-right: 20px;
  height: 120px;
  box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
}
.movie_card .info_section .movie_desc {
  padding: 25px;
  height: 50%;
}
.movie_card .info_section .movie_desc .text {
  color: #cfd6e1;
}
.movie_card .info_section .movie_social {
  height: 10%;
  padding-left: 15px;
  padding-bottom: 20px;
}
.movie_card .info_section .movie_social ul {
  list-style: none;
  padding: 0;
}
.movie_card .info_section .movie_social ul li {
  display: inline-block;
  color: rgba(255, 255, 255, 0.4);
  transition: color 0.3s;
  transition-delay: 0.15s;
  margin: 0 10px;
}
.movie_card .info_section .movie_social ul li:hover {
  transition: color 0.3s;
  color: rgba(255, 255, 255, 0.8);
}
.movie_card .info_section .movie_social ul li i {
  font-size: 19px;
  cursor: pointer;
}
.movie_card .blur_back {
  position: absolute;
  top: 0;
  z-index: 1;
  height: 100%;
  right: 0;
  background-size: cover;
  border-radius: 11px;
}
@media screen and (min-width: 768px) {
  .movie_header {
    width: 60%;
  }
  .movie_desc {
    width: 50%;
  }
  .info_section {
    background: linear-gradient(to right, #0d0d0c 50%, transparent 100%);
  }
  .blur_back {
    width: 80%;
    background-position: -100% 10% !important;
  }
}
@media screen and (max-width: 768px) {
  .movie_card {
    width: 95%;
    margin: 70px auto;
    min-height: 350px;
    height: auto;
  }
  .blur_back {
    width: 100%;
    background-position: 50% 50% !important;
  }
  .movie_header {
    width: 100%;
    margin-top: 85px;
  }
  .movie_desc {
    width: 100%;
  }
  .info_section {
    background: linear-gradient(to top, #141413 50%, transparent 100%);
    display: inline-grid;
  }
}
#bright {
  box-shadow: 0px 0px 150px -45px rgba(255, 51, 0, 0.5);
}
#bright:hover {
  box-shadow: 0px 0px 120px -55px rgba(255, 51, 0, 0.5);
}
.bright_back {
  background: url("https://occ-0-2433-448.1.nflxso.net/art/cd5c9/3e192edf2027c536e25bb5d3b6ac93ced77cd5c9.jpg");
}
#tomb {
  box-shadow: 0px 0px 150px -45px rgba(19, 160, 134, 0.6);
}
#tomb:hover {
  box-shadow: 0px 0px 120px -55px rgba(19, 160, 134, 0.6);
}
.tomb_back {
  background: url("https://fsmedia.imgix.net/cd/c9/5e/ba/4817/4d9a/93f0/c776ec32ecbc/lara-crofts-neck-looks-unnatural-in-the-new-poster-for-tomb-raider.png");
}
#ave {
  box-shadow: 0px 0px 150px -45px rgba(199, 147, 75, 0.7);
  margin-bottom: 200px;
}
#ave:hover {
  box-shadow: 0px 0px 120px -55px rgba(199, 147, 75, 0.7);
}
.ave_back {
  background: url("https://www.gannett-cdn.com/-mm-/c03fd140debe8ad4c05cf81a5cad7ad61a12ce52/c=0-1580-2985-3266&r=x803&c=1600x800/local/-/media/2017/06/09/USATODAY/USATODAY/636326272873599176-Black-Panther-Teaser.jpg");
}

.wrapper{
    display: grid;
    grid-template-columns: 80% 20%;
}
.wrap1,.wrap2{
    height: 90vh;
    overflow-y: scroll;
}
.wrap2>*{
    margin-top: 5px;
    background-color: #3d3d3d38;
    padding: 3%
}
::-webkit-scrollbar{
    display: none;
}
</style>
@include('layout.navbar')
<div class="wrapper">
<div class="wrap1">
    <div class="movie_card" id="bright">
        <div class="info_section">
          <div class="movie_header">
            <img class="locandina" src="https://movieplayer.net-cdn.it/t/images/2017/12/20/bright_jpg_191x283_crop_q85.jpg"/>
            <h1>Bright</h1>
            <h4>2017, David Ayer</h4>
            <span class="minutes">117 min</span>
            <p class="type">Action, Crime, Fantasy</p>
          </div>
          <div class="movie_desc">
            <p class="text">
              Set in a world where fantasy creatures live side by side with humans. A human cop is forced to work with an Orc to find a weapon everyone is prepared to kill for. 
            </p>
          </div>
          <div class="movie_social">
            <ul>
              <li><i class="material-icons">share</i></li>
              <li><i class="material-icons"></i></li>
              <li><i class="material-icons">chat_bubble</i></li>
            </ul>
          </div>
        </div>
        <div class="blur_back bright_back"></div>
      </div>
      
      <div class="movie_card" id="tomb">
        <div class="info_section">
          <div class="movie_header">
            <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53750.jpg"/>
            <h1>Tomb Raider</h1>
            <h4>2018, Roar Uthaug</h4>
            <span class="minutes">125 min</span>
            <p class="type">Action, Fantasy</p>
          </div>
          <div class="movie_desc">
            <p class="text">
              Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.
            </p>
          </div>
          <div class="movie_social">
            <ul>
              <li><i class="material-icons">share</i></li>
              <li><i class="material-icons"></i></li>
              <li><i class="material-icons">chat_bubble</i></li>
            </ul>
          </div>
        </div>
        <div class="blur_back tomb_back"></div>
      </div>
      
      <div class="movie_card" id="ave">
        <div class="info_section">
          <div class="movie_header">
            <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53715.jpg"/>
            <h1>Black Panther</h1>
            <h4>2018, Ryan Coogler</h4>
            <span class="minutes">134 min</span>
            <p class="type">Action, Adventure, Sci-Fi</p>
          </div>
          <div class="movie_desc">
            <p class="text">
              T'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T'Challa's father's mistake. 
            </p>
          </div>
          <div class="movie_social">
            <ul>
              <li><i class="material-icons">share</i></li>
              <li><i class="material-icons"></i></li>
              <li><i class="material-icons">chat_bubble</i></li>
            </ul>
          </div>
        </div>
        <div class="blur_back ave_back"></div>
      </div>
</div>
<div class="wrap2">
    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    <iframe width="250px" height="auto" src="https://www.youtube.com/embed/VywxIQ2ZXw4" title="Postman Beginner&#39;s Course - API Testing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    
     
      
</div>
</div>