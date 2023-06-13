<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'reservation_system';

// Establish a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    // Prepare and execute the SQL query using prepared statements
    $query = "INSERT INTO `reservation_system` (name, email, contact, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $contact, $date, $time, $guests);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Reservation Successfully Submitted</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f2f2f2;
                }
                .success-message {
                    background-color: #4CAF50;
                    color: #fff;
                    padding: 15px;
                    text-align: center;
                    font-size: 18px;
                    margin-top: 40px;
                }
            </style>
        </head>
        <body>
        <body bgcolor="#d7d7d7" class="generic-template" style="-moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; background-color: #d7d7d7;">
    <!-- Header Start -->
    <!-- Content Start -->
    <table>
    <table align="center" style="margin: 0 auto;">
        <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
        <tr bgcolor="#d7d7d7">
        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                <!-- Seperator Start -->
                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                    <tr bgcolor="#d7d7d7">
                        <td height="30" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                </table>
                <!-- Seperator End -->

                <!-- Generic Pod Left Aligned with Price breakdown Start -->
                <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white" class="bordered-left-right" style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                    <tr height="50"><td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                    <tr align="center">
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td class="text-primary" style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                            <img src="http://dgtlmrktng.s3.amazonaws.com/go/emails/generic-email-template/tick.png" alt="GO" width="50" style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                        </td>
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr height="17"><td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                    <tr align="center">
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td class="text-primary" style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                            <h1 style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">Reservation Successfully Submitted!</h1>
                        </td>
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr height="30"><td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                    <tr align="left">
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                Hi [name], 
                            </p>
                        </td>
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr height="10"><td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                    <tr align="left">
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Your reservation was successful!</p>
                            <br>
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; "><strong>Payment Details:</strong><br/>
                                Amount: €$moneyFormatter.format(${amount}) <br/>
                                Account: ${accountNumber}.<br/></p>
                            <br>
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">We advise to keep this email for future reference.&nbsp;&nbsp;&nbsp;&nbsp;<br/></p>
                        </td>
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr height="30">
                        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td style="border-bottom: 1px solid #D3D1D1; color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr height="30"><td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                    <tr align="center">
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;"><strong>Transaction reference: ${authorizationCode}</strong></p>
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Reservation date: [time] [date]</p>
                            <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;"></p>
                        </td>
                        <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>

                    <tr height="50">
                        <td colspan="3" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>

                </table>
                <!-- Generic Pod Left Aligned with Price breakdown End -->

                <!-- Seperator Start -->
                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                    <tr bgcolor="#d7d7d7">
                        <td height="30" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                </table>
                <!-- Seperator End -->

                <!-- Footer Start -->
                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                    <tr bgcolor="#d7d7d7">
                        <td height="30" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                    <tr bgcolor="#d7d7d7">
                        <td style="color: #8E8E8E; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: center;">
                            <p style="color: #8E8E8E; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; margin: 0;">&copy; 2023 MVC AESTHETICS. All rights reserved.</p>
                        </td>
                    </tr>
                    <tr bgcolor="#d7d7d7">
                        <td height="30" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    </tr>
                </table>
                <!-- Footer End -->
            </td>
        </tr>
    </table>
    <!-- Content End -->
</body>

            </div>
            <script>
                setTimeout(function() {
                    window.location.href = "hmpage.html";
                }, 5000); // 4 seconds delay
            </script>
        </body>
        </html>
        <?php
        exit();
    } else {
        echo 'Error: ' . mysqli_stmt_error($stmt);
    }
}    

// Close the database connection
mysqli_close($conn);
?>
