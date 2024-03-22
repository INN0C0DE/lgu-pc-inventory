{{-- -- .- -.. . ....... -... -.-- ---... ....... .-. .-.-.- .- .-.-.- ... .-.-.- -.-. .-.-.- ....... -....- ....... .. -.-. - --- ....... .. -. - . .-. -. ....... ..--- ----- ..--- ....- --}}
@extends('template.ui')

@section('content')
<h1><a href="{{ route('inventory.index') }}"><i class="fa-solid fa-angle-left ms-2"></i></a></i> <i class="fa-solid fa-print"></i> Print Inventory</h1>

    <br>
    <div class="container-fluid overflow-auto ms-2">
        <!-- resources/views/print.blade.php -->
        <form action="{{ route('inventory.export') }}" method="GET">
            @csrf
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label mb-3">Print the inventory of a certain department:</label>
                <select class="form-select mb-3" aria-label="department" id="department" name="department" required>
                    <option selected value="">Select Department</option>
                    <option value="Accounting Office">Accounting Office</option>
                    <option value="Admin Office">Admin Office</option>
                    <option value="Agriculture Office">Agriculture Office</option>
                    <option value="Animal Welfare Office">Animal Welfare Office</option>
                    <option value="Assessor Office">Assessor Office</option>
                    <option value="Budget Office">Budget Office</option>
                    <option value="Bureau of Jail Management Penology (BJMP)">Bureau of Jail Management Penology (BJMP)</option>
                    <option value="Business Permit and Licensing Office">Business Permit and Licensing Office</option>
                    <option value="Capilpil Office">Capilpil Office</option>
                    <option value="Department Of Public and Order Safety">Department Of Public and Order Safety</option>
                    <option value="Educational Assistance Office">Educational Assistance Office</option>
                    <option value="Engineering Office">Engineering Office</option>
                    <option value="Gender and Development Office">Gender and Development Office</option>
                    <option value="General Services Office">General Services Office</option>
                    <option value="Human Resource Management Office">Human Resource Management Office</option>
                    <option value="Information and Communications Technology Office">Information and Communications Technology Office</option>
                    <option value="Legal Office">Legal Office</option>
                    <option value="Local Civil Registry Office">Local Civil Registry Office</option>
                    <option value="Local Youth Development Office">Local Youth Development Office</option>
                    <option value="Market Office">Market Office</option>
                    <option value="Mayor's Office">Mayor's Office</option>
                    <option value="Motorpool Office">Motorpool Office</option>
                    <option value="Municipal Disaster Risk Reduction and Management Office">Municipal Disaster Risk Reduction and Management Office</option>
                    <option value="Municipal Environment Natural Resources Office">Municipal Environment Natural Resources Office</option>
                    <option value="Municipal Health Office">Municipal Health Office</option>
                    <option value="Municipal Planning and Development Office">Municipal Planning and Development Office</option>
                    <option value="Municipal Social Welfare and Development Office">Municipal Social Welfare and Development Office</option>
                    <option value="Public Employment Services Office">Public Employment Services Office</option>
                    <option value="Public Information Office">Public Information Office</option>
                    <option value="Rural Health Unit (RHU)">Rural Health Unit (RHU)</option>
                    <option value="Sanitary Office">Sanitary Office</option>
                    <option value="Solid Waste Management Office">Solid Waste Management Office</option>
                    <option value="Special Concern">Special Concern</option>
                    <option value="Sport Development Office">Sport Development Office</option>
                    <option value="Tourism Office">Tourism Office</option>
                    <option value="Treasury Office">Treasury Office</option>
                    <option value="Urban Poor Affairs Office">Urban Poor Affairs Office</option>


                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('department') }}</span>
            </div>

            <button type="submit" class="btn btn-success"><i class="bi bi-cloud-download-fill"></i> Load Data</button>
        </form>
    </div>

@endsection
{{-- -- .- -.. . ....... -... -.-- ---... ....... .-. .-.-.- .- .-.-.- ... .-.-.- -.-. .-.-.- ....... -....- ....... .. -.-. - --- ....... .. -. - . .-. -. ....... ..--- ----- ..--- ....- --}}
