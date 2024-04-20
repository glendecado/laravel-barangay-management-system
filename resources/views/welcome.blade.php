@extends(Auth::check() ? 'layouts.admin' : 'layouts.guest')

@section('title', 'welcome')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                Image
            </th>
            <th>
                Name
            </th>
            <th>
                Barangay
            </th>
            <th>
                Zone
            </th>
            <th>
                Age
            </th>
            <th>
                Gender
            </th>
            <th>
                Former
            </th>
            <th>
                Address
            </th>
            <th>
                Option
            </th>
        </tr>

    </thead>
</table>
@endsection