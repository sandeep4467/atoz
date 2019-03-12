<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemproryFromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temprory_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->longtext("client_title")->nullable();
            $table->longtext("partner_title")->nullable();
            $table->longtext("client_fullname")->nullable();
            $table->longtext("partner_fullname")->nullable();
            $table->longtext("client_maiden")->nullable();
            $table->longtext("partner_maiden")->nullable();
            $table->longtext("client_marital")->nullable();
            $table->longtext("partner_marital")->nullable();
            $table->longtext("client_dob")->nullable();
            $table->longtext("partner_dob")->nullable();
            $table->longtext("client_smoker")->nullable();
            $table->longtext("partner_smoker")->nullable();
            $table->longtext("client_relationship")->nullable();
            $table->longtext("partner_relationship")->nullable();
            $table->longtext("client_dependents")->nullable();
            $table->longtext("partner_dependents")->nullable();
            $table->longtext("client_nin")->nullable();
            $table->longtext("partner_nin")->nullable();
            $table->longtext("client_vaild_will")->nullable();
            $table->longtext("partner_vaild_will")->nullable();
            $table->longtext("client_postcode")->nullable();
            $table->longtext("partner_postcode")->nullable();
            $table->longtext("client_current_residential")->nullable();
            $table->longtext("partner_current_residential")->nullable();
            $table->longtext("client_date_moved")->nullable();
            $table->longtext("partner_date_moved")->nullable();
            $table->longtext("client_previous_address")->nullable();
            $table->longtext("partner_previous_address")->nullable();
            $table->longtext("client_date_moved_into_previous")->nullable();
            $table->longtext("partner_date_moved_into_previous")->nullable();
            $table->longtext("client_previous_residential")->nullable();
            $table->longtext("partner_previous_residential")->nullable();
            $table->longtext("client_telephone")->nullable();
            $table->longtext("partner_telephone")->nullable();
            $table->longtext("client_work")->nullable();
            $table->longtext("partner_work")->nullable();
            $table->longtext("client_mobile")->nullable();
            $table->longtext("partner_mobile")->nullable();
            $table->longtext("client_email")->nullable();
            $table->longtext("partner_email")->nullable();
            $table->longtext("client_category")->nullable();
            $table->longtext("partner_category")->nullable();
            $table->longtext("client_nationality")->nullable();
            $table->longtext("partner_nationality")->nullable();
            $table->longtext("client_moved_to_uk")->nullable();
            $table->longtext("partner_moved_to_uk")->nullable();
            $table->longtext("client_visa_status")->nullable();
            $table->longtext("partner_visa_status")->nullable();
            $table->longtext("client_type_of_visa")->nullable();
            $table->longtext("partner_type_of_visa")->nullable();
            $table->longtext("term_remaining")->nullable();
            $table->longtext("client_emp_details")->nullable();
            $table->longtext("partner_emp_details")->nullable();
            $table->longtext("client_emp_occupation")->nullable();
            $table->longtext("partner_emp_occupation")->nullable();
            $table->longtext("client_emp_status")->nullable();
            $table->longtext("partner_emp_status")->nullable();
            $table->longtext("client_emp_st_current_employment")->nullable();
            $table->longtext("partner_emp_st_current_employment")->nullable();
            $table->longtext("client_emp_company_name")->nullable();
            $table->longtext("partner_emp_company_name")->nullable();
            $table->longtext("client_emp_compan_address")->nullable();
            $table->longtext("partner_emp_compan_address")->nullable();
            $table->longtext("client_emp_previous_employment")->nullable();
            $table->longtext("partner_emp_previous_employment")->nullable();
            $table->longtext("client_emp_salary")->nullable();
            $table->longtext("partner_emp_salary")->nullable();
            $table->longtext("client_emp_guaranteed")->nullable();
            $table->longtext("partner_emp_guaranteed")->nullable();
            $table->longtext("client_emp_bonus")->nullable();
            $table->longtext("partner_emp_bonus")->nullable();
            $table->longtext("client_emp_other_income")->nullable();
            $table->longtext("partner_emp_other_income")->nullable();
            $table->longtext("client_emp_net_monthly_income")->nullable();
            $table->longtext("partner_emp_net_monthly_income")->nullable();
            $table->longtext("client_emp_budget")->nullable();
            $table->longtext("partner_emp_budget")->nullable();
            $table->longtext("client_emp_retirement")->nullable();
            $table->longtext("partner_emp_retirement")->nullable();
            $table->longtext("client_bank_name")->nullable();
            $table->longtext("partner_bank_name")->nullable();
            $table->longtext("client_bank_acc_number")->nullable();
            $table->longtext("partner_bank_acc_number")->nullable();
            $table->longtext("client_bank_sort_code")->nullable();
            $table->longtext("partner_bank_sort_code")->nullable();
            $table->longtext("client_bank_account_holder_name")->nullable();
            $table->longtext("partner_bank_account_holder_name")->nullable();
            $table->longtext("client_financial_mortgage")->nullable();
            $table->longtext("partner_financial_mortgage")->nullable();
            $table->longtext("client_financial_ccj")->nullable();
            $table->longtext("partner_financial_ccj")->nullable();
            $table->longtext("client_financial_bankrupt")->nullable();
            $table->longtext("partner_financial_bankrupt")->nullable();
            $table->longtext("client_financial_previous_mortgage")->nullable();
            $table->longtext("partner_financial_previous_mortgage")->nullable();
            $table->longtext("type_of_blemish1")->nullable();
            $table->longtext("date_registered1")->nullable();
            $table->longtext("amount1")->nullable();
            $table->longtext("satisfied1")->nullable();
            $table->longtext("date_satisfied1")->nullable();
            $table->longtext("type_of_blemish2")->nullable();
            $table->longtext("date_registered2")->nullable();
            $table->longtext("amount2")->nullable();
            $table->longtext("satisfied2")->nullable();
            $table->longtext("date_satisfied2")->nullable();
            $table->longtext("app_1_2_1")->nullable();
            $table->longtext("credit_card_loan_1")->nullable();
            $table->longtext("lender_1")->nullable();
            $table->longtext("outstanding_balance_1")->nullable();
            $table->longtext("monthly_payment_1")->nullable();
            $table->longtext("interest_rate_1")->nullable();
            $table->longtext("to_be_repaid_on_completion_1")->nullable();
            $table->longtext("with_this_mortgage_1")->nullable();
            $table->longtext("app_1_2_2")->nullable();
            $table->longtext("credit_card_loan_2")->nullable();
            $table->longtext("lender_2")->nullable();
            $table->longtext("outstanding_balance_2")->nullable();
            $table->longtext("monthly_payment_2")->nullable();
            $table->longtext("interest_rate_2")->nullable();
            $table->longtext("to_be_repaid_on_completion_2")->nullable();
            $table->longtext("with_this_mortgage_2")->nullable();
            $table->longtext("app_1_2_3")->nullable();
            $table->longtext("credit_card_loan_3")->nullable();
            $table->longtext("lender_3")->nullable();
            $table->longtext("outstanding_balance_3")->nullable();
            $table->longtext("monthly_payment_3")->nullable();
            $table->longtext("interest_rate_3")->nullable();
            $table->longtext("to_be_repaid_on_completion_3")->nullable();
            $table->longtext("with_this_mortgage_3")->nullable();
            $table->longtext("app_1_2_4")->nullable();
            $table->longtext("credit_card_loan_4")->nullable();
            $table->longtext("lender_4")->nullable();
            $table->longtext("outstanding_balance_4")->nullable();
            $table->longtext("monthly_payment_4")->nullable();
            $table->longtext("interest_rate_4")->nullable();
            $table->longtext("to_be_repaid_on_completion_4")->nullable();
            $table->longtext("with_this_mortgage_4")->nullable();
            $table->longtext("client_cmd")->nullable();
            $table->longtext("partner_cmd")->nullable();
            $table->longtext("client_lender")->nullable();
            $table->longtext("partner_lender")->nullable();
            $table->longtext("client_account_number")->nullable();
            $table->longtext("partner_account_number")->nullable();
            $table->longtext("client_value_of_property")->nullable();
            $table->longtext("partner_value_of_property")->nullable();
            $table->longtext("client_amount_of_loan_outstanding")->nullable();
            $table->longtext("partner_amount_of_loan_outstanding")->nullable();
            $table->longtext("client_original_purchase_price")->nullable();
            $table->longtext("partner_original_purchase_price")->nullable();
            $table->longtext("client_date_originally_purchased")->nullable();
            $table->longtext("partner_date_originally_purchased")->nullable();
            $table->longtext("client_monthly_payment")->nullable();
            $table->longtext("partner_monthly_payment")->nullable();
            $table->longtext("client_years_remaining")->nullable();
            $table->longtext("partner_years_remaining")->nullable();
            $table->longtext("client_repayment_method")->nullable();
            $table->longtext("partner_repayment_method")->nullable();
            $table->longtext("client_interest_rate")->nullable();
            $table->longtext("partner_interest_rate")->nullable();
            $table->longtext("client_expected_rental_income")->nullable();
            $table->longtext("partner_expected_rental_income")->nullable();
            $table->longtext("client_penalties_to_transfer_your_mortgage")->nullable();
            $table->longtext("partner_penalties_to_transfer_your_mortgage")->nullable();
            $table->longtext("client_other_properties_owned")->nullable();
            $table->longtext("partner_other_properties_owned")->nullable();
            $table->longtext("mortgaged_and_postcode")->nullable();
            $table->longtext("wish_to_borrow")->nullable();
            $table->longtext("current_value")->nullable();
            $table->longtext("source_of_funds")->nullable();
            $table->longtext("term_of_mortgage")->nullable();
            $table->longtext("preferred_product")->nullable();
            $table->longtext("tie_in_period")->nullable();
            $table->longtext("payment_method")->nullable();
            $table->longtext("state_repayment_vehicle")->nullable();
            $table->longtext("house_bungalow_flat")->nullable();
            $table->longtext("property_type_freehold_leasehold")->nullable();
            $table->longtext("what_floor")->nullable();
            $table->longtext("how_many_flats")->nullable();
            $table->longtext("year_property_built")->nullable();
            $table->longtext("this_property_ex_local")->nullable();
            $table->longtext("no_of_bedrooms")->nullable();
            $table->longtext("no_of_reception_rooms")->nullable();
            $table->longtext("rental_income")->nullable();
            $table->longtext("garage")->nullable();
            $table->longtext("near_or_above_commercial_premises")->nullable();
            $table->longtext("commercial_premises")->nullable();
            $table->longtext("solicitors_name_of_firm")->nullable();
            $table->longtext("accountants_details_name_of_firm")->nullable();
            $table->longtext("solicitors_address")->nullable();
            $table->longtext("accountants_details_address")->nullable();
            $table->longtext("solicitors_tel_no")->nullable();
            $table->longtext("accountants_details_tel_no")->nullable();
            $table->longtext("solicitors_name_of_contact")->nullable();
            $table->longtext("accountants_details_name_of_contact")->nullable();
            $table->longtext("selling_agents_name_of_firm1")->nullable();
            $table->longtext("selling_agents_address1")->nullable();
            $table->longtext("selling_agents_tel_no1")->nullable();
            $table->longtext("selling_agents_name_of_firm2")->nullable();
            $table->longtext("selling_agents_address2")->nullable();
            $table->longtext("selling_agents_tel_no2")->nullable();
            $table->longtext("selling_agents_name_of_firm3")->nullable();
            $table->longtext("selling_agents_address3")->nullable();
            $table->longtext("selling_agents_tel_no3")->nullable();
            $table->longtext("council_tax")->nullable();
            $table->longtext("secured_loans")->nullable();
            $table->longtext("electric")->nullable();
            $table->longtext("credit_cards_total_p_m")->nullable();
            $table->longtext("gas")->nullable();
            $table->longtext("personal_loans_total_p_m")->nullable();
            $table->longtext("water")->nullable();
            $table->longtext("hire_purchases_total_p_m")->nullable();
            $table->longtext("tv_internet")->nullable();
            $table->longtext("overdrafts")->nullable();
            $table->longtext("telephone_mobiles")->nullable();
            $table->longtext("food_total_p_m")->nullable();
            $table->longtext("buildings_amp_contents")->nullable();
            $table->longtext("social_total_p_m")->nullable();
            $table->longtext("life_amp_critical_illness")->nullable();
            $table->longtext("gym_health_club")->nullable();
            $table->longtext("income_protection")->nullable();
            $table->longtext("maintenance_payments")->nullable();
            $table->longtext("childcare")->nullable();
            $table->longtext("mortgage_rent_to_continue")->nullable();
            $table->longtext("finance")->nullable();
            $table->longtext("other")->nullable();
            $table->longtext("insurance1")->nullable();
            $table->longtext("insurance2")->nullable();
            $table->longtext("insurance3")->nullable();
            $table->longtext("petrol")->nullable();
            $table->longtext("petrol_total")->nullable();
            $table->longtext("other_travel_costs1")->nullable();
            $table->longtext("other_travel_costs2")->nullable();
            $table->longtext("other_travel_costs3")->nullable();
            $table->longtext("do_you_have_any_protection")->nullable();
            $table->longtext("would_you_like_to_discuss_your_protection")->nullable();
            $table->longtext("app_1_2")->nullable();
            $table->longtext("life_cover_asu")->nullable();
            $table->longtext("critical_illness")->nullable();
            $table->longtext("sum_assured")->nullable();
            $table->longtext("monthly_payment")->nullable();
            $table->longtext("company")->nullable();
            $table->longtext("remaining_term")->nullable();
            $table->longtext("policy_extra_field")->nullable();
            $table->longtext("life_cover_asu_2")->nullable();
            $table->longtext("critical_illness_2")->nullable();
            $table->longtext("sum_assured_2")->nullable();
            $table->longtext("company_2")->nullable();
            $table->longtext("remaining_term_2")->nullable();
            $table->longtext("policy_extra_field_2")->nullable();
            $table->longtext("life_cover_asu_3")->nullable();
            $table->longtext("critical_illness_3")->nullable();
            $table->longtext("sum_assured_3")->nullable();
            $table->longtext("company_3")->nullable();
            $table->longtext("remaining_term_3")->nullable();
            $table->longtext("policy_extra_field_3")->nullable();
            $table->longtext("new_requirementsapp_1_2")->nullable();
            $table->longtext("new_requirementslife_cover_asu")->nullable();
            $table->longtext("new_requirementscritical_illness")->nullable();
            $table->longtext("new_requirementssum_assured")->nullable();
            $table->longtext("new_requirementsmonthly_payment")->nullable();
            $table->longtext("new_requirementscompany")->nullable();
            $table->longtext("new_requirementsremaining_term")->nullable();
            $table->longtext("new_requirementspolicy_extra_field")->nullable();
            $table->longtext("new_requirementsapp_1_2_2")->nullable();
            $table->longtext("new_requirementslife_cover_asu_2")->nullable();
            $table->longtext("new_requirementscritical_illness_2")->nullable();
            $table->longtext("new_requirementssum_assured_2")->nullable();
            $table->longtext("new_requirementsmonthly_payment_2")->nullable();
            $table->longtext("new_requirementscompany_2")->nullable();
            $table->longtext("new_requirementsremaining_term_2")->nullable();
            $table->longtext("new_requirementspolicy_extra_field_2")->nullable();
            $table->longtext("new_requirementsapp_1_2_3")->nullable();
            $table->longtext("new_requirementslife_cover_asu_3")->nullable();
            $table->longtext("new_requirementscritical_illness_3")->nullable();
            $table->longtext("new_requirementssum_assured_3")->nullable();
            $table->longtext("new_requirementsmonthly_payment_3")->nullable();
            $table->longtext("new_requirementscompany_3")->nullable();
            $table->longtext("new_requirementsremaining_term_3")->nullable();
            $table->longtext("new_requirementspolicy_extra_field_3")->nullable();
            $table->longtext("do_you_have_building_and_contents_insurance")->nullable();
            $table->longtext("claim_app_1_2")->nullable();
            $table->longtext("claim_company")->nullable();
            $table->longtext("claim_buildings")->nullable();
            $table->longtext("claim_contents")->nullable();
            $table->longtext("claim_contents_cover")->nullable();
            $table->longtext("claim_monthly")->nullable();
            $table->longtext("claim_any_claims_in_last_5_years")->nullable();
            $table->longtext("claim_app_1_2_2")->nullable();
            $table->longtext("claim_company_2")->nullable();
            $table->longtext("claim_buildings_2")->nullable();
            $table->longtext("claim_contents_2")->nullable();
            $table->longtext("claim_contents_cover_2")->nullable();
            $table->longtext("claim_monthly_2")->nullable();
            $table->longtext("claim_any_claims_in_last_5_years_2")->nullable();
            $table->timestamps();
            
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temprory_forms');
    }
}
