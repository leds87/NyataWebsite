<?php

namespace App\Notifications;

use App\Models\childrendata;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewNotification extends Notification
{
    use Queueable;


    // public $user;
    // public $additionaldata;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $user = $this->$user;
    // $additionaldata = $this->$additionaldata;
    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            // 'name' => $this->additionaldata->name,
            // 'name' => $this->user->name,
            // 'email' => $this->user->email,
        ];
    }


    public function toDatabase($notifiable)
    {
       $child = childrendata::where('id','1')->value('name');
    //    $child = toys::where('children_id', '1')->first(); // Fetching a single result
    //    $childName = $child ? $child->children->name : null; // Assuming there is a relationship
        return [
            'message' => 'This is a new notification message that unsupported' . $child,
            // 'additionaldata' => 'name',
            // 'user' => $this->user,
            // 'data' => 'Notification Data You unsupport '
        ];
    }
}
