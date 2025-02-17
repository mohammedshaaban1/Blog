@extends('theme.master')

@section('title','My Blogs')

@section('content')
<!--================ Hero sm banner start =================-->  
@include('theme.partials.hero',['title'=>'My Blogs'])
<!--================ Hero sm banner end =================-->  

  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
            @if (session('BlogDeleteStatus'))
                  <div class="alert alert-success">
                      {{ session('BlogDeleteStatus') }}
                  </div>
            @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col">Title</th>
                <th scope="col" width="15%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @if (count($blogs)>0)
                  @foreach ($blogs as $key=> $blog )
                    <tr>
                      <th scope="row">{{ $blogs->firstItem() + $loop->index }}</th>
                      <td><a href="{{ route('blogs.show',['blog'=>$blog]) }}" target="_blank">{{ $blog->name }}</a></td>
                      <td>
                        <a href="{{ route('blogs.edit',['blog'=>$blog]) }}" class="btn btn-sm btn-primary mr-2">Edite</a>
                        <form action="{{ route('blogs.destroy',['blog'=>$blog]) }}" class="d-inline" method="post" id="delete_form">
                            @method('DELETE')
                            @csrf

                          <a href="javascript:$('form#delete_form').submit();" class="btn btn-sm btn-danger mr-2">Delete</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              @endif
              
            </tbody>
          </table>
          @if (count($blogs)>0)
          {{ $blogs->render("pagination::bootstrap-4") }}
          @endif
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

@endsection