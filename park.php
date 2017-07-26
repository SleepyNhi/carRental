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
         
        </style>
    </head>
    <body>
        <?php
            include 'nav_tab.php';
        ?>
        
        <form name="form" method="post" action="some php file here">
         <table align="center" cellpadding = "10">

         <tr>
         <td>Parking Space Number</td>
         <td><input type='number' name="space_id" maxlength="100" required="required"></td>
         </tr>

         <tr><td>ENTRY DATE*</td>
         <td><input type="time" name="entry_time" required="required"></td>
         </tr>

         <tr>
         <td>ENTRY TIME*</td>
         <td><input type="time" name="leave_time" required="required"></td>
         </tr>

         <tr>
         <td colspan="3" align="center">
         <input type="submit" class="submitParking" name="submitParking" value="SUBMIT" >
         </td>
         </tr>

         <tr><td>*fields are mandatory.</td></tr>
         </table>

         </form>
    </body>
</html>
