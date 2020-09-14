<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Blog;
use App\User;
use GuzzleHttp\Client;

class BlogComment extends Notification
{
    use Queueable;
     public $user;
    public $blog;
    public $body;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Blog $blog,User $user,$body)
    {
        $this->blog = $blog;
        $this->user = $user;
        $this->body = $body;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
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
                     ->line('Blog notification.')
                    ->action('Notification Action', route('blogs.show', $this->blog->id))
                    ->line('BLog : '. $this->blog->title)
                    ->line('Commented By : '. $this->user->name)
                    ->line('Comment : '. $this->body);
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
            'commented_by' => $this->user->id,
            'body' => $this->body,
            ''
        ];
    }
}
