<?php
/*
Template Name: Registration Page Template
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Registration Form</title>
    <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <!-- Add Font Awesome CSS link here (you need an internet connection) -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
    <?php wp_head(); ?>
  </head>
      <div class="reg">
          <div class="d-flex max-height">
            <div class="col-md-6 mt-5 justify-content-center">
              <div class="reg-form">

              </div>
            
            </div>
            <div class="col-md-6 d-none d-md-block no-padding">
              <div
                class="col-img-2"
              />
            </div>
          </div>
        </div>
        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="otp-content" id="k">
              <div class="otp-header">
                <h5 class="modal-title" id="registrationModalLabel">Choose your verification method</h5>
            
                <small>We will send a code to your preferred method</small>
              </div>
             
              <div class="otp-body" >
                
                <div class="container-otp" id="otp-phone">
                  <div>
                    <div>Phone</div>
                    <small>send an otp to my email abubakrilaitan@gmail.com</small>
                  </div>
                
                  <i class="fas fa-chevron-right chevron-arrow"></i>
                </div>
                <div class="container-otp" id="otp-email">
                  <div>
                    <div>Email</div>
                    <small>send an otp to my email abubakrilaitan@gmail.com</small>
                  </div>
                
                  <i class="fas fa-chevron-right chevron-arrow"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- UI steps -->

        <!-- Subscription Dialog Modal-->
        <div id="subscription-prompt" style="display: none;">
          <div class="subscription-prompt mt-5 pt-5 px-5">
            <div class="">
              <h4 >Welcome to MR. Japa Opportunities</h4>
              <small>Proceed to subscribe to get the best out of Mr Japa</small>
            </div>

  
            <div class="d-flex ">
              <button class="btn btn-light mx-2 mt-5 border-dark" id="close-registration">Close</button> <button class="btn btn-success mx-2 mt-5" id="subscribe-process">Subscribe</button>
            </div>
          </div>

        </div>
      