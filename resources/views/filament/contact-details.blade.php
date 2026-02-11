<div>
    <div class="space-y-4">
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Message:</strong> {{ $contact->message }}</p>
        <p><strong>Status:</strong> {{ $contact->status ? 'Active' : 'Inactive' }}</p>
        <p><strong>Created At:</strong> {{ $contact->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $contact->updated_at }}</p>
    </div>
</div>