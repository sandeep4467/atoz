@extends('master')
@section('content')
<style type="text/css">
input[type="text"]{
border: 1px solid #ccc;
padding:7px 5px;
width: 100%;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

</style>
<table align="center" style="width:100%; max-width: 70%;" >
    <tr>
        <td><h1 style="font-size: 23px; text-align: center; text-decoration: underline; margin-bottom: 40px;">
            Fact Find Questionnaire</h1>

            <a href='logout'>logout</a>
        </td>

    </tr>
</table>




<form action="/ff" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
        <tbody>
            <tr style="border-bottom: 1px solid #000;">
                <td colspan="3" width="312">
                    <h2  style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Applicant Details</h2>
                </td>
                <td colspan="3" width="228">
                    <h2 style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Client</h2>
                </td>
                <td colspan="5" width="213">
                    <h2 style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Partner</h2>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Title</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_title" value="<?php if(!empty($tempData)){echo $tempData->client_title;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_title" value="<?php if(!empty($tempData)){echo $tempData->partner_title;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Full Name (as shown on your passport)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_fullname" value="<?php if(!empty($tempData)){echo $tempData->client_fullname;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_fullname" value="<?php if(!empty($tempData)){echo $tempData->partner_fullname;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Maiden Name &amp; Date Name Changed</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_maiden" value="<?php if(!empty($tempData)){echo $tempData->client_maiden;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_maiden" value="<?php if(!empty($tempData)){echo $tempData->partner_maiden;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Marital status</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_marital" value="<?php if(!empty($tempData)){echo $tempData->client_marital;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_marital" value="<?php if(!empty($tempData)){echo $tempData->partner_marital;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Date of Birth</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_dob" value="<?php if(!empty($tempData)){echo $tempData->client_dob;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_dob" value="<?php if(!empty($tempData)){echo $tempData->partner_dob;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Smoker</p>
                </td>
                <td colspan="3" width="228" style="padding:5px 10px;">
                     
                     Yes<input type="radio" name="client_smoker" value="Yes" <?php if(!empty($tempData)){ if($tempData->client_smoker=='Yes') { echo 'checked'; }} ?>>
                    No<input type="radio" name="client_smoker" value="No" <?php if(!empty($tempData)){ if($tempData->client_smoker=='No') { echo 'checked'; }} ?>>
                </td>
                <td colspan="5" width="213" style="padding:5px 10px;">
                    Yes<input type="radio"  name="partner_smoker" value="Yes" <?php if(!empty($tempData)){ if($tempData->partner_smoker=='Yes') { echo 'checked'; }} ?>>
                    No<input type="radio"  name="partner_smoker" value="No" <?php if(!empty($tempData)){ if($tempData->partner_smoker=='No') { echo 'checked'; }} ?>>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Relationship to other applicant</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_relationship" value="<?php if(!empty($tempData)){echo $tempData->client_relationship;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_relationship" value="<?php if(!empty($tempData)){echo $tempData->partner_relationship;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Dependents &nbsp;&nbsp;Yes/No (if yes names &amp; dates of birth)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_dependents" value="<?php if(!empty($tempData)){echo $tempData->client_dependents;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_dependents" value="<?php if(!empty($tempData)){echo $tempData->partner_dependents;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>National Insurance Number</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_nin" value="<?php if(!empty($tempData)){echo $tempData->client_nin;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_nin" value="<?php if(!empty($tempData)){echo $tempData->partner_nin;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Do you have a valid will?</p>
                </td>
                <td colspan="3" width="228" style="padding:5px 10px;">
                    Yes<input type="radio"  name="client_vaild_will" value="Yes" <?php if(!empty($tempData)){ if($tempData->client_vaild_will=='Yes') { echo 'checked'; }} ?>>
                    No<input type="radio"  name="client_vaild_will" value="No" <?php if(!empty($tempData)){ if($tempData->client_vaild_will=='No') { echo 'checked'; }} ?>>
                </td>
                <td colspan="5" width="213" style="padding:5px 10px;">
                    Yes<input type="radio"  name="partner_vaild_will" value="Yes" <?php if(!empty($tempData)){ if($tempData->partner_vaild_will=='Yes') { echo 'checked'; }} ?>>
                    No<input type="radio" name="partner_vaild_will" value="No" <?php if(!empty($tempData)){ if($tempData->partner_vaild_will=='No') { echo 'checked'; }} ?>>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Current Address &amp; Postcode</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_postcode" value="<?php if(!empty($tempData)){echo $tempData->client_postcode;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_postcode" value="<?php if(!empty($tempData)){echo $tempData->partner_postcode;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Current residential Status eg owner/rented/family home</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_current_residential" value="<?php if(!empty($tempData)){echo $tempData->client_current_residential;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_current_residential" value="<?php if(!empty($tempData)){echo $tempData->partner_current_residential;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Date Moved into Current Address</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_date_moved" value="<?php if(!empty($tempData)){echo $tempData->client_date_moved;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_date_moved" value="<?php if(!empty($tempData)){echo $tempData->partner_date_moved;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Previous address and postcode&nbsp; (We require <u>full 3</u> <u>year </u>address history)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_previous_address" value="<?php if(!empty($tempData)){echo $tempData->client_previous_address;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_previous_address" value="<?php if(!empty($tempData)){echo $tempData->partner_previous_address;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Date moved into previous address</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_date_moved_into_previous" value="<?php if(!empty($tempData)){echo $tempData->client_date_moved_into_previous;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_date_moved_into_previous" value="<?php if(!empty($tempData)){echo $tempData->partner_date_moved_into_previous;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Previous residential status eg owner / rented/family home</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_previous_residential" value="<?php if(!empty($tempData)){echo $tempData->client_previous_residential;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_previous_residential" value="<?php if(!empty($tempData)){echo $tempData->partner_previous_residential;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Telephone numbers: Home</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_telephone" value="<?php if(!empty($tempData)){echo $tempData->client_telephone;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_telephone" value="<?php if(!empty($tempData)){echo $tempData->partner_telephone;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Work</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_work" value="<?php if(!empty($tempData)){echo $tempData->client_work;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_work" value="<?php if(!empty($tempData)){echo $tempData->partner_work;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Mobile</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_mobile" value="<?php if(!empty($tempData)){echo $tempData->client_mobile;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_mobile" value="<?php if(!empty($tempData)){echo $tempData->partner_mobile;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Email Address:</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_email" value="<?php if(!empty($tempData)){echo $tempData->client_email;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_email" value="<?php if(!empty($tempData)){echo $tempData->partner_email;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Category of Applicant: e.g First Time Buyer, Mover, Remortgage, Right To Buy, Commercial, Buy To Let</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_category" value="<?php if(!empty($tempData)){echo $tempData->client_category;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_category" value="<?php if(!empty($tempData)){echo $tempData->partner_category;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Nationality</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_nationality" value="<?php if(!empty($tempData)){echo $tempData->client_nationality;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_nationality" value="<?php if(!empty($tempData)){echo $tempData->partner_nationality;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Date moved to UK?</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_moved_to_uk" value="<?php if(!empty($tempData)){echo $tempData->client_moved_to_uk;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_moved_to_uk" value="<?php if(!empty($tempData)){echo $tempData->partner_moved_to_uk;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Visa Status (if applicable)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_visa_status" value="<?php if(!empty($tempData)){echo $tempData->client_visa_status;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_visa_status" value="<?php if(!empty($tempData)){echo $tempData->partner_visa_status;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Type of Visa (if applicable)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_type_of_visa" value="<?php if(!empty($tempData)){echo $tempData->client_type_of_visa;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_type_of_visa" value="<?php if(!empty($tempData)){echo $tempData->partner_type_of_visa;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <span>Term remaining on Visa (if applicable) </span>
                    <input type="text" name="term_remaining" value="<?php if(!empty($tempData)){echo $tempData->term_remaining;} ?>" requiredstyle="width:200px; margin-left: 30px;">
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">EMPLOYMENT DETAILS</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Employment Details</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_details" value="<?php if(!empty($tempData)){echo $tempData->client_emp_details;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_details" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_details;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Occupation</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_occupation" value="<?php if(!empty($tempData)){echo $tempData->client_emp_occupation;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_occupation" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_occupation;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Status: Employed/Contract/Self Employed</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_status" value="<?php if(!empty($tempData)){echo $tempData->client_emp_status;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_status" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_status;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Start date of current employment</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_st_current_employment" value="<?php if(!empty($tempData)){echo $tempData->client_emp_st_current_employment;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_st_current_employment" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_st_current_employment;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Name of Company</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_company_name" value="<?php if(!empty($tempData)){echo $tempData->client_emp_company_name;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_company_name" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_company_name;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Address of Company</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_compan_address" value="<?php if(!empty($tempData)){echo $tempData->client_emp_compan_address;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_compan_address" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_compan_address;} ?>"></p>
                </td
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Previous employment details &ndash; if in current job less than 3 years (start dates if applicable)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_previous_employment" value="<?php if(!empty($tempData)){echo $tempData->client_emp_previous_employment;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_previous_employment" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_previous_employment;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Basic Salary/ net profit</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_salary" value="<?php if(!empty($tempData)){echo $tempData->client_emp_salary;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><strong>&pound; </strong><input type="text" name="partner_emp_salary" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_salary;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Guaranteed Overtime</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_guaranteed" value="<?php if(!empty($tempData)){echo $tempData->client_emp_guaranteed;} ?>"><strong>&pound;</strong></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_guaranteed" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_guaranteed;} ?>"><strong>&pound;</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Regular Bonus</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_bonus" value="<?php if(!empty($tempData)){echo $tempData->client_emp_bonus;} ?>"><strong>&pound;</strong></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_bonus" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_bonus;} ?>"><strong>&pound;</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Other Income (please specify)</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_other_income" value="<?php if(!empty($tempData)){echo $tempData->client_emp_other_income;} ?>"><strong>&pound;</strong></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_other_income" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_other_income;} ?>"><strong>&pound;</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Net Monthly Income</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_net_monthly_income" value="<?php if(!empty($tempData)){echo $tempData->client_emp_net_monthly_income;} ?>">&pound;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_net_monthly_income" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_net_monthly_income;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Budget for mortgage</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_budget" value="<?php if(!empty($tempData)){echo $tempData->client_emp_budget;} ?>">&pound;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_budget" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_budget;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Expected retirement age</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_retirement" value="<?php if(!empty($tempData)){echo $tempData->client_emp_retirement;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_retirement" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_retirement;} ?>">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Lending past retirement age? Income to be used into retirement?</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_emp_retirement" value="<?php if(!empty($tempData)){echo $tempData->client_emp_retirement;} ?>">&nbsp;</p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_emp_retirement" value="<?php if(!empty($tempData)){echo $tempData->partner_emp_retirement;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">BANK DETAILS</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Bank Name</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_bank_name" value="<?php if(!empty($tempData)){echo $tempData->client_bank_name;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_bank_name" value="<?php if(!empty($tempData)){echo $tempData->partner_bank_name;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Account Number</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_bank_acc_number" value="<?php if(!empty($tempData)){echo $tempData->client_bank_acc_number;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_bank_acc_number" value="<?php if(!empty($tempData)){echo $tempData->partner_bank_acc_number;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Sort Code</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_bank_sort_code" value="<?php if(!empty($tempData)){echo $tempData->client_bank_sort_code;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_bank_sort_code" value="<?php if(!empty($tempData)){echo $tempData->partner_bank_sort_code;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Account Holder Name &amp; Preferred Payment Date</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_bank_account_holder_name" value="<?php if(!empty($tempData)){echo $tempData->client_bank_account_holder_name;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_bank_account_holder_name" value="<?php if(!empty($tempData)){echo $tempData->partner_bank_account_holder_name;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">FINANCIAL DETAILS</strong></p>
                    
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Ever had a loan / mortgage refused??</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_financial_mortgage" value="<?php if(!empty($tempData)){echo $tempData->client_financial_mortgage;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_financial_mortgage" value="<?php if(!empty($tempData)){echo $tempData->partner_financial_mortgage;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Ever had CCJ&rsquo;s / Defaults registered against you??</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_financial_ccj" value="<?php if(!empty($tempData)){echo $tempData->client_financial_ccj;} ?>"></p>
                </td>
                <td colspan="5" width="213">
                    <p><input type="text" name="partner_financial_ccj" value="<?php if(!empty($tempData)){echo $tempData->partner_financial_ccj;} ?>"></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="312">
                    <p>Ever been declared bankrupt / made arrangements with creditors??</p>
                </td>
                <td colspan="3" width="228">
                    <p><input type="text" name="client_financial_bankrupt" value="<?php if(!empty($tempData)){echo $tempData->client_financial_bankrupt;} ?>"><p>
                    </td>
                    <td colspan="5" width="213">
                        <p><input type="text" name="partner_financial_bankrupt" value="<?php if(!empty($tempData)){echo $tempData->partner_financial_bankrupt;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Any previous mortgage or rent arrears?</p>
                    </td>
                    <td colspan="3" width="228">
                        <p><input type="text" name="client_financial_previous_mortgage" value="<?php if(!empty($tempData)){echo $tempData->client_financial_previous_mortgage;} ?>"></p>
                    </td>
                    <td colspan="5" width="213">
                        <p><input type="text" name="partner_financial_previous_mortgage" value="<?php if(!empty($tempData)){echo $tempData->partner_financial_previous_mortgage;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p><strong>If yes to any of the above credit issues please provide full details below;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <table cellpadding="10">
                            <tbody>
                                <tr>
                                    <td width="160">
                                        <p><strong>Type Of Blemish?</strong></p>
                                    </td>
                                    <td width="157">
                                        <p><strong>Date Registered</strong></p>
                                    </td>
                                    <td width="203">
                                        <p><strong>Amount?</strong></p>
                                    </td>
                                    <td width="220">
                                        <p><strong>Satisfied / Paid up to date?</strong></p>
                                    </td>
                                    <td width="200">
                                        <p><strong>Date satisfied?</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="146">
                                        <p><input type="text" name="type_of_blemish1" value="<?php if(!empty($tempData)){echo $tempData->type_of_blemish1;} ?>"></p>
                                    </td>
                                    <td width="123">
                                        <p><input type="text" name="date_registered1" value="<?php if(!empty($tempData)){echo $tempData->date_registered1;} ?>"></p>
                                    </td>
                                    <td width="169">
                                        <p><input type="text" name="amount1" value="<?php if(!empty($tempData)){echo $tempData->amount1;} ?>"><strong>&pound;</strong></p>
                                    </td>
                                    <td width="146">
                                        <p><input type="text" name="satisfied1" value="<?php if(!empty($tempData)){echo $tempData->satisfied1;} ?>"></p>
                                    </td>
                                    <td width="146">
                                        <p><input type="text" name="date_satisfied1" value="<?php if(!empty($tempData)){echo $tempData->date_satisfied1;} ?>"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="146">
                                        <p><input type="text" name="type_of_blemish2" value="<?php if(!empty($tempData)){echo $tempData->type_of_blemish2;} ?>"></p>
                                    </td>
                                    <td width="123">
                                        <p><input type="text" name="date_registered2" value="<?php if(!empty($tempData)){echo $tempData->date_registered2;} ?>"></p>
                                    </td>
                                    <td width="169">
                                        <p><input type="text" name="amount2" value="<?php if(!empty($tempData)){echo $tempData->amount2;} ?>"><strong>&pound;</strong></p>
                                    </td>
                                    <td width="146">
                                        <p><input type="text" name="satisfied2" value="<?php if(!empty($tempData)){echo $tempData->satisfied2;} ?>"></p>
                                    </td>
                                    <td width="146">
                                        <p><input type="text" name="date_satisfied2" value="<?php if(!empty($tempData)){echo $tempData->date_satisfied2;} ?>"></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752" height="100">

                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p>
                        <strong>Committed Outgoing details</strong> &ndash; Please declare in full or the lender may not provide the full loan amount requested</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; border-color: #000; padding: 5px 10px;">
                            <tbody>
                                <tr>
                                    <td width="52">
                                        <p><strong>App&nbsp; 1 / 2</strong></p>
                                    </td>
                                    <td width="96">
                                        <p><strong>Credit card / loan</strong></p>
                                    </td>
                                    <td width="120">
                                        <p><strong>Lender</strong></p>
                                    </td>
                                    <td width="96">
                                        <p><strong>Outstanding Balance</strong></p>
                                    </td>
                                    <td width="84">
                                        <p><strong>Monthly Payment</strong></p>
                                    </td>
                                    <td width="84">
                                        <p><strong>Interest Rate</strong></p>
                                    </td>
                                    <td width="120">
                                        <p><strong>To be Repaid on completion?</strong></p>
                                    </td>
                                    <td width="108">
                                        <p><strong>With this mortgage?</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="52">
                                        <p><input type="text" name="app_1_2_1" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_1;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="credit_card_loan_1" value="<?php if(!empty($tempData)){echo $tempData->credit_card_loan_1;} ?>"></p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="lender_1" value="<?php if(!empty($tempData)){echo $tempData->lender_1;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="outstanding_balance_1" value="<?php if(!empty($tempData)){echo $tempData->outstanding_balance_1;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="monthly_payment_1" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_1;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="interest_rate_1" value="<?php if(!empty($tempData)){echo $tempData->interest_rate_1;} ?>">%</p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="to_be_repaid_on_completion_1" value="<?php if(!empty($tempData)){echo $tempData->to_be_repaid_on_completion_1;} ?>">&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                            Yes <input type="radio"  name="with_this_mortgage_1" value="Yes" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_1=='Yes') { echo 'checked'; }} ?>>
                                            No  <input type="radio"  name="with_this_mortgage_1" value="No" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_1=='No') { echo 'checked'; }} ?>>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="52">
                                        <p><input type="text" name="app_1_2_2" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_2;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="credit_card_loan_2" value="<?php if(!empty($tempData)){echo $tempData->credit_card_loan_2;} ?>"></p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="lender_2" value="<?php if(!empty($tempData)){echo $tempData->lender_2;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="outstanding_balance_2" value="<?php if(!empty($tempData)){echo $tempData->outstanding_balance_2;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="monthly_payment_2" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_2;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="interest_rate_2" value="<?php if(!empty($tempData)){echo $tempData->interest_rate_2;} ?>">%</p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="to_be_repaid_on_completion_2" value="<?php if(!empty($tempData)){echo $tempData->to_be_repaid_on_completion_2;} ?>">&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                            Yes <input type="radio"  name="with_this_mortgage_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_2=='Yes') { echo 'checked'; }} ?>>
                                            No  <input type="radio"  name="with_this_mortgage_2" value="No" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_2=='No') { echo 'checked'; }} ?>>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="52">
                                        <p><input type="text" name="app_1_2_3" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_3;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="credit_card_loan_3" value="<?php if(!empty($tempData)){echo $tempData->credit_card_loan_3;} ?>"></p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="lender_3" value="<?php if(!empty($tempData)){echo $tempData->lender_3;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="outstanding_balance_3" value="<?php if(!empty($tempData)){echo $tempData->outstanding_balance_3;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="monthly_payment_3" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_3;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="interest_rate_3" value="<?php if(!empty($tempData)){echo $tempData->interest_rate_3;} ?>">%</p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="to_be_repaid_on_completion_3" value="<?php if(!empty($tempData)){echo $tempData->to_be_repaid_on_completion_3;} ?>">&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                            Yes <input type="radio" value="" name="with_this_mortgage_3" value="Yes" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_3=='Yes') { echo 'checked'; }} ?>>
                                            No  <input type="radio" value="" name="with_this_mortgage_3" value="No" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_3=='No') { echo 'checked'; }} ?>>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="52">
                                        <p><input type="text" name="app_1_2_4" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_4;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="credit_card_loan_4" value="<?php if(!empty($tempData)){echo $tempData->credit_card_loan_4;} ?>"></p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="lender_4" value="<?php if(!empty($tempData)){echo $tempData->lender_4;} ?>"></p>
                                    </td>
                                    <td width="96">
                                        <p><input type="text" name="outstanding_balance_4" value="<?php if(!empty($tempData)){echo $tempData->outstanding_balance_4;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="monthly_payment_4" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_4;} ?>">&pound;</p>
                                    </td>
                                    <td width="84">
                                        <p><input type="text" name="interest_rate_4" value="<?php if(!empty($tempData)){echo $tempData->interest_rate_4;} ?>">%</p>
                                    </td>
                                    <td width="120">
                                        <p><input type="text" name="to_be_repaid_on_completion_4" value="<?php if(!empty($tempData)){echo $tempData->to_be_repaid_on_completion_4;} ?>">&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                            Yes <input type="radio"  name="with_this_mortgage_4" value="Yes" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_4=='Yes') { echo 'checked'; }} ?>>
                                            No  <input type="radio"  name="with_this_mortgage_4" value="No" <?php if(!empty($tempData)){ if($tempData->with_this_mortgage_4=='No') { echo 'checked'; }} ?>>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p style="padding:10px; margin:0; font-size:16px">
                        <strong style="font-weight: 900; font-size: 20px;">Current Mortgage Details</strong></p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_cmd" value="<?php if(!empty($tempData)){echo $tempData->client_cmd;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_cmd" value="<?php if(!empty($tempData)){echo $tempData->partner_cmd;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Lender</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_lender" value="<?php if(!empty($tempData)){echo $tempData->client_lender;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_lender" value="<?php if(!empty($tempData)){echo $tempData->partner_lender;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Account Number</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_account_number" value="<?php if(!empty($tempData)){echo $tempData->client_account_number;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_account_number" value="<?php if(!empty($tempData)){echo $tempData->partner_account_number;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Value of property</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_value_of_property" value="<?php if(!empty($tempData)){echo $tempData->client_value_of_property;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_value_of_property" value="<?php if(!empty($tempData)){echo $tempData->partner_value_of_property;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Amount of Loan outstanding</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_amount_of_loan_outstanding" value="<?php if(!empty($tempData)){echo $tempData->client_amount_of_loan_outstanding;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_amount_of_loan_outstanding" value="<?php if(!empty($tempData)){echo $tempData->partner_amount_of_loan_outstanding;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Original Purchase price</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_original_purchase_price" value="<?php if(!empty($tempData)){echo $tempData->client_original_purchase_price;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_original_purchase_price" value="<?php if(!empty($tempData)){echo $tempData->partner_original_purchase_price;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Date Originally purchased</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_date_originally_purchased" value="<?php if(!empty($tempData)){echo $tempData->client_date_originally_purchased;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_date_originally_purchased" value="<?php if(!empty($tempData)){echo $tempData->partner_date_originally_purchased;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Monthly Payment</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_monthly_payment" value="<?php if(!empty($tempData)){echo $tempData->client_monthly_payment;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_monthly_payment" value="<?php if(!empty($tempData)){echo $tempData->partner_monthly_payment;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Years remaining</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_years_remaining" value="<?php if(!empty($tempData)){echo $tempData->client_years_remaining;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_years_remaining" value="<?php if(!empty($tempData)){echo $tempData->partner_years_remaining;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Repayment method (endowment/repayment etc)</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_repayment_method" value="<?php if(!empty($tempData)){echo $tempData->client_repayment_method;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_repayment_method" value="<?php if(!empty($tempData)){echo $tempData->partner_repayment_method;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Rate - Interest Rate &amp; Type of Rate</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_interest_rate" value="<?php if(!empty($tempData)){echo $tempData->client_interest_rate;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_interest_rate" value="<?php if(!empty($tempData)){echo $tempData->partner_interest_rate;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>If Buy to Let, expected rental income</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_expected_rental_income" value="<?php if(!empty($tempData)){echo $tempData->client_expected_rental_income;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_expected_rental_income" value="<?php if(!empty($tempData)){echo $tempData->partner_expected_rental_income;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Any penalties to transfer your mortgage, if yes how much?</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_penalties_to_transfer_your_mortgage" value="<?php if(!empty($tempData)){echo $tempData->client_penalties_to_transfer_your_mortgage;} ?>"><strong>&pound;</strong></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_penalties_to_transfer_your_mortgage" value="<?php if(!empty($tempData)){echo $tempData->partner_penalties_to_transfer_your_mortgage;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="312">
                        <p>Any other properties owned?&nbsp;&nbsp; If yes how many?</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><input type="text" name="client_other_properties_owned" value="<?php if(!empty($tempData)){echo $tempData->client_other_properties_owned;} ?>"></p>
                    </td>
                    <td colspan="4" width="202">
                        <p><input type="text" name="partner_other_properties_owned" value="<?php if(!empty($tempData)){echo $tempData->partner_other_properties_owned;} ?>"></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="11" width="752">
                        <p>
                        <strong style="font-weight: 900; font-size: 20px;">Property to be mortgaged </strong></p>
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="2" width="752">
                        <p>Address of the property to be mortgaged and postcode</p>
                    </td>
                    <td colspan="9" width="560">
                        <p><input type="text" name="mortgaged_and_postcode" value="<?php if(!empty($tempData)){echo $tempData->mortgaged_and_postcode;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>How much do you wish to borrow?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="wish_to_borrow" value="<?php if(!empty($tempData)){echo $tempData->wish_to_borrow;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>
                            Current Value
                        </p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="current_value" value="<?php if(!empty($tempData)){echo $tempData->current_value;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Source of funds? (savings / equity / incentive)</p>
                    </td>
                    <td colspan="2" width="179">
                        <input type="text" name="source_of_funds" value="<?php if(!empty($tempData)){echo $tempData->source_of_funds;} ?>">
                    </td>
                    <td colspan="5" width="228">
                        <p>Term of mortgage?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="term_of_mortgage" value="<?php if(!empty($tempData)){echo $tempData->term_of_mortgage;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Preferred Product type: eg & Fixed/Tracker/Discount</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="preferred_product" value="<?php if(!empty($tempData)){echo $tempData->preferred_product;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>Tie in period for rate?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="tie_in_period" value="<?php if(!empty($tempData)){echo $tempData->tie_in_period;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Payment method: eg Interest Only, Capital Repayment</p>
                    </td>
                    <td colspan="2" width="179">
                        <input type="text" name="payment_method" value="<?php if(!empty($tempData)){echo $tempData->payment_method;} ?>">
                    </td>
                    <td colspan="5" width="228">
                        <p>If interest only, please state repayment vehicle?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="state_repayment_vehicle" value="<?php if(!empty($tempData)){echo $tempData->state_repayment_vehicle;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>House/ Bungalow/ Flat ?</p>
                        <p>Semi/Terraced/Detached ?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="house_bungalow_flat" value="<?php if(!empty($tempData)){echo $tempData->house_bungalow_flat;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>Property type: Freehold/Leasehold (remaining lease term)</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="property_type_freehold_leasehold" value="<?php if(!empty($tempData)){echo $tempData->property_type_freehold_leasehold;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>IF FLAT &ndash; What Floor?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="what_floor" value="<?php if(!empty($tempData)){echo $tempData->what_floor;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>How many flats in block?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="how_many_flats" value="<?php if(!empty($tempData)){echo $tempData->how_many_flats;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Year Property Built?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="year_property_built" value="<?php if(!empty($tempData)){echo $tempData->year_property_built;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>Is this property ex local authority?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="this_property_ex_local" value="<?php if(!empty($tempData)){echo $tempData->this_property_ex_local;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>No of Bedrooms -</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="no_of_bedrooms" value="<?php if(!empty($tempData)){echo $tempData->no_of_bedrooms;} ?>">&nbsp;</p>
                    </td>
                    <td colspan="5" width="228">
                        <p>No of reception rooms -</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="no_of_reception_rooms" value="<?php if(!empty($tempData)){echo $tempData->no_of_reception_rooms;} ?>">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Rental Income</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="rental_income" value="<?php if(!empty($tempData)){echo $tempData->rental_income;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>Garage</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="garage" value="<?php if(!empty($tempData)){echo $tempData->garage;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Is property near or above commercial premises?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p><input type="text" name="near_or_above_commercial_premises" value="<?php if(!empty($tempData)){echo $tempData->near_or_above_commercial_premises;} ?>"></p>
                    </td>
                    <td colspan="5" width="228">
                        <p>What type of commercial premises?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p><input type="text" name="commercial_premises" value="<?php if(!empty($tempData)){echo $tempData->commercial_premises;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752" height="50">
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <p><strong>Solicitors Details </strong></p>
                    </td>
                    <td colspan="6">
                        <p><strong>Accountants Details (if Self employed)</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Name of Firm</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="solicitors_name_of_firm" value="<?php if(!empty($tempData)){echo $tempData->solicitors_name_of_firm;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p>Name of Firm</p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="accountants_details_name_of_firm" value="<?php if(!empty($tempData)){echo $tempData->accountants_details_name_of_firm;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Address</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="solicitors_address" value="<?php if(!empty($tempData)){echo $tempData->solicitors_address;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p>Address</p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="accountants_details_address" value="<?php if(!empty($tempData)){echo $tempData->accountants_details_address;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Tel No</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="solicitors_tel_no" value="<?php if(!empty($tempData)){echo $tempData->solicitors_tel_no;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p>Tel No</p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="accountants_details_tel_no" value="<?php if(!empty($tempData)){echo $tempData->accountants_details_tel_no;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Name of Contact</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="solicitors_name_of_contact" value="<?php if(!empty($tempData)){echo $tempData->solicitors_name_of_contact;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p>Name of Contact</p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="accountants_details_name_of_contact" value="<?php if(!empty($tempData)){echo $tempData->accountants_details_name_of_contact;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752" height="50">
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p>
                            <strong style="font-weight: 900; font-size: 20px;">Selling Agents (if purchase) </strong>
                        </p>
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Name of Firm</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="selling_agents_name_of_firm1" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_name_of_firm1;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p><input type="text" name="selling_agents_address1" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_address1;} ?>"></p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="selling_agents_tel_no1" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_tel_no1;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Address</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="selling_agents_name_of_firm2" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_name_of_firm2;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p><input type="text" name="selling_agents_address2" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_address2;} ?>"></p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="selling_agents_tel_no2" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_tel_no2;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Tel No</p>
                    </td>
                    <td colspan="3" width="203">
                        <p><input type="text" name="selling_agents_name_of_firm3" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_name_of_firm3;} ?>"></p>
                    </td>
                    <td colspan="5" width="219">
                        <p><input type="text" name="selling_agents_address3" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_address3;} ?>"></p>
                    </td>
                    <td width="138">
                        <p><input type="text" name="selling_agents_tel_no3" value="<?php if(!empty($tempData)){echo $tempData->selling_agents_tel_no3;} ?>"></p>
                    </td>
                </tr>
                <tr><td height="100"></td></tr>
                <tr>
                    <td width="192">
                        <p><strong>BUDGET PLANNER</strong></p>
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                    </td>
                    <td colspan="3" width="188">
                    </td>
                </tr>
                <tr>
                    <td width="192">
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                        <p><strong>CREDIT COMMITMENTS</strong></p>
                    </td>
                    <td colspan="3" width="188">
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Council Tax</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="council_tax" value="<?php if(!empty($tempData)){echo $tempData->council_tax;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Secured Loans</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="secured_loans" value="<?php if(!empty($tempData)){echo $tempData->secured_loans;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Electric</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="electric" value="<?php if(!empty($tempData)){echo $tempData->electric;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Credit Cards (total p/m)</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="credit_cards_total_p_m" value="<?php if(!empty($tempData)){echo $tempData->credit_cards_total_p_m;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Gas</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="gas" value="<?php if(!empty($tempData)){echo $tempData->gas;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Personal Loans (total p/m)</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="personal_loans_total_p_m" value="<?php if(!empty($tempData)){echo $tempData->personal_loans_total_p_m;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Water</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="water" value="<?php if(!empty($tempData)){echo $tempData->water;} ?>"s>&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Hire Purchases (total p/m)</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="hire_purchases_total_p_m" value="<?php if(!empty($tempData)){echo $tempData->hire_purchases_total_p_m;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Tv / Internet</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="tv_internet" value="<?php if(!empty($tempData)){echo $tempData->tv_internet;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Overdrafts</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="overdrafts" value="<?php if(!empty($tempData)){echo $tempData->overdrafts;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Telephone / Mobiles</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="telephone_mobiles" value="<?php if(!empty($tempData)){echo $tempData->telephone_mobiles;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p><strong>0</strong></p>
                    </td>
                    <td colspan="3" width="188">
                    </td>
                </tr>
                <tr>
                    <td width="192">
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                        <p><strong>OTHER</strong></p>
                    </td>
                    <td colspan="3" width="188">
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p><strong>PROTECTION</strong></p>
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                        <p>Food (total p/m)</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="food_total_p_m" value="<?php if(!empty($tempData)){echo $tempData->food_total_p_m;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Buildings &amp; Contents</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="buildings_amp_contents" value="<?php if(!empty($tempData)){echo $tempData->buildings_amp_contents;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Social (total p/m)</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="social_total_p_m" value="<?php if(!empty($tempData)){echo $tempData->social_total_p_m;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Life &amp; Critical Illness</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="life_amp_critical_illness" value="<?php if(!empty($tempData)){echo $tempData->life_amp_critical_illness;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Gym / health club</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="gym_health_club" value="<?php if(!empty($tempData)){echo $tempData->gym_health_club;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Income Protection</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="income_protection" value="<?php if(!empty($tempData)){echo $tempData->income_protection;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Maintenance payments</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="maintenance_payments" value="<?php if(!empty($tempData)){echo $tempData->maintenance_payments;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                        <p>Childcare</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="childcare" value="<?php if(!empty($tempData)){echo $tempData->childcare;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p><strong>CAR COSTS</strong></p>
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                        <p>Mortgage / rent to continue</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="mortgage_rent_to_continue" value="<?php if(!empty($tempData)){echo $tempData->mortgage_rent_to_continue;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Finance</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="finance" value="<?php if(!empty($tempData)){echo $tempData->finance;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p>Other</p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="other" value="<?php if(!empty($tempData)){echo $tempData->other;} ?>">&pound;</p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Insurance</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="insurance1" value="<?php if(!empty($tempData)){echo $tempData->insurance1;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p><input type="text" name="insurance2" value="<?php if(!empty($tempData)){echo $tempData->insurance2;} ?>"></p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="insurance3" value="<?php if(!empty($tempData)){echo $tempData->insurance3;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Petrol</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="petrol" value="<?php if(!empty($tempData)){echo $tempData->petrol;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p><strong>TOTAL</strong></p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="petrol_total" value="<?php if(!empty($tempData)){echo $tempData->petrol_total;} ?>"><strong>&pound;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                        <p>Other travel costs</p>
                    </td>
                    <td colspan="3" width="180">
                        <p><input type="text" name="other_travel_costs1" value="<?php if(!empty($tempData)){echo $tempData->other_travel_costs1;} ?>">&pound;</p>
                    </td>
                    <td colspan="4" width="192">
                        <p><input type="text" name="other_travel_costs2" value="<?php if(!empty($tempData)){echo $tempData->other_travel_costs2;} ?>"></p>
                    </td>
                    <td colspan="3" width="188">
                        <p><input type="text" name="other_travel_costs3" value="<?php if(!empty($tempData)){echo $tempData->other_travel_costs3;} ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td width="192">
                    </td>
                    <td colspan="3" width="180">
                    </td>
                    <td colspan="4" width="192">
                    </td>
                    <td colspan="3" width="188">
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p><strong>Protection</strong></p>
                        <p>
                            <strong>Do you have any protection? </strong>
                            <span>
                                <input type="radio" value="Yes" name="do_you_have_any_protection" <?php if(!empty($tempData)){ if($tempData->do_you_have_any_protection=='Yes') { echo 'checked'; }} ?>> Yes
                                <input type="radio" value="No" name="do_you_have_any_protection" <?php if(!empty($tempData)){ if($tempData->do_you_have_any_protection=='No') { echo 'checked'; }} ?>> No
                            </span>
                        </p>
                        <p>
                            <strong>Would you like to discuss your protection?</strong>
                            <span>
                                <input type="radio" value="Yes" name="would_you_like_to_discuss_your_protection" <?php if(!empty($tempData)){ if($tempData->would_you_like_to_discuss_your_protection=='Yes') { echo 'checked'; }} ?>> Yes
                                <input type="radio" value="No" name="would_you_like_to_discuss_your_protection" <?php if(!empty($tempData)){ if($tempData->would_you_like_to_discuss_your_protection=='No') { echo 'checked'; }} ?>> No
                            </span>
                        </p>
                        <p>
                            <strong>If no why- </strong><strong style="color:red;">THERE IS NO NEED FOR IT, I WILL DISSCUSS LATER, I DON&rsquo;T WANT TO DISCUSS AT ALL</strong>
                            <textarea placeholder="Please enter..." name="there_is_no_need_for_it"></textarea>
                        </p>
                        <p>
                            <strong>Any existing protection policy?</strong>
                            <textarea placeholder="Please enter..." name="any_existing_protection_policy"></textarea>
                        </p>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-bottom: 20px;">
                        <tbody>
                            <tr>
                                <td width="52">
                                    <p><strong>App &nbsp;1 / 2</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Life cover/</strong></p>
                                    <p><strong>ASU</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Critical illness</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Sum assured &pound;</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Monthly Payment</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Company</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Remaining term</strong></p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="app_1_2" value="<?php if(!empty($tempData)){echo $tempData->app_1_2;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="life_cover_asu" value="Yes" <?php if(!empty($tempData)){ if($tempData->life_cover_asu=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="life_cover_asu" value="No" <?php if(!empty($tempData)){ if($tempData->life_cover_asu=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" value="" name="critical_illness" value="Yes" <?php if(!empty($tempData)){ if($tempData->critical_illness=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="critical_illness" value="No" <?php if(!empty($tempData)){ if($tempData->critical_illness=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="sum_assured" value="<?php if(!empty($tempData)){echo $tempData->sum_assured;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="monthly_payment" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="company" value="<?php if(!empty($tempData)){echo $tempData->company;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="remaining_term" value="<?php if(!empty($tempData)){echo $tempData->remaining_term;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="policy_extra_field" value="<?php if(!empty($tempData)){echo $tempData->policy_extra_field;} ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="app_1_2_2" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_2;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="life_cover_asu_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->life_cover_asu_2=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="life_cover_asu_2" value="No" <?php if(!empty($tempData)){ if($tempData->life_cover_asu_2=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="critical_illness_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->critical_illness_2=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="critical_illness_2" value="No" <?php if(!empty($tempData)){ if($tempData->critical_illness_2=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="sum_assured_2" value="<?php if(!empty($tempData)){echo $tempData->sum_assured_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="monthly_payment_2" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="company_2" value="<?php if(!empty($tempData)){echo $tempData->company_2;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="remaining_term_2" value="<?php if(!empty($tempData)){echo $tempData->remaining_term_2;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="policy_extra_field_2" value="<?php if(!empty($tempData)){echo $tempData->policy_extra_field_2;} ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="app_1_2_3" value="<?php if(!empty($tempData)){echo $tempData->app_1_2_3;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="life_cover_asu_3" value="Yes" <?php if(!empty($tempData)){ if($tempData->life_cover_asu_3=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="life_cover_asu_3" value="No" <?php if(!empty($tempData)){ if($tempData->life_cover_asu_3=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="critical_illness_3" value="Yes" <?php if(!empty($tempData)){ if($tempData->critical_illness_3=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="critical_illness_3" value="No" <?php if(!empty($tempData)){ if($tempData->critical_illness_3=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="sum_assured_3" value="<?php if(!empty($tempData)){echo $tempData->sum_assured_3;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="monthly_payment_3" value="<?php if(!empty($tempData)){echo $tempData->monthly_payment_3;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="company_3" value="<?php if(!empty($tempData)){echo $tempData->company_3;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="remaining_term_3" value="<?php if(!empty($tempData)){echo $tempData->remaining_term_3;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="policy_extra_field_3" value="<?php if(!empty($tempData)){echo $tempData->policy_extra_field_3;} ?>"></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-bottom: 20px;">
                        <tbody>
                            <tr>
                                <td width="52">
                                    <p><strong>App &nbsp;1 / 2</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Life cover/</strong></p>
                                    <p><strong>ASU</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Critical illness</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Sum assured &pound;</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Monthly Payment</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Company</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Remaining term</strong></p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="new_requirementsapp_1_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsapp_1_2;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="new_requirementslife_cover_asu" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio"  name="new_requirementslife_cover_asu" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="new_requirementscritical_illness" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="new_requirementscritical_illness" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="new_requirementssum_assured" value="<?php if(!empty($tempData)){echo $tempData->new_requirementssum_assured;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementsmonthly_payment" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsmonthly_payment;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementscompany" value="<?php if(!empty($tempData)){echo $tempData->new_requirementscompany;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="new_requirementsremaining_term" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsremaining_term;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="new_requirementspolicy_extra_field" value="<?php if(!empty($tempData)){echo $tempData->new_requirementspolicy_extra_field;} ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="new_requirementsapp_1_2_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsapp_1_2_2;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="new_requirementslife_cover_asu_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu_2=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio"  name="new_requirementslife_cover_asu_2" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu_2=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="new_requirementscritical_illness_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness_2=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio"  name="new_requirementscritical_illness_2" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness_2=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="new_requirementssum_assured_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementssum_assured_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementsmonthly_payment_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsmonthly_payment_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementscompany_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementscompany_2;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="new_requirementsremaining_term_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsremaining_term_2;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="new_requirementsremaining_term_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsremaining_term_2;} ?>"></p>
                                    <p><input type="text" name="new_requirementspolicy_extra_field_2" value="<?php if(!empty($tempData)){echo $tempData->new_requirementspolicy_extra_field_2;} ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="new_requirementsapp_1_2_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsapp_1_2_3;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><strong>Yes<input type="radio" name="new_requirementslife_cover_asu_3" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu_3=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" value="" name="new_requirementslife_cover_asu_3" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementslife_cover_asu_3=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="new_requirementscritical_illness_3" value="Yes" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness_3=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="new_requirementscritical_illness_3" value="No" <?php if(!empty($tempData)){ if($tempData->new_requirementscritical_illness_3=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="new_requirementssum_assured_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementssum_assured_3;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementsmonthly_payment_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsmonthly_payment_3;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="new_requirementscompany_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementscompany_3;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="new_requirementsremaining_term_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementsremaining_term_3;} ?>"></p>
                                </td>
                                <td width="108">
                                    <p><input type="text" name="new_requirementspolicy_extra_field_3" value="<?php if(!empty($tempData)){echo $tempData->new_requirementspolicy_extra_field_3;} ?>"></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
                        <tr>
                            <td>
                                <p>
                                    <strong>Do you have building and contents insurance- 
                                    Yes <input type="radio" value="Yes" name="do_you_have_building_and_contents_insurance" <?php if(!empty($tempData)){ if($tempData->do_you_have_building_and_contents_insurance=='Yes') { echo 'checked'; }} ?>>
                                    No <input type="radio" value="No" name="do_you_have_building_and_contents_insurance" <?php if(!empty($tempData)){ if($tempData->do_you_have_building_and_contents_insurance=='No') { echo 'checked'; }} ?>>
                                </p>

                                <p>
                                    <strong>Would you like to discuss your protection-
                                    Yes <input type="radio" value="Yes" name="would_you_like_to_discuss_your_protection" <?php if(!empty($tempData)){ if($tempData->would_you_like_to_discuss_your_protection=='Yes') { echo 'checked'; }} ?>>
                                    No <input type="radio" value="No" name="would_you_like_to_discuss_your_protection" <?php if(!empty($tempData)){ if($tempData->would_you_like_to_discuss_your_protection=='No') { echo 'checked'; }} ?>>    
                                </p>

                                <p>
                                    <strong>If no why- </strong><strong>THERE IS NO NEED FOR IT, I WILL DISSCUSS LATER, I DON&rsquo;T WANT TO DISCUSS AT ALL</strong>
                                </p>
                            </tr>
                        </td>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
                        <tbody>
                            <tr>
                                <td width="52">
                                    <p><strong>App&nbsp; 1 / 2</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Company</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Buildings</strong></p>
                                </td>
                                <td width="96">
                                    <p><strong>Contents</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Contents cover &pound;&rsquo;000&rsquo;s</strong></p>
                                </td>
                                <td width="84">
                                    <p><strong>Monthly &pound;</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>Any claims in last 5 years?</strong></p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="claim_app_1_2"></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="claim_company"></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="claim_buildings" value="Yes" <?php if(!empty($tempData)){ if($tempData->claim_buildings=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="claim_buildings" value="No" <?php if(!empty($tempData)){ if($tempData->claim_buildings=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="claim_contents" value="<?php if(!empty($tempData)){echo $tempData->claim_contents;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="claim_contents_cover" value="<?php if(!empty($tempData)){echo $tempData->claim_contents_cover;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="claim_monthly" value="<?php if(!empty($tempData)){echo $tempData->claim_monthly;} ?>">&pound;</p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="claim_any_claims_in_last_5_years" value="<?php if(!empty($tempData)){echo $tempData->claim_any_claims_in_last_5_years;} ?>"></p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p><input type="text" name="claim_app_1_2_2" value="<?php if(!empty($tempData)){echo $tempData->claim_app_1_2_2;} ?>"></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="claim_company_2" value="<?php if(!empty($tempData)){echo $tempData->claim_company_2;} ?>"></p>
                                </td>
                                <td width="120">
                                    <p><strong>Yes<input type="radio" name="claim_buildings_2" value="Yes" <?php if(!empty($tempData)){ if($tempData->claim_buildings_2=='Yes') { echo 'checked'; }} ?>>
                                    No<input type="radio" name="claim_buildings_2" value="No" <?php if(!empty($tempData)){ if($tempData->claim_buildings_2=='No') { echo 'checked'; }} ?>> </strong></p>
                                </td>
                                <td width="96">
                                    <p><input type="text" name="claim_contents_2" value="<?php if(!empty($tempData)){echo $tempData->claim_contents_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="claim_contents_cover_2" value="<?php if(!empty($tempData)){echo $tempData->claim_contents_cover_2;} ?>">&pound;</p>
                                </td>
                                <td width="84">
                                    <p><input type="text" name="claim_monthly_2" value="<?php if(!empty($tempData)){echo $tempData->claim_monthly_2;} ?>">&pound;</p>
                                </td>
                                <td width="120">
                                    <p><input type="text" name="claim_any_claims_in_last_5_years_2" value="<?php if(!empty($tempData)){echo $tempData->claim_any_claims_in_last_5_years_2;} ?>"></p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            
        </tbody>
    </table>
    <table cellpadding="10" border="1" align="center" style="margin-top:20px; width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
        <tbody>
            <tr>
                <td>
                    <p>Declarations</p>
                    <p>I/we confirm that I/we have read the information contained herein and confirm that this information is correct.</p>
                    <p>I/we give my/our consent that this information may be used for the purpose of arranging a mortgage, protection or general insurance product on my/our behalf.</p>
                </tbody>
            </td>
        </tr>
    </table>
    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
        <tbody>
            <tr>
                <td width="319">
                    
                    <p>First Client</p>
                </td>
                <td width="336">
                    
                    <p>Second Client</p>
                </td>
            </tr>
            <tr>
                <td width="319" style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td>Signature</td>
                            <td width="260"></td>
                            <td>Date</td>
                        </tr>
                    </table>
                </td>
                <td width="336"  style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td>Signature</td>
                            <td width="260"></td>
                            <td>Date</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
        <tbody>
            <tr>
                <td>
                    <p>If you would like us to keep in touch after we have arranged your mortgage we shall need your permission.&nbsp; Please certify your authority for us to contact you with details of mortgages and offers which we believe are likely to be of interest to you by signing the declaration below:</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10" border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
        <tbody>
            <tr>
                <td width="319">
                    
                    <p>First Client</p>
                </td>
                <td width="336">
                    
                    <p>Second Client</p>
                </td>
            </tr>
            <tr>
                <td width="336"  style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td>Signature</td>
                            <td width="260"></td>
                            <td>Date</td>
                        </tr>
                    </table>
                </td>
                <td width="336"  style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td>Signature</td>
                            <td width="260"></td>
                            <td>Date</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="download-pdf">Download PDF <i class="fas fa-download"></i></button>
    <input type='submit' name='saveData' value='Save Data'>
   <?php if(!empty($tempData)){ ?> <a href='clearData' class='clear' data-id= "<?php if(!empty($tempData)){echo $tempData->user_id;} ?>">Clear Data</a> <?php } ?>
</form>

<script>
 $(document).on("click",".clear",function(){
    var base_url = "<?php echo asset(''); ?>";
   if (confirm("Are you sure you want to clear user data")) {
        var user_id = $(this).attr('data-id');
       
        var redirect = window.location.replace(base_url+'clearFF/'+user_id);

        return false;
    }
    else
    {
        alert('No');
    }
 })    
</script>
@endsection

<style type="text/css">
    textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    box-sizing: border-box;
    min-height: 113px;
}
</style>