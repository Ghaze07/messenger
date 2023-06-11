<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Events\SocketStatus;
use Illuminate\Http\Request;
use App\Modules\Message\Actions\ListRecipientsAction;
use App\Modules\Message\Actions\ListUserMessageAction;

class MessageController extends Controller
{
    public function getRecipients(ListRecipientsAction $action)
    {
        return response()->json([
            'recipients' => $action->execute(),
        ], 200);
    }

    /**
     * Undocumented function
     *
     * @param User $user
     * @param ListUserMessageAction $action
     * @return void
     */
    public function show(User $user, ListUserMessageAction $action)
    {
        $messages = $action->setRecipient($user)
            ->fetchMessages();

        return Inertia::render('User/Chat', [
            'messages' => $messages->toArray(),
            'recipient' => $user->toArray(),
        ]);
    }

    public function demo(ListRecipientsAction $action) 
    {
        event(new SocketStatus('Ghaze'));
        return response()->json([
            'recipients' => 'event triggered',
        ], 200);
    }
}
