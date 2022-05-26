@extends('Admin.layouts.mester');
@section('title', 'Manage Question')

@section('content')

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="card-header">
            <a href="{{ route('question') }}" class="btn btn-outline-info text-black fw-bold my-3">Add Question</a>
         </div>
         @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Delete Data: </strong> {{ Session::get('message') }}
               <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         <table class="table table-hover table-bordered text-center mt-0">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Question</th>
                  <th>Ans(A)</th>
                  <th>Ans(B)</th>
                  <th>Ans(C)</th>
                  <th>Ans(D)</th>
                  <th>Currect Ans.</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($allQuestions as $key => $singleQuestion)
                  <tr>
                     <td>{{ $key+1 }}</td>
                     <td>{{ $singleQuestion->question }}</td>
                     <td>{{ $singleQuestion->a }}</td>
                     <td>{{ $singleQuestion->b }}</td>
                     <td>{{ $singleQuestion->c }}</td>
                     <td>{{ $singleQuestion->d }}</td>
                     <td>{{ $singleQuestion->ans }}</td>
                     
                     <td style="display: flex;">
                        <a href="{{ route('destroy', $singleQuestion->id) }}" class="btn btn-danger btn-sm m-1">Delete</a>
                        <a href="/edit/{{ $singleQuestion->id }}" class="btn btn-danger btn-sm m-1">Edit</a>
                     </td>
               @endforeach
               
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>

@endsection