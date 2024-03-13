@extends('template.ui')
@section('content')
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-lg-6 mb-1">
            <h1>PC INVENTORY</h1>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Desktop View: Icon and Text -->
            <a href="{{ route('inventory.create') }}" class="btn btn-secondary float-end d-none d-lg-inline">
                <i class="bi bi-plus-circle"></i> Add Inventory
            </a>
            <!-- Mobile View: Icon Only -->
            <a href="{{ route('inventory.create') }}" class="btn btn-secondary d-lg-none">
                <i class="bi bi-plus-circle"></i> Add Inventory
            </a>
        </div>
    </div>
</div>

    <div class="container-fluid overflow-auto">
        <table class="table table-bordered table-hover display" id="inventory_table">
            <thead>
              <tr class="table-dark ">
                <th scope="col" class="text-center text-truncate">Action</th>
                <th scope="col" class="text-center text-truncate">PC Type</th>
                <th scope="col" class="text-center text-truncate">PC Name</th>
                <th scope="col" class="text-center text-truncate">IP</th>
                <th scope="col" class="text-center text-truncate">Username</th>
                <th scope="col" class="text-center text-truncate">Owner's Name</th>
                <th scope="col" class="text-center text-truncate">Department</th>
                <th scope="col" class="text-center text-truncate">Processor</th>
                <th scope="col" class="text-center text-truncate">Motherboard</th>
                <th scope="col" class="text-center text-truncate">Storage Type 1</th>
                <th scope="col" class="text-center text-truncate">Storage 1</th>
                <th scope="col" class="text-center text-truncate">Storage Type 2</th>
                <th scope="col" class="text-center text-truncate">Storage 2</th>
                <th scope="col" class="text-center text-truncate">RAM</th>
                <th scope="col" class="text-center text-truncate">RAM Speed</th>
                <th scope="col" class="text-center text-truncate">Videocard</th>
                <th scope="col" class="text-center text-truncate">Power Supply</th>
                <th scope="col" class="text-center text-truncate">Peripherals</th>
                <th scope="col" class="text-center text-truncate">Monitor</th>
                <th scope="col" class="text-center text-truncate">Monitor Size</th>
                <th scope="col" class="text-center text-truncate">OS Version</th>
                <th scope="col" class="text-center text-truncate">OS License</th>
                <th scope="col" class="text-center text-truncate">Office Version</th>
                <th scope="col" class="text-center text-truncate">Office License</th>
                <th scope="col" class="text-center text-truncate">Antivirus</th>
                <th scope="col" class="text-center text-truncate">Antivirus License</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inventory as $i)
              <tr class="text-nowrap table-light">
                <td class="text-center">
                    <a href="{{ route('inventory.edit', ['i'=>$i]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="{{ route('inventory.destroy', ['i'=>$i]) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
                    </form>
                </td>
                <td class="text-center">{{$i->pc_type}}</td>
                <td class="text-center">{{$i->pc_name}}</td>
                <td class="text-center">{{$i->pc_ip}}</td>
                <td class="text-center">{{$i->userName}}</td>
                <td class="text-center">{{$i->ownerName}}</td>
                <td class="text-center">{{$i->department}}</td>
                <td class="text-center">{{$i->processor}}</td>
                <td class="text-center">{{$i->motherboard}}</td>
                <td class="text-center">{{$i->storageType1}}</td>
                <td class="text-center">{{$i->storage1}}</td>
                <td class="text-center">{{$i->storageType2}}</td>
                <td class="text-center">{{$i->storage2}}</td>
                <td class="text-center">{{$i->ram}}</td>
                <td class="text-center">{{$i->ramSpeed}}</td>
                <td class="text-center">{{$i->videocard}}</td>
                <td class="text-center">{{$i->psu}}</td>
                <td class="text-center">{{$i->peripherals}}</td>
                <td class="text-center">{{$i->monitor_brand}}</td>
                <td class="text-center">{{$i->monitor_size}}</td>
                <td class="text-center">{{$i->os_version}}</td>
                <td class="text-center">{{$i->os_license}}</td>
                <td class="text-center">{{$i->office_version}}</td>
                <td class="text-center">{{$i->office_license}}</td>
                <td class="text-center">{{$i->antivirus}}</td>
                <td class="text-center">{{$i->antivirus_license}}</td>

            </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection
