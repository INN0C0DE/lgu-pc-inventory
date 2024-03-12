<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;


class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index', ['inventory' => $inventory]);

    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pc_type' => 'required',
            'pc_name' => 'required',
            'pc_ip' => 'nullable',
            'userName' => 'nullable',
            'ownerName' => 'required',
            'department' => 'required',
            'processor' => 'nullable',
            'motherboard' => 'nullable',
            'storageType1' => 'nullable',
            'storage1' => 'nullable',
            'storageType2' => 'nullable',
            'storage2' => 'nullable',
            'ram' => 'nullable',
            'ramSpeed' => 'nullable',
            'videocard' => 'nullable',
            'psu' => 'nullable',
            'peripherals' => 'nullable',
            'monitor_brand' => 'nullable',
            'monitor_size' => 'nullable',
            'os_version' => 'nullable',
            'os_license' => 'nullable',
            'office_version' => 'nullable',
            'office_license' => 'nullable',
            'antivirus' => 'nullable',
            'antivirus_license' => 'nullable',
        ]);

        $newInventory = Inventory::create($data);

        return redirect(route('inventory.index'))->with('success', 'Inventory added successfully!');
    }

    public function edit(Inventory $i)
    {
        return view('inventory.edit', ['inventory' => $i]);
    }

    public function update(Request $request, Inventory $i)
    {
        $data = $request->validate([
            'pc_type' => 'required',
            'pc_name' => 'required',
            'pc_ip' => 'nullable',
            'userName' => 'nullable',
            'ownerName' => 'required',
            'department' => 'required',
            'processor' => 'nullable',
            'motherboard' => 'nullable',
            'storageType1' => 'nullable',
            'storage1' => 'nullable',
            'storageType2' => 'nullable',
            'storage2' => 'nullable',
            'ram' => 'nullable',
            'ramSpeed' => 'nullable',
            'videocard' => 'nullable',
            'psu' => 'nullable',
            'peripherals' => 'nullable',
            'monitor_brand' => 'nullable',
            'monitor_size' => 'nullable',
            'os_version' => 'nullable',
            'os_license' => 'nullable',
            'office_version' => 'nullable',
            'office_license' => 'nullable',
            'antivirus' => 'nullable',
            'antivirus_license' => 'nullable',
        ]);

        $i->update($data);

        return redirect(route('inventory.index'))->with('success', 'Inventory updated successfully!');
    }

    public function destroy(Inventory $i)
    {
        $i->delete();

        return redirect(route('inventory.index'))->with('success', 'Inventory deleted successfully!');
    }
    public function print()
    {
        $inventory = Inventory::all();
        return view('inventory.print', ['inventory' => $inventory]);
    }

    public function export(Request $request)
    {
        // Validate the request
        $request->validate([
            'department' => 'required|string',
        ]);

        // Get the selected department from the request
        $selectedDepartment = $request->input('department');

        // Fetch inventory data from the database based on the selected department
        $inventoryData = Inventory::where('department', $selectedDepartment)->get();

        // Return the inventory data or do further processing here
        return view('inventory.export', ['inventoryData' => $inventoryData]);
    }

}
