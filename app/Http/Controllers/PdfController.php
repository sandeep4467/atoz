<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\UserDetail;
use PDF;
use Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use DB;
use Auth;

class PdfController extends Controller
{



   public function __construct()
    {
        $this->user = new User;
    }


    public function getPDF1(Request $request){
      // $validator = Validator::make($request->all(), [
      //    'csign' => 'required|image|mimes:jpeg,png,jpg|max:1024',
      // ],
      // [
      //   'csign.required' => 'You have to upload the signature image!',
      //   'csign.image' => 'The type of the uploaded file should be an image.',
      //   'csign.mimes' => 'Vaild images extension: .png, .jpg, .jpeg',
      //   'csign.max' => 'Failed to upload an image. The image maximum size is 1MB.'
      // ]
      // );
      // if ($validator->fails()) {
      //     return redirect('/')
      //                 ->withErrors($validator)
      //                 ->withInput($request->all());
      // }
      // if ($request->hasFile('csign')) {
      //   $image = $request->file('csign');
      //   $name = time().'.'.$image->getClientOriginalExtension();
      //   $destinationPath = public_path('/pdf-uploads');
      //   $image->move($destinationPath, $name);
      // }      
      $pdf = PDF::loadView('pdf.idd',  [
       'cname' => $request->get('cname'),
       'fee' => $request->get('fee'),
       'dissue' => $request->get('dissue'),
      ])
      ->setPaper('a4', 'portrait');
      return $pdf->download('IDD.pdf');
    }


    public function signup(Request $request)
   {
     $email =  request('email');
     $password = request('password');
     $confirmPass = request('confirm_password');
     if($password!=$confirmPass)
    {
       $hashpassword = hash::make($password);
     Session::flash('message', 'password is not same as confirm password'); 
     return redirect('signupform');
     
    }
    $hashpassword = hash::make($password);
    $user = new User;
    $user->email = $email;
    $user->password = $hashpassword;
    $save = $user->save();
    if($save)
    {
     Session::flash('message', 'Successfully Signup'); 
     return redirect('signupform'); 
    }

   }



   public function login(Request $request)
   {

     $email = request('email');
     $password = request('password');

     $getEmail = DB::table('users')->where('email',$email)->select('email')->first();

     if(empty($getEmail))
     {
      Session::flash('message', 'This Email Does not exist'); 
      return redirect('loginform');
     }
     
      if (Auth::attempt(['email' => $email, 'password' => $password])) {
       
            Auth::user()->id;
           return redirect('ff');

       }
       else
       {
        Session::flash('message','Invalid Email/Password');
        return redirect('loginform');
       }
    }


    public function getPDF2(Request $request){

     if(request('saveData')!='')
     {
        $user_id =  Auth::user()->id;
        $getTempData = DB::table('temprory_forms')->where('user_id',$user_id)->first();
    /*  echo  $request->get('client_smoker');
      exit;*/
     $data = array(
          'user_id'=>$user_id,
          'client_title' => $request->get('client_title'),
          'partner_title' => $request->get('partner_title'),
          'client_fullname' => $request->get('client_fullname'),
          'partner_fullname' => $request->get('partner_fullname'),
          'client_maiden' => $request->get('client_maiden'),
          'partner_maiden' => $request->get('partner_maiden'),
          'client_marital' => $request->get('client_marital'),
          'partner_marital' => $request->get('partner_marital'),
          'client_dob' => $request->get('client_dob'),
          'partner_dob' => $request->get('partner_dob'),
          'client_smoker' => $request->get('client_smoker'),
          'client_smoker' => $request->get('client_smoker'),
          'partner_smoker' => $request->get('partner_smoker'),
          'partner_smoker' => $request->get('partner_smoker'),
          'client_relationship' => $request->get('client_relationship'),
          'partner_relationship' => $request->get('partner_relationship'),
          'client_dependents' => $request->get('client_dependents'),
          'partner_dependents' => $request->get('partner_dependents'),
          'client_nin' => $request->get('client_nin'),
          'partner_nin' => $request->get('partner_nin'),
          'client_vaild_will' => $request->get('client_vaild_will'),
          'client_vaild_will' => $request->get('client_vaild_will'),
          'partner_vaild_will' => $request->get('partner_vaild_will'),
          'partner_vaild_will' => $request->get('partner_vaild_will'),
          'client_postcode' => $request->get('client_postcode'),
          'partner_postcode' => $request->get('partner_postcode'),
          'client_current_residential' => $request->get('client_current_residential'),
          'partner_current_residential' => $request->get('partner_current_residential'),
          'client_date_moved' => $request->get('client_date_moved'),
          'partner_date_moved' => $request->get('partner_date_moved'),
          'client_previous_address' => $request->get('client_previous_address'),
          'partner_previous_address' => $request->get('partner_previous_address'),
          'client_date_moved_into_previous' => $request->get('client_date_moved_into_previous'),
          'partner_date_moved_into_previous' => $request->get('partner_date_moved_into_previous'),
          'client_previous_residential' => $request->get('client_previous_residential'),
          'partner_previous_residential' => $request->get('partner_previous_residential'),
          'client_telephone' => $request->get('client_telephone'),
          'partner_telephone' => $request->get('partner_telephone'),
          'client_work' => $request->get('client_work'),
          'partner_work' => $request->get('partner_work'),
          'client_mobile' => $request->get('client_mobile'),
          'partner_mobile' => $request->get('partner_mobile'),
          'there_is_no_need_for_it' => $request->get('there_is_no_need_for_it'),
          'any_existing_protection_policy' => $request->get('any_existing_protection_policy'),
          'client_email' => $request->get('client_email'),
          'partner_email' => $request->get('partner_email'),
          'client_category' => $request->get('client_category'),
          'partner_category' => $request->get('partner_category'),
          'client_nationality' => $request->get('client_nationality'),
          'partner_nationality' => $request->get('partner_nationality'),
          'client_moved_to_uk' => $request->get('client_moved_to_uk'),
          'partner_moved_to_uk' => $request->get('partner_moved_to_uk'),
          'client_visa_status' => $request->get('client_visa_status'),
          'partner_visa_status' => $request->get('partner_visa_status'),
          'client_type_of_visa' => $request->get('client_type_of_visa'),
          'partner_type_of_visa' => $request->get('partner_type_of_visa'),
          'term_remaining' => $request->get('term_remaining'),
          'client_emp_details' => $request->get('client_emp_details'),
          'partner_emp_details' => $request->get('partner_emp_details'),
          'client_emp_occupation' => $request->get('client_emp_occupation'),
          'partner_emp_occupation' => $request->get('partner_emp_occupation'),
          'client_emp_status' => $request->get('client_emp_status'),
          'partner_emp_status' => $request->get('partner_emp_status'),
          'client_emp_st_current_employment' => $request->get('client_emp_st_current_employment'),
          'partner_emp_st_current_employment' => $request->get('partner_emp_st_current_employment'),
          'client_emp_company_name' => $request->get('client_emp_company_name'),
          'partner_emp_company_name' => $request->get('partner_emp_company_name'),
          'client_emp_compan_address' => $request->get('client_emp_compan_address'),
          'partner_emp_compan_address' => $request->get('partner_emp_compan_address'),
          'client_emp_previous_employment' => $request->get('client_emp_previous_employment'),
          'partner_emp_previous_employment' => $request->get('partner_emp_previous_employment'),
          'client_emp_salary' => $request->get('client_emp_salary'),
          'partner_emp_salary' => $request->get('partner_emp_salary'),
          'client_emp_guaranteed' => $request->get('client_emp_guaranteed'),
          'partner_emp_guaranteed' => $request->get('partner_emp_guaranteed'),
          'client_emp_bonus' => $request->get('client_emp_bonus'),
          'partner_emp_bonus' => $request->get('partner_emp_bonus'),
          'client_emp_other_income' => $request->get('client_emp_other_income'),
          'partner_emp_other_income' => $request->get('partner_emp_other_income'),
          'client_emp_net_monthly_income' => $request->get('client_emp_net_monthly_income'),
          'partner_emp_net_monthly_income' => $request->get('partner_emp_net_monthly_income'),
          'client_emp_budget' => $request->get('client_emp_budget'),
          'partner_emp_budget' => $request->get('partner_emp_budget'),
          'client_emp_retirement' => $request->get('client_emp_retirement'),
          'partner_emp_retirement' => $request->get('partner_emp_retirement'),
          'client_emp_retirement' => $request->get('client_emp_retirement'),
          'partner_emp_retirement' => $request->get('partner_emp_retirement'),
          'client_bank_name' => $request->get('client_bank_name'),
          'partner_bank_name' => $request->get('partner_bank_name'),
          'client_bank_acc_number' => $request->get('client_bank_acc_number'),
          'partner_bank_acc_number' => $request->get('partner_bank_acc_number'),
          'client_bank_sort_code' => $request->get('client_bank_sort_code'),
          'partner_bank_sort_code' => $request->get('partner_bank_sort_code'),
          'client_bank_account_holder_name' => $request->get('client_bank_account_holder_name'),
          'partner_bank_account_holder_name' => $request->get('partner_bank_account_holder_name'),
          'client_financial_mortgage' => $request->get('client_financial_mortgage'),
          'partner_financial_mortgage' => $request->get('partner_financial_mortgage'),
          'client_financial_ccj' => $request->get('client_financial_ccj'),
          'partner_financial_ccj' => $request->get('partner_financial_ccj'),
          'client_financial_bankrupt' => $request->get('client_financial_bankrupt'),
          'partner_financial_bankrupt' => $request->get('partner_financial_bankrupt'),
          'client_financial_previous_mortgage' => $request->get('client_financial_previous_mortgage'),
          'partner_financial_previous_mortgage' => $request->get('partner_financial_previous_mortgage'),
          'type_of_blemish1' => $request->get('type_of_blemish1'),
          'date_registered1' => $request->get('date_registered1'),
          'amount1' => $request->get('amount1'),
          'satisfied1' => $request->get('satisfied1'),
          'date_satisfied1' => $request->get('date_satisfied1'),
          'type_of_blemish2' => $request->get('type_of_blemish2'),
          'date_registered2' => $request->get('date_registered2'),
          'amount2' => $request->get('amount2'),
          'satisfied2' => $request->get('satisfied2'),
          'date_satisfied2' => $request->get('date_satisfied2'),
          'app_1_2_1' => $request->get('app_1_2_1'),
          'credit_card_loan_1' => $request->get('credit_card_loan_1'),
          'lender_1' => $request->get('lender_1'),
          'outstanding_balance_1' => $request->get('outstanding_balance_1'),
          'monthly_payment_1' => $request->get('monthly_payment_1'),
          'interest_rate_1' => $request->get('interest_rate_1'),
          'to_be_repaid_on_completion_1' => $request->get('to_be_repaid_on_completion_1'),
          'with_this_mortgage_1' => $request->get('with_this_mortgage_1'),
          'with_this_mortgage_1' => $request->get('with_this_mortgage_1'),
          'app_1_2_2' => $request->get('app_1_2_2'),
          'credit_card_loan_2' => $request->get('credit_card_loan_2'),
          'lender_2' => $request->get('lender_2'),
          'outstanding_balance_2' => $request->get('outstanding_balance_2'),
          'monthly_payment_2' => $request->get('monthly_payment_2'),
          'interest_rate_2' => $request->get('interest_rate_2'),
          'to_be_repaid_on_completion_2' => $request->get('to_be_repaid_on_completion_2'),
          'with_this_mortgage_2' => $request->get('with_this_mortgage_2'),
          'with_this_mortgage_2' => $request->get('with_this_mortgage_2'),
          'app_1_2_3' => $request->get('app_1_2_3'),
          'credit_card_loan_3' => $request->get('credit_card_loan_3'),
          'lender_3' => $request->get('lender_3'),
          'outstanding_balance_3' => $request->get('outstanding_balance_3'),
          'monthly_payment_3' => $request->get('monthly_payment_3'),
          'interest_rate_3' => $request->get('interest_rate_3'),
          'to_be_repaid_on_completion_3' => $request->get('to_be_repaid_on_completion_3'),
          'with_this_mortgage_3' => $request->get('with_this_mortgage_3'),
          'with_this_mortgage_3' => $request->get('with_this_mortgage_3'),
          'app_1_2_4' => $request->get('app_1_2_4'),
          'credit_card_loan_4' => $request->get('credit_card_loan_4'),
          'lender_4' => $request->get('lender_4'),
          'outstanding_balance_4' => $request->get('outstanding_balance_4'),
          'monthly_payment_4' => $request->get('monthly_payment_4'),
          'interest_rate_4' => $request->get('interest_rate_4'),
          'to_be_repaid_on_completion_4' => $request->get('to_be_repaid_on_completion_4'),
          'with_this_mortgage_4' => $request->get('with_this_mortgage_4'),
          'with_this_mortgage_4' => $request->get('with_this_mortgage_4'),
          'client_cmd' => $request->get('client_cmd'),
          'partner_cmd' => $request->get('partner_cmd'),
          'client_lender' => $request->get('client_lender'),
          'partner_lender' => $request->get('partner_lender'),
          'client_account_number' => $request->get('client_account_number'),
          'partner_account_number' => $request->get('partner_account_number'),
          'client_value_of_property' => $request->get('client_value_of_property'),
          'partner_value_of_property' => $request->get('partner_value_of_property'),
          'client_amount_of_loan_outstanding' => $request->get('client_amount_of_loan_outstanding'),
          'partner_amount_of_loan_outstanding' => $request->get('partner_amount_of_loan_outstanding'),
          'client_original_purchase_price' => $request->get('client_original_purchase_price'),
          'partner_original_purchase_price' => $request->get('partner_original_purchase_price'),
          'client_date_originally_purchased' => $request->get('client_date_originally_purchased'),
          'partner_date_originally_purchased' => $request->get('partner_date_originally_purchased'),
          'client_monthly_payment' => $request->get('client_monthly_payment'),
          'partner_monthly_payment' => $request->get('partner_monthly_payment'),
          'client_years_remaining' => $request->get('client_years_remaining'),
          'partner_years_remaining' => $request->get('partner_years_remaining'),
          'client_repayment_method' => $request->get('client_repayment_method'),
          'partner_repayment_method' => $request->get('partner_repayment_method'),
          'client_interest_rate' => $request->get('client_interest_rate'),
          'partner_interest_rate' => $request->get('partner_interest_rate'),
          'client_expected_rental_income' => $request->get('client_expected_rental_income'),
          'partner_expected_rental_income' => $request->get('partner_expected_rental_income'),
          'client_penalties_to_transfer_your_mortgage' => $request->get('client_penalties_to_transfer_your_mortgage'),
          'partner_penalties_to_transfer_your_mortgage' => $request->get('partner_penalties_to_transfer_your_mortgage'),
          'client_other_properties_owned' => $request->get('client_other_properties_owned'),
          'partner_other_properties_owned' => $request->get('partner_other_properties_owned'),
          'mortgaged_and_postcode' => $request->get('mortgaged_and_postcode'),
          'wish_to_borrow' => $request->get('wish_to_borrow'),
          'current_value' => $request->get('current_value'),
          'source_of_funds' => $request->get('source_of_funds'),
          'term_of_mortgage' => $request->get('term_of_mortgage'),
          'preferred_product' => $request->get('preferred_product'),
          'tie_in_period' => $request->get('tie_in_period'),
          'payment_method' => $request->get('payment_method'),
          'state_repayment_vehicle' => $request->get('state_repayment_vehicle'),
          'house_bungalow_flat' => $request->get('house_bungalow_flat'),
          'property_type_freehold_leasehold' => $request->get('property_type_freehold_leasehold'),
          'what_floor' => $request->get('what_floor'),
          'how_many_flats' => $request->get('how_many_flats'),
          'year_property_built' => $request->get('year_property_built'),
          'this_property_ex_local' => $request->get('this_property_ex_local'),
          'no_of_bedrooms' => $request->get('no_of_bedrooms'),
          'no_of_reception_rooms' => $request->get('no_of_reception_rooms'),
          'rental_income' => $request->get('rental_income'),
          'garage' => $request->get('garage'),
          'near_or_above_commercial_premises' => $request->get('near_or_above_commercial_premises'),
          'commercial_premises' => $request->get('commercial_premises'),
          'solicitors_name_of_firm' => $request->get('solicitors_name_of_firm'),
          'accountants_details_name_of_firm' => $request->get('accountants_details_name_of_firm'),
          'solicitors_address' => $request->get('solicitors_address'),
          'accountants_details_address' => $request->get('accountants_details_address'),
          'solicitors_tel_no' => $request->get('solicitors_tel_no'),
          'accountants_details_tel_no' => $request->get('accountants_details_tel_no'),
          'solicitors_name_of_contact' => $request->get('solicitors_name_of_contact'),
          'accountants_details_name_of_contact' => $request->get('accountants_details_name_of_contact'),
          'selling_agents_name_of_firm1' => $request->get('selling_agents_name_of_firm1'),
          'selling_agents_address1' => $request->get('selling_agents_address1'),
          'selling_agents_tel_no1' => $request->get('selling_agents_tel_no1'),
          'selling_agents_name_of_firm2' => $request->get('selling_agents_name_of_firm2'),
          'selling_agents_address2' => $request->get('selling_agents_address2'),
          'selling_agents_tel_no2' => $request->get('selling_agents_tel_no2'),
          'selling_agents_name_of_firm3' => $request->get('selling_agents_name_of_firm3'),
          'selling_agents_address3' => $request->get('selling_agents_address3'),
          'selling_agents_tel_no3' => $request->get('selling_agents_tel_no3'),
          'council_tax' => $request->get('council_tax'),
          'secured_loans' => $request->get('secured_loans'),
          'electric' => $request->get('electric'),
          'credit_cards_total_p_m' => $request->get('credit_cards_total_p_m'),
          'gas' => $request->get('gas'),
          'personal_loans_total_p_m' => $request->get('personal_loans_total_p_m'),
          'water' => $request->get('water'),
          'hire_purchases_total_p_m' => $request->get('hire_purchases_total_p_m'),
          'tv_internet' => $request->get('tv_internet'),
          'overdrafts' => $request->get('overdrafts'),
          'telephone_mobiles' => $request->get('telephone_mobiles'),
          'food_total_p_m' => $request->get('food_total_p_m'),
          'buildings_amp_contents' => $request->get('buildings_amp_contents'),
          'social_total_p_m' => $request->get('social_total_p_m'),
          'life_amp_critical_illness' => $request->get('life_amp_critical_illness'),
          'gym_health_club' => $request->get('gym_health_club'),
          'income_protection' => $request->get('income_protection'),
          'maintenance_payments' => $request->get('maintenance_payments'),
          'childcare' => $request->get('childcare'),
          'mortgage_rent_to_continue' => $request->get('mortgage_rent_to_continue'),
          'finance' => $request->get('finance'),
          'other' => $request->get('other'),
          'insurance1' => $request->get('insurance1'),
          'insurance2' => $request->get('insurance2'),
          'insurance3' => $request->get('insurance3'),
          'petrol' => $request->get('petrol'),
          'petrol_total' => $request->get('petrol_total'),
          'other_travel_costs1' => $request->get('other_travel_costs1'),
          'other_travel_costs2' => $request->get('other_travel_costs2'),
          'other_travel_costs3' => $request->get('other_travel_costs3'),
          'do_you_have_any_protection' => $request->get('do_you_have_any_protection'),
          'do_you_have_any_protection' => $request->get('do_you_have_any_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'app_1_2' => $request->get('app_1_2'),
          'life_cover_asu' => $request->get('life_cover_asu'),
          'life_cover_asu' => $request->get('life_cover_asu'),
          'critical_illness' => $request->get('critical_illness'),
          'critical_illness' => $request->get('critical_illness'),
          'sum_assured' => $request->get('sum_assured'),
          'monthly_payment' => $request->get('monthly_payment'),
          'company' => $request->get('company'),
          'remaining_term' => $request->get('remaining_term'),
          'policy_extra_field' => $request->get('policy_extra_field'),
          'app_1_2_2' => $request->get('app_1_2_2'),
          'life_cover_asu_2' => $request->get('life_cover_asu_2'),
          'life_cover_asu_2' => $request->get('life_cover_asu_2'),
          'critical_illness_2' => $request->get('critical_illness_2'),
          'critical_illness_2' => $request->get('critical_illness_2'),
          'sum_assured_2' => $request->get('sum_assured_2'),
          'monthly_payment_2' => $request->get('monthly_payment_2'),
          'company_2' => $request->get('company_2'),
          'remaining_term_2' => $request->get('remaining_term_2'),
          'policy_extra_field_2' => $request->get('policy_extra_field_2'),
          'app_1_2_3' => $request->get('app_1_2_3'),
          'life_cover_asu_3' => $request->get('life_cover_asu_3'),
          'life_cover_asu_3' => $request->get('life_cover_asu_3'),
          'critical_illness_3' => $request->get('critical_illness_3'),
          'critical_illness_3' => $request->get('critical_illness_3'),
          'sum_assured_3' => $request->get('sum_assured_3'),
          'monthly_payment_3' => $request->get('monthly_payment_3'),
          'company_3' => $request->get('company_3'),
          'remaining_term_3' => $request->get('remaining_term_3'),
          'policy_extra_field_3' => $request->get('policy_extra_field_3'),
          'new_requirementsapp_1_2' => $request->get('new_requirementsapp_1_2'),
          'new_requirementslife_cover_asu' => $request->get('new_requirementslife_cover_asu'),
          'new_requirementslife_cover_asu' => $request->get('new_requirementslife_cover_asu'),
          'new_requirementscritical_illness' => $request->get('new_requirementscritical_illness'),
          'new_requirementscritical_illness' => $request->get('new_requirementscritical_illness'),
          'new_requirementssum_assured' => $request->get('new_requirementssum_assured'),
          'new_requirementsmonthly_payment' => $request->get('new_requirementsmonthly_payment'),
          'new_requirementscompany' => $request->get('new_requirementscompany'),
          'new_requirementsremaining_term' => $request->get('new_requirementsremaining_term'),
          'new_requirementspolicy_extra_field' => $request->get('new_requirementspolicy_extra_field'),
          'new_requirementsapp_1_2_2' => $request->get('new_requirementsapp_1_2_2'),
          'new_requirementslife_cover_asu_2' => $request->get('new_requirementslife_cover_asu_2'),
          'new_requirementslife_cover_asu_2' => $request->get('new_requirementslife_cover_asu_2'),
          'new_requirementscritical_illness_2' => $request->get('new_requirementscritical_illness_2'),
          'new_requirementscritical_illness_2' => $request->get('new_requirementscritical_illness_2'),
          'new_requirementssum_assured_2' => $request->get('new_requirementssum_assured_2'),
          'new_requirementsmonthly_payment_2' => $request->get('new_requirementsmonthly_payment_2'),
          'new_requirementscompany_2' => $request->get('new_requirementscompany_2'),
          'new_requirementsremaining_term_2' => $request->get('new_requirementsremaining_term_2'),
          'new_requirementspolicy_extra_field_2' => $request->get('new_requirementspolicy_extra_field_2'),
          'new_requirementsapp_1_2_3' => $request->get('new_requirementsapp_1_2_3'),
          'new_requirementslife_cover_asu_3' => $request->get('new_requirementslife_cover_asu_3'),
          'new_requirementslife_cover_asu_3' => $request->get('new_requirementslife_cover_asu_3'),
          'new_requirementscritical_illness_3' => $request->get('new_requirementscritical_illness_3'),
          'new_requirementscritical_illness_3' => $request->get('new_requirementscritical_illness_3'),
          'new_requirementssum_assured_3' => $request->get('new_requirementssum_assured_3'),
          'new_requirementsmonthly_payment_3' => $request->get('new_requirementsmonthly_payment_3'),
          'new_requirementscompany_3' => $request->get('new_requirementscompany_3'),
          'new_requirementsremaining_term_3' => $request->get('new_requirementsremaining_term_3'),
          'new_requirementspolicy_extra_field_3' => $request->get('new_requirementspolicy_extra_field_3'),
          'do_you_have_building_and_contents_insurance' => $request->get('do_you_have_building_and_contents_insurance'),
          'do_you_have_building_and_contents_insurance' => $request->get('do_you_have_building_and_contents_insurance'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'claim_app_1_2' => $request->get('claim_app_1_2'),
          'claim_company' => $request->get('claim_company'),
          'claim_buildings' => $request->get('claim_buildings'),
          'claim_buildings' => $request->get('claim_buildings'),
          'claim_contents' => $request->get('claim_contents'),
          'claim_contents_cover' => $request->get('claim_contents_cover'),
          'claim_monthly' => $request->get('claim_monthly'),
          'claim_any_claims_in_last_5_years' => $request->get('claim_any_claims_in_last_5_years'),
          'claim_app_1_2_2' => $request->get('claim_app_1_2_2'),
          'claim_company_2' => $request->get('claim_company_2'),
          'claim_buildings_2' => $request->get('claim_buildings_2'),
          'claim_buildings_2' => $request->get('claim_buildings_2'),
          'claim_contents_2' => $request->get('claim_contents_2'),
          'claim_contents_cover_2' => $request->get('claim_contents_cover_2'),
          'claim_monthly_2' => $request->get('claim_monthly_2'),
          'claim_any_claims_in_last_5_years_2' => $request->get('claim_any_claims_in_last_5_years_2')
        );
          if(empty($getTempData))
          {
             $savedata = DB::table('temprory_forms')->insert($data);
             return redirect('ff');
          }
          else
          {
             $savedata = DB::table('temprory_forms')->where('user_id',$user_id)->update($data);
              return redirect('ff');
          }
         
     }
     else
     {
          $pdf = PDF::loadView('pdf.ff',  [
          'client_title' => $request->get('client_title'),
          'partner_title' => $request->get('partner_title'),
          'client_fullname' => $request->get('client_fullname'),
          'partner_fullname' => $request->get('partner_fullname'),
          'client_maiden' => $request->get('client_maiden'),
          'partner_maiden' => $request->get('partner_maiden'),
          'client_marital' => $request->get('client_marital'),
          'partner_marital' => $request->get('partner_marital'),
          'client_dob' => $request->get('client_dob'),
          'partner_dob' => $request->get('partner_dob'),
          'client_smoker' => $request->get('client_smoker'),
          'client_smoker' => $request->get('client_smoker'),
          'partner_smoker' => $request->get('partner_smoker'),
          'partner_smoker' => $request->get('partner_smoker'),
          'client_relationship' => $request->get('client_relationship'),
          'partner_relationship' => $request->get('partner_relationship'),
          'client_dependents' => $request->get('client_dependents'),
          'partner_dependents' => $request->get('partner_dependents'),
          'there_is_no_need_for_it' => $request->get('there_is_no_need_for_it'),
          'any_existing_protection_policy' => $request->get('any_existing_protection_policy'),
          'client_nin' => $request->get('client_nin'),
          'partner_nin' => $request->get('partner_nin'),
          'client_vaild_will' => $request->get('client_vaild_will'),
          'client_vaild_will' => $request->get('client_vaild_will'),
          'partner_vaild_will' => $request->get('partner_vaild_will'),
          'partner_vaild_will' => $request->get('partner_vaild_will'),
          'client_postcode' => $request->get('client_postcode'),
          'partner_postcode' => $request->get('partner_postcode'),
          'client_current_residential' => $request->get('client_current_residential'),
          'partner_current_residential' => $request->get('partner_current_residential'),
          'client_date_moved' => $request->get('client_date_moved'),
          'partner_date_moved' => $request->get('partner_date_moved'),
          'client_previous_address' => $request->get('client_previous_address'),
          'partner_previous_address' => $request->get('partner_previous_address'),
          'client_date_moved_into_previous' => $request->get('client_date_moved_into_previous'),
          'partner_date_moved_into_previous' => $request->get('partner_date_moved_into_previous'),
          'client_previous_residential' => $request->get('client_previous_residential'),
          'partner_previous_residential' => $request->get('partner_previous_residential'),
          'client_telephone' => $request->get('client_telephone'),
          'partner_telephone' => $request->get('partner_telephone'),
          'client_work' => $request->get('client_work'),
          'partner_work' => $request->get('partner_work'),
          'client_mobile' => $request->get('client_mobile'),
          'partner_mobile' => $request->get('partner_mobile'),
          'client_email' => $request->get('client_email'),
          'partner_email' => $request->get('partner_email'),
          'client_category' => $request->get('client_category'),
          'partner_category' => $request->get('partner_category'),
          'client_nationality' => $request->get('client_nationality'),
          'partner_nationality' => $request->get('partner_nationality'),
          'client_moved_to_uk' => $request->get('client_moved_to_uk'),
          'partner_moved_to_uk' => $request->get('partner_moved_to_uk'),
          'client_visa_status' => $request->get('client_visa_status'),
          'partner_visa_status' => $request->get('partner_visa_status'),
          'client_type_of_visa' => $request->get('client_type_of_visa'),
          'partner_type_of_visa' => $request->get('partner_type_of_visa'),
          'term_remaining' => $request->get('term_remaining'),
          'client_emp_details' => $request->get('client_emp_details'),
          'partner_emp_details' => $request->get('partner_emp_details'),
          'client_emp_occupation' => $request->get('client_emp_occupation'),
          'partner_emp_occupation' => $request->get('partner_emp_occupation'),
          'client_emp_status' => $request->get('client_emp_status'),
          'partner_emp_status' => $request->get('partner_emp_status'),
          'client_emp_st_current_employment' => $request->get('client_emp_st_current_employment'),
          'partner_emp_st_current_employment' => $request->get('partner_emp_st_current_employment'),
          'client_emp_company_name' => $request->get('client_emp_company_name'),
          'partner_emp_company_name' => $request->get('partner_emp_company_name'),
          'client_emp_compan_address' => $request->get('client_emp_compan_address'),
          'partner_emp_compan_address' => $request->get('partner_emp_compan_address'),
          'client_emp_previous_employment' => $request->get('client_emp_previous_employment'),
          'partner_emp_previous_employment' => $request->get('partner_emp_previous_employment'),
          'client_emp_salary' => $request->get('client_emp_salary'),
          'partner_emp_salary' => $request->get('partner_emp_salary'),
          'client_emp_guaranteed' => $request->get('client_emp_guaranteed'),
          'partner_emp_guaranteed' => $request->get('partner_emp_guaranteed'),
          'client_emp_bonus' => $request->get('client_emp_bonus'),
          'partner_emp_bonus' => $request->get('partner_emp_bonus'),
          'client_emp_other_income' => $request->get('client_emp_other_income'),
          'partner_emp_other_income' => $request->get('partner_emp_other_income'),
          'client_emp_net_monthly_income' => $request->get('client_emp_net_monthly_income'),
          'partner_emp_net_monthly_income' => $request->get('partner_emp_net_monthly_income'),
          'client_emp_budget' => $request->get('client_emp_budget'),
          'partner_emp_budget' => $request->get('partner_emp_budget'),
          'client_emp_retirement' => $request->get('client_emp_retirement'),
          'partner_emp_retirement' => $request->get('partner_emp_retirement'),
          'client_emp_retirement' => $request->get('client_emp_retirement'),
          'partner_emp_retirement' => $request->get('partner_emp_retirement'),
          'client_bank_name' => $request->get('client_bank_name'),
          'partner_bank_name' => $request->get('partner_bank_name'),
          'client_bank_acc_number' => $request->get('client_bank_acc_number'),
          'partner_bank_acc_number' => $request->get('partner_bank_acc_number'),
          'client_bank_sort_code' => $request->get('client_bank_sort_code'),
          'partner_bank_sort_code' => $request->get('partner_bank_sort_code'),
          'client_bank_account_holder_name' => $request->get('client_bank_account_holder_name'),
          'partner_bank_account_holder_name' => $request->get('partner_bank_account_holder_name'),
          'client_financial_mortgage' => $request->get('client_financial_mortgage'),
          'partner_financial_mortgage' => $request->get('partner_financial_mortgage'),
          'client_financial_ccj' => $request->get('client_financial_ccj'),
          'partner_financial_ccj' => $request->get('partner_financial_ccj'),
          'client_financial_bankrupt' => $request->get('client_financial_bankrupt'),
          'partner_financial_bankrupt' => $request->get('partner_financial_bankrupt'),
          'client_financial_previous_mortgage' => $request->get('client_financial_previous_mortgage'),
          'partner_financial_previous_mortgage' => $request->get('partner_financial_previous_mortgage'),
          'type_of_blemish1' => $request->get('type_of_blemish1'),
          'date_registered1' => $request->get('date_registered1'),
          'amount1' => $request->get('amount1'),
          'satisfied1' => $request->get('satisfied1'),
          'date_satisfied1' => $request->get('date_satisfied1'),
          'type_of_blemish2' => $request->get('type_of_blemish2'),
          'date_registered2' => $request->get('date_registered2'),
          'amount2' => $request->get('amount2'),
          'satisfied2' => $request->get('satisfied2'),
          'date_satisfied2' => $request->get('date_satisfied2'),
          'app_1_2_1' => $request->get('app_1_2_1'),
          'credit_card_loan_1' => $request->get('credit_card_loan_1'),
          'lender_1' => $request->get('lender_1'),
          'outstanding_balance_1' => $request->get('outstanding_balance_1'),
          'monthly_payment_1' => $request->get('monthly_payment_1'),
          'interest_rate_1' => $request->get('interest_rate_1'),
          'to_be_repaid_on_completion_1' => $request->get('to_be_repaid_on_completion_1'),
          'with_this_mortgage_1' => $request->get('with_this_mortgage_1'),
          'with_this_mortgage_1' => $request->get('with_this_mortgage_1'),
          'app_1_2_2' => $request->get('app_1_2_2'),
          'credit_card_loan_2' => $request->get('credit_card_loan_2'),
          'lender_2' => $request->get('lender_2'),
          'outstanding_balance_2' => $request->get('outstanding_balance_2'),
          'monthly_payment_2' => $request->get('monthly_payment_2'),
          'interest_rate_2' => $request->get('interest_rate_2'),
          'to_be_repaid_on_completion_2' => $request->get('to_be_repaid_on_completion_2'),
          'with_this_mortgage_2' => $request->get('with_this_mortgage_2'),
          'with_this_mortgage_2' => $request->get('with_this_mortgage_2'),
          'app_1_2_3' => $request->get('app_1_2_3'),
          'credit_card_loan_3' => $request->get('credit_card_loan_3'),
          'lender_3' => $request->get('lender_3'),
          'outstanding_balance_3' => $request->get('outstanding_balance_3'),
          'monthly_payment_3' => $request->get('monthly_payment_3'),
          'interest_rate_3' => $request->get('interest_rate_3'),
          'to_be_repaid_on_completion_3' => $request->get('to_be_repaid_on_completion_3'),
          'with_this_mortgage_3' => $request->get('with_this_mortgage_3'),
          'with_this_mortgage_3' => $request->get('with_this_mortgage_3'),
          'app_1_2_4' => $request->get('app_1_2_4'),
          'credit_card_loan_4' => $request->get('credit_card_loan_4'),
          'lender_4' => $request->get('lender_4'),
          'outstanding_balance_4' => $request->get('outstanding_balance_4'),
          'monthly_payment_4' => $request->get('monthly_payment_4'),
          'interest_rate_4' => $request->get('interest_rate_4'),
          'to_be_repaid_on_completion_4' => $request->get('to_be_repaid_on_completion_4'),
          'with_this_mortgage_4' => $request->get('with_this_mortgage_4'),
          'with_this_mortgage_4' => $request->get('with_this_mortgage_4'),
          'client_cmd' => $request->get('client_cmd'),
          'partner_cmd' => $request->get('partner_cmd'),
          'client_lender' => $request->get('client_lender'),
          'partner_lender' => $request->get('partner_lender'),
          'client_account_number' => $request->get('client_account_number'),
          'partner_account_number' => $request->get('partner_account_number'),
          'client_value_of_property' => $request->get('client_value_of_property'),
          'partner_value_of_property' => $request->get('partner_value_of_property'),
          'client_amount_of_loan_outstanding' => $request->get('client_amount_of_loan_outstanding'),
          'partner_amount_of_loan_outstanding' => $request->get('partner_amount_of_loan_outstanding'),
          'client_original_purchase_price' => $request->get('client_original_purchase_price'),
          'partner_original_purchase_price' => $request->get('partner_original_purchase_price'),
          'client_date_originally_purchased' => $request->get('client_date_originally_purchased'),
          'partner_date_originally_purchased' => $request->get('partner_date_originally_purchased'),
          'client_monthly_payment' => $request->get('client_monthly_payment'),
          'partner_monthly_payment' => $request->get('partner_monthly_payment'),
          'client_years_remaining' => $request->get('client_years_remaining'),
          'partner_years_remaining' => $request->get('partner_years_remaining'),
          'client_repayment_method' => $request->get('client_repayment_method'),
          'partner_repayment_method' => $request->get('partner_repayment_method'),
          'client_interest_rate' => $request->get('client_interest_rate'),
          'partner_interest_rate' => $request->get('partner_interest_rate'),
          'client_expected_rental_income' => $request->get('client_expected_rental_income'),
          'partner_expected_rental_income' => $request->get('partner_expected_rental_income'),
          'client_penalties_to_transfer_your_mortgage' => $request->get('client_penalties_to_transfer_your_mortgage'),
          'partner_penalties_to_transfer_your_mortgage' => $request->get('partner_penalties_to_transfer_your_mortgage'),
          'client_other_properties_owned' => $request->get('client_other_properties_owned'),
          'partner_other_properties_owned' => $request->get('partner_other_properties_owned'),
          'mortgaged_and_postcode' => $request->get('mortgaged_and_postcode'),
          'wish_to_borrow' => $request->get('wish_to_borrow'),
          'current_value' => $request->get('current_value'),
          'source_of_funds' => $request->get('source_of_funds'),
          'term_of_mortgage' => $request->get('term_of_mortgage'),
          'preferred_product' => $request->get('preferred_product'),
          'tie_in_period' => $request->get('tie_in_period'),
          'payment_method' => $request->get('payment_method'),
          'state_repayment_vehicle' => $request->get('state_repayment_vehicle'),
          'house_bungalow_flat' => $request->get('house_bungalow_flat'),
          'property_type_freehold_leasehold' => $request->get('property_type_freehold_leasehold'),
          'what_floor' => $request->get('what_floor'),
          'how_many_flats' => $request->get('how_many_flats'),
          'year_property_built' => $request->get('year_property_built'),
          'this_property_ex_local' => $request->get('this_property_ex_local'),
          'no_of_bedrooms' => $request->get('no_of_bedrooms'),
          'no_of_reception_rooms' => $request->get('no_of_reception_rooms'),
          'rental_income' => $request->get('rental_income'),
          'garage' => $request->get('garage'),
          'near_or_above_commercial_premises' => $request->get('near_or_above_commercial_premises'),
          'commercial_premises' => $request->get('commercial_premises'),
          'solicitors_name_of_firm' => $request->get('solicitors_name_of_firm'),
          'accountants_details_name_of_firm' => $request->get('accountants_details_name_of_firm'),
          'solicitors_address' => $request->get('solicitors_address'),
          'accountants_details_address' => $request->get('accountants_details_address'),
          'solicitors_tel_no' => $request->get('solicitors_tel_no'),
          'accountants_details_tel_no' => $request->get('accountants_details_tel_no'),
          'solicitors_name_of_contact' => $request->get('solicitors_name_of_contact'),
          'accountants_details_name_of_contact' => $request->get('accountants_details_name_of_contact'),
          'selling_agents_name_of_firm1' => $request->get('selling_agents_name_of_firm1'),
          'selling_agents_address1' => $request->get('selling_agents_address1'),
          'selling_agents_tel_no1' => $request->get('selling_agents_tel_no1'),
          'selling_agents_name_of_firm2' => $request->get('selling_agents_name_of_firm2'),
          'selling_agents_address2' => $request->get('selling_agents_address2'),
          'selling_agents_tel_no2' => $request->get('selling_agents_tel_no2'),
          'selling_agents_name_of_firm3' => $request->get('selling_agents_name_of_firm3'),
          'selling_agents_address3' => $request->get('selling_agents_address3'),
          'selling_agents_tel_no3' => $request->get('selling_agents_tel_no3'),
          'council_tax' => $request->get('council_tax'),
          'secured_loans' => $request->get('secured_loans'),
          'electric' => $request->get('electric'),
          'credit_cards_total_p_m' => $request->get('credit_cards_total_p_m'),
          'gas' => $request->get('gas'),
          'personal_loans_total_p_m' => $request->get('personal_loans_total_p_m'),
          'water' => $request->get('water'),
          'hire_purchases_total_p_m' => $request->get('hire_purchases_total_p_m'),
          'tv_internet' => $request->get('tv_internet'),
          'overdrafts' => $request->get('overdrafts'),
          'telephone_mobiles' => $request->get('telephone_mobiles'),
          'food_total_p_m' => $request->get('food_total_p_m'),
          'buildings_amp_contents' => $request->get('buildings_amp_contents'),
          'social_total_p_m' => $request->get('social_total_p_m'),
          'life_amp_critical_illness' => $request->get('life_amp_critical_illness'),
          'gym_health_club' => $request->get('gym_health_club'),
          'income_protection' => $request->get('income_protection'),
          'maintenance_payments' => $request->get('maintenance_payments'),
          'childcare' => $request->get('childcare'),
          'mortgage_rent_to_continue' => $request->get('mortgage_rent_to_continue'),
          'finance' => $request->get('finance'),
          'other' => $request->get('other'),
          'insurance1' => $request->get('insurance1'),
          'insurance2' => $request->get('insurance2'),
          'insurance3' => $request->get('insurance3'),
          'petrol' => $request->get('petrol'),
          'petrol_total' => $request->get('petrol_total'),
          'other_travel_costs1' => $request->get('other_travel_costs1'),
          'other_travel_costs2' => $request->get('other_travel_costs2'),
          'other_travel_costs3' => $request->get('other_travel_costs3'),
          'do_you_have_any_protection' => $request->get('do_you_have_any_protection'),
          'do_you_have_any_protection' => $request->get('do_you_have_any_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'app_1_2' => $request->get('app_1_2'),
          'life_cover_asu' => $request->get('life_cover_asu'),
          'life_cover_asu' => $request->get('life_cover_asu'),
          'critical_illness' => $request->get('critical_illness'),
          'critical_illness' => $request->get('critical_illness'),
          'sum_assured' => $request->get('sum_assured'),
          'monthly_payment' => $request->get('monthly_payment'),
          'company' => $request->get('company'),
          'remaining_term' => $request->get('remaining_term'),
          'policy_extra_field' => $request->get('policy_extra_field'),
          'app_1_2_2' => $request->get('app_1_2_2'),
          'life_cover_asu_2' => $request->get('life_cover_asu_2'),
          'life_cover_asu_2' => $request->get('life_cover_asu_2'),
          'critical_illness_2' => $request->get('critical_illness_2'),
          'critical_illness_2' => $request->get('critical_illness_2'),
          'sum_assured_2' => $request->get('sum_assured_2'),
          'monthly_payment_2' => $request->get('monthly_payment_2'),
          'company_2' => $request->get('company_2'),
          'remaining_term_2' => $request->get('remaining_term_2'),
          'policy_extra_field_2' => $request->get('policy_extra_field_2'),
          'app_1_2_3' => $request->get('app_1_2_3'),
          'life_cover_asu_3' => $request->get('life_cover_asu_3'),
          'life_cover_asu_3' => $request->get('life_cover_asu_3'),
          'critical_illness_3' => $request->get('critical_illness_3'),
          'critical_illness_3' => $request->get('critical_illness_3'),
          'sum_assured_3' => $request->get('sum_assured_3'),
          'monthly_payment_3' => $request->get('monthly_payment_3'),
          'company_3' => $request->get('company_3'),
          'remaining_term_3' => $request->get('remaining_term_3'),
          'policy_extra_field_3' => $request->get('policy_extra_field_3'),
          'new_requirementsapp_1_2' => $request->get('new_requirementsapp_1_2'),
          'new_requirementslife_cover_asu' => $request->get('new_requirementslife_cover_asu'),
          'new_requirementslife_cover_asu' => $request->get('new_requirementslife_cover_asu'),
          'new_requirementscritical_illness' => $request->get('new_requirementscritical_illness'),
          'new_requirementscritical_illness' => $request->get('new_requirementscritical_illness'),
          'new_requirementssum_assured' => $request->get('new_requirementssum_assured'),
          'new_requirementsmonthly_payment' => $request->get('new_requirementsmonthly_payment'),
          'new_requirementscompany' => $request->get('new_requirementscompany'),
          'new_requirementsremaining_term' => $request->get('new_requirementsremaining_term'),
          'new_requirementspolicy_extra_field' => $request->get('new_requirementspolicy_extra_field'),
          'new_requirementsapp_1_2_2' => $request->get('new_requirementsapp_1_2_2'),
          'new_requirementslife_cover_asu_2' => $request->get('new_requirementslife_cover_asu_2'),
          'new_requirementslife_cover_asu_2' => $request->get('new_requirementslife_cover_asu_2'),
          'new_requirementscritical_illness_2' => $request->get('new_requirementscritical_illness_2'),
          'new_requirementscritical_illness_2' => $request->get('new_requirementscritical_illness_2'),
          'new_requirementssum_assured_2' => $request->get('new_requirementssum_assured_2'),
          'new_requirementsmonthly_payment_2' => $request->get('new_requirementsmonthly_payment_2'),
          'new_requirementscompany_2' => $request->get('new_requirementscompany_2'),
          'new_requirementsremaining_term_2' => $request->get('new_requirementsremaining_term_2'),
          'new_requirementspolicy_extra_field_2' => $request->get('new_requirementspolicy_extra_field_2'),
          'new_requirementsapp_1_2_3' => $request->get('new_requirementsapp_1_2_3'),
          'new_requirementslife_cover_asu_3' => $request->get('new_requirementslife_cover_asu_3'),
          'new_requirementslife_cover_asu_3' => $request->get('new_requirementslife_cover_asu_3'),
          'new_requirementscritical_illness_3' => $request->get('new_requirementscritical_illness_3'),
          'new_requirementscritical_illness_3' => $request->get('new_requirementscritical_illness_3'),
          'new_requirementssum_assured_3' => $request->get('new_requirementssum_assured_3'),
          'new_requirementsmonthly_payment_3' => $request->get('new_requirementsmonthly_payment_3'),
          'new_requirementscompany_3' => $request->get('new_requirementscompany_3'),
          'new_requirementsremaining_term_3' => $request->get('new_requirementsremaining_term_3'),
          'new_requirementspolicy_extra_field_3' => $request->get('new_requirementspolicy_extra_field_3'),
          'do_you_have_building_and_contents_insurance' => $request->get('do_you_have_building_and_contents_insurance'),
          'do_you_have_building_and_contents_insurance' => $request->get('do_you_have_building_and_contents_insurance'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'would_you_like_to_discuss_your_protection' => $request->get('would_you_like_to_discuss_your_protection'),
          'claim_app_1_2' => $request->get('claim_app_1_2'),
          'claim_company' => $request->get('claim_company'),
          'claim_buildings' => $request->get('claim_buildings'),
          'claim_buildings' => $request->get('claim_buildings'),
          'claim_contents' => $request->get('claim_contents'),
          'claim_contents_cover' => $request->get('claim_contents_cover'),
          'claim_monthly' => $request->get('claim_monthly'),
          'claim_any_claims_in_last_5_years' => $request->get('claim_any_claims_in_last_5_years'),
          'claim_app_1_2_2' => $request->get('claim_app_1_2_2'),
          'claim_company_2' => $request->get('claim_company_2'),
          'claim_buildings_2' => $request->get('claim_buildings_2'),
          'claim_buildings_2' => $request->get('claim_buildings_2'),
          'claim_contents_2' => $request->get('claim_contents_2'),
          'claim_contents_cover_2' => $request->get('claim_contents_cover_2'),
          'claim_monthly_2' => $request->get('claim_monthly_2'),
          'claim_any_claims_in_last_5_years_2' => $request->get('claim_any_claims_in_last_5_years_2')
      ])
      ->setPaper('a4', 'portrait');

      return $pdf->download('IDD.pdf');
       }
    }



    public function getFF()
    {
        if(Auth::guest())
        {
        return redirect('loginform');
        }
        $user_id = Auth::user()->id;
        $tempData = $this->user->getTemp($user_id);
    /*    print '<pre>';
        print_r($getTemp);
        exit;*/
       
       return view('ff',['tempData'=>$tempData]);
    }



    public function logout()
    {
       Session::flush();
       return Redirect('loginform');
    }



    public function getPDF3(Request $request){
      $pdf = PDF::loadView('pdf.sutability',  [])
      ->setPaper('a4', 'portrait');
      return $pdf->download('sutability.pdf');
    }
    public function getPDF4(Request $request){
      $pdf = PDF::loadView('pdf.fee-agreement',  [
       'agreement_between' => $request->get('agreement-between'),
       'agreement_and' => $request->get('agreement-and'),
       'address' => $request->get('address')
      ])
      ->setPaper('a4', 'portrait');
      return $pdf->download('fee-agreement.pdf');
    }



 /*To Clear full form data*/
    public function clearFF($user_id)
    {
      $delete = DB::table('temprory_forms')->where('user_id',$user_id)->delete();
      if($delete)
      {
        return redirect('ff');
      }
   
    }







}