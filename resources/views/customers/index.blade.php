<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <h2>Customer List</h2>
        @if(count($customers) > 0)
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <!-- Edit link -->
                        <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>

                        <!-- Delete form -->
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No customers found.</td>
            </tr>
        @endif
    </tbody>
</table>

<p>
    <a href="/register">Register a new customer</a>
</p>
