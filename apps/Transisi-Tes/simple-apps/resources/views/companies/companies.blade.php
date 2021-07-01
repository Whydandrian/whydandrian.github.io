@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Companies</div>
                <div class="card-body">
                    <h3>Isi data</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Companies Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Companies Name</td>
                                <td>companies@email.com</td>
                                <td>www.companies.com</td>
                                <td>logo.jpg</td>
                                <td>Edit | Delete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
