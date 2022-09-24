@include('User.layouts.style')
<div class="container">
    <table class="text-center border-2 py-5">
        <tr style="">
            <th style="padding: 10px">Student name</th>
            <th style="padding: 10px">Phone</th>
            <th style="padding: 10px">Room No</th>

        </tr>
        @foreach($student as $students)
            <tr align="center" style="background-color: skyblue">
                <td>{{ $students->name }}</td>
                <td>{{ $students->phone }}</td>
                <td>{{ $students->room }}</td>
            </tr>

        @endforeach
    </table>
</div>
@include('User.layouts.script')
