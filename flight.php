<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
   
    </head>
    <body>
        <?php
            include 'nav_tab.php';
        ?>
        
        <div class="leftcontent">
<h1>Book Tickets</h1>
<div id = "idspan"><span></span></div>
		<form id="bookform" action="some php file here" method="post">
		<fieldset id = "fieldsetid" >
		<legend>Flight Details</legend>
		<div id = "flight_details">
			<label>Date</label>
			<input type = 'date' name = "date" required />
			<label>Source</label>
			<select name="Source" required>
				<option value="From">From</option>
    <option value="Atlanta">Atlanta</option>
    <option value="California">California</option>
    <option value="Miami">Miami</option>
    <option value="Birmingham">Birmingham</option>
  </select>
			<label>Destination</label>
			<select name="Destination" required>
				<option value="To">To</option>
    		<option value="Atlanta">Atlanta</option>
    		<option value="California">California</option>
    		<option value="Miami">Miami</option>
    		<option value="Birmingham">Birmingham</option>
  		</select><br>
			<label>Departure Time</label>
			<input type = "time" id = "deptime"  name = "deptime" required/>
			<label>Arrival Time</label>
			<input type = "time" id = "arrtime" name = "arrtime" required />
			<label id="classlabel">Class</label>
			<select name="Class" required>
				<option value="Class">Class</option>
    		<option value="Economy">Economy</option>
    		<option value="Prestige">Prestige</option>
				<option value="First">First Class</option>
			</select>
			<label># of Travelers</label>
			<select name="travelerNum" required>
				<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
    		<option value="6">6</option>
    		<option value="7">7</option>
				<option value="8">8</option>
			</select>
		</div>
		</fieldset>
		<fieldset id = "fieldsetidp" >
		<legend>Passenger Details</legend>
		<div id="passenger_details">

			<label>Name:</label><input type="text" id="pname"  name="pname" required /><br>
			<label>Age:</label><input type="number"  id="page" name="page" required /><br>
			<label>Gender:</label>
			<select id="pgender" name="pgender" required >

			<option value="male">Male</option>
			<option value="female">Female</option>
			</select>

		</div>
		</fieldset>
			<input type="submit" value="BOOK" id="bookbut"/>
			<input type="button" value="CANCEL" id="cancelbut"/>
		<form>
</div>


    </body>
</html>
