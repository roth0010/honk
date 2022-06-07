@extends('layouts.app')



@section('content')

    <div class="container-fluid">
        <h1 class="text-black-50">Weather Alerts</h1>
        <div class="form-group mb-3">
            <select name="region" id="region" class="form-control @error('region') is-invalid @enderror">
                <option value="">Select Your Region</option>
                <option value='AL'@if(old('region') === 'AL') {{'selected'}}@endif>Alabama (AL)</option>
                <option value='AK'@if(old('region') === 'AK') {{'selected'}}@endif>Alaska (AK)</option>
                <option value='AZ'@if(old('region') === 'AZ') {{'selected'}}@endif>Arizona (AZ)</option>
                <option value='AR'@if(old('region') === 'AR') {{'selected'}}@endif>Arkansas (AR)</option>
                <option value='CA'@if(old('region') === 'CA') {{'selected'}}@endif>California (CA)</option>
                <option value='CO'@if(old('region') === 'CO') {{'selected'}}@endif>Colorado (CO)</option>
                <option value='CT'@if(old('region') === 'CT') {{'selected'}}@endif>Connecticut (CT)</option>
                <option value='DE'@if(old('region') === 'DE') {{'selected'}}@endif>Delaware (DE)</option>
                <option value='DC'@if(old('region') === 'DC') {{'selected'}}@endif>District of Columbia (DC)</option>
                <option value='FL'@if(old('region') === 'FL') {{'selected'}}@endif>Florida (FL)</option>
                <option value='GA'@if(old('region') === 'GA') {{'selected'}}@endif>Georgia (GA)</option>
                <option value='HI'@if(old('region') === 'HI') {{'selected'}}@endif>Hawaii (HI)</option>
                <option value='ID'@if(old('region') === 'ID') {{'selected'}}@endif>Idaho (ID)</option>
                <option value='IL'@if(old('region') === 'IL') {{'selected'}}@endif>Illinois (IL)</option>
                <option value='IN'@if(old('region') === 'IN') {{'selected'}}@endif>Indiana (IN)</option>
                <option value='IA'@if(old('region') === 'IA') {{'selected'}}@endif>Iowa (IA)</option>
                <option value='KS'@if(old('region') === 'KS') {{'selected'}}@endif>Kansas (KS)</option>
                <option value='KY'@if(old('region') === 'KY') {{'selected'}}@endif>Kentucky (KY)</option>
                <option value='LA'@if(old('region') === 'LA') {{'selected'}}@endif>Louisiana (LA)</option>
                <option value='ME'@if(old('region') === 'ME') {{'selected'}}@endif>Maine (ME)</option>
                <option value='MD'@if(old('region') === 'MD') {{'selected'}}@endif>Maryland (MD)</option>
                <option value='MA'@if(old('region') === 'MA') {{'selected'}}@endif>Massachusetts (MA)</option>
                <option value='MI'@if(old('region') === 'MI') {{'selected'}}@endif>Michigan (MI)</option>
                <option value='MN'@if(old('region') === 'MN') {{'selected'}}@endif>Minnesota (MN)</option>
                <option value='MS'@if(old('region') === 'MS') {{'selected'}}@endif>Mississippi (MS)</option>
                <option value='MO'@if(old('region') === 'MO') {{'selected'}}@endif>Missouri (MO)</option>
                <option value='MT'@if(old('region') === 'MT') {{'selected'}}@endif>Montana (MT)</option>
                <option value='NE'@if(old('region') === 'NE') {{'selected'}}@endif>Nebraska (NE)</option>
                <option value='NV'@if(old('region') === 'NV') {{'selected'}}@endif>Nevada (NV)</option>
                <option value='NH'@if(old('region') === 'NH') {{'selected'}}@endif>New Hampshire (NH)</option>
                <option value='NJ'@if(old('region') === 'NJ') {{'selected'}}@endif>New Jersey (NJ)</option>
                <option value='NY'@if(old('region') === 'NY') {{'selected'}}@endif>New York (NY)</option>
                <option value='NC'@if(old('region') === 'NC') {{'selected'}}@endif>North Carolina (NC)</option>
                <option value='ND'@if(old('region') === 'ND') {{'selected'}}@endif>North Dakota (ND)</option>
                <option value='OH'@if(old('region') === 'OH') {{'selected'}}@endif>Ohio (OH)</option>
                <option value='OK'@if(old('region') === 'OK') {{'selected'}}@endif>Oklahoma (OK)</option>
                <option value='OR'@if(old('region') === 'OR') {{'selected'}}@endif>Oregon (OR)</option>
                <option value='PA'@if(old('region') === 'PA') {{'selected'}}@endif>Pennsylvania (PA)</option>
                <option value='RI'@if(old('region') === 'RI') {{'selected'}}@endif>Rhode Island (RI)</option>
                <option value='SC'@if(old('region') === 'SC') {{'selected'}}@endif>South Carolina (SC)</option>
                <option value='SD'@if(old('region') === 'SD') {{'selected'}}@endif>South Dakota (SD)</option>
                <option value='TN'@if(old('region') === 'TN') {{'selected'}}@endif>Tennessee (TN)</option>
                <option value='TX'@if(old('region') === 'TX') {{'selected'}}@endif>Texas (TX)</option>
                <option value='UT'@if(old('region') === 'UT') {{'selected'}}@endif>Utah (UT)</option>
                <option value='VT'@if(old('region') === 'VT') {{'selected'}}@endif>Vermont (VT)</option>
                <option value='VA'@if(old('region') === 'VA') {{'selected'}}@endif>Virginia (VA)</option>
                <option value='WA'@if(old('region') === 'WA') {{'selected'}}@endif>Washington (WA)</option>
                <option value='WV'@if(old('region') === 'WV') {{'selected'}}@endif>West Virginia (WV)</option>
                <option value='WI'@if(old('region') === 'WI') {{'selected'}}@endif>Wisconsin (WI)</option>
                <option value='WY'@if(old('region') === 'WY') {{'selected'}}@endif>Wyoming (WY)</option>
                <option value='AS'@if(old('region') === 'AS') {{'selected'}}@endif>American Samoa (AS)</option>
                <option value='GU'@if(old('region') === 'GU') {{'selected'}}@endif>Guam (GU)</option>
                <option value='PR'@if(old('region') === 'PR') {{'selected'}}@endif>Puerto Rico (PR)</option>
                <option value='VI'@if(old('region') === 'VI') {{'selected'}}@endif>U.S. Virgin Islands (VI)</option>
            </select>
            @error('region')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div id="alerts">
                <p><strong>Select a Region from the Dropdown to see the Weather Alerts for that area.</strong></p>
        </div>
    </div>
    <script src="/js/api.js"></script>
@endsection
