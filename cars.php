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
        <style>
            .leftContent1,.rightContent1 {
                width: 200px;
                display: block;
                margin-top: 100px;
                color:black;
                margin: auto;
                
            }
            
            .leftContent1 {
                float:left;
                margin-left: 100px;
            }
            .carsbody{
                width: 800px;
                margin: auto;
                margin-top: 100px;
            }
            
        </style>
    </head>
    <body>
        <?php
            include 'nav_tab.php'; 
        ?>
        <div class="carsbody">
        <div class="leftContent1">
            <b><form action="registercar.php" method="post" >
                <h1> ADD CAR </h1>
                License No: <input type="text" name="lno"/><br><br>
                Model: <input type="text" name="model"/><br><br>
                Year : <input type="text" name="year"/><br><br>
                Car type: <select name = "Cartype">
                    <option>Compact</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>SUV</option>
                    <option>Van</option>
                    <option>Truck</option>
                    </select><br><br>
                Car Owner: <select name = "Carown">
                <option>Individual</option>
                <option>Bank</option>
                <option>Company</option>
                </select><br><br>
                <h2>Enter Owner Details : </h2><br>
                Unique ID: <input type="text" name="uid"/><br><br>
                Name: <input type="text" name="oname"/><br><br>
                City : <input type="text" name="city"/><br><br>
                <input type="submit" name="submit" value="Register">
            </form></b>	
        </div>	


                    <div class="rightContent1">
                    <h1> VIEW CARS & RATES</h1>
                    <form action="viewcar.php" method="post">
                        Select Car type to view: 
                        <select name="Ctype">
                            <option>Compact</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>SUV</option>
                            <option>Van</option>
                            <option>Truck</option>
                        </select>
                        <input type="submit" name="submit1" value="View">
                    </form>

<br><br><br><br>

        <h1> UPDATE RENTAL RATES </h1>
            <form action="update.php" method="post">
            Select Car type to update: <select name = "Ctype">
            <option>Compact</option>
            <option>Medium</option>
            <option>Large</option>
            <option>SUV</option>
            <option>Van</option>
            <option>Truck</option>
            </select><br><br>
            Daily Rate: <input type="text" name="udrate"/><br><br>
            Weekly Rate: <input type="text" name="uwrate"/><br><br>
            <input type="submit" name="submit1" value="Update">
            </form>
	</div>
        </div>
    </body>
</html>
