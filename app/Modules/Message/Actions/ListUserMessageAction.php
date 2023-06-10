<?php

namespace App\Modules\Message\Actions;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ListUserMessageAction
{
    /**
     * @var User
     */
    private User $recipient;

    /**
     * Set Recipient to show messages for
     *
     * @param User $user
     * @return static
     */
    public function setRecipient(User $user): static
    {
        $this->recipient = $user;
        return $this;
    }

    /**
     *
     * @return Collection
     */
    public function fetchMessages(): Collection
    {
        return Message::where('recipient_id', $this->recipient->id)
            ->where('author_id', auth()->user()->id)
            ->orWhere('recipient_id', auth()->user()->id)
            ->latest()
            ->get();
    }
}
