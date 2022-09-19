<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .dib-post-title h1,h2,h3,h4,h5,h6{font-weight: bold;}
      .dft{background-color: #E1241B;}
      .dft:hover{background-color: #bc1c14;}
      #navbar {
      overflow: hidden;
      background-color: #f1f1f1;
      padding: 15px 10px;
      transition: 0.4s;
      width: 100%;
      top: 0;
      z-index: 99;
    }

    #navbar a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px; 
      line-height: 25px;
      border-radius: 4px;
    }

    #navbar #logo {
      width: 50px;
      font-weight: bold;
      transition: 0.4s;
    }
    a{color: #000;text-decoration: none;}
    a:hover{color: #DE2A26;text-decoration: none;}
    #dib-template-3 #dib-posts-col .dib-post-featured-image img {
    max-width: 100%;
    border-radius: 10px;
}
dl, ol, ul {
    margin-top: 0;
    margin-bottom: rem;
}
ol, ul{
   padding-left: 0rem;
   list-style-type: none;
}
li {padding-bottom: 15px;}

    </style>
    <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "3px 10px";
        document.getElementById("logo").style.fontSize = "30px";
      } else {
        document.getElementById("navbar").style.padding = "15px 10px";
        document.getElementById("logo").style.fontSize = "50px";
      }
    }
    </script>
  </head>
  <body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
          </ul>
          <div class="d-flex" role="search">
            <a class="btn dft text-uppercase fw-bold text-white pt-2 pb-2" href="#" role="button" style="border-radius:12px;"><span style="font-size: 13px;">Daftar Sekarang</span></a>
          </div>
        </div>
      </div>
    </nav>
    <!--/ menu -->
    <div class="container">
      <div class="row ps-3 pe-3">
        <div class="col-md-12 py-5 text-secondary fw-light">
          <div class="row">
          <div class="col-md-8">
            <div id="dib-posts"></div>
          </div>
          <div class="col-md-4 me-3 ms-3">
            <h4 class="text-dark mb-3">Category</h4>
            <div id="dib-categories"></div>
            <h4 class="text-dark mb-3 mt-4">Recent Post</h4>
            <div id="dib-recent-post-list"></div>
          </div>
        </div>
        </div>
      </div>
    </div>
  

    <div class="container-fluid py-5" style="background: rgb(230,14,56);
background: linear-gradient(90deg, rgba(230,14,56,1) 35%, rgba(236,87,51,1) 100%);border-top-left-radius: 70px 60px;border-top-right-radius: 70px 60px;">
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row ps-3 pe-3">
          <div class="col-md-12 text-white">
            <p>Sed at interdum est, nec tincidunt neque. Vestibulum commodo dignissim odio ac ullamcorper. Sed tempor tortor vel eros luctus, id tincidunt leo porta. Vivamus luctus, augue et semper eleifend, est ex finibus risus, id porta nibh ipsum a tellus. Suspendisse consequat elit ante, ut pretium lorem vulputate eget. Donec sed velit eros. Nam aliquam hendrerit risus at viverra. Proin finibus, mauris ac ullamcorper feugiat, libero odio viverra elit, et sodales erat ex id ante. Maecenas tincidunt venenatis nisi, eu luctus massa dictum vitae. Etiam lacus dui, sagittis in blandit in, molestie ac sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quam purus, euismod sit amet ultrices nec, fermentum sit amet erat. Integer volutpat ex id elit auctor efficitur.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
var dib_id = 'DQ7ZCUW7JANB0NLA8B3I';
var dib_recent_posts = 9;
var dib_recent_post_list = 10;
var dib_recent_posts = 1;
var dib_specific_posts = '3';
var dib_category = 10;
</script>
<script src="https://io.dropinblog.com/embedjs/DQ7ZCUW7JANB0NLA8B3I.js"></script>
  </body>
</html>