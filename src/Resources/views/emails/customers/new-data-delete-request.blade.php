@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        <img src="{{ thecodebunny_asset('images/logo.svg') }}">
    </a>
</div>


<div style="padding: 30px;">
    <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
        <span style="font-weight: bold;">
            {{ __('gdpr::app.mail.new-data-request.heading') }} !
        </span> <br>

        <div style="font-weight: bold;font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 20px !important;">
            {{ __('gdpr::app.mail.new-data-request.summary') }}
        </div>
    </div>


    <div style="flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 20px;">
        <div style="line-height: 25px;">
           
            <div style="font-weight: bold;font-size: 16px;color: #242424">
                {{ __('gdpr::app.mail.new-data-request.request-status') }}
            </div>

            <div>
                {{ $dataDeleteRequest['request_status'] }}
            </div>
        </div>

        <div style="line-height: 25px;">
            <div style="font-weight: bold;font-size: 16px;color: #242424;">
                {{ __('gdpr::app.mail.new-data-request.request-type') }}
            </div>
            <div>
                {{ $dataDeleteRequest['request_type'] }}
            </div>

            <div style="font-weight: bold;font-size: 16px;color: #242424;">
                {{ __('gdpr::app.mail.new-data-request.message') }}
            </div>

            <div style="font-size: 16px; color: #242424;">
                {{ $dataDeleteRequest['message'] }}
            </div>

        </div>
    </div>

    <div
        style="margin-top: 40px;font-size: 16px;color: #5E5E5E;line-height: 24px;display: block; width: 100%; float: left">

       

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            {{ __('gdpr::app.mail.new-data-request.thank-you') }}
        </p>
    </div>

</div>

@endcomponent