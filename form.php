<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thoughts - Elementary</title>
	<meta name="description" content="This page has additional resources for those needing a deeper LGBTQIA+ education, as well as a form to submit that canvasses the website viewer demographic.">
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
	
		<?php print $formMessage;?>
	
		<form class="form" method="post">

			<label for="name">Name</label>
			<input type="text" id="name" name="Your Name" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>">
			
			<label for="email">Email</label>
			<input type="text" id="email" name="Your Email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];}?>">
			
			<fieldset>
			
				<legend>Are you part of the LGBTQIA+ community?</legend>
				
				<label for="yes">Yes</label>
				<input type="radio" id="yes" name="LGBTQIA+ Member?" value="Yes">
				
				<label for="no">No</label>
				<input type="radio" id="no" name="LGBTQIA+ Member?" value="No">
				
				<label for="unsure">Unsure</label>
				<input type="radio" id="unsure" name="LGBTQIA+ Member?" value="Unsure">

			</fieldset>
	  
			<fieldset>
		
				<legend>Gender (check all that apply)</legend>
	 
				<label>Nonbinary<input type="checkbox" name="Gender[]" id="nonbinary" value="Nonbinary"<?php if(isset($_POST['gender']) && in_array('nonbinary',$_POST['gender'])) {echo " checked";}?>></label>	
		
				<label>Female<input type="checkbox" name="Gender[]" id="female" value="Female"<?php if(isset($_POST['gender']) && in_array('female',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Male<input type="checkbox" name="Gender[]" id="male" value="Male"<?php if(isset($_POST['gender']) && in_array('male',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Transgender<input type="checkbox" name="Gender[]" id="transgender" value="Transgender"<?php if(isset($_POST['gender']) && in_array('transgender',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Agender<input type="checkbox" name="Gender[]" id="agender" value="Agender"<?php if(isset($_POST['gender']) && in_array('agender',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Two Spirit<input type="checkbox" name="Gender[]" id="two-spirit" value="Two Spirit"<?php if(isset($_POST['gender']) && in_array('two-spirit',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Genderqueer<input type="checkbox" name="Gender[]" id="genderqueer" value="Genderqueer"<?php if(isset($_POST['gender']) && in_array('genderqueer',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Genderfluid<input type="checkbox" name="Gender[]" id="genderfluid" value="Genderfluid"<?php if(isset($_POST['gender']) && in_array('genderfluid',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Intersex<input type="checkbox" name="Gender[]" id="intersex" value="Intersex"<?php if(isset($_POST['gender']) && in_array('genderfluid',$_POST['gender'])) {echo " checked";}?>></label>
				
				<label>Other<input type="checkbox" name="Gender[]" id="other" value="Other"<?php if(isset($_POST['gender']) && in_array('other',$_POST['gender'])) {echo " checked";}?>></label>
	
			</fieldset>
	 
			 <fieldset>

				<legend>Sexuality</legend>

					<label for="Primary-Sexuality">Primary</label>
					<select id="Primary-Sexuality" name="Primary-Sexuality">
						<option value="Select">Select One</option>
						<option value="Pansexual">Pansexual</option>
						<option value="Panromantic">Panromantic</option>
						<option value="Bisexual">Bisexual</option>
						<option value="Biromantic">Biromantic</option>
						<option value="Asexual">Asexual</option>
						<option value="Aromantic">Aromantic</option>
						<option value="Monoromantic">Monoromantic</option>
						<option value="Demisexual">Demisexual</option>
						<option value="Graysexual">Graysexual</option>
						<option value="Fluid">Fluid</option>
						<option value="Gay">Gay</option>
						<option value="Lesbian">Lesbian</option>
						<option value="Heterosexual">Heterosexual</option>
						<option value="Queer">Queer</option>
						<option value="Questioning">Questioning</option>
						<option value="Other">Other</option>
						<option value="Unknown">Unknown/Unsure</option>
					</select>
					
					<label for="Secondary-Sexuality">Secondary</label>
					<select id="Secondary-Sexuality" name="Secondary-Sexuality">
						<option value="Select">Select One</option>
						<option value="Pansexual">Pansexual</option>
						<option value="Panromantic">Panromantic</option>
						<option value="Bisexual">Bisexual</option>
						<option value="Biromantic">Biromantic</option>
						<option value="Asexual">Asexual</option>
						<option value="Aromantic">Aromantic</option>
						<option value="Monoromantic">Monoromantic</option>
						<option value="Demisexual">Demisexual</option>
						<option value="Graysexual">Graysexual</option>
						<option value="Fluid">Fluid</option>
						<option value="Gay">Gay</option>
						<option value="Lesbian">Lesbian</option>
						<option value="Heterosexual">Heterosexual</option>
						<option value="Queer">Queer</option>
						<option value="Questioning">Questioning</option>
						<option value="Other">Other</option>
						<option value="Unknown">Unknown/Unsure</option>
					</select>

			</fieldset>
			
			<label for="more">Tell us a bit more about yourself and your position in the LGBTQIA+ community</label>
			<textarea name="More About You" id="more"><?php if (isset($_POST['more'])) {echo $_POST['more'];}?></textarea>
			
			<label for="comments">Comments</label>
			<textarea name="Your Comments" id="comments"><?php if (isset($_POST['comments'])) {echo $_POST['comments'];}?></textarea>
			
			<input type="submit" value="submit form">
	
		</form>
	
	</main>
	
	<aside class="sidebar">
	
		<h2>More Resources:</h2>
    
      <ul class="resources">
        <li><a href="https://www.itspronouncedmetrosexual.com/" target="_blank">It's Pronounced Metrosexual</a></li>
        <li><a href="https://www.glaad.org/" target="_blank">GLAAD</a></li>
        <li><a href="https://www.hrc.org/" target="_blank">Human Rights Campaign</a></li>
        <li><a href="https://www.equalityfederation.org/" target="_blank">Equality Federation</a></li>
        <li><a href="https://www.thetaskforce.org/" target="_blank">National LGBTQ Task Force</a></li>
        <li><a href="https://www.glsen.org/" target="_blank">GLSEN</a></li>
        <li><a href="https://www.thetrevorproject.org/" target="_blank">The Trevor Project</a></li>
        <li><a href="https://pflag.org/" target="_blank">PFLAG</a></li>
        <li><a href="https://thesafezoneproject.com/" target="_blank">The Safe Zone Project</a></li>
        <li><a href="https://www.sageusa.org/" target="_blank">Advocacy and Services for LGBTQ+ Elders</a></li>
        <li><a href="https://bi.org/en" target="_blank">bi.org</a></li>
        <li><a href="http://www.asexuality.org/" target="_blank">Asexual Visibility & Education Network</a></li>
        <li><a href="https://everydayfeminism.com/" target="_blank">Everyday Feminism</a></li>
        <li><a href="https://www.bitchmedia.org/" target="_blank">bitchmedia</a></li>
        <li><a href="https://transequality.org/" target="_blank">National Center for Transgender Equality</a></li>
        <li><a href="https://transgenderlawcenter.org/" target="_blank">Transgender Law Center</a></li>
        <li><a href="https://transwhat.org/" target="_blank">Trans What? A Guide Toward Allyship</a></li>
      </ul>
	
	  </aside>
	
	<footer class="site-footer">
	
		<?php include('includes/footer.php');?>
		
	</footer>
	
	</div>
</body>
</html>