<?php

if (isset($_POST['btnsubmit'])) {
	// set email where you want to recieve form's data
    $user_email = "";
    $visa      = $_POST['visa'];
    $name      = $_POST['name'];
    $email      = $_POST['email'];
    $occupation       = $_POST['occupation'];
   
    $dob    = $_POST['dob'];
    $phone    = $_POST['phone'];
    $msg    = $_POST['message'];

    $subject = "New Vissa Consultation Request";
    $message = " Visa Type::  " . $visa . "\n";
    $message .= " Name::  " . $name . "\n";
    $message .= " Email::  " . $email . "\n";
    $message .= " Occupation::  " . $occupation . "\n";
    $message .= " Contact Number:: " . $phone . "\n\n\n";
    $message .= " Message:: " . $msg . "\n";
   

    if (mail($user_email, $subject, $message)) {

        echo '<script> window.alert("Your Request has been recieved. We will contact you soon.");</script>';
        //   php header("location:index.php");

    } else {

        echo '<script> window.alert("Something went wrong.");</script>';
    }
}
?>

							<!-- <div id="request-form" class="text-center mb-40">
								<form method="POST"  class="row request-form bg-lightgrey"> -->
								<div id="request-form" class="text-center mb-40">
								<form method="POST" name="requestForm" class="row  bg-lightgrey">
									<!-- Request Form Text -->      
                                    <div class="col-md-12">
                                        <h5 class="h5-lg">Request Free Consultation</h5>
                                        <p class="p-md">FREE ELIGIBILITY CHECK</p>	
                                    </div> 
									<div id="input-visa" class="col-md-12 input-visa mb-2">
					                    <select id="inlineFormCustomSelect1" name="visa" class="custom-select visa " required>
                                        <option disabled selected value="0">     Select Visa Type  </option>
                     				    <option value="Business Start Visa - UK">
                        					  Business Start Visa - UK
                       					 </option>
                       					 <option value="Business Migration - UK">
                       					   Business Migration - UK
                       					 </option>
                       					 <option value="Student Abroad - Uk">
                       					   Student Abroad - UK
                       					 </option>
                       					 <option value="Skilled Immigration - UK">
                       					   Skilled Immigration - UK
                       					 </option>
                       					 <option value="Job Seeker Visa - UK">
                       					   Job Seeker Visa - UK
                       					 </option>
					                    </select>
					                </div>
                                    <!-- Request Form Se;ect -->
					                <div id="input-name" class="col-md-12 mb-2">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                     
					                <!-- Request Form Input -->       
					                <div id="input-email" class="col-md-12 mb-2">
					                	<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

									
									<!-- Request Form Input -->
					                <div id="input-phone" class="col-md-12 mb-2">
					                	<input type="tel" name="occupation" class="form-control phone" placeholder="Occupation" required> 
					                </div>	

					              <!-- Request Form Input -->
								  <div id="input-phone" class="col-md-12 mb-2">
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number" required> 
								</div>	
					              <!-- Request Form Input -->
								  <div id="input-phone" class="col-md-12 mb-2">
									<input type="date" name="dob" class="form-control phone" required> 
								</div>	
					              <!-- Request Form TextArea -->
								  <div id="input-phone" class="col-md-12 mb-2">
									<!-- <input type="date" name="dob" class="form-control phone" required>  -->
									<Textarea class="form-control message"  rows="5" name="message" required  placeholder="Your Message......."></Textarea>
								</div>	

					               
						                                            
					                <!-- Request Form Button -->
					                <div class="col-md-12 form-btn">  
					                	<button type="submit" name="btnsubmit" class="btn btn-primary ">Send Request</button> 
					                </div>
					                                                              
					                <!-- Request Form Message -->
					                <div class="col-md-12 in-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
					                                              
					            </form>
							</div>
				