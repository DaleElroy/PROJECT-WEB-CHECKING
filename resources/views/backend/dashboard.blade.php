
    <div class="container">
        <h1>Admin Dashboard</h1>

        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">
                <ul>
                    @foreach($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
