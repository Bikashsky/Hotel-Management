<html>
<head>
    <title>Hotel Reservation</title>



</head>
<body>


<div class="account">


    <fieldset>
        <legend> <h2><b>Create new Account</b></h2> </legend>

        <form action="../action/registration_action.php" method="post">
            <table border="0" width="800">
                <tr>
                    <td><b>First Name</b></td>
                    <td><input type="text" name="fn" placeholder="First Name" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td><input type="text" name="ln" placeholder="Last Name"class="text" required="required"  /></td>
                </tr>
                <tr>
                    <td><b>Username</b></td>
                    <td><input type="text"  name="un" placeholder="Username" class="text" required="required" /></td>
                </tr>
                <tr>
                    <td><b>Password   </b></td>
                    <td><input type="password"  name="pw" placeholder="Password" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b></td>
                    <td><input type="password"  name="rpw" placeholder="Confirm Password" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Address   </b></td>
                    <td><input type="text"  name="add" placeholder="Address" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Distance(in miles)</b></td>
                    <td><input type="number"  name="dis" min="1" placeholder="distance" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Contact</b></td>
                    <td><input type="text" name="no" placeholder="Contact" class="text" required="required" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit"  name="create" class="btncreate" value="Join"/></td>
                </tr>
            </table>
        </form>
        <center>Already a member&nbsp;<a href="login.php">LOGIN</a></center>
    </fieldset>
</div>



</body>


</html>