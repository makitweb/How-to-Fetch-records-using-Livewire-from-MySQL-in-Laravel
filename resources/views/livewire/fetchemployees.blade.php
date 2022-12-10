<div>
    
    <!-- Fetch record by ID -->
    <input type="number" wire:model="employeeid">
    <input type="button" value="Fetch record by ID" wire:click="fetchbyid">

    <!-- Fetch all records -->
    <input type="button" value="Fetch all records" wire:click="fetchall">
    <br><br>

    <!-- List records -->
    <table border='1' style='border-collapse: collapse;'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($records))
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->emp_name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->city }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
