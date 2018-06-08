@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href='home'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='post'>My Post</a>
                  </li>
              </ul>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

              <!--   <br>
                <a href = 'post'> Post something </a>
                <br> -->
                <br>
                 <div class="card-body">
                     <br>
                     <h3>The Wall Westeros </h3>

                     <br>
                    
                     @foreach($posts as $post)
                      <table>
                        <tr>
                            <th>{{$post->user_id}}</th>
                        </tr>
                      
                        <tr>
                            <th>Title</th>
                            <td>{{$post->title}}</td>
                            
                        </tr>

                        <tr>
                            
                            <th>Body</th>
                            <td>{{$post->body}}</td>
                        </tr>
              <!--           <tr>
                           <FORM action = "/post" method = "post">
                              <input type="hidden" name="_token" value = "<?php /*echo csrf_token()*/;?>">
                              <h4>User ID </h4>-->
                              <!-- <input type="text" name = 'user_id' value="{{auth()->user()->id}}" hidden> -->
                              <!-- <h4>Title</h4> -->
                                 <!-- <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">Comment</span>
                                        </div>
                                        <textarea class="form-control" aria-label="Comment" name="Comment"></textarea>
                                      </div>
                                      <br>
                              <input type="submit" name= "ok" value = "Comment">
                           </FORM>
                        </tr> -->
                        
                      </table>
                      <br>
                      @endforeach

                </div>
        </div>
    </div>
</div>
@endsection
