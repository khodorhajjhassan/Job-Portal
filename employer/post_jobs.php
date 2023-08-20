<?php

include_once('../config.php');
session_start();
if(!isset($_SESSION['eid'])){
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
  <head> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title> Post Jobs </title>
    <style><?php include "post_job.css"?></style>

      
    </head>
        

<body>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">        
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="profile.php">Home </a></li>          
                    <li class="nav-item"i><a class="nav-link" href="../logout.php">Logout</a></li>
                </ul>
</nav>
    <form method="post" action="process_postjob.php">
<div class="wrapper">
        <div class="title">
            Post Jobs
        </div>
 <div class="form">    
        <h3> Job Details: </h3>
        <div class="input_field">
            <label>Job Title:</label>
            <input type="text" name="title" class="input"  required ><br><br>              
        </div>
        <div class="input_field">   
                  <label for="vac_no" >Number of vacancies:</label>
                  <input type="text" name="vacno" class="input" required  ><br><br>
        </div>            
        <div class="input_field">    
            <label for="job_desc">Job Description:</label>
            <textarea class="textarea"  name="jobdesc" required></textarea><br><br>
        </div>  
        
        <div class="input_field">  
                <label for="exp">Work Experiecne:</label>
                    <div class="custom_select">
                        <select  name="exp" required >
                            <option value=""> Select </option>
                             <option value="none">none </option>
                             <option value="1">1 </option>
                             <option value="2">2 </option>
                             <option value="3">3 </option>
                             <option value="4">4 </option>
                             <option value="5"> 5</option>
                             <option value="6">6 </option>
                             <option value="7">7 </option>
                             <option value="7 above"> above 7</option>
                        </select> <br><br>
                    </div>
        </div>                  

             
        <div class="input_field"> 
                <label >Basic Pay:</label>
                <input type="text" name="pay" class="input" required>
                    <div class="custom_select">
                        <select id="money" name="money">
                           <option value="USD"> USD </option>
                           <option value="Rs"> RS </option>
                           <option value="USD"> EUR </option>
                           <option value="USD"> GBP </option>
                        </select><br><br>
                     
                        
                    </div>  
        </div>                 
            
        <div class="input_field">
                <label for="fnarea" >Functional Area:</label>
               <input class="input" type="text" required name="fnarea"> <br><br>
        </div>       

        <div class="input_field">
                <label for="location">Location:</label>
                <input class="input" type="text" name="location" required><br><br>
        </div>
            
        <div class="input_field">
            <label>Industry:</label>
            <div class="custom_select">
                <select name="indtype" id="indtype" class="form-control"  required>
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
                </select><br><br>
            </div>
        </div>
           
            <h3> Desired Candidate Profile:</h3><br><br>
        <div class="input_field">       
              <label for="ugcourse">Specify UG Qualification:</label>
            <div class="custom_select">
                <select name="ugcourse"  name="ugcourse" required>
                <option value="" label="Select">Select</option>
                <option value="B.A">B.A</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BDS">BDS</option>
                <option value="BHM">BHM</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="MBBS">MBBS</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select><br><br>
            </div>
        </div>
        <div class="input_field">    
                <label >Specify PG Qualification:</label>
                    <div class="custom_select">
                        <select name="pgcourse"   required>
                            <option value="">Select</option>
                              <option value="Not Pursuing Post Graduation"> Not Required</option>
                              <option value="CA">CA</option>
                              <option value="CS">CS</option>
                              <option value="ICWA (CMA)">ICWA (CMA)</option>
                              <option value="Integrated PG">Integrated PG</option>
                              <option value="LLM">LLM</option>
                              <option value="M.A">M.A</option>
                              <option value="M.Arch">M.Arch</option>
                              <option value="M.Com">M.Com</option>
                              <option value="M.Ed">M.Ed</option>
                              <option value="M.Pharma">M.Pharma</option>
                              <option value="M.Sc">M.Sc</option>
                              <option value="M.Tech">M.Tech</option>
                              <option value="MBA/PGDM">MBA/PGDM</option>
                              <option value="MCA">MCA</option>
                              <option value="MS">MS</option>
                              <option value="PG Diploma">PG Diploma</option>
                              <option value="MVSC">MVSC</option>
                             <option value="MCM">MCM</option>
                             <option value="Other">Other</option>
                         </select> <br><br>
                    </div>
        </div>
        <div class="input_field">
                  <label for="profile">Requirement Candidate Profile</label><br><br>
                  <textarea id="profile" class="textarea"  name="profile"  required></textarea><br><br>
        </div>   
        
        <div class="input_field terms">
            <label class="check">
                <input type="checkbox" required>
                <span class="checkmark"></span>
            </label>
            
            <p>Agreed To Terms And Conditions</p>
        </div>
                
                <p> Are you sure to submit the job! Check for errors before submitting the job</p><br>
            <div class="inputfield">
                     <button  type="submit" class="btn1" >Post Job</button><br><br>
                </div>
</div>
</div>                
</form>
</body>
</html>
