<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CGMCD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/responsive.css">


</head>
<body>
	

<div id="header1">
	<?php
		//$_SESSION["valid"]=='true';
		 include("assets/header1.php");
     ?>	
</div>

<div  id="facade" style="
			background-repeat: no-repeat;
			background-image: url('img/facade.jpg');
		">

	<!--br>
	<br>
	<br>
	<br>
	<br>
	<br-->

		    	
</div>

<div class="container" >

	<!-- 
		
		# Nav-menu :
			 ORANGE           - rgb(229, 150, 5);
			 Secondary Yellow - rgb(254, 204, 50);

		# BODY : 
			Magenta         - rgb(99, 24, 37);
			Grey/black/TEXT - rgb(36, 36, 36);
			Light Blue Accents - rgb(58, 159, 225);

	-->

	<br>



	<div class="row" style="max-height:auto;margin:3px;border: 3px solid blue;border-radius: 10px;">		

			<span style="width: 5%">&nbsp;</span>
		 	<img width="45%;" src="img/nylj.jpg">			
			<span style="width: 5%">&nbsp;</span>
			<img width="45%;" sizes="" src="img/award-winning.jpg">			
		
	</div>
	
	<div class="row">
	
		<div  style="text-align:center;" class="col-xs-12"> 
			<br>
			<p><strong><span style="font-size : 20px;">VOTED #1</span> &nbsp; Disciplinary Defense firm in the New York Law Journal 2010 ranking survey. </strong></p>
		</div>

	</div>

<br>
	

	<div class="row">
	   
		<div class="col-xs-1"> </div>
	    <div class="col-xs-10"> 
			
			
			<p>The Law Office of McDonough &amp; McDonough LLP is a New York disciplinary defense law firm.  We provide disciplinary and grievance defense to lawyers and law firms.  We provide experienced legal defense of attorney disciplinary grievances, attorney disciplinary proceedings, legal fee matters and criminal charges.  Our office offers law firm consulting to New York law firms.  We represent law graduates and law students facing Character and Fitness challenges or law school disciplinary charges.  We provide advice and counsel on legal ethics, grievances and risk management.</p>
			<p>Our office represents numerous lawyers and firms on individual grievance and discipline matters, and provides specialized law firm consulting services to many larger firms. Regardless of the size of the firm, or the seriousness of the grievance or disciplinary matter, all of our clients receive prompt confidential professional service.</p>
			<p>Chris McDonough, a New York Grievance Lawyer, has dedicated his professional career of over twenty five years to the field of professional discipline and legal ethics.  He represents numerous clients before the various Appellate Division Grievance Committees, Bar Association Grievance Committees and Character and Fitness Committees throughout New York State.  He provides ethical counsel to law firms in Nassau, Suffolk, Queens, Brooklyn, Manhattan, Bronx, Westchester, and throughout New York State.</p>

			<br>

			<table border="0" cellspacing="0" cellpadding="3">
			<tbody>
				<tr>
					<td><span style="color:#ff0000;"><img src="https://i1.wp.com/webhosting.web.com/imagelib/sitebuilder/layout/spacer.gif" alt="" width="1" height="10" /></span><strong>DISCIPLINE AND GRIEVANCE DEFENSE<br />
					FOR NEW YORK ATTORNEYS</strong></td>
				</tr>
				<tr>
					<td width="535">
						<div>
							<ul>
								<li>New York Disciplinary Defense</li>
								<li>Attorney Grievance Defense</li>
								<li>Bar Association Lawyer Grievances and Fee Disputes</li>
								<li>Character and Fitness Representation for Law Graduates and Former Lawyers Seeking Readmission</li>
								<li>Law Student Disciplinary Defense</li>
								<li>Legal Ethics Opinions for Lawyers</li>
								<li>Risk Management for Lawyers</li>
								<li>Criminal Defense of Lawyers and Law Students</li>
								<li>N.Y. Law Firm Consulting</li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
		</div>
	    <!--div class="col-xs-12"> 
	    	<h3>Main Page content (row/col12)</h3>
	    	<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2>More Content</h2>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2>More Content</h2>
	    </div-->
		<br>	
	  	
	</div> 
</div> <!-- End of Container -->


<div id="scrolling_footer" style="display:none;" >
	<?php	
		 include("assets/scrollingFooter.php");
     ?>	
</div>

<div id="static_footer">
	<?php	
		 include("assets/staticFooter.php");
     ?>	
</div>

<script type="text/javascript">
	// TBD - onScroll  UP  - SHOW scrolling header/footer
	// TBD - onScroll DOWN - HIDE scrolling header/footer


/*
    $(function(){
      //Keep track of last scroll
      var lastScroll = 0;
      var scrollCtr = 0; //TBD - use Modulo offset technique to limit the frequency of functuion calls ?
      $(window).scroll(function(event){
          //Sets the current scroll position
          var st = $(this).scrollTop();
          //Determines up-or-down scrolling
          if (st > lastScroll){
             //Replace this with your function call for downward-scrolling
             alert("DOWN");
          }
          else {
             //Replace this with your function call for upward-scrolling
             alert("UP");
          }
          //Updates scroll position
          lastScroll = st;
      });
    });

*/

</script>

</body>
</html>