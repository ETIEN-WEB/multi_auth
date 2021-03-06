<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMailAnnonceur extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    public $reset_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name, $reset_code)
    {
        //    
        $this->user_name = $user_name;
        $this->reset_code = $reset_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('etienirahuberson@gmail.com')->subject('Etien Dev')->view('annonceur.modal.forget_password_mail')->with([
            'user_name'=>$this->user_name,
            'reset_code'=>$this->reset_code
        ]);

    }
}
