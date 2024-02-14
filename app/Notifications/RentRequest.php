<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RentRequest extends Notification
{
    use Queueable;
    public $user;
    public $cart;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$cart)
    {
        $this->user=$user  ;
        $this->cart=$cart;
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
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'NotificationType' => 'Request',
            'user_id' =>$this->user->id,
            'Name' =>$this->cart->name,
            'cart_id'=> $this->cart->id,
            'start' =>$this->cart->Start_date,
            'end' =>$this->cart->End_date
        ];
    }
}
