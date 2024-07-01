<?php

namespace App\Http\Controllers;

use App\Jobs\SendUserNotificationMail;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function showForm()
    {
        return view('notifications.form');
    }

    public function sendNotification(Request $request)
    {
        $data = $request->validate([
            'recipient_type' => 'required|string|in:Todos,Mozo,Encargado,Cajero',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $recipients = [];

        switch ($data['recipient_type']) {
            case 'Todos':
                $recipients = User::pluck('email')->toArray();
                break;
            case 'Mozo':
            case 'Encargado':
            case 'Cajero':
                $recipients = User::where('rol', $data['recipient_type'])->pluck('email')->toArray();
                break;
        }

        if (empty($recipients)) {
            return back()->with('error', 'No se encontraron destinatarios para los criterios seleccionados.');
        }

        SendUserNotificationMail::dispatch($data['subject'], $data['message'], $recipients);

        return back()->with('success', '¡Las notificaciones han sido enviadas!');
    }
}