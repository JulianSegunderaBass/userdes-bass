<!DOCTYPE html>
<html>
<head>
	<title>1000 floor elevator</title>
	<link rel="stylesheet" type="text/css" href="Elevator.css">
</head>
<body>

<div class="navbar">
  <a href="index.php">About Me</a>
  <div class="subnav">
    <button class="subnavbtn">Activities <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="FavoriteApps.php">My Favorite Apps</a>
      <a href="Elevator.php" class = "active">1000-floor Elevator</a>
	  <a href="Information Design.php">Information Design</a>
	  <a href="NeedFinding.php">Need Finding</a>
      <a href="RegAndLog.php">Registration and Login Forms</a>
      <a href="Personas.php">Personas</a>
      <a href="4by3GridDesign.php">4 by 3 Grids</a>
      <a href="12Columns.php">12 Column Design</a>
      <a href="https://sway.office.com/knOcFgQXhokKRe5P?ref=Link" id = "SwayLink">My Sample Sway</a>
      <a href="https://github.com/JulianSegunderaBass" id = "GitLink">My Github</a>
    </div>
  </div> 
  <a href="Reflections.php">Reflections</a> 
  <a href="Certifications.php">Certifications</a>
</div>

	<center>
		<header>
			<h1>The 1000-Floor Elevator</h1>
			<p>The classic design dilemma</p>
		</header>
	</center>

	

	<div class = "content">
		
		<p>From what I’ve researched, this problem is nothing new from the Design community. It’s become something of a cornerstone as a versatile design challenge that could have literally thousands of approaches depending on the path you take. As part of my reading, I’ve come across various outlooks that helped me analyze what really needed to be done.</p>

	</div>

	<div class = "content2">
		<h1 align = "center">Analysis</h1>

		<h2 align = "center">Before jumping to the design itself, it would probably be wise to identify the given we’re working with. </h2>

		<p>First off, it is not stated what kind of elevator we’re working with, or if there is only one to begin with. Who, or what will it be used for?</p>

		<p>One thing to understand is that for a building to house a thousand floors, it would probably have all kinds of people within. Those with disabilities, possible language barriers, varying ages, you name it. You’d have the whole roster of a population to be concerned about. That being said, I think iconography would be something invaluable in the interface design (for example, using a “thumbs up” icon instead of an enter button, or a cross instead of a stop).</p>

		<p>Another thing we may safely guess is that while we don’t know if the elevator will be used for people, animals or cargo, it must be of a fairly decent size to accommodate the volume of a 1000-floor building, so we may be working with a fair amount of space within the elevator.</p>

		<!-- <img src="Sway.png" id = "Sway"> -->

		<p>Lastly, I’d like to imagine that this wouldn’t be the only elevator in the building considering its sheer size. Logically, a few of them would most likely be stationed around, so the populations may be distributed fairly evenly.</p>

		
		<div class = "list">
			<p>In general:</p>
			<p>-Make a design that can adhere to many audiences or backgrounds.</p>
			<p>-Consider the space within that may be used to an advantage.</p>
			<p>-Make room for the possibility of multiple elevators working in unison.</p>
		</div>
	</div>

	<div class = "content3">
		<h1 align = "center">The Elevator Design</h1>

		
		<p>One of my bigger concerns would be how an elevator of this magnitude would run smoothly. Most nowadays have auto-closing doors and move around based on a timer in-between floors an the such, but with the possibility of larger cargo or masses, this could get tricky or even hazardous. </p>

		<p>That being said, I think it would be wise to keep the elevator at a complete standstill when stopping at a floor, and only continue moving at the activation of some switch or button. This would give enough time to make any big transitions.</p>

		<p>Another thing to add would be to follow the standard rule with elevators; no round trips. I think priority should be given to those entering with the flow of the elevator, moving up or down. Except of course in special cases of cargo, or the disabled.</p>

		<p>As for the interior of the elevator, I think a system of folding chairs or even benches could be useful as to accommodate different loads. If we’re unsure whether it’s a freight elevator or one for people, why not aim for both? Benches may be added for people and folded when needed for larger equipment. Of course, designated areas would still be identified and prioritized for the elderly and disabled. </p>

		<p>An entertainment system would be good for keeping attention, but reception and/or internet access could pose an issue. </p>

		<!-- <img src="Scan1.jpg" class = "scan">
		<img src="Scan2.jpg" class = "scan">
		<img src="Scan3.jpg" class = "scan"> -->

	</div>

	<div class = "content4">
		<h1 align = "center">The User Interface Concept</h1>

		<div class="panel">
			<div class = "panelText">
				<p>The initial panel view of the app</p>
			</div>
		</div>

		<!-- <img src="Panel.jpg" id = "Panel"> -->

		<p>One thing I’ve identified for the interface is that all types of elevators in this context would have the same issue; input size. It’s tricky to lay out a system of 1000 buttons without taking too much room or confusing the user. Based on research, what I believe would be the simplest and most efficient input method would be a keypad, similar to that on phones. Sleek an elegant, the user types in the desired floor, and presses a button underneath to submit it to a queue. Of course, beneath this keypad would be your standard open and close keys, as well as emergency call buttons. Also considering the potential space, multiple input pads could be added along the walls.</p>

		<p>As for the design of the keys themselves, I agree with many online in that hard keys would be more durable than a simple touchscreen. I would add icons with the buttons as well to help with varying cultures or languages. As for the placement, I would rather not keep them too high up as to make way for the disabled as well.</p>

		<div class="confirm">
			<div class = "confirmText">
				<p>Confirm Input?</p>
			</div>
		</div>

		<!-- <img src="Confirm.jpg" class = "Confirm">
		<img src="Confirmed.jpg" class = "Confirm"> -->

		<p>As a side note, I think it would be wise to incorporate a function to cancel a chosen floor when necessary. Chances are, people may occasionally make mistakes when choosing a floor, so perhaps the display may briefly show the floor chosen before adding it to a queue as a form of validation. The user may cancel and retry if needed.</p>

		<div class="layout">
			<div class = "layoutText">
				<p>The Elevator Layout</p>
			</div>
		</div>

		<!-- <img src="Layout.jpg" id = "Layout"> -->

		<p>One issue I also encountered would be how to display this said queue. The first thought would be a simple list near the keypads, but then this would become intimidating with loads of numbers displayed that would probably involve scrolling. My next idea was to make use of the space and height of the elevator by creating a form of LCD screen that wraps around its sides, almost like a banner. Along this screen, the floors would be displayed in the input order with the current one being highlighted in some color. </p>

		<br><br><br><br>

		<p>As I mentioned above, the elevator would need some form of activation when stopping at floors to continue its route. I would think stationing an operator for this purpose would help with the cause. Not only would this person assist any cargo or people entering, he/she may also help give assistance to the disabled who may have trouble choosing a floor. </p>

		<p>Lastly, the interface would also give a notification if the floor entered is already enqueued, and would inform the user to retry. </p>
		<!-- <img src="Scan1.jpg" class = "scan">
		<img src="Scan2.jpg" class = "scan">
		<img src="Scan3.jpg" class = "scan"> -->

	</div>

	<div class = "content5">
		<h1 align = "center">Conclusions</h1>

		<p>At the end of the day, I find the biggest challenge here to be working with various variables that we don’t completely know about. You have to take into account different possibilities and applications for the design, so I tried my best to make one that can apply to a variety of uses. With all the extra kinks and ideas put aside, number one priority would always be the safety of the passengers and/or cargo, and their satisfaction. When faced with a problem, it’s always important to know how to ask the right questions.</p>

	</div>

	<div class = "References">
		<h1 align = "center">References</h1>

		<p>Collins, D. (2017, July). The 1000 Floor Elevator. Retrieved from MASTERY: https://community.uxmastery.com/t/the-1-000-floor-elevator/4395/4</p>
		<p>The 1000 Floor Elevator: Why Most Designers Fail Google’s Infamous Interview Design Challenge. (2017, June 21). Retrieved from Medium: https://medium.com/svilenk/the-1-000-floor-elevator-why-most-designers-fail-googles-infamous-interview-design-challenge-a5ff9ad91741</p>
		<p>Tokmakova, A. (2017, June 23). Google's infamous 1000 floor elevator design question. Retrieved from Archinect News: https://archinect.com/news/article/150014263/google-s-infamous-1000-floor-elevator-design-question</p>

	</div>

</body>
</html>
