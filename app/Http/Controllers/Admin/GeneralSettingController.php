<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $pageTitle = 'Manage Website Settings';
        $timezones = json_decode(file_get_contents(resource_path('views/admin/components/timezone.json')));

        return view('admin.general-setting.index', compact('pageTitle', 'timezones'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => ['required', 'string', 'max:40'],
            'timezone' => ['required'],
            'base_color' => ['nullable', 'regex:/^[a-f0-9]{6}$/i'],
            'secondary_color' => ['nullable', 'regex:/^[a-f0-9]{6}$/i'],
        ]);

        $general = GeneralSetting::first();
        $general->site_name = $request->site_name;
        $general->base_color = $request->base_color ?? $general->base_color;
        $general->secondary_color = $request->secondary_color ?? $general->secondary_color;        

        $general->save();
        $timezoneFile = config_path('timezone.php');
        $content = '<?php $timezone = ' . $request->timezone . '?>';
        file_put_contents($timezoneFile, $content);

        $notify[] = ['success', 'General Settings has been updated successfully!'];
        return back()->withNotify($notify);
    }
}
