<?php
    $thisPage="Contact";
	$subMenu="Other";
    include('includes/header.php');
?>

	<!-- BEGIN MAIN CONTENT -->

    <div class="main-content">
        <div class="row">
            <div class="col-sm-8 columns align-self-start">
                <div>
                    <h2>Find Us Here</h2>
                    <div>
                        If you would like to meet us in person and if you would like to cooperate with us, you can find us at the address below.
                    </div>	
                    <iframe class="maps-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24990.77652870845!2d2.2819006046529973!3d48.823270627250544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0d3eb2ad501cb27!2sISEP!5e0!3m2!1sen!2sfr!4v1573554461872!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sidebar-header">Collaboration</div>
                <div>
                    <p>
                        We would like to spread our technology as far as possible. <br>
                        Please contact us if you would like to collaborate or seek further information regarding our Smart System. <br>
                        We hope to help as many people as possible and this will only be possible with your help. <br>
                        We look forward to hearing from you 
                    </p>
                </div>
                <div class="sidebar-header">Contact Us By</div>
                <p id="pre-method-text">If you would like to speak to us directly or schedule an appointment, you can contact us through any of the following methods:</p>
                <ul id="contact-method">
                    <li id="contact-telephone">
                        (telephone:) <br /><span>+33-76-581-25</span>
                    </li>
                    <li id="contact-email">
                        (email:) <br /><span>icaretech.isep@gmail.com</span>
                    </li>
                    <li id="contact-skype">
                        (skype:) <br /><span>isep-Paris</span>
                    </li>
                </ul>

		  </div>
            <div class="col-sm-8 columns align-self-start contact-page">
			
                <h2 style="float:left;">Contact Us</h2>
                <img src="images/contact-mail-img.png" height="50px" style="margin:5px 10px;"/>
                <br>
                <div style="clear:both;">
                    In order to make the website better, we may need your help.
                    If you have any suggestions for our website, or if you need to contact us, please leave us a message below.
                </div>
                <div class="done">
                    <b>Thank you !</b> We have received your message. 
                </div>

                <!-- form -->
                <form id="contact-form">
                    <div class="form-group">
                        <label for="FirstName">Name</label>
                        <div class="row">
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="FirstName" placeholder="First name">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="LastName" placeholder="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PhoneInput">Phone Number</label>
                        <input type="phone" class="form-control" id="PhoneInput" placeholder="+(33) 00 000 00">
                    </div>
                    <div class="form-group">
                        <label for="EmailInput">Email address</label>
                        <input type="email" class="form-control" id="EmailInput" aria-describedby="emailHelp" placeholder="Example@email.com">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="MessageInput">Enter Message Here</label>
                        <textarea class="form-control" id="MessageInput" rows="5"></textarea>
                    </div>
                    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="SubscriptionCheck">
                        <label class="form-check-label" for="SubscriptionCheck">Click to Subscribe to our Emails and Offers</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>

            </div>

            
            
</div>
        </div>
    </div>
<?php
	include('includes/footer.php');
?>
	