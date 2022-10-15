<div class="w3-main" style="margin-top:43px;">


  <!-- FORM-->
      <form method="POST" action="" 
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
                  <div class="w3-col s12 l12 m12 w3-padding">
                      <label><i class=""></i><b>Full name</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" 
                             placeholder="Enter your full name" name="name" 
                              required="" type="text">    
                  </div>

                  <div class="w3-col s12 l12 m12 w3-padding">
                      <label><i class=""></i><b>Name of the company</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" 
                             placeholder="Enter the company name" name="nameCompany" 
                              required="" type="text">    
                  </div>

                  <div class="w3-row">
                      <div class="w3-col s12 l6 m6 w3-padding">
                          <label class="w3-margin-right"><i class=""></i>
                              <b>WhatsApp contact number</b>
                          </label>
                          <input class="w3-input w3-border w3-margin-bottom w3-margin-right" 
                                 placeholder="Enter your WhatsApp contact number" 
                                 name="numberWhatsApp" 
                                 required="" type="text"
                                 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                      </div>
                      <div class="w3-col s12 l6 m6 w3-padding">
                          <label><i class=""></i><b>Corporate email</b></label>
                          <input class="w3-input w3-border w3-margin-bottom" 
                                 placeholder="Enter your corporate email" name="emailCorporate" 
                                 required="" type="email">
                      </div>                      
                  </div>

                  <div class="w3-row w3-padding">
                      <div class="w3-col s12 l12 m12 ">
                        <label><i class=""></i><b>Website</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" 
                             placeholder="Enter the URL of the website" name="urlCompany" 
                              required="" type="url">    
                      </div>                      
                  </div>

                  
                  
              </div>
            </div>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

             
              <button class="w3-btn w3-round w3-blue w3-right" name="submit-btn" id="submit-btn" 
                      type="submit">Send request</button>
                     
            </div>

        </div>
        </form>
      </div>
        