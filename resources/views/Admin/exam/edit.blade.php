@extends('Admin.layouts.mester');
@section('title', 'Add Question')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card mt-5">
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Update Data: </strong> {{ Session::get('message') }}
          <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card-header">
          <h2>Edit Questions <a href="{{ route('show') }}" class="btn btn-outline-primary float-right">Manage Questions</a></h2>
        </div>
        <div class="card-body">
          <form action="/update/{{ $editData->id }}" method="POST">
             @csrf
             @method('put')

            <div class="form-group">
              <label for="question_name">Question : </label>
              <input type="text" class="form-control" name="question" id="question" placeholder="Enter the question" value="{{ $editData->question }}">
            </div>
            <div class="row">
               <div class="col-md-6"><label for="question_a">Answer A :</label></div>
               <div class="col-md-6"><label for="question_b">Answer B :</label></div>
            </div>
            <div class="row">
               <div class="col-md-6"><input type="text" name="opa" id="question_a" value="{{ $editData->a }}" /></div>
               <div class="col-md-6"><input type="text" name="opb" id="question_b" value="{{ $editData->b }}"/></div>
            </div>

            <div class="row">
               <div class="col-md-6"><label for="question_c">Answer C :</label></div>
               <div class="col-md-6"><label for="question_d">Answer D :</label></div>
            </div>
            <div class="row">
               <div class="col-md-6"><input type="text" name="opc" id="" value="{{ $editData->c }}"></div>
               <div class="col-md-6"><input type="text" name="opd" id="" value="{{ $editData->d }}"></div>
            </div>

            <div class="row mt-3">
               <div class="col-md-6">
                  <label for="">Choose a currect Answer: </label><br/>
                  <select name="ans" class="py-1 px-2">
                    <option disabled >Choose Answere</option>
                     <option value="{{ $editData->id === $editData->ans ? 'selected' : '' }}" >{{ $editData->ans }}</option>
                     <option value="b">b</option>
                     <option value="c">c</option>
                     <option value="d">d</option>
                  </select>
               </div>
            </div>
            <button type="submit" class="btn btn-outline-primary my-3 fw-bold" style="float: right;">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection