<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Native\Laravel\Facades\Notification;

class NativeFeatureController extends Controller
{
    public function vibrate()
    {
        // NativePHP V3 implementation might differ slightly, but typically facades are used.
        // If client-side haptics are preferred, we'd use JS. But let's try a server-side trigger if available
        // or just return success for now as Vibration facade might need a specific plugin details.
        // For V3, let's stick to a simple notification for now as it is a core plugin.

        Notification::title('Bzzzt!')
            ->message('This is a simulated vibration.')
            ->show();

        return back();
    }

    public function notify()
    {
        Notification::title('Hello from NativePHP!')
            ->message('This is a native notification sent from Laravel.')
            ->show();

        return back();
    }
}
