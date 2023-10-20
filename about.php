<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About - Elementary</title>
  <meta name="description" content="This website and it's author advocate for the continuous learning and education about the LGBTQIA+ community.">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
</head>

<body id="wow">

    <script>
        window.onscroll = function() {myFunction()};
        
        function myFunction() {
          if (document.documentElement.scrollTop > 20) {
            document.getElementById("wow").className = "color-change";
          } else {
            document.getElementById("wow").className = "";
          }
        }
    </script>

  <div class="content-wrapper">

    <header class="banner">

      <?php include('includes/banner.php');?>
	
    </header>

    <main class="maincontent">

      <h2>About the Site</h2>

      <p class="pun">I've asked so many people what LGBTQIA+ stands for, and so far no one has given me a straight answer.</p>
      <p class="intro">Sometimes it feels like trying to learn about the LGBTQIA+ community is a bit like opening up an Elvish-language dictionary; or worse, spiraling through endless Wikipedia pages on some of the <a href="https://www.buzzfeed.com/ishabassi/weird-wikipedia-pages" target="_blank">strangest topics</a>. Similar to how vast and ever-changing the LGBTQIA+ spectrum is (don't worry, we'll discuss that!), its community is also constantly evolving and adapting to fit the needs and identities of its members. It can be incredibly daunting to dive into learning about the LGBTQIA+ community, but fear no more! While there is a wealth of knowledge to be found and sifted through on the Internet for this community, this website aims to educate LGBTQIA+-knowledge seekers the core (and most prominent) components of the community. This website is going to make it so simple that even elementary school kids will understand it. If you haven't time to check out the full website, then feel free to check out the video below for a crash course!</p>

      <div class="media" data-url="https://www.youtube.com/embed/UG8eMgb-_Oc">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/UG8eMgb-_Oc" allowfullscreen></iframe>
      </div>

    </main>

    <aside class="sidebar">

	    <h3>About the Author</h3>

      <img src="images/self.png" alt="Self portrait of website author" width="250" height="344">

      <p class="intro">Tia Woolf (she/they) has always had a passion for writing, and for advocacy. She graduated with a Bachelor of Arts in writing, and is currently pursuing her MLIS while working concurrently with homeless youth in the LGBTQIA+ community. A proud LGBTQIA+ member herself (GO ACES), Tia Woolf is always looking for newer, better ways to advocate for the queers. When not writing or working, they can usually be found watching horror films with their spouse, or cuddling one of her three dogs.</p>

      <a href="http://instagram.com/quintessen.tia" target="_blank"><img class="social" src="images/instagram.png" alt="Instagram social media icon button" width="120" height="120"></a>

    </aside>

    <footer class="site-footer">

      <?php include('includes/footer.php');?>

    </footer>

  </div> <!--end of wrapper-->

</body>
</html>