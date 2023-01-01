<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.Personal_Asset')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.house_area')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$personal_asset_info[0]->house_area ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.house_current')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->house_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.land_area')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.land_price')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Others_Area')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->others_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.other_current_price')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->others_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document1')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc1_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document2')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc2_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document3')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc3_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document4')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc4_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.validation')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_varification_photo ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.co_borrower')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.name')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$co_borrower_details[0]->name ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.dob')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->date_of_birth ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.member_no')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->member_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.FatherName')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->father_husband_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.mother_name')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->mother_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.gender')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->gender ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MaritalStatus')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->marital_status ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.EducationalQualification')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->education_qualification ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.TotalFamilyMember')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->total_family_members ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PresentAddress')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->present_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PermanentAddress')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->permanent_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.NIDPassportNo')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->nid_birth_certificate ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MobileNo')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->mobile_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.TinNo')</td>
    <td colspan="2">
      {{$co_borrower_details[0]->tin_no ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.co_borrower_personal_asset')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.house_area')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$personal_asset_info[0]->house_area ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.house_current')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->house_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.land_area')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.land_price')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Others_Area')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->others_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.other_current_price')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->others_current_price ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document1')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc1_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document2')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc2_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document3')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc3_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.document4')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_doc4_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.validation')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->land_varification_photo ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.Borrower_Passport_Information')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.Issue_Date')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->passport_issue_date ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Expired_Date')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->passport_expire_date ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Occupation')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->passport_ocupation ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Passport_NO')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->passport_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PermanentAddress')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->passport_permanent_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Passport_Photo')</td>
    <td colspan="2">
      <a href="{{$borrower_passport_visa_details[0]->passport_photo ?? null}}" target="_blank">Image</a>
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.Borrower_visaWork_PermitInformation')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.visaTypeDetails')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_type_details ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Expired_Date')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_expire_date ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Issue_Date')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_issue_date ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Visa_work_permitno')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_work_permit_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Name_designation_cuntry')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_name_of_destination_country ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Last_date_of_entry_into_visa_permit_isssue')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->last_date_of_entry_visa_work_permit_issue_country ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Validity')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_validity ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Entry_no')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_entry_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.visa_work_permit_given_organization_name_address')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_work_permit_given_organization_name_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.job_expired_date')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_job_expired_date ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Recruiting_agent_name')</td>
    <td colspan="2">
      {{$borrower_passport_visa_details[0]->visa_recuiting_agent_name_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.visa_work_permit_photo')</td>
    <td colspan="2">
      <a herf="{{$borrower_passport_visa_details[0]->visa_photo ?? null}}">Image</a>
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.MonthlyExpenses')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.HouseRent')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$expenses_info[0]->house_rent ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.UtilityBill')</td>
    <td colspan="2">
      {{$expenses_info[0]->utility_bil ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.HealthAndEducationExpenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->health_education_expns ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.OthersDailyExpenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->others_daily_expns ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.BankInstallmentSavings')</td>
    <td colspan="2">
      {{$expenses_info[0]->bank_loan_instlmnt_savings ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.TotalExpenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->total_expns ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.GuarantorDetails1')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$gurantor[0]->name ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.FatherName')</td>
    <td colspan="2">
      {{$gurantor[0]->father_husband_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.NIDNo')</td>
    <td colspan="2">
      {{$gurantor[0]->nid_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.DOB')</td>
    <td colspan="2">
      {{$gurantor[0]->dob ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Occupation')</td>
    <td colspan="2">
      {{$gurantor[0]->occupation ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PresentAddress')</td>
    <td colspan="2">
      {{$gurantor[0]->present_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PermanentAddress')</td>
    <td colspan="2">
      {{$gurantor[0]->parmanent_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MobileNo')</td>
    <td colspan="2">
      {{$gurantor[0]->mobile_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MonthlyIncome')</td>
    <td colspan="2">
      {{$gurantor[0]->monthly_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MonthlyExpenses')</td>
    <td colspan="2">
      {{$gurantor[0]->monthly_expenses ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.GuarantorImage')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_photo ?? null}}">Image</a>
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Nid1st')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_nid_front ?? null}}">Image</a>
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Nid2nd')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_nid_back ?? null}}">Image</a>
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.GuarantorDetails2')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$gurantor[0]->name ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.FatherName')</td>
    <td colspan="2">
      {{$gurantor[0]->father_husband_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.NIDNo')</td>
    <td colspan="2">
      {{$gurantor[0]->nid_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.DOB')</td>
    <td colspan="2">
      {{$gurantor[0]->dob ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Occupation')</td>
    <td colspan="2">
      {{$gurantor[0]->occupation ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PresentAddress')</td>
    <td colspan="2">
      {{$gurantor[0]->present_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.PermanentAddress')</td>
    <td colspan="2">
      {{$gurantor[0]->parmanent_address ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MobileNo')</td>
    <td colspan="2">
      {{$gurantor[0]->mobile_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MonthlyIncome')</td>
    <td colspan="2">
      {{$gurantor[0]->monthly_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.MonthlyExpenses')</td>
    <td colspan="2">
      {{$gurantor[0]->monthly_expenses ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.GuarantorImage')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_photo ?? null}}">Image</a>
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Nid1st')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_nid_front ?? null}}">Image</a>
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Nid2nd')</td>
    <td colspan="2">
      <a href="{{$gurantor[0]->guarantor_nid_back ?? null}}">Image</a>
    </td>
  </tr>
</table>