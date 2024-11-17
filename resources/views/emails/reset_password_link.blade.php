<x-mail::message>
# Introduction

<h1>Password Reset Request</h1>

<p>We received a request to reset the password for your account. Please click the button below to reset your password:</p>

<x-mail::button :url="$url">
Reset Password
</x-mail::button>

<p>This link will expire in 30 minutes. If you did not request a password reset, please ignore this email.</p>

<p>Thank you,<br>The Accel Safety Team</p>

<hr>
<p><small>If you're having trouble clicking the "Reset Password" button, copy and paste the following link into your browser:</small></p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
