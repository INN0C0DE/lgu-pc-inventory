@extends('template.ui')

@section('content')
    <h1> <a href="{{ route('inventory.index') }}"><i class="bi bi-chevron-left"></i></a></i> Edit Inventory</h1>

    <form action="{{ route('inventory.update', ['i'=>$inventory]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">PC Type:</label>
                <select class="form-select" aria-label="pc_type" id="pc_type" name="pc_type" required>
                    <option value="">Select PC Type</option>
                    <option value="Desktop" {{ $inventory->pc_type == 'Desktop' ? 'selected' : '' }}>Desktop</option>
                    <option value="Laptop" {{ $inventory->pc_type == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                    <option value="N/A" {{ $inventory->pc_type == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>
                <span class="text-danger">{{ $errors->first('pc_type') }}</span>
            </div>

            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">PC Name:</label>
                <input type="text" class="form-control" id="pc_name" name="pc_name" placeholder="ex. SMR-ICTO-PC" required value="{{ $inventory->pc_name }}">
                <span class="text-danger">{{ $errors->first('pc_name') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">IP:</label>
                <input type="text" class="form-control" id="pc_ip" name="pc_ip" placeholder="ex. 1.1.1.1" value="{{ $inventory->pc_ip }}">
                <span class="text-danger">{{ $errors->first('pc_ip') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Username:</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" placeholder="ex. juandc" aria-label="Username" aria-describedby="addon-wrapping" id="userName" name="userName" value="{{ $inventory->userName }}">
                    <span class="text-danger">{{ $errors->first('userName') }}</span>
                  </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Owner's Name:</label>
                <input type="text" class="form-control" id="ownerName" name="ownerName" placeholder="ex. Juan Dela Cruz" required value="{{ $inventory->ownerName }}">
                <span class="text-danger">{{ $errors->first('ownerName') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Department:</label>
                <select class="form-select" aria-label="department" id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Accounting Office" {{ $inventory->department == 'Accounting Office' ? 'selected' : '' }}>Accounting Office</option>
                    <option value="Admin Office" {{ $inventory->department == 'Admin Office' ? 'selected' : '' }}>Admin Office</option>
                    <option value="Agriculture Office" {{ $inventory->department == 'Agriculture Office' ? 'selected' : '' }}>Agriculture Office</option>
                    <option value="Animal Welfare Office" {{ $inventory->department == 'Animal Welfare Office' ? 'selected' : '' }}>Animal Welfare Office</option>
                    <option value="Assessor Office" {{ $inventory->department == 'Assessor Office' ? 'selected' : '' }}>Assessor Office</option>
                    <option value="Budget Office" {{ $inventory->department == 'Budget Office' ? 'selected' : '' }}>Budget Office</option>
                    <option value="Bureau of Jail Management Penology (BJMP)" {{ $inventory->department == 'Bureau of Jail Management Penology (BJMP)' ? 'selected' : '' }}>Bureau of Jail Management Penology (BJMP)</option>
                    <option value="Business Permit and Licensing Office" {{ $inventory->department == 'Business Permit and Licensing Office' ? 'selected' : '' }}>Business Permit and Licensing Office</option>
                    <option value="Capilpil Office" {{ $inventory->department == 'Capilpil Office' ? 'selected' : '' }}>Capilpil Office</option>
                    <option value="Department Of Public and Order Safety" {{ $inventory->department == 'Department Of Public and Order Safety' ? 'selected' : '' }}>Department Of Public and Order Safety</option>
                    <option value="Educational Assistance Office" {{ $inventory->department == 'Educational Assistance Office' ? 'selected' : '' }}>Educational Assistance Office</option>
                    <option value="Engineering Office" {{ $inventory->department == 'Engineering Office' ? 'selected' : '' }}>Engineering Office</option>
                    <option value="Gender and Development Office" {{ $inventory->department == 'Gender and Development Office' ? 'selected' : '' }}>Gender and Development Office</option>
                    <option value="General Services Office" {{ $inventory->department == 'General Services Office' ? 'selected' : '' }}>General Services Office</option>
                    <option value="Human Resource Management Office" {{ $inventory->department == 'Human Resource Management Office' ? 'selected' : '' }}>Human Resource Management Office</option>
                    <option value="Information and Communications Technology Office" {{ $inventory->department == 'Information and Communications Technology Office' ? 'selected' : '' }}>Information and Communications Technology Office</option>
                    <option value="Legal Office" {{ $inventory->department == 'Legal Office' ? 'selected' : '' }}>Legal Office</option>
                    <option value="Local Civil Registry Office" {{ $inventory->department == 'Local Civil Registry Office' ? 'selected' : '' }}>Local Civil Registry Office</option>
                    <option value="Local Youth Development Office" {{ $inventory->department == 'Local Youth Development Office' ? 'selected' : '' }}>Local Youth Development Office</option>
                    <option value="Market Office" {{ $inventory->department == 'Market Office' ? 'selected' : '' }}>Market Office</option>
                    <option value="Mayor's Office" {{ $inventory->department == "Mayor's Office" ? 'selected' : '' }}>Mayor's Office</option>
                    <option value="Motorpool Office" {{ $inventory->department == 'Motorpool Office' ? 'selected' : '' }}>Motorpool Office</option>
                    <option value="Municipal Disaster Risk Reduction and Management Office" {{ $inventory->department == 'Municipal Disaster Risk Reduction and Management Office' ? 'selected' : '' }}>Municipal Disaster Risk Reduction and Management Office</option>
                    <option value="Municipal Environment Natural Resources Office" {{ $inventory->department == 'Municipal Environment Natural Resources Office' ? 'selected' : '' }}>Municipal Environment Natural Resources Office</option>
                    <option value="Municipal Health Office" {{ $inventory->department == 'Municipal Health Office' ? 'selected' : '' }}>Municipal Health Office</option>
                    <option value="Municipal Planning and Development Office" {{ $inventory->department == 'Municipal Planning and Development Office' ? 'selected' : '' }}>Municipal Planning and Development Office</option>
                    <option value="Municipal Social Welfare and Development Office" {{ $inventory->department == 'Municipal Social Welfare and Development Office' ? 'selected' : '' }}>Municipal Social Welfare and Development Office</option>
                    <option value="Public Employment Services Office" {{ $inventory->department == 'Public Employment Services Office' ? 'selected' : '' }}>Public Employment Services Office</option>
                    <option value="Public Information Office" {{ $inventory->department == 'Public Information Office' ? 'selected' : '' }}>Public Information Office</option>
                    <option value="Rural Health Unit (RHU)" {{ $inventory->department == 'Rural Health Unit (RHU)' ? 'selected' : '' }}>Rural Health Unit (RHU)</option>
                    <option value="Sanitary Office" {{ $inventory->department == 'Sanitary Office' ? 'selected' : '' }}>Sanitary Office</option>
                    <option value="Solid Waste Management Office" {{ $inventory->department == 'Solid Waste Management Office' ? 'selected' : '' }}>Solid Waste Management Office</option>
                    <option value="Special Concern" {{ $inventory->department == 'Special Concern' ? 'selected' : '' }}>Special Concern</option>
                    <option value="Sport Development Office" {{ $inventory->department == 'Sport Development Office' ? 'selected' : '' }}>Sport Development Office</option>
                    <option value="Tourism Office" {{ $inventory->department == 'Tourism Office' ? 'selected' : '' }}>Tourism Office</option>
                    <option value="Treasury Office" {{ $inventory->department == 'Treasury Office' ? 'selected' : '' }}>Treasury Office</option>
                    <option value="Urban Poor Affairs Office" {{ $inventory->department == 'Urban Poor Affairs Office' ? 'selected' : '' }}>Urban Poor Affairs Office</option>
                    <option value="N/A" {{ $inventory->department == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>

                  <span class="text-danger">{{ $errors->first('department') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Processor:</label>
                <input type="text" class="form-control" id="processor" name="processor" placeholder="ex. Ryzen 5 5600G" value="{{ $inventory->processor }}">
                <span class="text-danger">{{ $errors->first('processor') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Motherboard:</label>
                <input type="text" class="form-control" id="motherboard" name="motherboard" placeholder="ex. ASUS TUF Gaming B550M-PLUS" value="{{ $inventory->motherboard }}">
                <span class="text-danger">{{ $errors->first('motherboard') }}</span>
            </div>
            {{-- <div class="col-md-2 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage Type 1:</label>
                <select class="form-select" aria-label="storageType1" id="storageType1" name="storageType1">
                    <option selected>Select Storage Type</option>
                    <option value="SSD">SSD</option>
                    <option value="HDD">HDD</option>
                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('storageType1') }}</span>
            </div>
            <div class="col-md-4 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 1:</label>
                <input type="text" class="form-control" id="storage1" name="storage1" placeholder="ex. 120gb">
                <span class="text-danger">{{ $errors->first('Storage') }}</span>
            </div> --}}

            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 1:</label>
                <div class="input-group mb-2">
                    <select class="form-select col-md-2" aria-label="storageType1" id="storageType1" name="storageType1" style="width: 30%">
                        <option value="">Select Storage Type</option>
                        <option value="SSD" {{ $inventory->storageType1 == 'SSD' ? 'selected' : '' }}>SSD</option>
                        <option value="HDD" {{ $inventory->storageType1 == 'HDD' ? 'selected' : '' }}>HDD</option>
                        <option value="N/A" {{ $inventory->storageType1 == 'N/A' ? 'selected' : '' }}>N/A</option>
                    </select>

                    <span class="text-danger">{{ $errors->first('storageType1') }}</span>
                    <input type="text" class="form-control col-md-4" id="storage1" name="storage1" placeholder="ex. 120gb" style="width: 70%" value="{{ $inventory->storage1 }}">
                    <span class="text-danger">{{ $errors->first('storage1') }}</span>
                </div>
            </div>


            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">RAM:</label>
                <input type="text" class="form-control" id="ram" name="ram" placeholder="ex. 8gb" value="{{ $inventory->ram }}">
                <span class="text-danger">{{ $errors->first('ram') }}</span>
            </div>
            {{-- <div class="col-md-3 ">
                <label for="exampleFormControlInput1" class="form-label">RAM Speed:</label>
                <input type="text" class="form-control" id="ramSpeed" name="ramSpeed">
                <span class="text-danger">{{ $errors->first('ramSpeed') }}</span>
            </div> --}}
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">RAM Speed:</label>
                <div class="input-group flex-nowrap">

                    <input type="text" class="form-control" placeholder="ex. 3200" aria-describedby="addon-wrapping" id="ramSpeed" name="ramSpeed" value="{{ $inventory->ramSpeed }}">
                    <span class="input-group-text" id="addon-wrapping">Mhz</span>
                    <span class="text-danger">{{ $errors->first('ramSpeed') }}</span>
                  </div>
            </div>
            {{-- <div class="col-md-2 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage Type 2:</label>
                <select class="form-select" aria-label="storageType2" id="storageType2" name="storageType2">
                    <option selected>Select Storage Type</option>
                    <option value="SSD">SSD</option>
                    <option value="HDD">HDD</option>
                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('storageType2') }}</span>
            </div>
            <div class="col-md-4 mb-2 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 2:</label>
                <input type="text" class="form-control" id="storage2" name="storage2" placeholder="ex. 500gb">
                <span class="text-danger">{{ $errors->first('storage2') }}</span>
            </div> --}}
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 2:</label>
                <div class="input-group mb-2">
                    <select class="form-select col-md-2" aria-label="storageType2" id="storageType2" name="storageType2" style="width: 30%">
                        <option value="">Select Storage Type</option>
                        <option value="SSD" {{ $inventory->storageType2 == 'SSD' ? 'selected' : '' }}>SSD</option>
                        <option value="HDD" {{ $inventory->storageType2 == 'HDD' ? 'selected' : '' }}>HDD</option>
                        <option value="N/A" {{ $inventory->storageType2 == 'N/A' ? 'selected' : '' }}>N/A</option>
                    </select>

                    <span class="text-danger">{{ $errors->first('storageType2') }}</span>
                    <input type="text" class="form-control col-md-4" id="storage2" name="storage2" placeholder="ex. 120gb" style="width: 70%" value="{{ $inventory->storage2 }}">
                    <span class="text-danger">{{ $errors->first('storage2') }}</span>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Videocard:</label>
                <input type="text" class="form-control" id="videocard" name="videocard" placeholder="ex. NVIDIA GeForce RTX 4090" value="{{ $inventory->videocard }}">
                <span class="text-danger">{{ $errors->first('videocard') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Power Supply:</label>
                <input type="text" class="form-control" id="psu" name="psu" placeholder="ex. Corsair CX450" value="{{ $inventory->psu }}">
                <span class="text-danger">{{ $errors->first('psu') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Peripherals:</label>
                <input type="text" class="form-control" id="peripherals" name="peripherals" placeholder="ex. Mouse/ Keyboard/ UPS" value="{{ $inventory->peripherals }}">
                <span class="text-danger">{{ $errors->first('peripherals') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Monitor Brand:</label>
                <select class="form-select" aria-label="monitor_brand" id="monitor_brand" name="monitor_brand">
                    <option value="">Select Monitor Brand</option>
                    <option value="Samsung" {{ $inventory->monitor_brand == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                    <option value="AOC" {{ $inventory->monitor_brand == 'AOC' ? 'selected' : '' }}>AOC</option>
                    <option value="LG" {{ $inventory->monitor_brand == 'LG' ? 'selected' : '' }}>LG</option>
                    <option value="NVision" {{ $inventory->monitor_brand == 'NVision' ? 'selected' : '' }}>NVision</option>
                    <option value="BenQ" {{ $inventory->monitor_brand == 'BenQ' ? 'selected' : '' }}>BenQ</option>
                    <option value="Lenovo" {{ $inventory->monitor_brand == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                    <option value="Asus" {{ $inventory->monitor_brand == 'Asus' ? 'selected' : '' }}>Asus</option>
                    <option value="Acer" {{ $inventory->monitor_brand == 'Acer' ? 'selected' : '' }}>Acer</option>
                    <option value="Dell" {{ $inventory->monitor_brand == 'Dell' ? 'selected' : '' }}>Dell</option>
                    <option value="Gigabyte" {{ $inventory->monitor_brand == 'Gigabyte' ? 'selected' : '' }}>Gigabyte</option>
                    <option value="ViewSonic" {{ $inventory->monitor_brand == 'ViewSonic' ? 'selected' : '' }}>ViewSonic</option>
                    <option value="MSI" {{ $inventory->monitor_brand == 'MSI' ? 'selected' : '' }}>MSI</option>
                    <option value="N/A" {{ $inventory->monitor_brand == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>

                  <span class="text-danger">{{ $errors->first('monitor_brand') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Monitor Size:</label>
                <input type="text" class="form-control" id="monitor_size" name="monitor_size" placeholder="ex. 24 inch" value="{{ $inventory->monitor_size }}">
                <span class="text-danger">{{ $errors->first('monitor_size') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">OS Version:</label>
                <select class="form-select" aria-label="os_version" id="os_version" name="os_version">
                    <option value="">Select OS Version</option>
                    <option value="Windows 11" {{ $inventory->os_version == 'Windows 11' ? 'selected' : '' }}>Windows 11</option>
                    <option value="Windows 10" {{ $inventory->os_version == 'Windows 10' ? 'selected' : '' }}>Windows 10</option>
                    <option value="Windows 8" {{ $inventory->os_version == 'Windows 8' ? 'selected' : '' }}>Windows 8</option>
                    <option value="Windows 7" {{ $inventory->os_version == 'Windows 7' ? 'selected' : '' }}>Windows 7</option>
                    <option value="MacOS" {{ $inventory->os_version == 'MacOS' ? 'selected' : '' }}>MacOS</option>
                    <option value="Linux" {{ $inventory->os_version == 'Linux' ? 'selected' : '' }}>Linux</option>
                    <option value="Chrome OS" {{ $inventory->os_version == 'Chrome OS' ? 'selected' : '' }}>Chrome OS</option>
                    <option value="N/A" {{ $inventory->os_version == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>

                  <span class="text-danger">{{ $errors->first('os_version') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">OS License:</label>
                <input type="text" class="form-control" id="os_license" name="os_license" placeholder="ex. D8QHT-V5L7Z-2Y9FN-4M3GB-W6KRP" value="{{ $inventory->os_license }}">
                <span class="text-danger">{{ $errors->first('os_license') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Office Version:</label>
                <select class="form-select" aria-label="office_version" id="office_version" name="office_version">
                    <option value="">Select Office Version</option>
                    <option value="Microsoft Office 365" {{ $inventory->office_version == 'Microsoft Office 365' ? 'selected' : '' }}>Microsoft Office 365</option>
                    <option value="Microsoft Office 2021" {{ $inventory->office_version == 'Microsoft Office 2021' ? 'selected' : '' }}>Microsoft Office 2021</option>
                    <option value="Microsoft Office 2019" {{ $inventory->office_version == 'Microsoft Office 2019' ? 'selected' : '' }}>Microsoft Office 2019</option>
                    <option value="Microsoft Office 2016" {{ $inventory->office_version == 'Microsoft Office 2016' ? 'selected' : '' }}>Microsoft Office 2016</option>
                    <option value="Microsoft Office 2013" {{ $inventory->office_version == 'Microsoft Office 2013' ? 'selected' : '' }}>Microsoft Office 2013</option>
                    <option value="Microsoft Office 2010" {{ $inventory->office_version == 'Microsoft Office 2010' ? 'selected' : '' }}>Microsoft Office 2010</option>
                    <option value="Microsoft Office 2007" {{ $inventory->office_version == 'Microsoft Office 2007' ? 'selected' : '' }}>Microsoft Office 2007</option>
                    <option value="Microsoft Office 2003" {{ $inventory->office_version == 'Microsoft Office 2003' ? 'selected' : '' }}>Microsoft Office 2003</option>
                    <option value="Microsoft Office 2000" {{ $inventory->office_version == 'Microsoft Office 2000' ? 'selected' : '' }}>Microsoft Office 2000</option>
                    <option value="N/A" {{ $inventory->office_version == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>

                  <span class="text-danger">{{ $errors->first('office_version') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Office License:</label>
                <input type="text" class="form-control" id="office_license" name="office_license" placeholder="ex. J5WQX-B9T6D-R2HZ8-F7LVM-4YPCN" value="{{ $inventory->office_license }}">
                <span class="text-danger">{{ $errors->first('office_license') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Anti-Virus:</label>
                <select class="form-select" aria-label="antivirus" id="antivirus" name="antivirus">
                    <option value="">Select Anti-Virus Software</option>
                    <option value="Windows Defender" {{ $inventory->antivirus == 'Windows Defender' ? 'selected' : '' }}>Windows Defender</option>
                    <option value="Avast" {{ $inventory->antivirus == 'Avast' ? 'selected' : '' }}>Avast</option>
                    <option value="AVG" {{ $inventory->antivirus == 'AVG' ? 'selected' : '' }}>AVG</option>
                    <option value="Bitdefender" {{ $inventory->antivirus == 'Bitdefender' ? 'selected' : '' }}>Bitdefender</option>
                    <option value="Kaspersky" {{ $inventory->antivirus == 'Kaspersky' ? 'selected' : '' }}>Kaspersky</option>
                    <option value="Norton" {{ $inventory->antivirus == 'Norton' ? 'selected' : '' }}>Norton</option>
                    <option value="McAfee" {{ $inventory->antivirus == 'McAfee' ? 'selected' : '' }}>McAfee</option>
                    <option value="ESET" {{ $inventory->antivirus == 'ESET' ? 'selected' : '' }}>ESET</option>
                    <option value="Avira" {{ $inventory->antivirus == 'Avira' ? 'selected' : '' }}>Avira</option>
                    <option value="N/A" {{ $inventory->antivirus == 'N/A' ? 'selected' : '' }}>N/A</option>
                </select>

                  <span class="text-danger">{{ $errors->first('antivirus') }}</span>
            </div>
            <div class="col-md-3 ">
                <label for="exampleFormControlInput1" class="form-label">Anti-Virus License:</label>
                <input type="text" class="form-control" id="antivirus_license" name="antivirus_license" value="{{ $inventory->antivirus_license }}">
                <span class="text-danger">{{ $errors->first('antivirus_license') }}</span>
          </div>
        </div>
        <br>
          <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2-fill"></i> Update Inventory</button>
    </form>




@endsection
