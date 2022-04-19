@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="smarthome">
    <h1>Form collaboration </h1>
    <p>Form of cooperation in research of the Unpad Big Data Artificial Intelligence Research Center</p>
</div>
<div class="container" style="margin-bottom: 15px;">
    <form action="/joinus" method="POST">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="box1" style="border-style: solid; border-color:#C4C4C4; width: 650px; height: auto; border-radius:10px; ">
                    <div style="justify-content: center; align-items: center; right:0; left:0;">
                        <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;" name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Full Name">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input style="margin:auto; margin-top: 10px;  width: 93% ;   border-radius:10px;" name="address" type="address" class="form-control form-control @error('address') is-invalid @enderror" id="address" placeholder="Address">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;"
                            name="phonenumber" type="phonenumber"
                            class="form-control form-control @error('phonenumber') is-invalid @enderror"
                            id="phonenumber" placeholder="Phone Number">
                        @error('phonenumber')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93% ; border-radius:10px;" name="email"
                            type="email" class="form-control form-control @error('email') is-invalid @enderror"
                            id="tanggallahir" placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;"
                            name="companyname" type="companyname"
                            class="form-control form-control @error('companyname') is-invalid @enderror"
                            id="companyname" placeholder="Company Name">
                        @error('companyname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <select id="Collaboration Category" name="CollaborationCategory" style=" margin-top: 10px; width: 93% ;  border-radius:10px;margin-left:22px;  height: 38px; padding-left:9px; border-color:#C4C4C4; color:#6c757d;">  Collaboration Category
                            <option value=""> Collaboration Category </option>    
                            <option value="Research"> Research </option>
                            <option value=" Developer"> Developer </option>
                            <option value="Sponsors"> Sponsors </option>
                        </select>

                        <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;"
                            name="reasontobeinterested" type="reasontobeinterested"
                            class="form-control form-control @error('reasontobeinterested') is-invalid @enderror"
                            id="reasontobeinterested" placeholder="Reason to be interested">
                        @error('reasontobeinterested')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <button
                            style="border-color: white; margin-left:22px; width: 128px;  margin-top: 20px; background-color :#705ecf; color: white; margin-bottom:10px;"
                            type="submit" class="btn  btn-border-radius-sm;">Submit Form
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection