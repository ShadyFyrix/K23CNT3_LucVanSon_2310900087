
<div>
    <h1>This is header Composent</h1>
    <h1>Welcome, {{ $name }}</h1>
    <h2>Fruits List:</h2>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>
