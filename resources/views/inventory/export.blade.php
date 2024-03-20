@extends('template.ui')

@section('content')
    <h1>
        <a href="{{ route('inventory.print') }}"><i class="fa-solid fa-angle-left backBTN"></i></i></a> <i class="fa-solid fa-file-export ms-2"></i>Exported Inventory:
    </h1>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-10 mb-2">
                <h3>
                    @if($inventoryData->isNotEmpty())
                    {{ $inventoryData->first()->department }}
                @else
                    No items available
                @endif

                <br>
                </h3>
            </div>
            <div class="col-md-2 mb-2 ">

                <!-- Desktop View: Icon and Text -->
                <button class="printBTN btn btn-success float-end d-none d-lg-inline" onclick="window.print()"><i class="bi bi-floppy2-fill"></i> Print Inventory</button>
                <!-- Mobile View: Icon Only -->
                <button class="printBTN btn btn-success d-lg-none" onclick="window.print()"><i class="bi bi-floppy2-fill"></i></button>
            </div>
        </div>

    </div>

    <div class="tbPrint container-fluid overflow-auto">
        <table class="table table-bordered table-hover display" id="">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="text-center text-truncate">PC Type</th>
                    <th scope="col" class="text-center text-truncate">PC Name</th>
                    <th scope="col" class="text-center text-truncate">Owner's Name</th>
                    <th scope="col" class="text-center text-truncate">OS Version</th>
                    <th scope="col" class="text-center text-truncate">OS License</th>
                    <th scope="col" class="text-center text-truncate">Office Version</th>
                    <th scope="col" class="text-center text-truncate">Office License</th>

                    <!-- Add more columns if needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($inventoryData as $item)
                    <tr class="text-nowrap table-light">
                        <td class="text-center">{{ $item->pc_type }}</td>
                        <td class="text-center">{{ $item->pc_name }}</td>
                        <td class="text-center">{{ $item->ownerName }}</td>
                        <td class="text-center">{{ $item->os_version }}</td>
                        <td class="text-center">{{ $item->os_license }}</td>
                        <td class="text-center">{{ $item->office_version }}</td>
                        <td class="text-center">{{ $item->office_license }}</td>
                        <!-- Display more item attributes as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
