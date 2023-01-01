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
    <td>@lang('loanApproval.ShopArea')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->shop_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.ShopCurrentPrice')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->shop_current_price ?? null}}
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
    <td>@lang('loanApproval.TotalArea')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->total_area ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.TotalCurrentPrie')</td>
    <td colspan="2">
      {{$personal_asset_info[0]->total_current_price ?? null}}
    </td>
  </tr>
</table>
<table class="table table-bordered">
  <tr>
    <th colspan="7" class="bgColor">@lang('loanApproval.BankInfo')</th>
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
    <td rowspan="12"></td>
    <td>@lang('loanApproval.BusinessIncome')</td>
    <td rowspan="12"></td>
    <td colspan="2">
      {{$income_info[0]->business_income ?? null}}
    </td>
    <td rowspan="12"></td>
  </tr>
  <tr>
    <td>@lang('loanApproval.JobIncome')</td>
    <td colspan="2">
      {{$income_info[0]->job_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.FamilyMembersIncome')</td>
    <td colspan="2">
      {{$income_info[0]->family_member_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.OthersBusinessIncome')</td>
    <td colspan="2">
      {{$income_info[0]->others_business_income ?? null}}
    </td>
  </tr>
  <tr>
    <td>@lang('loanApproval.RemittanceIncome')</td>
    <td colspan="2">
      {{$income_info[0]->remittance_income ?? null}}
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
    <td rowspan="14"></td>
    <td>@lang('loanApproval.Name')</td>
    <td rowspan="14"></td>
    <td colspan="2">
      {{ $gurantor[0]->name ?? null }}
    </td>
    <td rowspan="14"></td>
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
      {{ $gurantor[0]->name ?? null }}
    </td>
    <td rowspan="14"></td>
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