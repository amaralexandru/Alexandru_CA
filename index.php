<?php 
include('path.php');
include(ROOT_PATH . "/app/controllers/topics.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Blog</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="assets/images/img1.JPG" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Why I Almost Never Say: “We Can’t Afford That”</a></h4>
            <i class="far fa-user"> Andrea Dekker</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/img2.JPG" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">5 Ways to Beat Burnout</a></h4>
            <i class="far fa-user"> Abby Lawson</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 24, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/img3.JPG" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">How I Stick to My Fitness Goals</a></h4>
            <i class="far fa-user"> Jason Muller</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 8, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/img4.JPG" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">The One Reason You Won’t Reach Your Goals This Year</a></h4>
            <i class="far fa-user"> Jennifer Lorance</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 19, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/img5.JPG" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">10 Brilliant Strategies that Can Help You Accomplish a Big Goal</a></h4>
            <i class="far fa-user"> Nic Brophy</i>
            &nbsp;
            <i class="far fa-calendar"> Apr 24, 2022</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.html">The Simple Technique that Helps Me Be Insanely Productive Every Single Day</a></h2>
            <i class="far fa-user"> Mark Brosky</i>
            &nbsp;
            <i class="far fa-calendar"> Aug 28, 2022</i>
            <p class="preview-text">
              I’ve talked about this technique on the blog before, but I think it’s helpful to bring it up again at this time of year. Because maybe, just maybe, it will be the thing that will help you be productive all year long, not just at the beginning of the school year.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image_4.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.html">10 Easy, Family-Approved Zucchini Recipes</a></h2>
            <i class="far fa-user"> SimplyCreative</i>
            &nbsp;
            <i class="far fa-calendar"> Aug 27, 2022</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_5.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> SimplyCreative</i>
            &nbsp;
            <i class="far fa-calendar"> Aug 26, 2022</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html"class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_6" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> SimplyCreative</i>
            &nbsp;
            <i class="far fa-calendar"> Aug 25, 2022</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $key => $topic): ?>
              <li><a href="#"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>