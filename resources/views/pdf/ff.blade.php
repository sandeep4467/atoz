    <table>
        <img style="width:250px;  margin-bottom: 20px; margin-left: 220px;" src="{{ asset('img/logo.png') }}" alt="a2z"/><br>
    </table>
    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
        <tbody>
            <tr style="border-bottom: 1px solid #000;">
                <td colspan="3" width="40%">
                    <h2  style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Applicant Details</h2>
                </td>
                <td colspan="3" width="30%">
                    <h2 style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Client</h2>
                </td>
                <td colspan="5" width="30%">
                    <h2 style="margin: 0; font-size: 20px; font-weight: 900;
                    padding: 5px 10px;">Partner</h2>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Title</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_title }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_title }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Full Name (as shown on your passport)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_fullname }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_fullname }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Maiden Name &amp; Date Name Changed</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_maiden }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_maiden }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Marital status</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_marital }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_marital }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Date of Birth</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_dob }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_dob }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Smoker</p>
                </td>
                <td colspan="3" width="30%" style="padding:5px 10px;">
                    {{ $client_smoker }}
                    {{  $client_smoker }}
                </td>
                <td colspan="5" width="30%" style="padding:5px 10px;">
                    {{ $partner_smoker }}
                    {{  $partner_smoker }}
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Relationship to other applicant</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_relationship }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_relationship }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Dependents &nbsp;&nbsp;Yes/No (if yes names &amp; dates of birth)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_dependents }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_dependents }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>National Insurance Number</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_nin }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_nin }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Do you have a valid will?</p>
                </td>
                <td colspan="3" width="30%" style="padding:5px 10px;">
                    {{ $client_vaild_will }}
                    {{  $client_vaild_will }}
                </td>
                <td colspan="5" width="30%" style="padding:5px 10px;">
                    {{ $partner_vaild_will }}
                    {{  $partner_vaild_will }}
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Current Address &amp; Postcode</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_postcode }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_postcode }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Current residential Status eg owner/rented/family home</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_current_residential }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_current_residential }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Date Moved into Current Address</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_date_moved }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_date_moved }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Previous address and postcode&nbsp; (We require <u>full 3</u> <u>year </u>address history)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_previous_address }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_previous_address }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Date moved into previous address</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_date_moved_into_previous }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_date_moved_into_previous }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Previous residential status eg owner / rented/family home</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_previous_residential }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_previous_residential }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Telephone numbers: Home</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_telephone }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_telephone }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Work</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_work }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_work }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Mobile</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_mobile }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_mobile }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Email Address:</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_email }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_email }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Category of Applicant: <br> e.g First Time Buyer, <br> Mover, Remortgage, <br>Right To Buy, Commercial, <br>Buy To Let</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_category }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_category }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Nationality</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_nationality }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_nationality }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Date moved to UK?</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_moved_to_uk }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_moved_to_uk }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Visa Status (if applicable)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_visa_status }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_visa_status }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Type of Visa (if applicable)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_type_of_visa }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_type_of_visa }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <span>Term remaining on Visa (if applicable) </span>
                    {{ $term_remaining }}
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">EMPLOYMENT DETAILS</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Employment Details</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_details }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_details }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Occupation</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_occupation }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_occupation }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Status: Employed/Contract/Self Employed</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_status }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_status }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Start date of current employment</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_st_current_employment }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_st_current_employment }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Name of Company</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_company_name }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_company_name }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Address of Company</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_compan_address }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_compan_address }}</p>
                </td
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Previous employment details &ndash; if in current job less than 3 years (start dates if applicable)</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_previous_employment }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_previous_employment }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Basic Salary/ net profit</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_salary }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p><strong>&pound; </strong>{{ $partner_emp_salary }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Guaranteed Overtime</p>
                </td>
                <td colspan="3" width="30%">
                    <p><strong>&pound;</strong> {{ $client_emp_guaranteed }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p><strong>&pound;</strong> {{ $partner_emp_guaranteed }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Regular Bonus</p>
                </td>
                <td colspan="3" width="30%">
                    <p><strong>&pound;</strong> {{ $client_emp_bonus }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p><strong>&pound;</strong> {{ $partner_emp_bonus }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Other Income (please specify)</p>
                </td>
                <td colspan="3" width="30%">
                    <p><strong>&pound;</strong> {{ $client_emp_other_income }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p><strong>&pound;</strong> {{ $partner_emp_other_income }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Net Monthly Income</p>
                </td>
                <td colspan="3" width="30%">
                    <p>&pound; {{ $client_emp_net_monthly_income }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_net_monthly_income }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Budget for mortgage</p>
                </td>
                <td colspan="3" width="30%">
                    <p>&pound; {{ $client_emp_budget }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_budget }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Expected retirement age</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_retirement }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_retirement }}&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Lending past retirement age? Income to be used into retirement?</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_emp_retirement }}&nbsp;</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_emp_retirement }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">BANK DETAILS</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Bank Name</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_bank_name }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_bank_name }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Account Number</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_bank_acc_number }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_bank_acc_number }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Sort Code</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_bank_sort_code }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_bank_sort_code }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Account Holder Name &amp; Preferred Payment Date</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_bank_account_holder_name }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_bank_account_holder_name }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="11" width="752">
                    <p style="padding:10px; margin:0; font-size:16px">
                    <strong style="font-weight: 900; font-size: 20px;">FINANCIAL DETAILS</strong></p>
                    
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Ever had a loan / mortgage refused??</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_financial_mortgage }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_financial_mortgage }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Ever had CCJ&rsquo;s / Defaults registered against you??</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_financial_ccj }}</p>
                </td>
                <td colspan="5" width="30%">
                    <p>{{ $partner_financial_ccj }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="40%">
                    <p>Ever been declared bankrupt / made arrangements with creditors??</p>
                </td>
                <td colspan="3" width="30%">
                    <p>{{ $client_financial_bankrupt }}<p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>{{ $partner_financial_bankrupt }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Any previous mortgage or rent arrears?</p>
                    </td>
                    <td colspan="3" width="30%">
                        <p>{{ $client_financial_previous_mortgage }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>{{ $partner_financial_previous_mortgage }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p><strong>If yes to any of the above credit issues please provide full details below;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11">
                        <table cellpadding="10">
                            <tbody>
                                <tr>
                                    <td width="20%">
                                        <p><strong>Type Of Blemish?</strong></p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>Date Registered</strong></p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>Amount?</strong></p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>Satisfied / Paid up to date?</strong></p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>Date satisfied?</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <p>{{ $type_of_blemish1 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $date_registered1 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>&pound;</strong> {{ $amount1 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $satisfied1 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $date_satisfied1 }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <p>{{ $type_of_blemish2 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $date_registered2 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p><strong>&pound;</strong> {{ $amount2 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $satisfied2 }}</p>
                                    </td>
                                    <td width="20%">
                                        <p>{{ $date_satisfied2 }}</p>
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
                        <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; border-color: #000; padding: 5px 10px;">
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
                                        <p>{{ $app_1_2_1 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>{{ $credit_card_loan_1 }}</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $lender_1 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>&pound; {{ $outstanding_balance_1 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>&pound; {{ $monthly_payment_1 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>{{ $interest_rate_1 }}%</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $to_be_repaid_on_completion_1 }}&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                             {{ $with_this_mortgage_1 }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="52">
                                        <p>{{ $app_1_2_2 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>{{ $credit_card_loan_2 }}</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $lender_2 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>&pound; {{ $outstanding_balance_2 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>&pound; {{ $monthly_payment_2 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>{{ $interest_rate_2 }}%</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $to_be_repaid_on_completion_2 }}&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                         {{ $with_this_mortgage_2 }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="52">
                                        <p>{{ $app_1_2_3 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>{{ $credit_card_loan_3 }}</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $lender_3 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>&pound; {{ $outstanding_balance_3 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>&pound; {{ $monthly_payment_3 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>{{ $interest_rate_3 }}%</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $to_be_repaid_on_completion_3 }}&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                           {{ $with_this_mortgage_3 }}
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="52">
                                        <p>{{ $app_1_2_4 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>{{ $credit_card_loan_4 }}</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $lender_4 }}</p>
                                    </td>
                                    <td width="96">
                                        <p>&pound; {{ $outstanding_balance_4 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>&pound; {{ $monthly_payment_4 }}</p>
                                    </td>
                                    <td width="84">
                                        <p>{{ $interest_rate_4 }}%</p>
                                    </td>
                                    <td width="120">
                                        <p>{{ $to_be_repaid_on_completion_4 }}&nbsp;</p>
                                    </td>
                                    <td width="108">
                                        <p>
                                          {{ $with_this_mortgage_4 }}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p style="padding:10px; margin:0; font-size:16px">
                        <strong style="font-weight: 900; font-size: 20px;">Current Mortgage Details</strong></p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_cmd }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_cmd }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Lender</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_lender }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_lender }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Account Number</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_account_number }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_account_number }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Value of property</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_value_of_property }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p><strong>&pound;</strong> {{ $partner_value_of_property }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Amount of Loan outstanding</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_amount_of_loan_outstanding }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p><strong>&pound;</strong> {{ $partner_amount_of_loan_outstanding }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Original Purchase price</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_original_purchase_price }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p><strong>&pound;</strong> {{ $partner_original_purchase_price }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Date Originally purchased</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_date_originally_purchased }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_date_originally_purchased }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Monthly Payment</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_monthly_payment }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p><strong>&pound;</strong> {{ $partner_monthly_payment }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Years remaining</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_years_remaining }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_years_remaining }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Repayment method (endowment/repayment etc)</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_repayment_method }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_repayment_method }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Rate - Interest Rate &amp; Type of Rate</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_interest_rate }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_interest_rate }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>If Buy to Let, expected rental income</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_expected_rental_income }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p><strong>&pound;</strong> {{ $partner_expected_rental_income }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Any penalties to transfer your mortgage, if yes how much?</p>
                    </td>
                    <td colspan="4" width="239">
                        <p><strong>&pound;</strong> {{ $client_penalties_to_transfer_your_mortgage }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_penalties_to_transfer_your_mortgage }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="40%">
                        <p>Any other properties owned?&nbsp;&nbsp; If yes how many?</p>
                    </td>
                    <td colspan="4" width="239">
                        <p>{{ $client_other_properties_owned }}</p>
                    </td>
                    <td colspan="4" width="202">
                        <p>{{ $partner_other_properties_owned }}</p>
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
                        <p>{{ $mortgaged_and_postcode }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>How much do you wish to borrow?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $wish_to_borrow }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>
                            Current Value
                        </p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $current_value }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Source of funds? (savings / equity / incentive)</p>
                    </td>
                    <td colspan="2" width="179">
                        {{ $source_of_funds }}
                    </td>
                    <td colspan="5" width="30%">
                        <p>Term of mortgage?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $term_of_mortgage }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Preferred Product type: eg & Fixed/Tracker/Discount</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $preferred_product }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>Tie in period for rate?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $tie_in_period }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Payment method: eg Interest Only, Capital Repayment</p>
                    </td>
                    <td colspan="2" width="179">
                        {{ $payment_method }}
                    </td>
                    <td colspan="5" width="30%">
                        <p>If interest only, please state repayment vehicle?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $state_repayment_vehicle }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>House/ Bungalow/ Flat ?</p>
                        <p>Semi/Terraced/Detached ?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $house_bungalow_flat }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>Property type: Freehold/Leasehold (remaining lease term)</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $property_type_freehold_leasehold }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>IF FLAT &ndash; What Floor?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $what_floor }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>How many flats in block?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $how_many_flats }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Year Property Built?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $year_property_built }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>Is this property ex local authority?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $this_property_ex_local }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>No of Bedrooms -</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $no_of_bedrooms }}&nbsp;</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>No of reception rooms -</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $no_of_reception_rooms }}&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Rental Income</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $rental_income }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>Garage</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $garage }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Is property near or above commercial premises?</p>
                    </td>
                    <td colspan="2" width="179">
                        <p>{{ $near_or_above_commercial_premises }}</p>
                    </td>
                    <td colspan="5" width="30%">
                        <p>What type of commercial premises?</p>
                    </td>
                    <td colspan="2" width="153">
                        <p>{{ $commercial_premises }}</p>
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
                    <td colspan="2" width="20%">
                        <p>Name of Firm</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $solicitors_name_of_firm }}</p>
                    </td>
                    <td colspan="5" width="25%">
                        <p>Name of Firm</p>
                    </td>
                    <td width="30%">
                        <p>{{ $accountants_details_name_of_firm }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="20%">
                        <p>Address</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $solicitors_address }}</p>
                    </td>
                    <td colspan="5" width="25%">
                        <p>Address</p>
                    </td>
                    <td width="30%">
                        <p>{{ $accountants_details_address }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="20%">
                        <p>Tel No</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $solicitors_tel_no }}</p>
                    </td>
                    <td colspan="5" width="25%">
                        <p>Tel No</p>
                    </td>
                    <td width="30%">
                        <p>{{ $accountants_details_tel_no }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="20%">
                        <p>Name of Contact</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $solicitors_name_of_contact }}</p>
                    </td>
                    <td colspan="5" width="25%">
                        <p>Name of Contact</p>
                    </td>
                    <td width="30%">
                        <p>{{ $accountants_details_name_of_contact }}</p>
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
                        <p>{{ $selling_agents_name_of_firm1 }}</p>
                    </td>
                    <td colspan="5" width="219">
                        <p>{{ $selling_agents_address1 }}</p>
                    </td>
                    <td width="138">
                        <p>{{ $selling_agents_tel_no1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Address</p>
                    </td>
                    <td colspan="3" width="203">
                        <p>{{ $selling_agents_name_of_firm2 }}</p>
                    </td>
                    <td colspan="5" width="219">
                        <p>{{ $selling_agents_address2 }}</p>
                    </td>
                    <td width="138">
                        <p>{{ $selling_agents_tel_no2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="193">
                        <p>Tel No</p>
                    </td>
                    <td colspan="3" width="203">
                        <p>{{ $selling_agents_name_of_firm3 }}</p>
                    </td>
                    <td colspan="5" width="219">
                        <p>{{ $selling_agents_address3 }}</p>
                    </td>
                    <td width="138">
                        <p>{{ $selling_agents_tel_no3 }}</p>
                    </td>
                </tr>
                <tr><td colspan="11" height="100"></td></tr>
                <tr>
                    <td width="25%">
                        <p><strong>BUDGET PLANNER</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                        <p><strong>CREDIT COMMITMENTS</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Council Tax</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $council_tax }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Secured Loans</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $secured_loans }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Electric</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $electric }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Credit Cards (total p/m)</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $credit_cards_total_p_m }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Gas</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $gas }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Personal Loans (total p/m)</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $personal_loans_total_p_m }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Water</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $water }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Hire Purchases (total p/m)</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $hire_purchases_total_p_m }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Tv / Internet</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $tv_internet }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Overdrafts</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $overdrafts }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Telephone / Mobiles</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $telephone_mobiles }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p><strong>0</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                        <p><strong>OTHER</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p><strong>PROTECTION</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                        <p>Food (total p/m)</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $food_total_p_m }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Buildings &amp; Contents</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $buildings_amp_contents }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Social (total p/m)</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $social_total_p_m }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Life &amp; Critical Illness</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $life_amp_critical_illness }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Gym / health club</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $gym_health_club }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Income Protection</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $income_protection }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Maintenance payments</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $maintenance_payments }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                        <p>Childcare</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $childcare }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p><strong>CAR COSTS</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                        <p>Mortgage / rent to continue</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $mortgage_rent_to_continue }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Finance</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $finance }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>Other</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $other }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Insurance</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $insurance1 }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>{{ $insurance2 }}</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $insurance3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Petrol</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $petrol }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p><strong>TOTAL</strong></p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $petrol_total }}<strong></strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <p>Other travel costs</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>&pound; {{ $other_travel_costs1 }}</p>
                    </td>
                    <td colspan="4" width="25%">
                        <p>{{ $other_travel_costs2 }}</p>
                    </td>
                    <td colspan="3" width="25%">
                        <p>{{ $other_travel_costs3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                    <td colspan="4" width="25%">
                    </td>
                    <td colspan="3" width="25%">
                    </td>
                </tr>
                <tr>
                    <td colspan="11" width="752">
                        <p><strong>Protection</strong></p>
                        <p>
                            <strong>Do you have any protection? </strong>
                            <span>
                                {{ $do_you_have_any_protection }}
                                {{ $do_you_have_any_protection }}
                            </span>
                        </p>
                        <p>
                            <strong>Would you like to discuss your protection?</strong>
                            <span>
                                {{ $would_you_like_to_discuss_your_protection }}
                                {{ $would_you_like_to_discuss_your_protection }}
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
                    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-bottom: 20px;">
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
                                    <p>{{ $app_1_2 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $life_cover_asu }} </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $critical_illness }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $sum_assured }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $monthly_payment }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $company }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $remaining_term }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $policy_extra_field }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p>{{ $app_1_2_2 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $life_cover_asu_2 }} </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $critical_illness_2 }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $sum_assured_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $monthly_payment_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $company_2 }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $remaining_term_2 }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $policy_extra_field_2 }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p>{{ $app_1_2_3 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $life_cover_asu_3 }}</strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $critical_illness_3 }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $sum_assured_3 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $monthly_payment_3 }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $company_3 }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $remaining_term_3 }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $policy_extra_field_3 }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-bottom: 20px;">
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
                                    <p>{{ $new_requirementsapp_1_2 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $new_requirementslife_cover_asu }}  </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $new_requirementscritical_illness }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $new_requirementssum_assured }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $new_requirementsmonthly_payment }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $new_requirementscompany }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $new_requirementsremaining_term }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $new_requirementspolicy_extra_field }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p>{{ $new_requirementsapp_1_2_2 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $new_requirementslife_cover_asu_2 }} </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $new_requirementscritical_illness_2 }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $new_requirementssum_assured_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $new_requirementsmonthly_payment_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $new_requirementscompany_2 }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $new_requirementsremaining_term_2 }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $new_requirementspolicy_extra_field_2 }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p>{{ $new_requirementsapp_1_2_3 }}</p>
                                </td>
                                <td width="96">
                                    <p><strong>{{ $new_requirementslife_cover_asu_3 }}
                                    {{  $new_requirementslife_cover_asu_3 }} </strong></p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $new_requirementscritical_illness_3 }} </strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $new_requirementssum_assured_3 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $new_requirementsmonthly_payment_3 }}</p>
                                </td>
                                <td width="84">
                                    <p>{{ $new_requirementscompany_3 }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $new_requirementsremaining_term_3 }}</p>
                                </td>
                                <td width="108">
                                    <p>{{ $new_requirementspolicy_extra_field_3 }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
                        <tr>
                            <td>
                                <p>
                                    <strong>Do you have building and contents insurance- 
                                     {{ $do_you_have_building_and_contents_insurance }}
                                </p>

                                <p>
                                    <strong>Would you like to discuss your protection-
                                     {{ $would_you_like_to_discuss_your_protection }}
                                </p>

                                <p>
                                    <strong>If no why- </strong><strong>THERE IS NO NEED FOR IT, I WILL DISSCUSS LATER, I DON&rsquo;T WANT TO DISCUSS AT ALL</strong>
                                </p>
                            </tr>
                        </td>
                    </table>
                    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
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
                                    <p>{{ $claim_app_1_2 }}</p>
                                </td>
                                <td width="96">
                                    <p>{{ $claim_company }}</p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $claim_buildings }}</strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $claim_contents }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $claim_contents_cover }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $claim_monthly }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $claim_any_claims_in_last_5_years }}</p>
                                </td>
                                <td width="108">
                                </td>
                            </tr>
                            <tr>
                                <td width="52">
                                    <p>{{ $claim_app_1_2_2 }}</p>
                                </td>
                                <td width="96">
                                    <p>{{ $claim_company_2 }}</p>
                                </td>
                                <td width="120">
                                    <p><strong>{{ $claim_buildings_2 }}</strong></p>
                                </td>
                                <td width="96">
                                    <p>&pound; {{ $claim_contents_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $claim_contents_cover_2 }}</p>
                                </td>
                                <td width="84">
                                    <p>&pound; {{ $claim_monthly_2 }}</p>
                                </td>
                                <td width="120">
                                    <p>{{ $claim_any_claims_in_last_5_years_2 }}</p>
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
    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;margin-top:20px; width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
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
 <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
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
                            <td width="30%">Signature</td>
                            <td width="50%"></td>
                            <td width="20%">Date</td>
                        </tr>
                    </table>
                </td>
                <td width="336"  style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td width="30%">Signature</td>
                            <td width="50%"></td>
                            <td width="20%">Date</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
        <tbody>
            <tr>
                <td>
                    <p>If you would like us to keep in touch after we have arranged your mortgage we shall need your permission.&nbsp; Please certify your authority for us to contact you with details of mortgages and offers which we believe are likely to be of interest to you by signing the declaration below:</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10" border="1" align="center" style="table-layout: fixed;width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px; margin-top:20px;">
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
                            <td width="30%">Signature</td>
                            <td width="50%"></td>
                            <td width="20%">Date</td>
                        </tr>
                    </table>
                </td>
                <td width="336"  style="padding-top: 65px;">
                    <table>
                        <tr>
                            <td width="30%">Signature</td>
                            <td width="50%"></td>
                            <td width="20%">Date</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>