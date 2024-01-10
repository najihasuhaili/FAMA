
@include('header')
<article>
    <div class="container">
        <h1 class="mt-4">Senarai Bilik Mesyuarat</h1>

        <!-- Display the list of Bilik Mesyuarat -->
        <table class="table">
            <!-- Your table headers here -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <!-- Add more headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($bilikMesyuarats as $bilikMesyuarat)
                    <tr>
                        <td>{{ $bilikMesyuarat->id }}</td>
                        <td>{{ $bilikMesyuarat->name }}</td>
                        <!-- Add more data columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
