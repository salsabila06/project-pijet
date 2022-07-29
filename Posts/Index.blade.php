@extends('Layout.Index')

@section('container')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Responsive</h4>
            </div>
            <div class="card-body">
                <p class="form-text mb-2">Datatables also provide responsive table</p>
                <table id="example2" class="table display">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection



