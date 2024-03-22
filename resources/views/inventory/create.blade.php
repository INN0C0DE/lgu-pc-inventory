{{-- -- .- -.. . ....... -... -.-- ---... ....... .-. .-.-.- .- .-.-.- ... .-.-.- -.-. .-.-.- ....... -....- ....... .. -.-. - --- ....... .. -. - . .-. -. ....... ..--- ----- ..--- ....- --}}
@extends('template.ui')

@section('content')
    <h1> <a href="{{ route('inventory.index') }}" ><i class="fa-solid fa-angle-left ms-2 "></i></a></i> <i class="fa-solid fa-computer"></i> Add Inventory</h1>

    <form action="{{ route('inventory.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">PC Type:</label>
                <select class="form-select" aria-label="pc_type" id="pc_type" name="pc_type" required>
                    <option selected value="">Select PC Type</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Laptop">Laptop</option>
                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('pc_type') }}</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">PC Name:</label>
                <input type="text" class="form-control" id="pc_name" name="pc_name" placeholder="ex. SMR-ICTO-PC" required>
                <span class="text-danger">{{ $errors->first('pc_name') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">IP:</label>
                <input type="text" class="form-control" id="pc_ip" name="pc_ip" placeholder="ex. 1.1.1.1">
                <span class="text-danger">{{ $errors->first('pc_ip') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Username:</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" placeholder="ex. juandc" aria-label="Username" aria-describedby="addon-wrapping" id="userName" name="userName">
                    <span class="text-danger">{{ $errors->first('userName') }}</span>
                  </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Owner's Name:</label>
                <input type="text" class="form-control" id="ownerName" name="ownerName" placeholder="ex. Juan Dela Cruz" required>
                <span class="text-danger">{{ $errors->first('ownerName') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Department:</label>
                <select class="form-select" aria-label="department" id="department" name="department" required>
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
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Processor:</label>
                <input type="text" class="form-control" id="processor" name="processor" placeholder="ex. Ryzen 5 5600G">
                <span class="text-danger">{{ $errors->first('processor') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Motherboard:</label>
                <input type="text" class="form-control" id="motherboard" name="motherboard" placeholder="ex. ASUS TUF Gaming B550M-PLUS">
                <span class="text-danger">{{ $errors->first('motherboard') }}</span>
            </div>


            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 1:</label>
                <div class="input-group mb-2">
                    <select class="form-select col-md-2" aria-label="storageType1" id="storageType1" name="storageType1" style="width: 30%">
                        <option  value="">Select Storage Type</option>
                        <option value="SSD">SSD</option>
                        <option value="HDD">HDD</option>
                        <option value="N/A">N/A</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('storageType1') }}</span>
                    <input type="text" class="form-control col-md-4" id="storage1" name="storage1" placeholder="ex. 120gb" style="width: 70%">
                    <span class="text-danger">{{ $errors->first('storage1') }}</span>
                </div>
            </div>


            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">RAM:</label>
                <input type="text" class="form-control" id="ram" name="ram" placeholder="ex. 8gb">
                <span class="text-danger">{{ $errors->first('ram') }}</span>
            </div>

            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">RAM Speed:</label>
                <div class="input-group flex-nowrap">

                    <input type="text" class="form-control" placeholder="ex. 3200" aria-describedby="addon-wrapping" id="ramSpeed" name="ramSpeed">
                    <span class="input-group-text" id="addon-wrapping">Mhz</span>
                    <span class="text-danger">{{ $errors->first('ramSpeed') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Storage 2:</label>
                <div class="input-group mb-2">
                    <select class="form-select col-md-2" aria-label="storageType2" id="storageType2" name="storageType2" style="width: 30%">
                        <option selected value="">Select Storage Type</option>
                        <option value="SSD">SSD</option>
                        <option value="HDD">HDD</option>
                        <option value="N/A">N/A</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('storageType2') }}</span>
                    <input type="text" class="form-control col-md-4" id="storage2" name="storage2" placeholder="ex. 500gb" style="width: 70%">
                    <span class="text-danger">{{ $errors->first('storage2') }}</span>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Videocard:</label>
                <input type="text" class="form-control" id="videocard" name="videocard" placeholder="ex. NVIDIA GeForce RTX 4090">
                <span class="text-danger">{{ $errors->first('videocard') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Power Supply:</label>
                <input type="text" class="form-control" id="psu" name="psu" placeholder="ex. Corsair CX450">
                <span class="text-danger">{{ $errors->first('psu') }}</span>
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Peripherals:</label>
                <input type="text" class="form-control" id="peripherals" name="peripherals" placeholder="ex. Mouse/ Keyboard/ UPS">
                <span class="text-danger">{{ $errors->first('peripherals') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Monitor Brand:</label>
                <select class="form-select" aria-label="monitor_brand" id="monitor_brand" name="monitor_brand">
                    <option selected value="">Select Monitor Brand</option>
                    <option value="Samsung">Samsung</option>
                    <option value="AOC">AOC</option>
                    <option value="LG">LG</option>
                    <option value="NVision">NVision</option>
                    <option value="BenQ">BenQ</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="Asus">Asus</option>
                    <option value="Acer">Acer</option>
                    <option value="Dell">Dell</option>
                    <option value="Gigabyte">Gigabyte</option>
                    <option value="ViewSonic">ViewSonic</option>
                    <option value="MSI">MSI</option>
                    <option value="Prolink">Prolink</option>
                    <option value="HKC">HKC</option>
                    <option value="Philips">Philips</option>
                    <option value="HP">HP</option>
                    <option value="ThinkVision">ThinkVision</option>

                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('monitor_brand') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Monitor Size:</label>
                <input type="text" class="form-control" id="monitor_size" name="monitor_size" placeholder="ex. 24 inch">
                <span class="text-danger">{{ $errors->first('monitor_size') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">OS Version:</label>
                <select class="form-select" aria-label="os_version" id="os_version" name="os_version">
                    <option selected value="">Select OS Version</option>
                    <option value="Windows 11">Windows 11</option>
                    <option value="Windows 10">Windows 10</option>
                    <option value="Windows 8">Windows 8</option>
                    <option value="Windows 7">Windows 7</option>
                    <option value="MacOS">MacOS</option>
                    <option value="Linux">Linux</option>
                    <option value="Chrome OS">Chrome OS</option>

                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('os_version') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">OS License:</label>
                <input type="text" class="form-control" id="os_license" name="os_license" placeholder="ex. D8QHT-V5L7Z-2Y9FN-4M3GB-W6KRP">
                <span class="text-danger">{{ $errors->first('os_license') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Office Version:</label>
                <select class="form-select" aria-label="office_version" id="office_version" name="office_version">
                    <option selected value="">Select Office Version</option>
                    <option value="Microsoft Office 365">Microsoft Office 365</option>
                    <option value="Microsoft Office 2021">Microsoft Office 2021</option>
                    <option value="Microsoft Office 2019">Microsoft Office 2019</option>
                    <option value="Microsoft Office 2016">Microsoft Office 2016</option>
                    <option value="Microsoft Office 2013">Microsoft Office 2013</option>
                    <option value="Microsoft Office 2010">Microsoft Office 2010</option>
                    <option value="Microsoft Office 2007">Microsoft Office 2007</option>
                    <option value="Microsoft Office 2003">Microsoft Office 2003</option>
                    <option value="Microsoft Office 2000">Microsoft Office 2000</option>
                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('office_version') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Office License:</label>
                <input type="text" class="form-control" id="office_license" name="office_license" placeholder="ex. J5WQX-B9T6D-R2HZ8-F7LVM-4YPCN">
                <span class="text-danger">{{ $errors->first('office_license') }}</span>
            </div>
            <div class="col-md-3 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Anti-Virus:</label>
                <select class="form-select" aria-label="antivirus" id="antivirus" name="antivirus">
                    <option selected value="">Select Anti-Virus Software</option>
                    <option value="Windows Defender">Windows Defender</option>
                    <option value="Avast">Avast</option>
                    <option value="AVG">AVG</option>
                    <option value="Bitdefender">Bitdefender</option>
                    <option value="Kaspersky">Kaspersky</option>
                    <option value="Norton">Norton</option>
                    <option value="McAfee">McAfee</option>
                    <option value="ESET">ESET</option>
                    <option value="Avira">Avira</option>

                    <option value="N/A">N/A</option>
                  </select>
                  <span class="text-danger">{{ $errors->first('antivirus') }}</span>
            </div>
            <div class="col-md-3 ">
                <label for="exampleFormControlInput1" class="form-label">Anti-Virus License:</label>
                <input type="text" class="form-control" id="antivirus_license" name="antivirus_license">
                <span class="text-danger">{{ $errors->first('antivirus_license') }}</span>
          </div>
        </div>
        <br>
          <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2-fill"></i> Save Inventory</button>
    </form>




@endsection
{{-- -- .- -.. . ....... -... -.-- ---... ....... .-. .-.-.- .- .-.-.- ... .-.-.- -.-. .-.-.- ....... -....- ....... .. -.-. - --- ....... .. -. - . .-. -. ....... ..--- ----- ..--- ....- --}}
