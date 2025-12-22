<?php
namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class MailService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.elasticemail.com/v2/',
            'timeout'  => 10.0,
        ]);
        $this->apiKey = 'A9981FB33374A4AD909E1F5B9887FD7D8973D9BE87F4F0C1D37DAD485688B0B5AF266D31224A1A259C284F01ECDE15FC';
    }

    public function sendEmail($toEmail, $subject, $headers, $templateFile, $data)
    {
        $settings    = settings();
        $template    = empty($templateFile) ? 'emails.template' : $templateFile;
        $htmlContent = view($template, $data)->render();
        $payload     = [
            'apikey'   => $this->apiKey,
            'from'     => env('MAIL_FROM_ADDRESS'),
            'fromName' => env('MAIL_FROM_NAME'),
            'to'       => $toEmail,
            'subject'  => $subject,
            'bodyHtml' => $htmlContent,
        ];
        try {
            $response = $this->client->post('email/send', [
                'form_params' => $payload,
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('Elastic API Error: ' . $e->getMessage());
            return [
                'error'   => true,
                'message' => 'Failed to send email: ' . $e->getMessage(),
            ];
        }
    }

    /*public function sendEmail($toEmail, $subject, $headers = [], $templateFile = null, $data = [])
    {
		$toEmail = 'support@libertygroups.com';
        try {
            $template = empty($templateFile) ? 'emails.template' : $templateFile;

            Mail::send($template, $data, function ($message) use ($toEmail, $subject, $headers) {
                $message->to($toEmail)
						->subject($subject);
            });

            return ['success' => true, 'message' => 'Email sent successfully'];
        } catch (\Exception $e) {
            Log::error('SMTP Mail Error: ' . $e->getMessage());

            return [
                'error' => true,
                'message' => 'Failed to send email: ' . $e->getMessage(),
            ];
        }
    }*/
}
