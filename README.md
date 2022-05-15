# Ussd with Africastalking 101

## What is USSD
USSD (Unstructured Supplementary Service Data) is a communications protocol used in GSM networks for sending short text messages. USSD is similar in format to SMS. However, it is an instant messaging service, so messages are not stored on the operator side or on the subscriber's device.

## Simple Code with Africastalking ENV

# Ussd with Africastalking demo code 

```
<?php
#sessionId from the Post request
$sessionId=$_POST['sessionId'];
#serviceCode from the Post request
$serviceCode=$_POST['serviceCode'];
# phoneNumber from the Post request
$phoneNumber=$_POST['phoneNumber'];
# text from the Post request
$text=$_POST['text'];

if ($text == ""){
 # check is the first connection is empty and provice response stating with CON to indicate connection.
 $response="CON What would you want to check \n";
 $response .="1. My Account No \n";
 $response .="2. My phone Number";
}
# if you choose option 1
else if ($text == "1") {
 # business login for the first level response
 $response = "CON Choose account information you want to view \n";
 $response .= "1. Account Number \n";
 $response .= "2. Account Balance";
}
# if you choose option 2
else if ($text == "2") {
 # business login for the first level response with END t end the connection
 $response = "END You phone number is ".$phoneNumber;
# if you choose option 1 the second level supplied option 1
} else if($text == "1*1"){
# business login for the second i.e.*ussd*1*1# level response then END to end the Session
 $accountNumber = "ACC1001";

 $response = "END Your account Number is ".$accountNumber;
}
# if you choose option 1 the second level supplied option 2
else if ($text == "1*2") {
# business login for the second i.e.*ussd*1*1# level response then END to end the Session
 $balance = "KES 10,000";
 # code...
 $response= "END Your balance is ".$balance;
}
# include the Header
header('Content-type: text/plain');
# display the response
echo $response;

?>
```

**Deploy the code on heroku my endpoint <https://ussd-uat.herokuapp.com/index.php>**

**Go to africastalking create account and then navigate to USSD code and create channel as below.**
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/seu77tcj0f22y4t258t2.png)

**You will be provided with the details to simulate the USSD.**

**Then click Launch Simulator as below** 
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/8w0wfnm3mmdbsu4696h8.png)

**Input you test number and click connect as below**

 ![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/w1oy23mfiju10tnnhix2.png)

**Go ahead and test the USSD code** 
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/1mdog2xkukqybyhasmrt.png)

**All done now you should have a display as below**
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/1yuk31j8hob7u5qw4jee.png)

**Code on github Francis Kinyuru[franciskinyuru](https://github.com/franciskinyuru/Ussd-with-Africastalking-101)**

Credits to 
**Africastalking developers platform [Developers platform](https://developers.africastalking.com/)**
**Francis Kagai youtube tutorial [Francis Kagai](https://youtu.be/ml0mq-n1Ly0)**
   

