<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Artisan;
use File;
use Illuminate\Http\Request;
use Response;
use View;
use Str;

class ProcessController extends Controller
{
    public function __construct(){
        $val[] = 'vText0=Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi. Sagittis purus sit amet volutpat consequat mauris. Non arcu risus quis varius quam quisque id diam. Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.';
        $val[] = 'vText1=Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.';
        $val[] = 'vText2=Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.';
        $val[] = 'vImage0={{asset("image/produk.jpg")}}';
        $val[] = 'vImage1={{asset("image/user.jpg")}}';
        $this->custom = implode(';', $val);
    }

    public function frontGenerator()
    {
        return view('laravel-admin::front-generator');
    }

    /**
     * Process generator.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function postFrontGenerator(Request $request)
    {
        config(['crudgenerator.dynamic_view_template' => [
                'index' => ['formHeadingHtml', 'formBodyHtml', 'crudName', 'crudNameCap', 'modelName', 'viewName', 'routeGroup', 'primaryKey', 'formFieldsHtml'],
            ]
        ]);
        config(['crudgenerator.path' => base_path('resources/view-generator/')]);

        $commandArg = [];
        $commandArg['name'] = $request->crud_name;

        if ($request->has('fields')) {
            if($request->fields[0]){
                $fieldsArray = [];
                $validationsArray = [];
                $x = 0;
                foreach ($request->fields as $field) {
                    if ($request->fields_required[$x] == 1) {
                        $validationsArray[] = $field;
                    }

                    $fieldsArray[] = $field . '#' . $request->fields_type[$x];

                    $x++;
                }
                $commandArg['--fields'] = implode(";", $fieldsArray);
            }
        }

        if ($request->has('view_path')) {
            $commandArg['--view-path'] = $request->view_path;
        }

        if ($request->has('route_group')) {
            $commandArg['--route-group'] = $request->route_group;
        }

        if ($request->has('form_helper')) {
            $commandArg['--form-helper'] = $request->form_helper;
        }
        $commandArg['--custom-data'] = $this->custom;

        try {
            Artisan::call('crud:view', $commandArg);
            $menus = json_decode(File::get(base_path('resources/laravel-admin/front.json')));
            $name = $commandArg['name'];
            $routeName = ($commandArg['--route-group']) ? $commandArg['--route-group'] . '/' . Str::snake($name, '-') : Str::snake($name, '-');
            $menus->menus = array_map(function ($menu) use ($name, $routeName) {
                if ($menu->section == 'Resources') {
                    array_push($menu->items, (object) [
                        'title' => $name,
                        'url' => '/' . $routeName,
                    ]);
                }
                return $menu;
            }, $menus->menus);

            // add route
            $routeFile = base_path('routes/web.php');
            if (file_exists($routeFile) && $request->has('route') && (strtolower($request->route) === 'yes')) {
                $controller = 'FrontController';
                File::append($routeFile, "\n" . implode("\n", ["Route::get('" . $routeName . "', function(){return view('".$request->view_path.Str::snake($name, '-')."/index');});"]));
            }
            File::put(base_path('resources/laravel-admin/front.json'), json_encode($menus));
        } catch (\Exception $e) {
            return Response::make($e->getMessage(), 500);
        }

        return redirect('admin/frontgenerator')->with('flash_message', 'Your CRUD has been generated. See on the menu.');
    }

    /**
     * Display generator.
     *
     * @return Response
     */
    public function getGenerator()
    {
        return view('laravel-admin::generator');
    }

    /**
     * Process generator.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function postGenerator(Request $request)
    {
        $commandArg = [];
        $commandArg['name'] = $request->crud_name;

        if ($request->has('fields')) {
            $fieldsArray = [];
            $validationsArray = [];
            $x = 0;
            foreach ($request->fields as $field) {
                if ($request->fields_required[$x] == 1) {
                    $validationsArray[] = $field;
                }

                $fieldsArray[] = $field . '#' . $request->fields_type[$x];

                $x++;
            }

            $commandArg['--fields'] = implode(";", $fieldsArray);
        }

        if (!empty($validationsArray)) {
            $commandArg['--validations'] = implode("#required;", $validationsArray) . "#required";
        }

        if ($request->has('route')) {
            $commandArg['--route'] = $request->route;
        }

        if ($request->has('view_path')) {
            $commandArg['--view-path'] = $request->view_path;
        }

        if ($request->has('controller_namespace')) {
            $commandArg['--controller-namespace'] = $request->controller_namespace;
        }

        if ($request->has('model_namespace')) {
            $commandArg['--model-namespace'] = $request->model_namespace;
        }

        if ($request->has('route_group')) {
            $commandArg['--route-group'] = $request->route_group;
        }

        if ($request->has('relationships')) {
            $commandArg['--relationships'] = $request->relationships;
        }

        if ($request->has('form_helper')) {
            $commandArg['--form-helper'] = $request->form_helper;
        }

        if ($request->has('soft_deletes')) {
            $commandArg['--soft-deletes'] = $request->soft_deletes;
        }

        try {
            Artisan::call('crud:generate', $commandArg);

            $menus = json_decode(File::get(base_path('resources/laravel-admin/menus.json')));

            $name = $commandArg['name'];
            $routeName = ($commandArg['--route-group']) ? $commandArg['--route-group'] . '/' . Str::snake($name, '-') : Str::snake($name, '-');

            $menus->menus = array_map(function ($menu) use ($name, $routeName) {
                if ($menu->section == 'Resources') {
                    array_push($menu->items, (object) [
                        'title' => $name,
                        'url' => '/' . $routeName,
                    ]);
                }

                return $menu;
            }, $menus->menus);

            File::put(base_path('resources/laravel-admin/menus.json'), json_encode($menus));

            Artisan::call('migrate');
        } catch (\Exception $e) {
            return Response::make($e->getMessage(), 500);
        }

        return redirect('admin/generator')->with('flash_message', 'Your CRUD has been generated. See on the menu.');
    }
}
