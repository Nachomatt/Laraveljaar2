<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("permission:see permissions")->only("index", "show");
        $this->middleware("permission:create permissions")->only("create", "store");
        $this->middleware("permission:edit permissions")->only("edit", "update");
        $this->middleware("permission:delete permissions")->only("destroy");

    }

    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermission $request)
    {
        $permission = Permission::create(['name' => $request->name]);
        $permission->save();
        return redirect()->route('permissions.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Permission has been added partner.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePermission $request, Permission $permission)
    {
        $permission->name = $request->name;
        $permission->save();

        return redirect()->route('permissions.index')->with('message', '\ (•◡•) /Woop Woop! Permission successfully edited\ (•◡•) /');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')->with('message', '\ (•◡•) /Woop Woop! Permission successfully deleted\ (•◡•) /');
    }
}
