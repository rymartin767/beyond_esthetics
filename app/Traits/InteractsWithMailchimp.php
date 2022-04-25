<?php

namespace App\Traits;

use App\Models\Subscriber;
use App\Mail\NewSubscriber;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use MailchimpMarketing\ApiException;

trait InteractsWithMailchimp
{
    public function addSubscriberToMailchimpAudience(Subscriber $subscriber) : bool
    {
        $mailchimp = new ApiClient;

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us8'
        ]);

        $list_id = "8e90228839";

        try {
            $mailchimp->lists->addListMember($list_id, [
                "email_address" => $subscriber->email,
                "status" => "subscribed",
                "merge_fields" => [
                    "FNAME" => $subscriber->first_name,
                    "LNAME" => $subscriber->last_name
                ]
            ]);

            Mail::to('sandyjmartin4@gmail.com')->send(new NewSubscriber($subscriber));
            return true;
        } catch (ApiException $e) {
            Log::channel('single')->info($e);
            return false;
        }
    }
}
