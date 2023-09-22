@extends('layout.masterlayout')

@prepend('stylesh')
<style>
    .modal-body .media {
        width: 250px;
        height: 250px;
        border-radius: 10px;
        border: 3px solid #ddd;
        display: flex;
        overflow: hidden;

    }

    .modal-body .media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .media.active {
        border-color: blueviolet;
    }

</style>
@endprepend

@section('pageTitle', 'Update Student Data')

@section('content')
<h1>Update Student | {{$student->name}}</h1>

<!-- Button trigger modal -->
{{-- <button type="button" id="addNew" class="btn btn-outline-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1200px">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Media File</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="row justify-content-start align-items-center g-2">
                    @for($i = 1 ; $i <= 7; $i++) <div class="col-12 col-sm-3">
                        <div class="media">
                            <img src={{asset("/images/".$i.".png")}} class="img-fluid" width="100%" draggable="false">
                        </div>
            </div>
            @endfor

            </section>
        </div>
    </div>
</div>
</div>

<section>
    <div>
        @if(!empty($student->headshot))
        <img src={{$student->headshot}} class="img-fluid" width="150px" alt={{$student->name}}>
        @else
        <img src={{"/images/user-dummy.png"}} class="img-fluid" width="150px" alt="Dummy">
        @endif
    </div>
    <form action="{{route('update', $student->id)}}" method="POST" id="updateStudent" class="my-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Your Image OR <a type="button" id="addNew" class="btn btn-outline-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Select from Media</a></label>
            <input class="form-control" type="file" id="formFile" accept="image/png, image/jpg, image/jpeg, image/webp">
        </div>
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="" placeholder="Name" value="{{$student->name}}" />
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="" placeholder="Email address" value="{{$student->email}}" />
        </div>
        <div class="mb-3">
            <input type="text" name="city" class="form-control" id="" placeholder="City" value="{{$student->city}}" />
        </div>
        <div class="mb-3">
            <input type="number" name="age" minlength="18" maxlength="35" class="form-control" id="" placeholder="Age" value="{{$student->age}}" />
        </div>
        <div class="mb-3">
            <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="Address" class="resize" style="resize: none">{{$student->address}}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
        <button type="button" class="btn btn-outline-danger" id="resetBtn">Undo Changes</button>
    </form>

    <a href="{{route('students')}}"><button class="btn btn-primary">Go Back to Student Page</button></a>
</section>

@endsection

@prepend('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#resetBtn').click(function() {
            $('#updateStudent').trigger("reset");
        });
        $('.media').click(function() {
            $('.media').removeClass('active');
            $(this).addClass('active');
        });
    });

</script>
@endprepend
