@extends('layout.masterlayout')

@prepend('stylesh')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #resetBtn {
        display: none;
    }

    th[scope="col"]>div {
        display: flex;
        justify-content: space-between;
        align-items: start;
    }

    th[scope="col"]>div span.d-flex.flex-column>a {
        height: 9px;
        color: #0dcaf0;
    }

    th[scope="col"]>div span.d-flex.flex-column>a:hover {
        color: #000;
        transform: scale(0.9);
    }

</style>
@endprepend

@section('pageTitle', 'Students')

@section('content')
<h1>Students</h1>

<!-- Button trigger modal -->
<button type="button" id="addNew" class="btn btn-outline-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New
</button>
{{-- <pre>
    @php
        print_r($errors->all());
    @endphp
</pre> --}}

@if (!empty($errors->all()))
<div class="error_alert">
    <ul class="p-0 my-2">
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger list-inline" role="alert">
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add" method="POST" id="stuAddForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="" placeholder="Email address" />
                    </div>
                    <div class="mb-3">
                        <input type="text" name="city" class="form-control" id="" placeholder="City" />
                    </div>
                    <div class="mb-3">
                        <input type="number" name="age" minlength="18" maxlength="35" class="form-control" id="" placeholder="Age" />
                    </div>
                    <div class="mb-3">
                        <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="Address" class="resize" style="resize: none"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                    <button type="button" class="btn btn-outline-warning" id="resetBtn">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div>
    <h3>Total Students: <strong>{{ $cStdData->total() }}</strong></h3>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col"><a href="{{route('students')}}">#</a></th>
            <th scope="col">
                <div>
                    <span>Name</span>
                    <span class="d-flex flex-column"><a href="{{route('studentsOrderAsc','name')}}"><i class="fa-solid fa-caret-up"></i></a><a href="{{route('studentsOrderDesc','name')}}"><i class="fa-solid fa-caret-down"></i></a></span></div>
            </th>
            <th scope="col">
                <div>
                    <span>Email</span>
                    <span class="d-flex flex-column"><a href="{{route('studentsOrderAsc','email')}}"><i class="fa-solid fa-caret-up"></i></a><a href="{{route('studentsOrderDesc','email')}}"><i class="fa-solid fa-caret-down"></i></a></span>
                </div>
            </th>
            <th scope="col">
                <div>
                    <span>City</span>
                    <span class="d-flex flex-column"><a href="{{route('studentsOrderAsc','city')}}"><i class="fa-solid fa-caret-up"></i></a><a href="{{route('studentsOrderDesc','city')}}"><i class="fa-solid fa-caret-down"></i></a></span>
                </div>
            </th>
            <th scope="col">
                <div>
                    <span>Age</span>
                    <span class="d-flex flex-column"><a href="{{route('studentsOrderAsc','age')}}"><i class="fa-solid fa-caret-up"></i></a><a href="{{route('studentsOrderDesc','age')}}"><i class="fa-solid fa-caret-down"></i></a></span>
                </div>
            </th>
            <th scope="col">
                <div>
                    <span>Address</span>
                    <span class="d-flex flex-column"><a href="{{route('studentsOrderAsc','address')}}"><i class="fa-solid fa-caret-up"></i></a><a href="{{route('studentsOrderDesc','address')}}"><i class="fa-solid fa-caret-down"></i></a></span>
                </div>
            </th>
            <th scope="col">
                <div>Actions</div>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cStdData as $skey => $sVal)
        <tr>
            <td scope="row">{{$sVal->id}}</td>
            <td scope="row">{{$sVal->name}}</td>
            <td scope="row">{!!$sVal->email ? $sVal->email : "<span style='color: red;'>N/A</span>"!!}</td>
            <td scope="row">{{$sVal->city}}</td>
            <td scope="row">{{$sVal->age}}</td>
            <td scope="row">{{$sVal->address}}</td>
            <td><a href="{{route('student', $sVal->id)}}"><button type="button" class="btn btn-dark w-100">View</button></a></td>
            <td><a href="{{route('update-student', $sVal->id)}}"><button type="button" class="btn btn-info w-100">Edit</button></a></td>
            <td><a href="{{route('delete', $sVal->id)}}"><button type="button" class="btn btn-danger w-100">Delete</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="paginations">
    {{$cStdData->links()}}
</div>

@endsection

@prepend('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // swal("Good job!", "You clicked the button!", "success");
    // let addStudent = document.querySelector('#addStudent button[type="submit"]');
    // const addStudentRes = async () => {
    //     const res = await fetch('http://127.0.0.1:8000/add');
    //     alert(res);
    // };

    // addStudent.addEventListener('click', function() {
    //     addStudentRes();
    // });
    $(document).ready(function() {
        $('#resetBtn').click(function() {
            $('form').trigger("reset");
            $(this).fadeOut(300);
        });
        $('form input[name="name"]').change(function() {
            if ($(this).val().length > 1) {
                $('#resetBtn').fadeIn(300);
            } else {
                $('#resetBtn').fadeOut(300);
            }
        })
        setTimeout(() => {
            $('.error_alert').fadeOut(300);
            $('.error_alert').delay(500).html("");
        }, 3000);
    });

</script>
@endprepend
