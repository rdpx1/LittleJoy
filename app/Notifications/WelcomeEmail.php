<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('Bem vindo à plataforma Little Joy!')
                    ->action('Acessar a página', url('/'))
                    ->line('Parabéns! Você agora faz parte da equipe Little Joy. Para participar dos eventos, basta registrar-se nos eventos disponíveis.');

        return (new MailMessage)
                    ->line('Faltam 24h para o evento!')
                    ->action('Confirme sua presença no evento', url('/'))
                    ->line('Lembre-se de comparecer 15 minutos anteriores ao evento para receber instruções para aproveitar o evento :)');            
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
            //
        ];
    }
}
