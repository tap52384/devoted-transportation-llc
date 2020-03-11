<div class="alert alert-success">
        <h3>Your contact form was submitted successfully!</h3>
        @isset($contact->email)
        <p class="lead">A confirmation email has been sent to
        <strong>{{ $contact->email }}</strong>.</p>
        @endisset
</div>

<p class="lead text-muted">To recap, here are the details:</p>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Point of Contact</td>
            <td>
            {{ $contact->contact_first_name }}&nbsp;{{ $contact->contact_last_name }}
            </td>
        </tr>
    </tbody>
</table>

<p class="lead text-muted">We will contact you soon in response to your request.
Thanks for choosing Devoted Transportation!</p>
