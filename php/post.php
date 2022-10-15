<?php



if( isset($_POST['submit-btn']) ){
	$name = $_POST['name']; 
	$nameCompany = $_POST['nameCompany'];
	$numberWhatsApp = $_POST['numberWhatsApp'];
	$emailCorporate = $_POST['emailCorporate'];
	$urlCompany = $_POST['urlCompany'];

    $visibleTextSuccess = false;
    $visibleTextFailed = false;

  
    $mailtosAdmin = array("luis.valido1989@gmail.com","sales@cubaism.com"); //email address admin
    
     //Email body I will receive
    $message = "Client Name: " . $name . "\n"
                . "Name Company: " . $nameCompany . "\n\n"
                . "WhatsApp number :". $numberWhatsApp. "\n\n"
                . "Email Corporate :". $emailCorporate. "\n\n"
                . "Web site: " . $urlCompany;
    $subject = "New Submission of client!";          
 
     //Message for client confirmation
     $message2 = "Dear" . $name . "\n"
           . "Thank you for contacting us. We will get back to you shortly!" . "\n\n";
     $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign";
 
     //Sent email to admins
     $result1 = true;

     foreach($mailtosAdmin as $i => $value){ 
        $headers = "From: " . $emailCorporate; 
        $mailAdmin = $mailtosAdmin[$i];
        $result1 =  mail($mailAdmin, $subject, $message, $headers); 
      }

      //Sent email to client
     $headers2 = "From: " . $mailtosAdmin[0]; // This will receive client
     $result2 = mail($emailCorporate, $subject2, $message2, $headers2); //This confirmation email to client
 
       if ($result1 && $result2) {
         $successText = "Your Message was sent Successfully!";
         $visibleTextSuccess = true;
       } else {
         $failedText = "Sorry! Message was not sent, Try again Later.";
         $visibleTextFailed = true;
       }?>
     
     <div class="w3-main" style="margin-top:43px;">


  <!-- FORM-->
      <form method="POST" action="index.php" 
            id="formRequest" name="formRequest">
      <div id="id01" class="w3-padding-32" style="">
        <div class="w3-modal-content w3-card-4 w3-round" style="max-width:800px">
          
          <div class="w3-border-bottom w3-padding-24 w3-light-grey">
         
              <span class="w3-text-title-bar-modal w3-margin-left w3-xlarge">
                Registration request form
              </span> 
            </div>

            <div class="" >
              <div class="w3-section">
                  

                  <?php if($visibleTextSuccess == true){ ?>

                  <div class="w3-row">
                   
                   <p class="w3-center w3-large"><?php echo $successText; ?> </p>    
                                          
                  </div>

                 <?php } ?>

                  <?php if($visibleTextFailed == true){ ?>

                  <div class="w3-row">
                   
                   <p class="w3-center w3-large"><?php echo $failedText ?> </p>    
                                          
                  </div>

                 <?php } ?>

                  
                  
              </div>
            </div>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

            
                     
            </div>

        </div>
        </form>
      </div>

<?php } ?>
