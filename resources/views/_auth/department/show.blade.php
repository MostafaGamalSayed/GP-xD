@extends('_layouts.app')
@section('title', 'Departments')


@section('content')
<!-- Start: Content -->
	<div class="content mt-5 mb-4">
		<div class="container">
        <h1>Departments</h1>
			<div class="row justify-content-center">
                @if (count($departments)>0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                @if (Auth::user()->role == 'Instructor')
                                    <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $dep)
                            <tr>
                                <td>
                                    <a href="{{ route('department.show',$dep->id)}}" class="font-weight-bold forum-nav">{{$dep->name}}</a>
                                </td>
                                @if (Auth::user()->role == 'Instructor')
                                    <td>
                                        <form action="{{ route('department.destroy',$dep->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit" onclick="alert('Confirm Delete')">
                                                <span class="far fa-trash-alt fa-lg fam-mod"></span>
                                            </button>
                                        </form>
                                        
                                    </td>
                                @endif
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="col-md-12 col-sm-12">
                        <br>
                        @if (Auth::user()->role == 'Instructor')
                            <a href="{{ route('department.create') }}" class="btn btn-success">
                                No Departments . Create Department Here !
                            </a>
                        @else
                            No Departments Found
                        @endif
                        
                    </div>                    
                @endif	
                
			</div>
		</div>
	</div> <!-- End: Content -->
@endsection