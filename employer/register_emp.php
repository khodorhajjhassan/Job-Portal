   <?php
  if(isset($_GET['msg']) && ($_GET['msg']=="cpw")){
          ?>
          <script type='text/javascript'>alert("Register Failed: Yours confirm password are wrong !");</script>
          <?php
      }
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Company Registration</title>
    <style><?php include "register_emp.css"?></style>
</head>

<body>
<ul class="nav justify-content-center">
    <li>
      <a href="/Project/index.php">Home</a>
    </li>
    <li>
      <a href="/Project/jobseeker/register_user.php">JobSeeker Registration</a>
    </li>
    <li>
      <a href="/Project/employer/register_emp.php" >Company Registration</a>
    </li>
    <li>
      <a href="/Project/login.php">Login</a>
    </li>
  </ul>

<Form method="POST" action="process_register_emp.php">

<div class="wrapper">
        <div class="title">
           <h2 style="color : #368ee0"> Company Registration Form</h2>
        </div>
 <div class="form">
    <h3 > Your Login Detials : </h3>   
    <br>
        <div class="input_field">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email" class="input" required>
        </div>
        <div class="input_field">
            <label for="">Password</label>
            <input type="password" name="pass1" placeholder="Enter your password" class="input" required>
        </div>
        <div class="input_field">
            <label for="">Confirm password</label>
            <input type="password" name="pass2" placeholder="confirm your password" class="input" required>
        </div>   
        <br>
    <h3 > Your Company Information : </h3>     
    <br>     
        <div class="input_field">
            <label class=> Company Name:</label> 
            <input type ="text"  name="compname"  class="input" required>
        </div>
        <div class="input_field">
            <label class=> Director Name: </label> 
            <input type ="text"  name="exec" class="input" required>
        </div>
        <label class="error" ></label>
        <div class="input_field">
            <label for=""> Company Type: </label>
            <input type="text" name="comtype" placeholder="sole proprietorship, limited liability company (LLC), and corporation." class="input" required>
        </div>
        <div class="input_field">
            <label for=""> Company URL: </label>
            <input type="text" name="url" class="input">
        </div>
    <div class="input_field">
            <label for="">Industry:</label>
                <div class="custom_select">
                    <select name="indtype" required>
                        <option selected="selected" value="">- Select an Industry -</option>
                        <option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
                        <option value="Accounting/Consulting/Taxation">Accounting/Consulting/Taxation</option>
                        <option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
                        <option value="Agriculture/Dairy Technology">Agriculture/Dairy Technology</option>
                        <option value="Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants</option>
                        <option value="Animation / Gaming">Animation / Gaming</option>
                        <option value="Architectural Services/ Interior Designing">Architectural Services/ Interior Designing</option>
                        <option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
                        <option value="Banking/Financial Services/Stockbroking/Securities">Banking/Financial Services/Stockbroking/Securities</option>
                        <option value="Banking/FinancialServices/Broking">Banking/FinancialServices/Broking</option>
                        <option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
                        <option value="Brewery/Distillery">Brewery/Distillery</option>
                        <option value="Cement/Construction/Engineering/Metals/Steel/Iron">Cement/Construction/Engineering/Metals/Steel/Iron</option>
                        <option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
                        <option value="Chemicals/Petro Chemicals/Plastics">Chemicals/Petro Chemicals/Plastics</option>
                        <option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
                        <option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
                        <option value="Consumer Goods - Durables">Consumer Goods - Durables</option>
                        <option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
                        <option value="CRM/ IT Enabled Services/BPO">CRM/ IT Enabled Services/BPO</option>
                        <option value="Education/Training/Teaching">Education/Training/Teaching</option>
                        <option value="Electricals/Switchgears">Electricals/Switchgears</option>
                        <option value="Employment Firms/Recruitment Services Firms">Employment Firms/Recruitment Services Firms</option>
                        <option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
                        <option value="Export Houses/Textiles/Merchandise">Export Houses/Textiles/Merchandise</option>
                        <option value="FacilityManagement">FacilityManagement</option>
                        <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
                        <option value="FoodProcessing">FoodProcessing</option>
                        <option value="Gems and Jewellery">Gems and Jewellery</option>
                        <option value="Glass">Glass</option>
                        <option value="Government/Defence">Government/Defence</option>
                        <option value="Healthcare/Medicine">Healthcare/Medicine</option>
                        <option value="HeatVentilation/AirConditioning">HeatVentilation/AirConditioning</option>
                        <option value="Insurance">Insurance</option>
                        <option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
                        <option value="Law/Legal Firms">Law/Legal Firms</option>
                        <option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
                        <option value=">Mining">Mining</option>
                        <option value="NGO/Social Services">NGO/Social Services</option>
                        <option value="Office Automation">Office Automation</option>
                        <option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
                        <option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option>
                        <option value="Printing/Packaging">Printing/Packaging</option>
                        <option value="Publishing">Publishing</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Retailing">Retailing</option>
                        <option value="Security/Law Enforcement">Security/Law Enforcement</option>
                        <option value="Shipping/Marine">Shipping/Marine</option>
                        <option value="Software Services">Software Services</option>
                        <option value="Steel">Steel</option>
                        <option value="Strategy/ManagementConsultingFirms">Strategy/ManagementConsultingFirms</option>
                        <option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option>
                        <option value="Telecom/ISP">Telecom/ISP</option>
                        <option value="Tyres">Tyres</option>
                        <option value="WaterTreatment/WasteManagement">WaterTreatment/WasteManagement</option>
                        <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
                    </select>
                </div>
        </div>
    <div class="input_field">
        <label for="">Address:</label>
        <textarea name="addr" class="textarea" required></textarea>
    </div>
    <div class="input_field">
        <label for="">Pincode:</label>
        <input type ="text" class="input" name="pin_code">
    </div>
    <div class="input_field">
        <label for="">Contact Person:</label>
        <input type="text" class="input" name="person" required>
    </div>

    <div class="input_field">
        <label for="">Contact Number:</label>
        <input type="text" class="input" name="phone" required>
    </div>
  
    <div class="input_field">
        <label >About Company:</label>
        <textarea name="add" class="textarea" required></textarea>
    </div>
    <div class="input_field terms">
        <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
        </label>
        <p>Agreed To Terms And Conditions,<strong>You Can't Update Or Edit Your Company Later</strong></p>
    </div>
        <div class="inputfield">
            <input type="submit" id="reg" class="btn" value="Register" ><br><br>
            <input type="reset" class="btn1" id="reset" value="Reset" >
        </div>    
</div>
</div>
</Form>    
</body>
</html>