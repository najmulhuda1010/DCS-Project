<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.InformationOf_abroad_resident')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$information_abroad_resident[0]->name ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.FatherName')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->father_husband_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.NIDBirthCertificateNo')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->nid_birth_certificate_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.country_Name')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->country_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Duration_of_working_Foreign')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->duration_of_working_foregin ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Visa_Expired_Date')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->visa_expire_duration ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Relationship_with_loaner')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->relationship_with_borrower ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Land_Photo')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->land_photo ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Validation')</td>
    <td colspan="2">
      {{$information_abroad_resident[0]->land_validation ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.GuarantorDetails1')</th>
  </tr>
  <tr>
    <td rowspan="14"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="14"></td>
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
    <td rowspan="14"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="14"></td>
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
    <th colspan="7" class="bgColor">@lang('loanApproval.Remittance_Sending_Information')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.Date')</td>
    <td rowspan="12"></td>
    <td colspan="2">

    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Amount')</td>
    <td colspan="2">

    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.BankName')</td>
    <td colspan="2">

    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Branch')</td>
    <td colspan="2">

    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Reittance_sending_picture')</td>
    <td colspan="2">
      <a href="#">Image</a>
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.Bank_Information')</th>
  </tr>
  <tr>
    <td rowspan="12"></td>
    <td>@lang('loanApproval.BankName')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{ $bank_info[0]->bank_name ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Branch')</td>
    <td colspan="2">
      {{ $bank_info[0]->branch ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.AccountName')</td>
    <td colspan="2">
      {{ $bank_info[0]->account_name ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.AccountType')</td>
    <td colspan="2">
      {{ $bank_info[0]->account_type ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.AccountNo')</td>
    <td colspan="2">
      {{ $bank_info[0]->account_no ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.CheckPhoto')</td>
    <td colspan="2">
      <a href="{{ $bank_info[0]->bank_cheque_photo ?? null}}" target="_blank">Image</a>
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.MonthlyIncome')</th>
  </tr>
  <tr>
    <td rowspan="14"></td>
    <td>@lang('loanApproval.Income_from_remittance')</td>
    <td rowspan="14"></td>
    <td colspan="2">
      {{$income_info[0]->remittance_income ?? null}}
    </td>
    <td rowspan="14"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Income_From_Job')</td>
    <td colspan="2">
      {{$income_info[0]->job_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Income_From_Family_Member')</td>
    <td colspan="2">
      {{$income_info[0]->family_member_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Income_From_Business')</td>
    <td colspan="2">
      {{$income_info[0]->business_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.OtherIncome')</td>
    <td colspan="2">
      {{$income_info[0]->others_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.TotalIncome')</td>
    <td colspan="2">
      {{$income_info[0]->total_income ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.MonthlyExpenses')</th>
  </tr>
  <tr>
    <td rowspan="14"></td>
    <td>@lang('loanApproval.HouseRent')</td>
    <td rowspan="14"></td>
    <td colspan="2">
      {{$expenses_info[0]->house_rent ?? null}}
    </td>
    <td rowspan="14"></td>
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
    <td>@lang('loanApproval.Other_Daily_expenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->others_daily_expns ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Business_purpose_expenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->business_expns ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.BankInstallmentSavings')</td>
    <td colspan="2">
      {{$expenses_info[0]->bank_loan_instlmnt_savings ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Total_Monthly_Expenses')</td>
    <td colspan="2">
      {{$expenses_info[0]->total_expns ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.Check_List')</th>
  </tr>
  <tr>
    <td rowspan="14"></td>
    <td>@lang('loanApproval.Is_the_family_member_know_about_the_loan')</td>
    <td rowspan="14"></td>
    <td colspan="2">
      {{$checklist[0]->family_member_knwo_loan ?? null }}
    </td>
    <td rowspan="14"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Is_loaner_know_about_the_loan')</td>
    <td colspan="2">
      {{$checklist[0]->family_member_knwo_loan ?? null }}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Did_you_talk_about_the_loan_to_the_foregin_resident')</td>
    <td colspan="2">
      {{$checklist[0]->family_member_knwo_loan ?? null }}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.Did_you_tell_the_Guaranto_about_their_responsibility')</td>
    <td colspan="2">
      {{$checklist[0]->family_member_knwo_loan ?? null }}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.What_is_the_maximum_loan_repayment_amount')</td>
    <td colspan="2">
      {{$checklist[0]->family_member_knwo_loan ?? null }}
    </td>
  </tr>
</table>