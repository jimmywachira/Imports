<x-mail::message>
# New Contact Form Submission

A new message has been received from your website contact form.

**Sender Information:**
- **Name:** {{ $formData['name'] }}
- **Email:** {{ $formData['email'] }}
- **Phone:** {{ $formData['phone'] }}
- **Subject:** {{ $formData['subject'] }}

**Message:**

{{ $formData['message'] }}

---

You can reach this person at {{ $formData['email'] }} or {{ $formData['phone'] }}.

Thanks,
Xplore Cars Imports
</x-mail::message>
