<?php
    include('topmenu.php');
?>
<html>
    <head>
        <script language="JavaScript" type="text/JavaScript" src="checkform.js"></script>

<style type="text/css">
#scle {text-align: center;
		font-size: 3em;
		color : #336666;}

body {
    background-color: black;
   
}
</style>

    </head>
    <body>
        <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <div id = "scle">Enter your information </div>  
                </tr>
                <tr>
                    <td colspan="3" align="center" size="50" style="color: black">.</td>  
                </tr>
                

                <tr>
                    <td style="color: white">Email Address: </td>
                    <td><input size="20" type="text" name="emailaddress" style="border: 1px #0000FF solid" ><span id="emailmsg"></span></td>
                </tr>

                <tr>
                    <td style="color: white">Password: </td>
                    <td style="color: white"><input size="20" type="password" name="password" style="border: 1px #0000FF solid" ><span id="passwdmsg"></span></td>
                </tr>

                <tr>
                    <td style="color: white">ReType Password: </td>
                    <td><input size="20" type="password" name="repassword"style="border: 1px #0000FF solid" ><span id="repasswdmsg"></span></td>
                </tr>

                <tr>
                    <td style="color: white">Complete Name </td>
                    <td><input size="50" type="text" name="complete_name"style="border: 1px #0000FF solid"  ><span id="usrmsg"></span></td>
                </tr>

                <tr>
                    <td style="color: white">Address: </td>
                    <td><input size="80" type="text" name="address1"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input size="80" type="text" name="address2"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td style="color: white">City: </td><td><input size="30" type="text" name="city"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td style="color: white">State: </td><td><input size="30" type="text" name="state"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td style="color: white">Country: </td><td><input size="30" type="text" name="country"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td style="color: white">Zip Code: </td><td><input size="20" type="text" name="zipcode"style="border: 1px #0000FF solid" ></td>
                </tr>

                <tr>
                    <td style="color: white">Phone No: </td><td><input size="30" type="text" name="phone_no"style="border: 1px #0000FF solid" ></td>
                </tr>
                <tr>
                    <td colspan="3" align="center" size="50" style="color: black">.</td>  
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><input type="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>