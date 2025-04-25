<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnrollmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $dob;
    public $gender;
    public $residential_area;
    public $parent_name;
    public $parent_id;
    public $parent_phone;
    public $program;
    public $program_level;
    public $payment_method;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->dob = $data['dob'];
        $this->gender = $data['gender'];
        $this->residential_area = $data['residential_area'];
        $this->parent_name = $data['parent_name'];
        $this->parent_id = $data['parent_id'];
        $this->parent_phone = $data['parent_phone'];
        $this->program = $data['program'];
        $this->program_level = $data['program_level'];
        $this->payment_method = $data['payment_method'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Enrollment Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.enrollment',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
