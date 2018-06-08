@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "row justify-content-center">
		 <div class = "card-body">
		 	<div class="form-group">
		 		<!-- <a href = "/home"> Home </a>
		 		<br> -->
		 		  <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link" href='home'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href='post'>My Post</a>
                  </li>
              </ul>
		        <FORM action = "/post" method = "post">
		            <input type="hidden" name="_token" value = "<?php echo csrf_token();?>">
		            <!--<h4>User ID </h4>-->
		            <input type="text" name = 'user_id' value="{{auth()->user()->id}}" hidden>
		            <!-- <h4>Title</h4> -->
		               <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Title</span>
                          </div>
                          <textarea class="form-control" aria-label="Title" name="title"></textarea>
                        </div>
                        <br>
		            <!-- <input type="text" name="title"> -->
		            <!-- <h4>Body</h4> -->
		            <!-- <input type="text" name="body"> -->
		            <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Body</span>
                          </div>
                          <textarea class="form-control" aria-label="Body" name="body"></textarea>
                        </div>
		             <br>
		             <!-- <button type="submit" class="btn btn-primary">Post</button> -->
		            <input type="submit" name= "ok" value = "Post">
		         </FORM>
		     </div>
		         
		         <div class="card-body">
			         <br>
			         <h3>My Post </h3>

			         <br>
			        
			         @foreach($posts as $post)
			          <table class = "table">
			          
			          	<tr>
			          		<th>Title</th>
			          		<td>{{$post->title}}</td>
			          		
			          	</tr>

			          	<tr>
			          		<th>Body</th>
			          		<td>{{$post->body}}</td>
			          	</tr>

			          <tr>

			          	<td><a href= 'delete/{{$post->id}}'> Delete </a></td>
			          	<td><a href = 'edit/{{$post->id}}'> Edit </td>
			      	  </tr>
				         
			          </table>
			          <br>
			          @endforeach

				</div>


		</div>
	</div>	 
</div>


@endsection