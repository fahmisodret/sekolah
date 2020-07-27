<?php

namespace App;
use File;
class Menu
{
    protected $fillable = ['title', 'url', 'hasSub', 'subs'];

    public static function get($type='back'){
        switch ($type) {
            case 'back':
                $menus = [];
                if (File::exists(base_path('resources/laravel-admin/menus.json'))) {
                    $menus = json_decode(File::get(base_path('resources/laravel-admin/menus.json')));
                }
            break;
            case 'front':
                if (File::exists(base_path('resources/laravel-admin/front.json'))) {
                    $menus = json_decode(File::get(base_path('resources/laravel-admin/front.json')));
                }
            break;
            default:
                $menus = false;
            break;
        }
        return $menus;
    }

    public static function create($type='back', $data){
        $return['status'] = false;
        switch ($type) {
            case 'back':
                $menus = json_decode(File::get(base_path('resources/laravel-admin/menus.json')));
                $menus->menus = array_map(function ($menu) use ($data) {
                    if ($menu->section == 'Resources') {
                        array_push($menu->items, (object) $data);
                    }
                    return $menu;
                }, $menus->menus);
                File::put(base_path('resources/laravel-admin/menus.json'), json_encode($menus));
                $return['status'] = true;
            break;
            case 'front':
                $menus = json_decode(File::get(base_path('resources/laravel-admin/front.json')));
                $menus->menus = array_map(function ($menu) use ($data) {
                    if ($menu->section == 'Resources') {
                        array_push($menu->items, (object) $data);
                    }
                    return $menu;
                }, $menus->menus);
                File::put(base_path('resources/laravel-admin/front.json'), json_encode($menus));
                $return['status'] = true;
            break;
            default:
                $return['status'] = false;
            break;
        }
        return $return;
    }

    public static function update($type='back', $data, $id){
        $return['status'] = false;
        switch ($type) {
            case 'back':
                $json = json_decode(File::get(base_path('resources/laravel-admin/menus.json')));
                unset($json->menus[0]->items[$id]);
                $json->menus[0]->items[$id] = (object)$data;
                ksort($json->menus[0]->items);
                $json->menus = array_values($json->menus);
                File::put(base_path('resources/laravel-admin/menus.json'), json_encode($json));
                $return['status'] = true;
            break;
            case 'front':
                $json = json_decode(File::get(base_path('resources/laravel-admin/front.json')));
                unset($json->menus[0]->items[$id]);
                $json->menus[0]->items[$id] = (object)$data;
                ksort($json->menus[0]->items);
                $json->menus = array_values($json->menus);
                File::put(base_path('resources/laravel-admin/front.json'), json_encode($json));
                $return['status'] = true;
            break;
            default:
                $return['status'] = false;
            break;
        }
        return $return;
    }
}
