<div>
    <div class="space-y-4">
        <p><strong>Service:</strong> {{ $booking->service }}</p>
        <p><strong>Date:</strong> {{ $booking->date }}</p>
        <p><strong>Time:</strong> {{ $booking->time }}</p>
        <p><strong>Duration:</strong> {{ $booking->duration }}</p>
        <p><strong>Name:</strong> {{ $booking->name }}</p>
        <p><strong>Email:</strong> {{ $booking->email }}</p>
        <p><strong>Phone:</strong> {{ $booking->phone }}</p>
        <p><strong>Message:</strong> {{ $booking->message ?? 'N/A' }}</p>
        <p><strong>Status:</strong> {{ $booking->status ? 'Active' : 'Inactive' }}</p>
    </div>
</div>