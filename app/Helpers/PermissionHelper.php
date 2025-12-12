<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

if (!function_exists('getSidebarData')) {
    function getSidebarData()
    {
        $user = Auth::user();
        $userRoleID = $user->role_id;

        $categories = DB::table('page_categories')
            ->orderBy('order_by', 'asc')
            ->get();

        $mainMenus = DB::table('pages')
            ->where('is_submenu', 0)
            ->where('active', 1)
            ->where('show_in_menu', 1)
            ->orderBy('page_order', 'asc')
            ->get()
            ->groupBy('page_category_id');

        $subMenus = DB::table('pages')
            ->where('is_submenu', '!=', 0)
            ->where('active', 1)
            ->where('show_in_menu', 1)
            ->orderBy('page_order', 'asc')
            ->get()
            ->groupBy('is_submenu');

        $rolePermissionsList = DB::table('permissions')
            ->where('role_id', $userRoleID)
            ->pluck('page_id')
            ->toArray();

        return compact('categories', 'mainMenus', 'subMenus', 'rolePermissionsList', 'userRoleID');
    }
}