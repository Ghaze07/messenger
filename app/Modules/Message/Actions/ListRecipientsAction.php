<?php

namespace App\Modules\Message\Actions;

use App\Models\User;
use App\Models\Message;

class ListRecipientsAction
{

    /**
     * @var User
     */
    private User $user;

    public function __construct() {
        $this->user = auth()->user();
    }

    /**
     *
     * @return null|array
     */
    public function execute(): null|array
    {
        $recipients = Message::where('author_id', $this->user->id)
            ->orWhere('recipient_id', $this->user->id)
            ->latest()
            ->get()
            ->map(function ($recipient) {
                return [
                    'author_id' => $recipient->author_id,
                    'recipient_id' => $recipient->recipient_id,
                ];
            })
            ->flatten()
            ->unique()
            ->filter(function ($id) {
                return $id !== $this->user->id;
            })
            ->toArray();

        if (count($recipients) > 0) {
            return User::whereIn('id', $recipients)->select(['id', 'name', 'email'])->get()->toArray();
        }
        
        return null;
    }
}
